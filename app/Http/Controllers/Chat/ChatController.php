<?php

namespace App\Http\Controllers\Chat;

use App\Http\Controllers\Controller;
use App\Models\Consultation\Consultation;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

use App\Models\UserMain as User;
use App\Models\Chat\Chat;
use App\Models\Chat\ChatMessage;
use App\Models\Chat\ChatUser;
use Illuminate\Support\Str;

use App\Services\Telegram\Notifier\TelegramNotifier;
use App\Http\Requests\Chat\ChatRequest;
use App\Http\Requests\Chat\MessageRequest;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class ChatController extends Controller
{
  public function show(int $id)
  {
    $consultation = Consultation::query()
      ->with(['category:id,short_title', 'invoice:id,comment_id,cost,is_paid'])
      ->where('id', $id)
      ->select('id', 'title', 'description', 'username', 'created_at', 'rubric_id', 'is_payed', 'tariff_id')
      ->firstOrFail();

    return view('consultation.chat.item', compact('consultation'));
  }

  public function form(int $id)
  {
    $consultant = User::query()
      ->where('id', $id)
      ->select('id', 'first_name', 'middle_name', 'avatar')
      ->firstOrFail();

    TelegramNotifier::notify('Форма создания чата', 'event');

    return view('consultation.chat.newchat', compact('consultant'));
  }

  public function create(ChatRequest $request)
  {
    $userData = [
      'consultant_id' => $request->consultant_id,
      'email' => $request->email,
      'password' => '15respect15',
      'ip' => $request->ip()
    ];

    $chatId = DB::transaction(function () use ($userData) {
      $chat = Chat::create([
        'consultant_id' => $userData['consultant_id'],
        'ip' => $userData['ip'],
        'chat_key' => Str::random(8),
        'uuid' => Str::uuid()->toString()
      ]);

      $user = ChatUser::create([
        'email' => $userData['email'],
        'password' => Hash::make($userData['password'])
      ]);

      $user->remember_token = Str::random(60);
      $user->save();

      $consultant_email = $chat->consultant->email_addressS ?? config('config.admin_mail');
      $user_email = $user->email;

      $subject = 'Создан новый чат';
      $message = 'Чтобы пройти в чат, нажмите на ссылку' . PHP_EOL;
      $message .= 'https://doctor24x7.ru/chat/room/' . $chat->uuid;

      Mail::raw($message, function ($mail) use ($consultant_email, $subject) {
        $mail->to($consultant_email)
          ->subject($subject);
      });

      $subject = 'Создан новый чат с врачом';
      $message = 'Чтобы пройти в чат, нажмите на ссылку' . PHP_EOL;
      $message .= 'https://doctor24x7.ru/chat/room/' . $chat->uuid;

      Mail::raw($message, function ($mail) use ($user_email, $subject) {
        $mail->to($user_email)
          ->subject($subject);
      });

      Auth::login($user);

      return $chat->uuid;
    });

    return redirect()->route('chat.room', $chatId);
  }

  public function message(MessageRequest $request)
  {
    if ($request->message === null) {
      return response()->json(['error' => 'Message can\'t be null'], 400);
    }

    $toEmail = config('config.admin_email');
    $subject = 'Новое сообщение';

    $message = ChatMessage::create([
      'chat_id' => $request->chat_id,
      'user_id' => $request->user_id,
      'message' => $request->message
    ]);

    $message1 = 'Новое сообщение в чате' . PHP_EOL;
    $message1 .= 'https://doctor24x7.ru/chat/room/' . $message->chat->uuid;

    /*Mail::raw($message1, function ($mail) use ($toEmail, $subject) {
            $mail->to([$toEmail, $toEmail])
                 ->subject($subject);
        });*/

    return redirect()->back();
  }

  public function room(string $uuid)
  {
    $user_id = Auth::id();

    if (!$user_id) {
      return abort(403);
    }

    $chat = Chat::query()
      ->where('uuid', $uuid)
      ->firstOrFail();

    $consultant = User::query()
      ->where('id', $chat->consultant_id)
      ->select('first_name', 'middle_name', 'avatar')
      ->first();

    $messages = ChatMessage::query()
      ->where('chat_id', $chat->id)
      ->get();

    $chats = Chat::query()
      ->where('consultant_id', 1)
      ->get();

    return view('consultation.chat.room', compact('chat', 'chats', 'messages', 'user_id', 'consultant'));
  }

  public function messages(int $chat_id): JsonResponse
  {
    $messages = ChatMessage::where('chat_id', $chat_id)
      ->with('chat:id,is_locked')
      ->get()
      ->makeHidden('chat_id');

    $isLocked = $messages->isNotEmpty() ? $messages->first()->chat->is_locked : null;

    $response = [
      'chat_id' => $chat_id,
      'status' => $isLocked,
      'messages' => $messages->map(function ($message) {
        return [
          'id' => $message->id,
          'user_id' => $message->user_id,
          'message' => $message->message,
          'is_read' => $message->is_read,
          'created_at' => $message->created_at,
          'updated_at' => $message->updated_at,
        ];
      }),
    ];

    return response()->json($response);
  }
}
