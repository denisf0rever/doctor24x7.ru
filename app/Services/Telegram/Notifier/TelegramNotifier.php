<?php

namespace App\Services\Telegram\Notifier;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Exception;

final class TelegramNotifier
{
	public const HOST = 'https://api.telegram.org/bot';

	public static function notify(string $message, string $channel = null, array $array = null)
	{
		$token = match ($channel) {
			'payment' => config('config.rublitaken_token'),
			'event' => config('config.event_token'),
			default => ''
		};
		
		$telegram_admin_id = config('config.telegram_admin_id');
		
		if (is_array($array)) {
			$keyboard = [
						'inline_keyboard' => [
							[
								[
									'text' => $array['type'], 
									'url' => $array['url']
								]
							]
						]
					];
		}
			
		try {
		
			Http::get(self::HOST . $token . '/sendMessage', [
				'chat_id' => $telegram_admin_id,
				'text' => $message,
				'reply_markup' => json_encode($keyboard) ?? null
			]);
		} catch (Exception $e) {
			Log::channel('telegram')->error('Ошибка при отправке в телеграм: ' . __CLASS__ . $e->getMessage());
			
			return response()->json(['error' => 'Не удалось отправить сообщение.'], 500);
		}
	}
}