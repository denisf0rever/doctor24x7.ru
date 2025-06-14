<?php

namespace App\Models\Post;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostComments extends Model
{
    use HasFactory;
	
	protected $table = 'i_comment';
	
	public function post()
	{
		return $this->belongsTo(Post::class);
	}
}
