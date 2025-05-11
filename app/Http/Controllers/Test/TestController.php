<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\MailNotification\PriorityNofitication;
use App\Models\Config\Config;
use Illuminate\Support\Facades\Cache;

class TestController extends Controller
{	
    public function index(PriorityNofitication $service)
	{
		//$service->send();
		
	}
	
	public function invoice()
	{
		$config = Config::query()
			->where('setting', 'invoice')
			->first();
			
	echo "Текущее значение: {$config->value}, 1 - Выключено, 0 - Включено";
		
		if ($config->value === 1) {
			$config->value = 0;
			$config->save();
			
			Cache::forget('setting_invoice');
		} else {
			$config->value = 1;
			$config->save();
			
			Cache::forget('setting_invoice');
		}
	}
	
}



