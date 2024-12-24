<?php

namespace App\Services\CallBack;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Services
{
	private $token;
    private $telegram_admin_id;
	
	public function __construct()
    {
        $this->token = config('telegram.CallBackNotifierToken');
        $this->telegram_admin_id = config('telegram.telegram_admin_id');
    }
	
	public function getToken()
    {
        return $this->token;
    }

    public function getTelegramAdminId()
    {
        return $this->telegram_admin_id;
    }
	
    public function sendMessage(Request $request)
	{
		$data = [
            'chat_id' => $this->getTelegramAdminId(),
            'text' => $request->phone . PHP_EOL . $request->service
        ];

        $response = Http::post('https://api.telegram.org/bot' . $this->getToken() . '/sendMessage', $data);
        
        return redirect()->back()->with('success', 'Сообщение отправлено');
	}
}