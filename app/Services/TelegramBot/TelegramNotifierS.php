<?php

namespace App\Services\TelegramBot;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Exception;

final class TelegramNotifierS
{
	public const HOST = 'https://api.telegram.org/bot';

	public static function notify()
	{
		$token = config('config.rublitaken_token');
		$telegram_admin_id = config('config.telegram_admin_id');
		$message = "Перешел на оплату";
		
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