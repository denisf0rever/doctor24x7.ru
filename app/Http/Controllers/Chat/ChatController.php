<?php

namespace App\Http\Controllers\Chat;

use App\Http\Controllers\Controller;
use App\Models\Consultation\Consultation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Services\Telegram\Notifier\TelegramNotifier;

class ChatController extends Controller
{
	public function show(int $id)
	{
		$consultation = Consultation::query()
			->with(['category', 'invoice'])
			->where('id', $id)
			->select('id', 'title', 'description', 'username', 'created_at', 'rubric_id', 'is_payed', 'tariff_id')
			->firstOrFail();
						
		return view('consultation.chat.item', compact('consultation'));
	}
}
