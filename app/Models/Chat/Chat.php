<?php

namespace App\Models\Chat;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $table = 'sf_chat';
	
	protected $fillable = [
		'consultant_id',
		'ip',
		'chat_key',
		'uuid'
	];
}
