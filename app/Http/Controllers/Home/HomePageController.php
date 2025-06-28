<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post\Post;

class HomePageController extends Controller
{
    public function index()
	{
		$articles = Post::query()
			->select('id', 'hits', 'title')
			->orderBy('created_at', 'desc')
            ->take(10)
            ->get();
		
		return view('mainpage', compact('articles'));
	}
}
