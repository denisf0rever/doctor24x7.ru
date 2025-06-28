<?php

namespace App\Http\Controllers\Forum;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Consultation\Consultation;
use App\Models\UserMain;

class ForumController extends Controller
{
	public function index()
	{
		return view('forum.index');
	}
	
	public function top()
	{
		$doctors = UserMain::query()
			->where('show_in_slider', true) 
			->select('id', 'username', 'avatar', 'first_name', 'last_name', 'answers_count', 'icq')
			->orderBy('answers_count', 'desc')
			->get();
		
		return view('forum.top', compact('doctors'));
	}
	
	public function consultation()
	{
		$consultations = Consultation::query()
			->where('is_payed', true)
			->select('id', 'title')
			->orderBy('created_at', 'desc')
			->limit(5)
			->get();
			
		return view('forum.consultation', compact('consultations'));
	}
}
