<?php

namespace App\Http\Controllers\Redirect;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Invoice\Invoice;

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
