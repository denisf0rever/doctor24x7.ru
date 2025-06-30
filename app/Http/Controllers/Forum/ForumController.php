<?php

namespace App\Http\Controllers\Forum;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Models\Consultation\Consultation;
use App\Models\UserMain;
use App\Repositories\Forum\ForumRepository;

class ForumController extends Controller
{
	public function index()
	{
		$categories = ForumRepository::categories();
		
		return view('forum.index', compact('categories'));
	}
	
	public function top()
	{
		$doctors = Cache::remember('top_doctors', 86400, fn () => UserMain::query()
			->where('show_in_slider', true) 
			->select('id', 'username', 'avatar', 'first_name', 'last_name', 'answers_count', 'icq')
			->orderBy('answers_count', 'desc')
			->get()
			);
		
		return view('forum.top', compact('doctors'));
	}
	
	public function consultation()
	{
		$consultations = Consultation::query()
			->where('is_payed', true)
			->select('id', 'title', 'answer_count')
			->orderBy('created_at', 'desc')
			->limit(5)
			->get();
			
		return view('forum.consultation', compact('consultations'));
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
		
		return view('forum.category', compact('category', 'consultations'));
	}
}
