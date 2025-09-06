<?php

namespace App\Models\Chat;

use Illuminate\Database\Eloquent\Model;
use App\Models\UserMain;

class Chat extends Model
{
    protected $table = 'sf_chat';
	
	protected $fillable = [
		'consultant_id',
		'chat_key',
		'uuid'
	];
	
	public function consultant()
	{
		return $this->belongsTo(UserMain::class, 'consultant_id');
	}
}
