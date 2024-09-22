<?php

namespace App\Listeners;

use App\Events\ConsultationCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;

class ConsultationCreatedNotification
{
    /**
     * Handle the event.
     */
    public function handle(ConsultationCreated $event): void
    {
		$details = [
    'name' => 'John Doe'
];
		//Mail::to($event->email)->send(new WelcomeEmail($details));
		
		echo $event->email;
    }
}
