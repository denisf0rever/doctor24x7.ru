<?php

namespace App\Models\Post;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
    use HasFactory;
	
	public $timestamps = false;
	
	protected $table = 'post_categories';
	  
	protected $fillable = [ 
		'title',
        'h1',
        'metadescription',
        'metakeywords',
        'description',
        'short_title',
        'slug',
		'views'
	];
	
	public function articles()
    {
        return $this->hasMany(Post::class);
    }
}
