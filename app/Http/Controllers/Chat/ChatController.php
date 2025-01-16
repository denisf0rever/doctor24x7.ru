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
			->where('id', $id)
			->select('title', 'description')
			->first();
			
		return view('consultation.chat.item', compact('consultation'));
	}
}
