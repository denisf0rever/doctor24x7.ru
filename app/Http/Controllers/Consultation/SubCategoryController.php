<?php

namespace App\Http\Controllers\Consultation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Models\Consultation\SubCategories;

class SubCategoryController extends Controller
{
    public function index()
	{
		//Cache::forget('subcategories');
		
		$subcategories = Cache::remember('subcategories', 60*60*60, fn () => SubCategories::query()
			->orderBy('short_title', 'asc')
			->get()
			);
		
		return view('dashboard.consultation.subcategory.index', compact('subcategories'));
	}
	
	public function subcategory($slug)
	{
		$subcategory = SubCategories::query()
			->where('slug', $slug)
			->first();
			
		return view('dashboard.consultation.subcategory.edit', compact('subcategory'));
	}
}
