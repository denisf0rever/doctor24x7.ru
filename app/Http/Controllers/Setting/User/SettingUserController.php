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
	
	public function create(Request $request)
    {
        $setting = Settings::create([
                'h1' => $data['h1'],
                'title' => $data['title'],
				'subtitle' => $data['subtitle'],
				'metadescription' => Str::replace('  ', ' ', $data['metadescription']),
				'metakey' => $data['metakey'],
				'author_id' => $data['author_id'],
				'reading_time' => $data['reading_time'],
				'category' => $data['category'],
				'short_text' => Str::replace('  ', ' ', $data['short_text']),
				'content' => Str::replace('  ', ' ', $data['content']),
				'full_text' => Str::replace('  ', ' ', $data['full_text']),
				'thumb' => $finalImage
            ]);
			
		if ($article) {
			 return redirect()->back()->with('success', 'Настройка сохранена');
		} else {
			return redirect()->back()->withInput($this->all());
		}
    }
			
	public function update(Request $request, string $id)
    {	
       
	    $setting = Settings::query()
            ->where('id', $id)
            ->firstOrFail();
			
		$setting->answer_form = $request->input('answer_form');
		$setting->save();
		
		return redirect()->back()->with('success', 'Пост успешно обновлен');
	}
}
