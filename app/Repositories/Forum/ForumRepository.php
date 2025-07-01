<?php

namespace App\Repositories\Forum;

use App\Models\Forum\Forum;

class ForumRepository
{
	public static function category($slug)
	{
		$forum = Forum::select('id', 'h1', 'title', 'slug', 'metadesc', 'metakey', 'rubric_id')
			->where('slug', $slug)
			->first();
			
		return $forum;
	}
	
	public static function categories()
	{
		$forums = Forum::select('id', 'short_title', 'slug', 'image_name')
			->orderBy('short_title')
			->get();
			
		return $forums;
	}
}