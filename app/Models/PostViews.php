<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostViews extends Model
{
    use HasFactory;
	
	public $timestamps = false;
	
	protected $table = 'post_views';
	  
	protected $fillable = [
		'post_id',
		'views'
	];
	
	public function articles()
    {
        return $this->hasMany(Post::class);
    }
}
