<?php

namespace App\Listeners\Invoice;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\Invoice\InvoiceCreated;
use Illuminate\Support\Facades\Mail;
use App\Mail\Invoice\InvoiceCreated as InvoiceCreatedMail;

use Illuminate\Support\Facades\Log;
use Exception;

class InvoiceCreatedNotification
{
    public function handle(InvoiceCreated $events): void
    {			
		$email = $events->details['email'];
		
		$details = [
			'username' => $events->details['username'],
			'consultation_id' => $events->details['consultation_id'],
			'app_url' => config('app.url'),
			'app_name' => config('app.name'),
			'app_phone' => config('config.custom_phone'),
			'app_support' => config('config.custom_support'),
		];
		
		try {			
			Mail::to($email)->send(new InvoiceCreatedMail($details));
			
		} catch (Exception $e) {
			Log::channel('email')->error('Ошибка при отправке почты ' . __CLASS__ . $e->getMessage());
		}
    }
}
