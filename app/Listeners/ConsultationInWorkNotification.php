<?php

namespace App\Listeners;

use App\Events\ConsultationInWork;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;
use Exception;
use Illuminate\Support\Facades\Mail;
use App\Mail\BookingAdded;

class ConsultationInWorkNotification
{
    public function handle(ConsultationInWork $event)
    {
        $details = [
			'name' => $event->username,
			'email' => $event->email,
			'app_url' => config('app.url'),
			'app_name' => config('app.name'),
			'app_phone' => config('config.custom_phone'),
			'app_support' => config('config.custom_support'),
		];
		
		try {
			Mail::to($event->email)->send(new BookingAdded($details));
		} catch (Exception $e) {
			Log::channel('email')->error('Ошибка при отправке электронной почты: ' . __CLASS__ . $e->getMessage());
			
			return response()->json(['error' => 'Не удалось отправить сообщение.'], 500);
		}
    }
}
