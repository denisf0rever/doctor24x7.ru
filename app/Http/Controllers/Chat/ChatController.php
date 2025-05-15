<?php

namespace App\Http\Controllers\Chat;

use App\Http\Controllers\Controller;
use App\Models\Consultation\Consultation;
use Illuminate\Support\Facades\DB;

use App\Models\UserMain as User;
use App\Models\Chat\Chat;
use Illuminate\Support\Str;

use App\Services\Telegram\Notifier\TelegramNotifier;
use App\Http\Requests\Chat\ChatRequest;

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
	
	public function form(int $id)
	{
		$user = User::query()
			->where('id', $id)
			->firstOrFail();
			
		return view('consultation.chat.newchat', compact('user'));
	}
	
	public function create(ChatRequest $request)
	{
		$chatId = DB::transaction(function () use ($request) {
			$chat = Chat::create([
				'user_id' => $request->user_id,
				'uuid' => Str::uuid()->toString()
			]);
			
			return $chat->uuid;
		});

		return redirect()->route('chat.room', $chatId);
	}
	
	public function room(string $uuid)
	{
		return view('consultation.chat.room');
	}
}
