<?php

namespace App\Listeners;

use App\Events\ConsultationAddBooking;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ConsultationBookingdNotification
{
    public function handle(ConsultationAddBooking $event): void
    {
        $token = config('telegram.consultation_token');
		$telegram_admin_id = 108494029;
		$message = "ПК: Платная консультация в работе";
		$message .= $event->userId;
		
		file_get_contents('https://api.telegram.org/bot'.$token.'/sendMessage?chat_id='.$telegram_admin_id.'&text='.$message.'');
    }
}
