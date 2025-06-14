<?php

namespace App\Models\Post;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostPhrase extends Model
{
    use HasFactory;
	
	public $timestamps = false;
	
	protected $table = 'post_keywords';
	
	protected $fillable = [
		'post_id',
		'key'
	];
	
	public function article()
    {
        return $this->belongsTo(Post::class);
    }
}
