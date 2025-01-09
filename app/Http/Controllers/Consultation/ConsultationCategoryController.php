<?php

namespace App\Http\Controllers\Consultation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

use App\Models\Consultation\ConsultationCategory as Category;
use App\Models\Consultation\SubCategories;
use App\Models\User\CategoryText as Text;
use App\Services\DoctorService;

class ConsultationCategoryController extends Controller
{
	public function category($slug)
	{
		$startTime = microtime(true);
		
		$category = Category::select('id', 'h1', 'title', 'name_v', 'button_name', 'description', 'slug', 'position')
			->where('slug', $slug)
			->first();
			
		$texts = Text::query()
			->where('category_id', $category->id)
			->select('user_id', 'description')
			->get();
			
		$subcategories = $category->subcategories;
		
		
		$groupedSubcategories = $subcategories->groupBy(function($subcategory) {
			return mb_substr($subcategory->short_title, 0, 1);
		});


		$endTime = microtime(true);
        $executionTime = ($endTime - $startTime); // Время в миллисекундах
		
	return view('consultation.category.index', compact('category', 'texts', 'groupedSubcategories', 'executionTime'));
	}
	
	public function index()
	{
		$categories = Category::select('id', 'short_title')->get();
		
		return view('dashboard.consultation.category.index', compact('categories'));
	}
	
	public function getSubRubricUrl($categorySlug, $subcategorySlug)
	{
	}
}
