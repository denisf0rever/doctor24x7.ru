<?php

namespace App\Services\Invoice;

use App\Models\Invoice\Invoice;
use Illuminate\Support\Facades\Mail;
use App\Mail\Payment\PaymentStatus;
use Illuminate\Support\Facades\Http;
use Log;

final class InvoiceService
{
	public static function update(int $id, array $data): Invoice
    {
        $invoice = Invoice::findByCommentId($id);

        $invoice->is_paid = 1;
        $invoice->save();
		
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
				
				$response = Http::post('https://api.telegram.org/bot' . $token . '/sendMessage', [
					'chat_id' => $telegram_admin_id,
					'text' => $message,
				]);
				
				if (!$response->successful()) {
                    Log::channel('telegram')->error('Ошибка при отправке сообщения в Telegram:', [
                        'response' => $response->body(),
                    ]);
                }

        return $invoice;
    }
}

