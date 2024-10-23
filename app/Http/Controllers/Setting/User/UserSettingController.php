<?php

namespace App\Http\Controllers\Setting\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Settings\UserSettings as Settings;
use Illuminate\Support\Facades\Auth;

class UserSettingController extends Controller
{
    public function index()
	{
		$user_id = Auth::id();
		
		$has_setting = Settings::hasSetting($user_id);
		
		if($has_setting) {
			$settings = Settings::query()
			->where('user_id', $user_id)
			->firstOrFail();
			
			return view('dashboard.setting.user.index', compact('settings'));
		} else {
			$this->create();
			
			$settings = Settings::query()
				->where('user_id', $user_id)
				->firstOrFail();
			
			return view('dashboard.setting.user.index', compact('settings'));
		}
	}
	
	public function create()
    {
        $setting = Settings::create([
			'user_id' => Auth::id()
			]);
	}
			
	public function update(Request $request, string $id)
    {	
	    $setting = Settings::query()
            ->where('user_id', Auth::id())
            ->firstOrFail();
			
		$setting->answer_form = $request->input('answer_form');
		$setting->save();
		
		return redirect()->back()->with('success', 'Настройка сохранена');
	}
}
