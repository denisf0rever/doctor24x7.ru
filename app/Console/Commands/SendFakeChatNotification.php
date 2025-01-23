<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Events\FakeChat;

use App\Models\Consultation\Consultation;

use Illuminate\Support\Facades\Mail;
use App\Mail\FakeChatNotificationMail;

class SendFakeChatNotification extends Command
{
	protected $signature = 'command:fakechat'; // Имя вашей команды
    protected $description = 'Отправляем уведомление в чат с предложением оплатить консультацию';
	
    public function handle()
    {
		//$consultation = Consultation::where('email', '=', 'predlozhi@bk.ru')
			//->select('id', 'email', 'username')
			//->first();
			
		$details = [
				'name' => 'denis',
				'email' => 'predlozhi@bk.ru',
				'consultation_id' => 5,
				'app_url' => config('app.url'),
				'app_name' => config('app.name'),
				'app_phone' => env('CUSTOM_PHONE'),
				'app_support' => env('CUSTOM_SUPPORT'),
			];
			
			Mail::to('predlozhi@bk.ru')->send(new FakeChatNotificationMail($details));
			
		//foreach($consultations as $consultation) {
			
		//}
				
		//FakeChat::dispatch($data);
		
		
		
    }
}
