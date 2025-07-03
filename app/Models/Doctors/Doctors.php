<?php

namespace App\Models\Doctors;

use Illuminate\Database\Eloquent\Model;

class Doctors extends Model
{
    protected $table = 'sf_guard_user';
	
	public static function getDoctors()
	{
		return self::where('is_consultant_request', 1)
			->orderBy('created_at', 'desc')
			->get();
	}
	
	public static function getPriorityDoctors()
	{
		return self::where('is_priority_user', 1)
			->select('email_address')
			->get();
	}
}
