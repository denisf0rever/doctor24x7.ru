<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post\Post;
use App\Services\BreadcrumbService;
    
class HomePageController extends Controller
{
	public function __construct(BreadcrumbService $breadcrumbService)
	{
		$this->breadcrumbService = $breadcrumbService;
	}
	
    public function index()
	{
		$articles = Post::query()
			->select('id', 'hits', 'title')
			->orderBy('created_at', 'desc')
            ->take(10)
            ->get();
		
		$this->breadcrumbService->add('homepage', 'Доктор24x7', route('homepage'));
		
		$breadcrumbs = $this->breadcrumbService->getAll('homepage');
		
		return view('mainpage', compact('articles', 'breadcrumbs'));
	}
}
