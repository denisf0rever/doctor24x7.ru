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
	
	public function children()
    {
        return $this->hasMany(self::class, 'root_id', 'id')->orderBy('id', 'asc');
    }
}
