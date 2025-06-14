<?php

namespace App\Http\View\Composer;

use Illuminate\View\View;
use Illuminate\Support\Facades\Cache;
use App\Models\Post\Post;

class ArticleComposer
{
	public function compose(View $view)
    {
		$articles = Cache::remember('app_articles', 604800, fn () => Post::select('id', 'title')
			->orderBy('created_at', 'desc')
			->take(5)
			->get());
		
        $view->with('articles', $articles);
    }
}