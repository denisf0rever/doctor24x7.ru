<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class UserSettings extends Model
{
    use HasFactory;
	
	protected $table = 'laravel_users_settings';
	
	public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
