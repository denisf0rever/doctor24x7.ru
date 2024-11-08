<?php

namespace App\Models\Consultation;

use Illuminate\Database\Eloquent\Model;

class CommentLike extends Model
{
    protected $table = 'sf_consultation_comment_answer_like';
	
	public function comment()
    {
        return $this->belongsTo(ConsultationComment::class);
    }
	
}
