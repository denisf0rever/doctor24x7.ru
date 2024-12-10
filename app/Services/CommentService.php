<?php

namespace App\Services;

use App\Models\Consultation\ConsultationComment as Comment;
use App\Models\Consultation\Consultation;

final class CommentService
{
	 public function createComment(array $commentData): Comment
	 {
		$comment = Comment::create([
			'comment_id' => $commentData['comment_id'],
			'to_answer_id' => $commentData['to_answer_id'] ?? null,
			'user_id' => $commentData['user_id'] ?? null,
			'email' => $commentData['email'],
			'username' => $commentData['username'] ?? null,
			'description' => $commentData['description'],
		]);
		
		$consultation = Consultation::query()
			->where('id', $commentData['comment_id'])
			->firstOrFail();
			
		$consultation->increment('answer_count');
			
		return $comment;
	 }
	 
	 public function updateComment(array $commentData): Comment
	 {
		 $comment = Comment::query()
			->where('id',  $commentData['id'])
			->firstOrFail();
			
		$comment->description = $commentData['description'];
		$comment->email = $commentData['email'];
		$comment->save();
		
		return $comment;
	 }
}
