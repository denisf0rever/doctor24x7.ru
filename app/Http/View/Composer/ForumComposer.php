<?php

namespace App\Http\View\Composer;

use Illuminate\View\View;
use Illuminate\Support\Facades\Cache;
use App\Models\UserMain;

class ForumComposer
{
	public function compose(View $view)
    {	
		$doctors = Cache::remember('composer_doctorstop', 86400, fn () => UserMain::query()
			->where('show_in_slider', true) 
			->select('id', 'username', 'avatar', 'first_name', 'last_name', 'answers_count', 'icq')
			->orderBy('answers_count', 'desc')
			->limit(5)
			->get()
			);
		
        $view->with('doctors', $doctors);
    }
}