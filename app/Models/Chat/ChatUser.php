<?php

namespace App\Models\Chat;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class ChatUser extends Authenticatable
{
    protected $table = 'sf_chat_user';
	
	protected $fillable = [
		'email',
		'password'
	];
	
	public function message()
	{
		return $this->hasMany(ChatMessage::class);
	}
	
}
