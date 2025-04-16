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
	
	public function update(Request $request, $id)
	{	
		$subcategory = SubCategories::query()
            ->where('id', $id)
            ->firstOrFail();
			
		$subcategory->title = $request->input('title');
		$subcategory->h1 = $request->input('h1');
		$subcategory->banner_image = $request->input('banner_image');
		$subcategory->is_edited = $request->input('is_edited');
		$subcategory->save();
		
		Cache::forget('subcategories');
		
		return redirect()->back()->with('success', 'Подкатегория обновлена');
	}
}
