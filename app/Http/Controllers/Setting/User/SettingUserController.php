<?php

namespace App\Http\Controllers\Setting\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingUserController extends Controller
{
    public function index()
	{
		return view('dashboard.setting.user.index');
	}
}
