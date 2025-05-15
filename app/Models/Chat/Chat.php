<?php

namespace App\Models\Chat;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $table = 'sf_chat';
	
	protected $fillable = [
		'user_id',
		'uuid'
	];
}
