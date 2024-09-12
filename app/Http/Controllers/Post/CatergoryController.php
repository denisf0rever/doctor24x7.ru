<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PostCategory;

class CatergoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = PostCategory::query()
			->orderBy('id')
            ->get();
			
		$totalCategories = PostCategory::count();

		return view('dashboard.articles.categories', ['categories' => $categories, 'total' => $totalCategories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $data = $request->validate([
            'h1' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'metadescription' => 'required|string|max:255',
            'metakey' => 'required|string|max:255',
            'description' => 'required|string',
            'short_title' => 'required|string|max:255',
            'slug' => 'required|string|max:255'
        ]);
		
		
		$category = PostCategory::create([
            'title' => $data['title'],
            'h1' => $data['h1'],
			'metadescription' => $data['metadescription'],
			'metakeywords' => $data['metakey'],
			'description' => $data['description'],
			'short_title' => $data['short_title'],
			'slug' => $data['slug']
        ]);
			
		if ($category) {
			return redirect()->route('dashboard.category.edit', ['id' => $category->id])->with('category_added', 'Категория успешна добавлена');
		} else {
			return redirect()->back()->with('category_notadded', 'Категория не добавлена');
		}
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
		$category = PostCategory::query()
            ->where('id', $id)
            ->firstOrFail();
			
        $category->increment('views');
		
		return view('categories.item', ['category' => $category]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
		$category = PostCategory::query()
			->where('id', $id)
            ->firstOrFail();

		return view('dashboard.articles.edit-category', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'h1' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'metadescription' => 'required|string|max:255',
            'metakey' => 'required|string|max:255',
            'description' => 'required|string',
            'short_title' => 'required|string|max:255',
            'slug' => 'required|string|max:255'
        ]);
			
		$category = PostCategory::query()
            ->where('id', '=', $id)
            ->firstOrFail();
			
		$category->title = $request->input('title');
		$category->h1 = $request->input('h1');
		$category->metadescription = $request->input('metadescription');
		$category->metakeywords = $request->input('metakey');
		$category->description = $request->input('description');
		$category->short_title = $request->input('short_title');
		$category->slug = $request->input('slug');
		$category->save();
		
		return redirect()->back()->with('success', 'Категория успешно обновлена');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
