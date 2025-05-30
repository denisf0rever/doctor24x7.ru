<?php

namespace App\Models\Chat;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ChatUser extends Authenticatable
{
	use HasApiTokens, HasFactory, Notifiable;
	
    protected $table = 'sf_chat_user';
	
	protected $fillable = [
		'email',
		'password'
	];
	
	protected $hidden = [
		'password',
        'remember_token',
    ];
	
	public function message()
	{
		return $this->hasMany(ChatMessage::class);
	}
	
}
