<?php

namespace App\Services\TelegramBot;

final class TelegramNotifier
{
	private static $token = '7897419260:AAFoE-bT273-qj554aS6TuWhowb1Xw2pejE';
    private static $telegram_admin_id = '108494029';

    public function __construct($message)
    {
        $this->message = $message;
    }
	
    public function notify()
    {
		$message = $this->message . '%0A%0A';
        
        return file_get_contents('https://api.telegram.org/bot'.self::token.'/sendMessage?chat_id='.self::$telegram_admin_id.'&text='.$message.'');
    }
}