<?php

namespace App\Models\Consultation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsultationComment extends Model
{
    use HasFactory;
	
	protected $table = 'sf_consultation_comment_answer';
	
	public function consultation()
    {
        return $this->belongsTo(Consultation::class, 'id');
    }
	
	public function parent()
    {
        return $this->belongsTo(ConsultationComment::class, 'parent_id');
    }
	
	public function children()
    {
        return $this->hasMany(self::class, 'to_answer_id', 'id');
    }
	
	// Вернет true если ответов нет, и false если ответы есть
	public static function hasAnswer($consultation_id, $user_id): bool
	{
		return self::query()
                ->where('comment_id', $consultation_id)
                ->where('user_id', $user_id)
                ->doesntExist();
	}
	
}
