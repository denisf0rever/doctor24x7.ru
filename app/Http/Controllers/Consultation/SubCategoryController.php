<?php

namespace App\Http\Controllers\Consultation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Consultation\SubCategories;

class SubCategoryController extends Controller
{
    public function index()
	{
		$subcategories = SubCategories::query()
			->select('id', 'short_title', 'h1', 'slug')
			->orderBy('short_title', 'asc')
			->get();
			
		return view('dashboard.consultation.subcategory.index', compact('subcategories'));
	}
}
