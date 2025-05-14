<?php

namespace App\Services\Telegram\Notifier;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Exception;

final class TelegramNotifier
{
	public const HOST = 'https://api.telegram.org/bot';

	public static function notify(string $message, string $channel = null)
	{
		$token = config('config.rublitaken_token');
		$telegram_admin_id = config('config.telegram_admin_id');
		
		try {
			Http::get(self::HOST . $token . '/sendMessage', [
				'chat_id' => $telegram_admin_id,
				'text' => $message
			]);
		} catch (Exception $e) {
			Log::channel('telegram')->error('Ошибка при отправке в телеграм: ' . __CLASS__ . $e->getMessage());
			
			return response()->json(['error' => 'Не удалось отправить сообщение.'], 500);
		}
	}
}