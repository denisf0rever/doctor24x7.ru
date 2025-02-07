<?php

namespace App\Models\Reviews;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    use HasFactory;
	
	protected $table = 'sf_consultation_comment_testimonial';
	
		protected $fillable = [
			'user_id',
			'username',
			'comment_id',
			'email',
			'rating',
			'consultation_answer_id',
			'description',
	];
}
