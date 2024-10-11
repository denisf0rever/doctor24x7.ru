<?php

namespace App\Listeners;

use App\Events\ConsultationInWork;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\BookingAdded;

class ConsultationInWorkNotification
{
    public function handle(ConsultationInWork $event): void
    {
        $details = [
			'name' => $event->username,
			'email' => $event->email,
			'app_url' => config('app.url'),
			'app_name' => config('app.name'),
			'app_phone' => env('CUSTOM_PHONE'),
			'app_support' => env('CUSTOM_SUPPORT'),
		];
		
		Mail::to($event->email)->send(new BookingAdded($details));
    }
}
