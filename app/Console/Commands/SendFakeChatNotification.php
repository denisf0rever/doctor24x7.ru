<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Events\FakeChat;

use App\Models\Consultation\Consultation;

use Illuminate\Support\Facades\Mail;
use App\Mail\FakeChatNotificationMail;
use App\Services\TelegramBot\TelegramNotifier;

class SendFakeChatNotification extends Command
{
	protected $signature = 'command:fakechat';
    protected $description = 'Отправляем уведомление в чат с предложением оплатить консультацию';
	
    public function handle()
    {	
		$consultations = Consultation::query()
			->where('is_payed', false)
			->where('emailed_at', NULL)
			->whereDate('created_at', '=', now()->toDateString())
			->select('id', 'email', 'username')
			->take(15)
			->get();
			
		$consultations->each(function ($consultation) {
			$consultation->emailed_at = now()->toDateString();
			$consultation->save();
		});
		
		foreach($consultations as $details) {
			/*$details = [
				'name' => $consultation->username,
				'email' => $consultation->email,
				'consultation_id' => $consultation->id,
				'app_url' => config('app.url'),
				'app_name' => config('app.name'),
				'app_phone' => env('CUSTOM_PHONE'),
				'app_support' => env('CUSTOM_SUPPORT'),
			];*/
			
			Mail::to($details->email)->send(new FakeChatNotificationMail($details));
			
			//Mail::to('predlozhi@bk.ru')->send(new FakeChatNotificationMail($details));
		}
		
		
		//FakeChat::dispatch($data);	
	}
}