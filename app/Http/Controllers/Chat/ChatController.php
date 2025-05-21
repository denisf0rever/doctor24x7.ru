<?php

namespace App\Http\Controllers\Chat;

use App\Http\Controllers\Controller;
use App\Models\Consultation\Consultation;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\Models\UserMain as User;
use App\Models\Chat\Chat;
use App\Models\Chat\ChatMessage;
use App\Models\Chat\ChatUser;
use Illuminate\Support\Str;

use App\Services\Telegram\Notifier\TelegramNotifier;
use App\Http\Requests\Chat\ChatRequest;
use Illuminate\Http\Request;

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
				'consultant_id' => $request->consultant_id,
				'ip' => $request->ip(),
				'chat_key' => Str::random(8),
				'uuid' => Str::uuid()->toString()
			]);
			
			$password = Str::random(10);
			
			$user = ChatUser::firstOrCreate([
				'email' => $request->email,
				'password' => Hash::make($password)
			]);
			
			Auth::login($user);
			
			return $chat->uuid;
		});
		
		return redirect()->route('chat.room', $chatId);
	}
	
	public function message(Request $request)
	{
		$chat = ChatMessage::create([
			'chat_id' => $request->chat_id,
			'user_id' => $request->user_id,
			'message' => $request->message
		]);
		
		return redirect()->back();
	}
	
	public function room(string $uuid)
	{
		$user_id = auth()->user()->id ?? 1;
		
		$chat = Chat::query()
			->where('uuid', $uuid)
			->firstOrFail();
			
			
			
		$messages = ChatMessage::query()
			->where('chat_id', $chat->id)
			->get();
			
			
		$chats = Chat::query()
			->where('consultant_id', 1)
			->get();
			
		return view('consultation.chat.room', compact('chat', 'chats', 'messages', 'user_id'));
	}
}
