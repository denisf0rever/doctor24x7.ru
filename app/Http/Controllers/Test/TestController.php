<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\MailNotification\PriorityNofitication;

class TestController extends Controller
{	
    public function index(PriorityNofitication $service): void
	{
		$service->send();     
	}
}
