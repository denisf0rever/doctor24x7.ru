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
		
		if ($comment) {
			return redirect()->back()->with('success', 'Комментарий обновлен');
		} else {
			return redirect()->back()->with('success', 'Возникла ошибка');
		}
    }
	
	public function block(string $id)
    {
		$comment = Comment::query()
            ->where('id', $id)
            ->firstOrFail();
		
		$comment->block = 1;
		$comment->save();
				
		if ($comment) {
			 return redirect()->back()->with('success', 'Ответ заблокирован');
		}
    }
	
	public function like(string $id)
	{
		$like = Like::firstOrCreate(['comment_id' => $id]);
		$like->increment('likes');
	}
}
