<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Mail\WelcomeEmail;
use Illuminate\Support\Facades\Mail;

class HomePageController extends Controller
{
    public function index()
	{
		$articles = Post::query()
			->orderBy('created_at')
            ->take(10)
            ->get();
				
		$details = [
			'name' => 'John Doe'
		];
		
		//Mail::to('predlozhi@bk.ru')->send(new WelcomeEmail($details));
		
		return view('mainpage', compact('articles'));
	}
}
