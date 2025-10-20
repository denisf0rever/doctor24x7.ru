<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Category\CategoryRepository;
use App\Repositories\Forum\ForumRepository;
use Illuminate\Support\Facades\Cache;
use App\Services\Cached\CachedData;
use App\Services\BreadcrumbService;

class PageController extends Controller
{
	public function __construct(BreadcrumbService $breadcrumbService)
	{
		$this->breadcrumbService = $breadcrumbService;
	}
	
    public function sitemap()
	{
		$categories = CategoryRepository::categories();
		$forums = ForumRepository::categories();
		
		$this->breadcrumbService->add('page.sitemap', 'Карта сайта', route('page.sitemap'));
		
		$breadcrumbs = $this->breadcrumbService->getAll('page.sitemap');
		
		return view('page.sitemap', compact('categories', 'forums', 'breadcrumbs'));
	}
	
	public function team()
	{
		$doctors = CachedData::getCachedDoctor();
		
		$this->breadcrumbService->add('page.team', 'Наша команда', route('page.team'));
		
		$breadcrumbs = $this->breadcrumbService->getAll('page.team');
		
        return view('page.team', compact('doctors', 'breadcrumbs'));
	}
	
	public function contact()
	{
		$this->breadcrumbService->add('page.contact', 'Контакты', route('page.contact'));
		
		$breadcrumbs = $this->breadcrumbService->getAll('page.contact');
		
        return view('page.contact', compact('breadcrumbs'));
	}
	
	public function rules()
	{
		$this->breadcrumbService->add('page.rules', 'Правила сайта', route('page.rules'));
		
		$breadcrumbs = $this->breadcrumbService->getAll('page.rules');
		
        return view('page.rules', compact('breadcrumbs'));
	}
	
	public function terms()
	{
		$this->breadcrumbService->add('page.terms', 'Пользовательское соглашение', route('page.terms-of-use'));
		
		$breadcrumbs = $this->breadcrumbService->getAll('page.terms');
		
        return view('page.terms', compact('breadcrumbs'));
	}
	
	public function faq()
	{
		$this->breadcrumbService->add('page.faq', 'Вопросы и ответы', route('page.faq'));
		
		$breadcrumbs = $this->breadcrumbService->getAll('page.faq');
		
        return view('page.faq', compact('breadcrumbs'));
	}
	
	public function about()
	{
		$this->breadcrumbService->add('page.about', 'О сервисе', route('page.about-us'));
		
		$breadcrumbs = $this->breadcrumbService->getAll('page.about');
		
        return view('page.about', compact('breadcrumbs'));
	}
}
