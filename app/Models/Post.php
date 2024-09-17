<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Post extends Model
{
    use HasFactory;
	
	protected $table = 'post_posts';
	
	protected $guarded = [];	
	
	protected $fillable = [
		'h1',
        'title',
        'subtitle',
        'metadescription',
        'metakey',
        'author_id',
        'reading_time',
        'category',
        'short_text',
        'content',
        'full_text',
        'thumb',
		'views',
	];

	public function category()
    {
        return $this->belongsTo(PostCategory::class);
    }

	public function author()
    {
        return $this->belongsTo(User::class);
    }
	
	public function views()
    {
        return $this->hasMany(PostViews::class);
    }
	
	public function keyword()
    {
        return $this->hasOne(PostPhrase::class);
    }
}
