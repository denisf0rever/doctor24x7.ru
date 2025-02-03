<?php

namespace App\Http\Controllers\Consultation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Consultation\Consultation;
use App\Models\Consultation\Discussion;

class DiscussionController extends Controller
{
    public function index()
	{
		$discussionIds = Discussion::pluck('comment_id');

		$consultations = Consultation::whereIn('id', $discussionIds)
			->select('id', 'title', 'visit_count')
			->where('is_special', 0)
			->limit(100)
			->orderBy('visit_count', 'desc')
			->get();
			
		$consultations_count = Consultation::count();
			
		return view('dashboard.consultation.discussion.list', compact('consultations'));
	}
	
}
