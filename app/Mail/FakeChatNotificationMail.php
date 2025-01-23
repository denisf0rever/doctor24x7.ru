<?php

namespace App\Listeners;

use App\Events\FakeChat;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\FakeChatNotificationMail;
use App\Services\TelegramBot\TelegramNotifier;

class FakeChatNotificationMail
{
    public function handle(FakeChat $event): void
    {
        $details = [
			'name' => 'Denis',
			'email' => 'predlozhi@bk.ru',
			'consultation_id' => $event->consultation_id,
			'app_url' => config('app.url'),
			'app_name' => config('app.name'),
			'app_phone' => env('CUSTOM_PHONE'),
			'app_support' => env('CUSTOM_SUPPORT'),
		];
		
		try {
			Mail::to($event->email)->send(new FakeChatNotificationMail($details));
		} catch (\Exception $e) {
			//\Log::error('Ошибка отправки почты: ' . $e->getMessage());
    
			$notifier = new TelegramNotifier(__CLASS__ . '%0AПочта не ушла' . '%0A'. $event->consultation_id . '%0A'. $event->email);
			$notifier->notify();
		}
    }
}
