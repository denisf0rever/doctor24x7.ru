<?php

namespace App\Listeners;

use App\Events\ConsultationAddBooking;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Exception;

class ConsultationBookingdNotification
{
	public const HOST = 'https://api.telegram.org/bot';
	
    public function handle(ConsultationAddBooking $event)
    {
        $token = config('config.consultation_token');
		$telegram_admin_id = config('config.telegram_admin_id');
		$message = "ПК: В работе: ";
		$message .= $event->userId;
				
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
