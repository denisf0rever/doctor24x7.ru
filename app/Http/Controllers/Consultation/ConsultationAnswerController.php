<?php

namespace App\Http\Controllers\Consultation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use App\Models\Consultation\Consultation;
use App\Models\Consultation\ConsultationComment as Comment;
use App\Models\Consultation\CommentLike as Like;
use App\Services\CommentService;
use App\Events\AnswerToAuthorCreated;
use App\Traits\ConsultationCacheable;

class ConsultationAnswerController extends Controller
{
	use ConsultationCacheable;
	
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
	
	public function update(CommentRequest $request, string $id)
    {	
        $data = $request->validated();
		
		$comment = Comment::query()
            ->where('id', $id)
            ->firstOrFail();
			
		$comment->description = $request->input('description');
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
		
		$this->clearConsultationCache($consultation_slug);
		
		return redirect()->back()->with('success', 'Ответ заблокирован');
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
		
		$this->clearConsultationCache($consultation_slug);
		
		return redirect()->back()->with('success', 'Ответ разблокирован');
    }
	
	public function like(Request $request, string $id)
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
			} else {
				$like = Like::create(['comment_id' => $commentId, 'ip' => $ip]);
				return response()->json(['message' => 'Лайк успешно добавлен']);
			}
		} else {
			$like->delete();
			return response()->json(['message' => 'Лайк успешно удалён']);
		}
	}
	
	public function dislike(Request $request, string $id)
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
			'description' => 'Пришлите, пожалуйста, анализы или документы имеющие отношение к вопросу на адрес doc@puzkarapuz.ru, в конце укажите: ' . $id,
		];
		
		$comment = $service->createComment($dataForDocument);
		
		if ($comment) {
			$consultation = Consultation::query()
				->where('id', $id)
				->first();
				
			$dataForMail = [
				'name' => $consultation->username,
				'email' => $consultation->email,
				'consultation_id' => $consultation->id
			];
			
			AnswerToAuthorCreated::dispatch($dataForMail);
			
			return response()->json(['success', 'Ответ добавлен']);
		}
		
		return response()->json(['success', 'Ответ добавлен']);
	}
}
