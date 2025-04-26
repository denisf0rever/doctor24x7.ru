<?php

namespace App\Http\Controllers\Chat;

use App\Http\Controllers\Controller;
use App\Models\Consultation\Consultation;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index()
	{
		return view('chat.main');
	}
	
	public function endPoint(Request $request)
	{
		return 'ok';
	}
	
	public function show(string $id)
	{
		$consultation = Consultation::query()
			->with('category')
			->where('id', $id)
			->select('id', 'title', 'description', 'username', 'created_at', 'rubric_id', 'is_payed')
			->firstOrFail();
			
		$invoice ??= $consultation->invoice;
						
		return view('consultation.chat.item', compact('consultation', 'invoice'));
	}
}
