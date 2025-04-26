<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Log;

class InvoiceCreated extends Command
{
	public const HOST = 'https://api.telegram.org/bot';
	
    protected $signature = 'command:invoice';
    protected $description = 'Администратор предложил стоимость';
	
    public function handle()
    {
        $token = config('config.consultation_token');
		$telegram_admin_id = config('config.telegram_admin_id');
		$message = "ПК: В работе: ";
				
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
