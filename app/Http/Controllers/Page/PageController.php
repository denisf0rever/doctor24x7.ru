<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Category\CategoryRepository;
use App\Repositories\Forum\ForumRepository;
		
class PageController extends Controller
{
    public function sitemap()
	{
		$categories = CategoryRepository::categories();
		$forums = ForumRepository::categories();
		
		return view('page.sitemap', compact('categories', 'forums'));
	}
}
