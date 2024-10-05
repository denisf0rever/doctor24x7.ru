<?php

namespace App\Services;

use App\Models\Consultation\ConsultationComment as Comment;

final class CommentService
{
	 public function createComment(array $commentData)
	 {
		$comment = Comment::create([
			'comment_id' => $commentData['comment_id'],
			'to_answer_id' => $commentData['to_answer_id'] ?? null,
			'user_id' => $commentData['user_id'],
			'email' => $commentData['email'],
			'username' => $commentData['username'],
			'description' => $commentData['description'],
		]);
			
		return $comment;
	 }
}
