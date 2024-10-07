<?php

namespace App\Listeners;

use App\Events\AnswerToAuthorCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\AnswerToAuthorAdded;

class AnswerNotification
{
    public function handle(AnswerToAuthorCreated $event): void
    {
        $details = [
			'name' => $event->username,
			'email' => $event->email,
			'consultation_id' => $event->consultation_id,
			'app_url' => config('app.url'),
			'app_name' => config('app.name'),
			'app_phone' => env('CUSTOM_PHONE'),
			'app_support' => env('CUSTOM_SUPPORT'),
		];
		
		Mail::to($event->email)->send(new AnswerToAuthorAdded($details));
    }
}
