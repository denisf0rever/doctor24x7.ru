<?php

namespace App\Models\Settings;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class UserSettings extends Model
{
    use HasFactory;
	
	public $timestamps = false;
	
	protected $table = 'laravel_users_settings';
	
	protected $fillable = [ 
		'user_id',
		'answer_form'
	];
	
	public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
	
	// Вернет true, если отвечаем на отдельной странице
	public static function hasAnswerForm($user_id): bool
	{
		return self::query()
                ->where('user_id', $user_id)
                ->where('answer_form', 1)
                ->exists();
	}
	
	public static function hasSetting($user_id): bool
	{
		return self::query()
                ->where('user_id', $user_id)
                ->exists();
	}
}
