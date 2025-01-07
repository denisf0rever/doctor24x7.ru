<?php

namespace App\Models\Consultation;

use Illuminate\Database\Eloquent\Model;

class UserByCategory extends Model
{
	public $timestamps = false;
	
    protected $table = 'sf_consultation_user_rubric';
	
	protected $fillable = [
		'user_id',
		'category_id',
	];
}
