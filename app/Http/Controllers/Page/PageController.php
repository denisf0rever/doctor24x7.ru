<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Category\CategoryRepository;
		
class PageController extends Controller
{
    public function sitemap()
	{
		$categories = CategoryRepository::categories();
		
		return view('page.sitemap', compact('categories'));
	}
}
