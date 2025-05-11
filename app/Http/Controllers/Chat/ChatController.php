<?php

namespace App\Http\Controllers\Chat;

use App\Http\Controllers\Controller;
use App\Models\Consultation\Consultation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChatController extends Controller
{
	public function show(string $id)
	{
		$consultation = Consultation::query()
			->with(['category', 'invoice'])
			->where('id', $id)
			->select('id', 'title', 'description', 'username', 'created_at', 'rubric_id', 'is_payed')
			->firstOrFail();
			
		$token = config('config.rublitaken_token');
		$telegram_admin_id = config('config.telegram_admin_id');
				
		$response = Http::post('https://api.telegram.org/bot' . $token . '/sendMessage', [
				'chat_id' => $telegram_admin_id,
				'text' => $id,
			]);
						
		return view('consultation.chat.item', compact('consultation'));
	}
}
