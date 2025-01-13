<?php

namespace App\Http\Controllers\Consultation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use App\Http\Requests\CommentPublicRequest;
use App\Http\Requests\LikeRequest;
use App\Models\Consultation\Consultation;
use App\Models\UserMain as User;
use App\Models\Consultation\ConsultationComment as Comment;
use App\Models\Consultation\ConsultationCategory;
use App\Models\Consultation\CommentLike as Like;
use App\Services\CommentService;
use App\Events\AnswerToAuthorCreated;
use App\Events\AnswerToConsultantCreated;
use App\Helpers\ClearConsultationCache;
use App\Models\Consultation\Contents;

class ConsultationAnswerController extends Controller
{
	public function show($id)
	{
		$comment = Comment::query()
			->where('id', $id)
            ->firstOrFail();
			
		return view('dashboard.consultation.answer', compact('comment'));
	}
	
    public function create(CommentRequest $request, CommentService $service)
    {
		$comment = $service->createComment($request->validated());
		
		if ($comment) {
			AnswerToAuthorCreated::dispatch($request->validated());
			
			$consultation_slug = $comment->consultation->slug;
			ClearConsultationCache::clear($consultation_slug);
			
			return redirect()->route('dashboard.consultation.item', $comment->consultation->id)->with('success', 'Ответ добавлен');
		}
		
		return redirect()->back()->with('error', 'Какая-то ошибка при добавлении');
    } 
	
	public function createPublicAnswer(CommentPublicRequest $request, CommentService $service)
    {
		$comment = $service->createComment($request->validated());
		$payment_chat = $comment->consultation->payment?->chat ?? false;
		$consultation_username = $comment->consultation->username;
		$consultation_email = $comment->consultation->email;
		$to_answer_id = $comment->to_answer_id;
		
		if ($comment) {
			$consultation_slug = $comment->consultation->slug;
			
			if ($to_answer_id === null) {
				$validatedData = $request->validated();
				$validatedData['email'] = $consultation_email;
				$validatedData['username'] = $consultation_username;;
				
				ClearConsultationCache::clear($consultation_slug);
				AnswerToConsultantCreated::dispatch($validatedData);
				
				if ($payment_chat == false) {
					return redirect()->route('payment.answer', $comment->id)->with('success', 'Ответ успешно добавлен');
				}
			
				return redirect()->back()->with('success', 'Ответ успешно добавлен');
			} else {	
				$answer = Comment::select('username', 'email')
					->where('id', $to_answer_id)
					->first();	
					
				$validatedData = $request->validated();
				$validatedData['email'] = $answer->email;
				$validatedData['username'] = $answer->username;
				
				ClearConsultationCache::clear($consultation_slug);
				AnswerToConsultantCreated::dispatch($validatedData);
				
				if ($payment_chat == false) {
					return redirect()->route('payment.answer', $comment->id)->with('success', 'Ответ успешно добавлен');
				}
				
				return redirect()->back()->with('success', 'Ответ успешно добавлен');
			}
		}
		
		return redirect()->back()->with('error', 'Какая-то ошибка при добавлении');
    }
	
	public function payAnswer(string $id)
	{
		return 'OK';
	}
	
	public function online()
	{
		$consultations = Consultation::orderBy('created_at', 'desc')
			->where('is_payed', true)
			->take(30)
            ->get();
		
			
		return view('consultation.online', compact('consultations'));
	}
	
	public function destroy(string $id)
    {
		$comment = Comment::query()
            ->where('id', $id)
            ->firstOrFail();
		
		$consultation_slug = $comment->consultation->slug;
		$comment->delete();
		
		ClearConsultationCache::clear($consultation_slug);
				
		if ($comment) {
			 return redirect()->back()->with('success', 'Ответ удален');
		}
	}
	
	public function edit(string $id)
    {
		$comment = Comment::query()
            ->where('id', $id)
            ->firstOrFail();

		return view('dashboard.consultation.edit-answer', compact('comment'));
	}
	
	public function update(Request $request, string $id, CommentService $service)
    {	
		$validatedData = $request->all();
		$validatedData['id'] = $id;
		
		$comment = $service->updateComment($validatedData);
		
		if ($comment) {
			return redirect()->route('dashboard.consultation.item', $comment->consultation->id)->with('success', 'Комментарий обновлен');
		}
    }
	
	public function lockAnswer(Request $request)
    {
		$comment_id = $request->id;
		
		$comment = Comment::query()
            ->where('id', $comment_id)
            ->firstOrFail();
		
		$comment->is_block = 1;
		$comment->save();
		
		$consultation_slug = $comment->consultation->slug;
		ClearConsultationCache::clear($consultation_slug);
		
		return response()->json(['message' => 'Ответ заблокирован']);
	}
	
	public function unlockAnswer(Request $request)
    {
		$comment_id = $request->id;
		
		$comment = Comment::query()
            ->where('id', $comment_id)
            ->firstOrFail();
		
		$comment->is_block = 0;
		$comment->save();
		
		$consultation_slug = $comment->consultation->slug;
		ClearConsultationCache::clear($consultation_slug);
		
		return response()->json(['message' => 'Ответ разблокирован']);
    }
	
	public function like(LikeRequest $request, string $id)
	{
		$commentId = $id;
		$state = $request->state;
		$ip = $request->ip(); 
		
		$like = Like::query()
				->where('comment_id', $commentId)
				->where('ip', $ip)
				->first();
				
		switch (true) {
			case $request->state == 1 && $like:
				$like->delete();
				ClearConsultationCache::clear($request->slug);
			break;

			case $request->state == 1 && !$like:
				$like = Like::create(['comment_id' => $commentId, 'ip' => $ip]);
				ClearConsultationCache::clear($request->slug);
       
				return response()->json(['message' => 'Лайк успешно добавлен']);

			case $request->state == 0:
				if ($like) {
					$like->delete();
				}
        
			ClearConsultationCache::clear($request->slug);
        
			return response()->json(['message' => 'Лайк успешно удалён']);
		}
	}
	
	public function dislike(LikeRequest $request, string $id)
	{
		$commentId = $id;
		$state = $request->state;
		$ip = $request->ip();
		
		$like = Like::query()
				->where('comment_id', $commentId)
				->where('ip', $ip)
				->first();
				
		if ($request->state == 1) {
			if ($like) {
				$like->delete();
				ClearConsultationCache::clear($request->slug);
			}
			
			return response()->json(['message' => 'Лайк успешно удалён']);
			
		} else {
			return;
		}
	}
	
	public function getDocument(string $id, CommentService $service)
	{
		$dataForDocument = [
			'comment_id' => $id,
			'user_id' => 87,
			'to_answer_id' => null,
			'email' => 'noreply@puzkarapuz.ru',
			'username' => 'Администрация сайта',
			'description' => 'Пришлите, пожалуйста, анализы или документы имеющие отношение к вопросу на адрес doc@puzkarapuz.ru, в письме укажите номер консультации: ' . $id,
		];
		
		// Создаем комментарий в консул
		$comment = $service->createComment($dataForDocument);
		
		if ($comment) {
			
			$consultation = Consultation::query()
				->where('id', $id)
				->first();
				
			$dataForMail = [
				'author_username' => $consultation->username,
				'author_email' => $consultation->email,
				'comment_id' => $consultation->id
			];
			
			AnswerToAuthorCreated::dispatch($dataForMail);
			
			ClearConsultationCache::clear($consultation->id);
			
			return response()->json(['success', 'Ответ добавлен']);
		}
		
		return response()->json(['error', 'Ответ не добавлен']);
	}
	
	public function destroyContent(string $id)
	{
		$contents = Contents::query()
			->where('id', $id)
			->firstOrFail();
		
		$contents->delete();
		
		return redirect()->back()->with('success', 'Пункт сожержания удален');
	}
}
