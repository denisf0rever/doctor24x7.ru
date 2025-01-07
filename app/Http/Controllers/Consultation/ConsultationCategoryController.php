<?php

namespace App\Http\Controllers\Consultation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Consultation\ConsultationCategory as Category;
use App\Models\Consultation\SubCategories;

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
		$categories = Category::query()
			->get();
		
		return view('dashboard.consultation.category.index', compact('categories'));
	}
	
	public function showDoctorsByCategory()
	{
		$categories = Category::query()
			->get();
		
		return view('dashboard.consultation.category.doctors', compact('categories'));
	}
	
	public function getSubRubricUrl($categorySlug, $subcategorySlug)
	{
	}
}
