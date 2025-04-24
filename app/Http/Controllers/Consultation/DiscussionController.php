<?php

namespace App\Http\Controllers\Consultation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Events\DiscussionCreated;

use App\Models\Consultation\Consultation;
use App\Models\Consultation\Discussion;

use Log;

use Illuminate\Support\Facades\Mail;
use App\Mail\Discussion\DiscussionCreated as DiscussionCreatedMail;

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
		$discussion = Discussion::create([
			'comment_id' => $request->comment_id, 
			'subrubric_id' => $request->subrubric_id,
			'title' => $request->title
		]);
			
		Cache::forget('discussions_' . $request->subrubric_id);
		
		DiscussionCreated::dispatch($request->title);
		
		return redirect()->back()->with('success', 'Дискуссия создана');
	}
	
	public function destroy(string $id)
    {
		$comment = Discussion::query()
            ->where('id', $id)
            ->firstOrFail();
		
		Cache::forget('discussions_' . $comment->subrubric_id);
		
		$comment->delete();
		
		return redirect()->back()->with('success', 'Дискуссия удалена');
	}
	
}
