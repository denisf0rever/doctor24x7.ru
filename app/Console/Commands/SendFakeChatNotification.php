<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Models\Consultation\Consultation;

use Illuminate\Support\Facades\Mail;
use App\Mail\FakeChatNotificationMail;
use App\Services\TelegramBot\TelegramNotifier;
use App\Models\Config\Config;
use App\Services\Cached\CachedConfig;

class SendFakeChatNotification extends Command
{
	protected $signature = 'command:fakechat';
    protected $description = 'Отправляем уведомление в чат с предложением оплатить консультацию';
	
    public function handle()
    {	
		$cached_setting = CachedConfig::getCachedConfig('invoice');
			
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
			
			if($cached_setting) {
				Mail::to(config('config.admin_mail'))->send(new FakeChatNotificationMail($details));
			} else {
				Mail::to($details->email)->send(new FakeChatNotificationMail($details));
			}
		} 
	}
}