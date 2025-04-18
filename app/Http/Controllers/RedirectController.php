<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function sitemap()
	{
		return redirect('/page/sitemap', 301);
	}
	
	public function aboutus()
	{
		return redirect('/page/about-us', 301);
	}
}
