<?php

namespace App\Http\Controllers\Setting\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User\UserSettings as Settings;
use Illuminate\Support\Facades\Auth;

class SettingUserController extends Controller
{
    public function index()
	{
		$user_id = Auth::id();
		
		$settings = Settings::query()
			->where('user_id', $user_id)
			->firstOrFail();
		
		return view('dashboard.setting.user.index', compact('settings'));
	}
}
