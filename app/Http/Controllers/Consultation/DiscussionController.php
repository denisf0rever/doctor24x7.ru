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
	
	public function store()
	{
		return view('dashboard.consultation.discussion.create');
	}
	
	public function create(Request $request)
	{
		$discussion = Discussion::create(
			[
			'comment_id' => $request->comment_id, 
			'subrubric_id' => $request->subrubric_id,
			'title' => $request->title
			]);
			
			return redirect()->back()->with('success', 'Дискуссия создана');
			
	}
	
	public function destroy(string $id)
    {
		$comment = Comment::query()
            ->where('id', $id)
            ->firstOrFail();
		
		$consultation_slug = $comment->consultation->slug;
		$comment->delete();
		
		ClearConsultationCache::clear($consultation_slug);
				
		if ($comment) {
			 return redirect()->back()->with('success', 'Ответ удален');
		}
	}
	
}
