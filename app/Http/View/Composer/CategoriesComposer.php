<?php

namespace App\Http\View\Composer;

use Illuminate\View\View;
use Illuminate\Support\Facades\Cache;

use App\Models\Consultation\ConsultationCategory as Categories;

class CategoriesComposer
{
	public function compose(View $view)
    {
		$categories = Cache::remember('app_categories', 43834, fn () => Categories::select('slug', 'short_title')
			->orderBy('title', 'asc')
			->get());
		
        $view->with('categories', $categories);
    }
}