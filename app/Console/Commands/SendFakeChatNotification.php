<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Events\FakeChat;

class SendFakeChatNotification extends Command
{
	protected $signature = 'command:fakechat'; // Имя вашей команды
    protected $description = 'Отправляем уведомление в чат с предложением оплатить консультацию';
	
    public function handle()
    {
        $data = [
			'username' => 'Denis',
			'email' => 'predlozhi@bk.ru',
			'consultation_id' => 683921
		];
				
		FakeChat::dispatch($data);
    }
}
