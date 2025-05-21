<?php

namespace App\Models\Chat;

use Illuminate\Database\Eloquent\Model;

class ChatMessage extends Model
{
    protected $table = 'sf_chat_message';
	
	protected $fillable = [
		'chat_id',
		'user_id',
		'message'
	];
}
