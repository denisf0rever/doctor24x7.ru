<?php

namespace App\Repositories\Category;

use App\Models\Consultation\ConsultationCategory as Category;

class CategoryRepository
{
	public static function category($slug): Category
	{
		$category = Category::select('id', 'h1', 'title', 'name_v', 'button_name', 'description', 'slug', 'position', 'meta_description', 'meta_keywords')
			->where('slug', $slug)
			->first();
			
		return $category;
	}
	
	public static function categories()
	{
		$categories = Category::select('id', 'short_title', 'slug',)
			->orderBy('short_title')
			->get();
			
		return $categories;
	}
}