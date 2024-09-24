<?php

namespace App\Listeners;

use App\Events\ConsultationCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\ConsultationAdded;

class ConsultationCreatedNotification
{
    public function handle(ConsultationCreated $event): void
    {
		$details = [
			'name' => $event->name,
			'email' => $event->email,
			'consultation_id' => $event->consultation_id,
			'app_url' => config('app.url'),
			'app_name' => config('app.name'),
			'app_phone' => env('CUSTOM_PHONE'),
			'app_support' => env('CUSTOM_SUPPORT'),
		];
		
		Mail::to($event->email)->send(new ConsultationAdded($details));
    }
}
