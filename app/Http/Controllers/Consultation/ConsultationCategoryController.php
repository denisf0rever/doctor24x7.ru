<?php

namespace App\Http\Controllers\Consultation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Consultation\ConsultationCategory as Category;
use App\Models\Consultation\SubCategories;
use App\Services\DoctorService;

class ConsultationCategoryController extends Controller
{
	public function category($slug)
	{
		$category = Category::query()
			->where('slug', $slug)
			->first();
			
		//dd($category->consultation);
			
		return view('consultation.category.index', compact('category'));
	}
	
	public function index()
	{
		$categories = Category::select('id', 'short_title')->get();
		
		return view('dashboard.consultation.category.index', compact('categories'));
	}
	
	public function showCategories()
	{
		$categories = Category::select('id', 'short_title')
			->get();
		
		return view('dashboard.consultation.category.doctors', compact('categories'));
	}
	
	public function showToCategory()
	{
		$categories = Category::query()
			->get();
		
		return view('dashboard.consultation.category.doctors', compact('categories'));
	}
	
	public function addDoctorPage()
	{
		$categories = Category::query()
			->get();
		
		return view('dashboard.consultation.category.add-doctor', compact('categories'));
	}
	
	public function setDoctor(Request $request, DoctorService $service)
	{
		$result = $service->create($request->all());
		
		return redirect()->back()->with('success', 'Доктор успешно добавлен');
	}
	
	public function getSubRubricUrl($categorySlug, $subcategorySlug)
	{
	}
}
