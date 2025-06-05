<?php

namespace App\Services\Invoice;

use App\Models\Invoice\Invoice;
use App\Models\Consultation\Consultation;
use Illuminate\Support\Facades\Mail;
use App\Mail\Payment\PaymentStatus;
use Illuminate\Support\Facades\Http;
use App\Services\Telegram\Notifier\TelegramNotifier;

use Log;

final class InvoiceService
{
	public static function update(int $id, array $data): Invoice
    {
        $invoice = Invoice::findByCommentId($id);

        $invoice->is_paid = 1;
        $invoice->save();
		
        $consultation = Consultation::findByCommentId($id);
		
        $consultation->is_payed = 1;
		$consultation->payed_amount = $data['Amount'] / 100;
        $consultation->save();
		
		$message = 'Оплачено ' . $data['Amount'] / 100 . PHP_EOL;
				$message .= 'Тариф ' . $data['Data']['tariff_id'] . PHP_EOL;
				$message .= 'Сумма на кассе ' . $data['Data']['total_sum'] . PHP_EOL;
				$message .= 'Метод ' . $data['Data']['payment_method'] . PHP_EOL;
				$message .= 'Цель ' . $data['Data']['payment_purpose'] . PHP_EOL;
				$message .= 'Чат ' . $data['Data']['chat'] . PHP_EOL;
				$message .= 'Фармацевт ' . $data['Data']['pharma'] . PHP_EOL;
				$message .= 'ID ' . $data['Data']['order_id'] . PHP_EOL;
				$message .= 'Телефон ' . $data['Data']['option_phone'] . PHP_EOL;
				$message .= 'Видео ' . $data['Data']['video_consultation'] . PHP_EOL;

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
								'url' => 'https://doctor24x7.ru/dashboard/consultation/' . $data['Data']['order_id']
							],
							[
								'text' => 'Карапуз', 
								'url' => 'https://puzkarapuz.ru/consultation/detail/' . $data['Data']['order_id']
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

        return $invoice;
    }
}

