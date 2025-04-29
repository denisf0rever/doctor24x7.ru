<?php

namespace App\Classes\Payment;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class TBankClass
{
	private static string $terminal_key = '1729778851350DEMO';
	private static string $password = '1iaDILU&TIstEwxv';
	
	public static function init(Request $request)
	{
		$preparedData = [
			'payment_purpose' => $request->payment_purpose,
			'payment_method' => $request->payment_method,
			'amount' => $request->amount,
			'chat' => $request->chat ?? 0,
			'order_id' => $request->OrderId,
			'tariff_id' => $request->tariff_id ?? 0,
			'total_sum' => $request->Sum,
			'urgency' => $request->urgency ?? 0,
			'pharma' => $request->pharma ?? 0,
			'option_phone' => $request->option_phone ?? 0,
			'video_consultation' => $request->video_consultation ?? 0,
		];

		$data = [
			'Amount' => 10 * 100,
			'Description' => 'Оплата консультации с врачом',
			'NotificationURL' => 'https://doctor24x7.ru/api/payment/status',
			'OrderId' => (string) Str::uuid(),
			'Password' => self::$password,
			'SuccessURL' => 'https://doctor24x7.ru/chat/' . $request->OrderId,
			'TerminalKey' => self::$terminal_key,
		];
		
		$values = array_values($data);
		 
		$concatenatedString = implode('', $values);
		
		$hashedString = hash('sha256', $concatenatedString);
		
		unset($data['Password']);
		
		$data['Token'] = $hashedString;
		$data['DATA'] = $preparedData;
		
		ksort($data);
		
		$postDataJson = json_encode($data);
		
		try {
			
			$response = Http::post('https://securepay.tinkoff.ru/v2/Init', $data);
			
			$decode_response = json_decode($response, true);
			
			dd($decode_response);
		
			if (isset($decode_response['PaymentURL'])) {
				$paymentUrl = $decode_response['PaymentURL'];
				return redirect($paymentUrl);
			} else {
			
				if($decode_response['ErrorCode'] == 8) {
					dd($decode_response);
				}
			}
		} catch (Exception $e) {
			echo $e->message;
			
			return response()->json(['error' => 'Ошибка при отправке запроса'], $response->status());
		}	
	}

}