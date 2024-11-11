<?php

namespace App\Models\Consultation;

use Illuminate\Database\Eloquent\Model;

class CommentLike extends Model
{
	public $timestamps = false;

    protected $table = 'sf_consultation_comment_answer_like';
	
	protected $fillable = [
		'comment_id',
		'ip'
	];
	
	public function comment()
    {
        return $this->belongsTo(ConsultationComment::class);
    }
	
}
