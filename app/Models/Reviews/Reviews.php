<?php

namespace App\Models\Reviews;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    use HasFactory;
	
	protected $table = 'laravel_reviews';
	
		protected $fillable = [
		'user_id',
		'title',
		'rating',
		'description'
	];
}
