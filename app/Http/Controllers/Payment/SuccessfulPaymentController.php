<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Payment\PaymentStatus;
use Log;

class SuccessfulPaymentController extends Controller
{
	public function status(Request $request)
    {
		$data = $request->all();
		
		if (isset($data['Status']) && $data['Status'] === 'CONFIRMED') {
			
			$message = json_encode($data);
		
			Log::channel('payment')->info('Payment Notification:', $request->all());
			
			Mail::to(config('config.admin_mail'))->send(new PaymentStatus($message));
			
			$token = config('config.rublitaken_token');
			$telegram_admin_id = config('config.telegram_admin_id');

			file_get_contents('https://api.telegram.org/bot'.$token.'/sendMessage?chat_id='.$telegram_admin_id.'&text='.$message.'');
		}
		
		return response('OK', 200);
    }
}
