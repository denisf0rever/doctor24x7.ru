<?php

namespace App\Models\Consultation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UserMain;

class ConsultationComment extends Model
{
    use HasFactory;
	
	protected $table = 'sf_consultation_comment_answer';
	
	protected $fillable = [
		'comment_id',
		'to_answer_id',
		'user_id',
		'email',
		'username',
        'description',
	];
	
	public function consultation()
    {
        return $this->belongsTo(Consultation::class, 'comment_id');
    }
	
	public function parent()
    {
        return $this->belongsTo(ConsultationComment::class, 'parent_id');
    }
	
	public function children()
    {
        return $this->hasMany(self::class, 'to_answer_id', 'id');
    }
	
	public function user()
	{
		return $this->belongsTo(UserMain::class);
	}
	
	public function like()
    {
        return $this->hasOne(CommentLike::class, 'comment_id');
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
