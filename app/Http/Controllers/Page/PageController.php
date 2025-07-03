<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Category\CategoryRepository;
use App\Repositories\Forum\ForumRepository;
use Illuminate\Support\Facades\Cache;
use App\Services\Cached\CachedData;

class PageController extends Controller
{
    public function sitemap()
	{
		$categories = CategoryRepository::categories();
		$forums = ForumRepository::categories();
		
		return view('page.sitemap', compact('categories', 'forums'));
	}
	
	public function team()
	{
		$doctors = CachedData::getCachedDoctor();
		
        return view('page.team', compact('doctors'));
	}
}
