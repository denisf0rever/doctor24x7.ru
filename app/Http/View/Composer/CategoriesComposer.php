<?php

namespace App\Http\View\Composer;

use Illuminate\View\View;
use App\Models\Consultation\ConsultationCategory as Categories;

class CategoriesComposer
{
	public function compose(View $view)
    {
        $categories = Categories::select('slug', 'short_title')
			->orderBy('title', 'asc')
			->get();
		
        $view->with('categories', $categories);
    }
}