<?php

namespace App\Http\Controllers\Consultation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Models\Consultation\SubCategories;
use App\Models\Consultation\Discussion;

class SubCategoryController extends Controller
{
    public function index()
	{
		$subcategories = Cache::remember('subcategories', 2592000, fn () => SubCategories::query()
			->orderBy('short_title', 'asc')
			->get()
			);
		
		return view('dashboard.consultation.subcategory.index', compact('subcategories'));
	}
	
	public function subcategory($slug)
	{
		$subcategory = SubCategories::query()
			->where('slug', $slug)
			->firstOrFail();
			
		return view('dashboard.consultation.subcategory.edit', compact('subcategory'));
	}
	
	public function discussions($slug)
	{
		$subcategory = SubCategories::query()
			->where('slug', $slug)
			->firstOrFail();
			
		$discussions = Discussion::where('subrubric_id', $subcategory->id)
			->select('id', 'comment_id', 'title')
			->get();
			
		return view('dashboard.consultation.subcategory.discussions', compact('discussions'));
	}
	
	public function update(Request $request, $id)
	{	
		$subcategory = SubCategories::query()
            ->where('id', $id)
            ->firstOrFail();
			
		$subcategory->title = $request->input('title');
		$subcategory->h1 = $request->input('h1');
		$subcategory->short_title = $request->input('short_title');
		$subcategory->banner_image = $request->input('banner_image');
		$subcategory->button_name = $request->input('button_name');
		$subcategory->is_edited = $request->input('is_edited');
		$subcategory->save();
		
		Cache::forget('subcategories');
		
		return redirect()->back()->with('success', 'Подкатегория обновлена');
	}
}
