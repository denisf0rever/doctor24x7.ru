<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Payment\StatusRequest;
use Illuminate\Support\Facades\Http;
use App\Services\Invoice\InvoiceService;
use App\Services\Account\BalanceService;

use Illuminate\Support\Facades\Mail;
use App\Mail\Payment\PaymentStatus;
use Log;

class PaymentStatusController extends Controller
{
	public function status(StatusRequest $request)
    {		
		try {
			$data = $request->all();

			if (!isset($data['Status']) || $data['Status'] !== 'CONFIRMED') {
				return response()->json(['error' => 'Неверный статус'], 400);
			}
			
			if ($data['Data']['payment_purpose'] == 'chat') {
				$comment_id = $data['Data']['order_id'];
				$result = InvoiceService::update($comment_id, $data);

				if ($result) {
					return response('OK', 200);
				} else {
					return response()->json(['error' => 'Обновление инвойса не успешно'], 500);
				}
			}
			
			if ($data['Data']['payment_purpose'] == 'balance_account') {
				$user_id = $data['Data']['OrderId'];
				$result = BalanceService::update($user_id, $data);
				
				if ($result) {
					return response('OK', 200);
				} else {
					return response()->json(['error' => 'Обновление инвойса не успешно'], 500);
				}
			}
			
		} catch (Exception $e) {
			Log::channel('payment_error')->error('Ошибка платежа:', [
				'error' => $e->getMessage(),
				'data' => $data,
			]);

			return response()->json(['error' => 'Ошибка при отправке запроса, попробуйте позже'], 500);
		}	
    }
	
	/*public function checkPaymentMethod(array $array)
	{
		if ($data['Data']['payment_method'] == 'chat') {
			return 'chat';
		}
		
		if ($data['Data']['payment_method'] == 'chat')
	}*/
}
