<?php

namespace App\Repositories\Forum;

use App\Models\Forum\Forum;

class ForumRepository
{
	public static function categories()
	{
		$forums = Forum::select('id', 'short_title', 'slug',)
			->orderBy('short_title')
			->get();
			
		return $forums;
	}
}