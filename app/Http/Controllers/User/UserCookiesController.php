<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\JsonResponse;
use App\Models\User;

class UserCookiesController extends Controller
{
    public function setCookie(Request $request)
    {
		$mail = $request->mail;
		$expertID = $request->expertId;
		
		// Собираем данные в массив
		$data = [
			'mail' => $mail,
			'expertID' => $expertID
			];
			
		//$data['mail'] = $mail;
		//$data['expertID'] = $expertID;
		
		$jsonResult = json_encode($data);
		
        Cookie::queue(Cookie::make('chat_cookie', $jsonResult, 4320));
		
		return response()->json(['message' => 'Куки установлено']);
	}    
	
	public function getCookie(Request $request)
    {
		//$cookie = Cookie::get('chat_cookie');
		
		dump($cookie = $request->cookie('chat_cookie'));
		//return response()->json($cookie);
    }
	
	public function removeCookie(Request $request)
    {
		$mail = $request->mail;
		
        Cookie::queue(Cookie::make('chat_cookie', $mail, -1));
		
		return response()->json(['message' => 'Куки обновлены']);
    }
}
