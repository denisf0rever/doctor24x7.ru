<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class HomePageController extends Controller
{
    public function index()
	{
		$articles = Post::all();
				
		return view('mainpage', compact('articles'));
	}
}
