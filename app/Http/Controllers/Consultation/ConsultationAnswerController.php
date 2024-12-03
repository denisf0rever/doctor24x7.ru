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
		
			return redirect()->back()->with('success', 'Ответ добавлен');
		}
		
		return redirect()->back()->with('error', 'Какая-то ошибка при добавлении');
    } 
	
	public function createPublicAnswer(CommentPublicRequest $request, CommentService $service)
    {
		$comment = $service->createComment($request->validated());
		
		if ($comment) {
			$to_answer = Comment::select('username', 'email')
				->where('id', $comment->to_answer_id)
				->first();
			
			if ($to_answer) {
				$validatedData = $request->validated();
				$validatedData['email'] = $to_answer->email;
				$validatedData['username'] = $to_answer->username;
				
				AnswerToConsultantCreated::dispatch($validatedData);
				
				return redirect()->back()->with('success', $validatedData);
			} 
			
			return redirect()->back()->with('success', 'Пользователь не найден.');
		}
		
		return redirect()->back()->with('error', 'Какая-то ошибка при добавлении');
    }
	
	public function destroy(string $id)
    {
		$comment = Comment::query()
            ->where('id', $id)
            ->firstOrFail();
		
		$comment->delete();
				
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
	
	public function update(Request $request, string $id)
    {	
		$comment = Comment::query()
			->where('id', $id)
			->firstOrFail();
			
		$comment->description = $request->input('description');
		$comment->email = $request->input('email');
		$comment->save();
		
		return redirect()->back()->with('success', 'Комментарий обновлен');
		
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
