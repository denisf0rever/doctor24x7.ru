<?php

namespace App\Http\Controllers\Payment\Status;

use App\Http\Controllers\Controller;
use App\Http\Requests\Payment\StatusRequest;
use Illuminate\Support\Facades\Http;
use App\Services\Invoice\InvoiceService;

use Log;

class ChatPaymentStatusController extends Controller
{
	public function status(StatusRequest $request)
    {		
		try {
			$data = $request->all();

			if (!isset($data['Status']) || $data['Status'] !== 'CONFIRMED') {
				return response()->json(['error' => 'Неверный статус'], 400);
			}
			
			$comment_id = $data['Data']['order_id'];
			$result = InvoiceService::update($comment_id, $data);

			if ($result) {
				return response('OK', 200);
			} else {
				return response()->json(['error' => 'Обновление инвойса не успешно'], 500);
			}
			
		} catch (Exception $e) {
			Log::channel('payment_error')->error('Ошибка платежа:', [
				'error' => $e->getMessage(),
				'data' => $data,
			]);

			return response()->json(['error' => 'Ошибка при отправке запроса, попробуйте позже'], 500);
		}	
    }
}
