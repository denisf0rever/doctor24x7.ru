<?php

namespace App\Models\Reviews;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UserMain;

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
	
	public function user()
	{
		return $this->belongsTo(UserMain::class);
	}
}
