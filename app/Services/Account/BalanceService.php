<?php

namespace App\Services\Account;

use Illuminate\Support\Facades\Mail;
use App\Mail\Payment\PaymentStatus;
use Illuminate\Support\Facades\Http;
use App\Services\Telegram\Notifier\TelegramNotifier;

use App\Models\Account\Account;

use Log;

final class BalanceService
{
	public static function update(int $id, array $data): Account
    {
        $balance = Account::findByUserId($id);

        $balance->balance = 1;
        $balance->save();
		
		$message = 'Оплачено';

		$token = config('config.rublitaken_token');
		$telegram_admin_id = config('config.telegram_admin_id');
		
		Log::channel('payment')->info('Платеж:', $data);
		
		Mail::to(config('config.admin_mail'))->send(new PaymentStatus($message));
		
		//TelegramNotifier::notify('Оплачено', 'payment');
		$keyboard = [
			'inline_keyboard' => [
				[
					[
						'text' => 'Дашбоард', 
						'url' => 'https://doctor24x7.ru/dashboard/consultation/1'
					],
					[
						'text' => 'Карапуз', 
						'url' => 'https://puzkarapuz.ru/consultation/detail/2'
					]
				]
			]
		];

		$response = Http::post('https://api.telegram.org/bot' . $token . '/sendMessage', [
			'chat_id' => $telegram_admin_id,
			'text' => $message,
			'reply_markup' => json_encode($keyboard)
		]);
		
		if (!$response->successful()) {
			Log::channel('telegram')->error('Ошибка при отправке сообщения в Telegram:', [
				'response' => $response->body(),
			]);
		}

        return $balance;
    }
}

