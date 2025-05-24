<?php

namespace App\Models\Chat;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ChatMessage extends Model
{
	use HasFactory;
	
    protected $table = 'sf_chat_message';
	
	protected $fillable = [
		'chat_id',
		'user_id',
		'message'
	];
	
	public function user()
	{
		return $this->belongsTo(ChatUser::class, 'user_id');
	}
	
	public function chat()
	{
		return $this->belongsTo(Chat::class, 'chat_id');
	}
}
