<?php

namespace App\Http\Controllers\Consultation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

use App\Models\Consultation\ConsultationCategory as Category;
use App\Models\Consultation\CategoryShowcase as Showcase;
use App\Models\Consultation\SubCategories;
use App\Models\User\CategoryText as Text;
use App\Models\City\City;
use App\Models\Consultation\Discussion;
use App\Repositories\Category\CategoryRepository;
use App\Services\DoctorService;
use App\Services\Cached\CachedData;
use App\Services\BreadcrumbService;

class ConsultationCategoryController extends Controller
{
	public function __construct(BreadcrumbService $breadcrumbService)
	{
		$this->breadcrumbService = $breadcrumbService;
	}
	
	public function category($slug)
	{
		$startTime = microtime(true);
		
		$category = CategoryRepository::category($slug);
			
		$showcase = Showcase::query()
			->where('category_id', $category->id)
			->select('category_id', 'user_id', 'position')
			->orderBy('position')
			->get();
			
		$texts = Text::query()
			->where('category_id', $category->id)
			->select('user_id', 'description')
			->get();
			
		$subcategories = $category->subcategories;
		
		$groupedSubcategories = $subcategories->groupBy(function($subcategory) {
			return mb_substr($subcategory->short_title, 0, 1);
		});
		
		$this->breadcrumbService->add('category', $category->short_title, route('consultation.category', $category->slug));
		
		$breadcrumbs = $this->breadcrumbService->getAll('category');

		$endTime = microtime(true);
        $executionTime = ($endTime - $startTime); // Время в миллисекундах
		
		return view('consultation.category.index', compact('category', 'texts', 'groupedSubcategories', 'executionTime', 'showcase', 'breadcrumbs'));
	}
	
	public function index()
	{
		$categories = Category::select('id', 'short_title')->get();
		
		return view('dashboard.consultation.category.index', compact('categories'));
	}
	
	public function subcategory($categorySlug, $subcategorySlug)
	{
		$mainCategory = Category::where('slug', $categorySlug)
			->select('id', 'short_title', 'slug')
			->firstOrFail();

        $subCategory = SubCategories::where('slug', $subcategorySlug)
			->firstOrFail();
		
		$showcase = Cache::remember('subcategories_showcase_' . $subCategory->id, 2592000, fn () => Showcase::query()
			->where('category_id', $mainCategory->id)
			->select('category_id', 'user_id', 'position')
			->orderBy('position')
			->get()
		);
		
		$discussions = CachedData::getCachedDiscussions($subCategory->id);

		$this->breadcrumbService->add('subcategory', $mainCategory->short_title, route('consultation.category', $mainCategory->slug));
		$this->breadcrumbService->add('subcategory', $subCategory->short_title, route('consultation.subrubric', [$subCategory->category->slug, $subCategory->slug]));
		
		$breadcrumbs = $this->breadcrumbService->getAll('subcategory');
		
        return view('consultation.category.subcategory', compact('subCategory', 'showcase', 'discussions', 'breadcrumbs'));
    }
	
	public function city($city)
	{
        $city = City::where('slug', $city)
			->firstOrFail();
		
		$doctors = CachedData::getCachedDoctor();
		
        return view('consultation.category.city', compact('city', 'doctors'));
    }
	
	public function categoryCity($categorySlug, $city)
	{
		$category = Category::where('slug', $categorySlug)
			->select('id', 'name_v', 'name_v_m', 'amount_doctors', 'font_color', 'button_name')
			->firstOrFail();

        $city = City::where('slug', $city)
			->firstOrFail();
		
		$doctors = CachedData::getCachedDoctor();
		
        return view('consultation.category.citycategory', compact('category', 'city', 'doctors'));
    }
	
	public function addDoctor()
	{
		$showcase = Showcase::query()
			->get();
		
		return view('dashboard.consultation.category.showcase', compact('showcase'));
	}
	
	public function showcase(Request $request)
	{
		$validatedData = $request->validate([
			'category_id' => 'required|integer',
			'user_id' => 'required|integer',
			'position' => 'required|integer',
		]);
		
		$showcase = Showcase::create($validatedData);
		
		return redirect()->back()->with('success', 'Элемент успешно добавлен в showcase!');
	}
	
	public function getCachedShowCase()
	{
		
	}
}
