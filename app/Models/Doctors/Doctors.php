<?php

namespace App\Models\Doctors;

use Illuminate\Database\Eloquent\Model;

class Doctors extends Model
{
    protected $table = 'sf_guard_user';
	
	public static function getDoctors()
	{
		return self::where('is_consultant_request', 1)->first();
	}
}
