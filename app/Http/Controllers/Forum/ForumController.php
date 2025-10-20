<?php

namespace App\Http\Controllers\Forum;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Models\Consultation\Consultation;
use App\Models\UserMain;
use App\Repositories\Forum\ForumRepository;
use App\Services\BreadcrumbService;

class ForumController extends Controller
{
	public function __construct(BreadcrumbService $breadcrumbService)
	{
		$this->breadcrumbService = $breadcrumbService;
	}
	
	public function index()
	{
		$categories = ForumRepository::categories();
		
		$this->breadcrumbService->add('forum_index', 'Форум', route('forum.index'));
		
		$breadcrumbs = $this->breadcrumbService->getAll('forum_index');
		
		return view('forum.index', compact('categories', 'breadcrumbs'));
	}
	
	public function top()
	{
		$doctors = Cache::remember('top_doctors', 86400, fn () => UserMain::query()
			->where('show_in_slider', true) 
			->select('id', 'username', 'avatar', 'first_name', 'last_name', 'answers_count', 'icq')
			->orderBy('answers_count', 'desc')
			->get()
			);
		
		$this->breadcrumbService->add('forum_index', 'Форум', route('forum.index'));
		$this->breadcrumbService->add('forum_index', 'Рейтинг врачей', route('forum.top'));
		
		$breadcrumbs = $this->breadcrumbService->getAll('forum_index');
		
		return view('forum.top', compact('doctors', 'breadcrumbs'));
	}
	
	public function consultation()
	{
		$consultations = Consultation::query()
			->where('is_payed', true)
			->select('id', 'title', 'answer_count')
			->orderBy('created_at', 'desc')
			->limit(5)
			->get();
		
		$this->breadcrumbService->add('forum_index', 'Форум', route('forum.index'));
		$this->breadcrumbService->add('forum_index', 'Консультации', route('forum.consultation'));
		
		$breadcrumbs = $this->breadcrumbService->getAll('forum_index');
			
		return view('forum.consultation', compact('consultations', 'breadcrumbs'));
	}
	
	public function category($slug)
	{
		$category = ForumRepository::category($slug);
		
		
		$consultations = Consultation::query()
			->where('rubric_id', $category->rubric_id)
			->select('id', 'title', 'answer_count')
			->orderBy('created_at', 'desc')
			->limit(20)
			->get();
			
		$this->breadcrumbService->add('forum_index', 'Форум', route('forum.index'));
		$this->breadcrumbService->add('forum_index', $category->h1, route('forum.category', $category->slug));
		
		$breadcrumbs = $this->breadcrumbService->getAll('forum_index');
		
		return view('forum.category', compact('category', 'consultations', 'breadcrumbs'));
	}
}
