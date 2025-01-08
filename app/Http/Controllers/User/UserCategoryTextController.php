<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User\CategoryText;
use App\Models\UserMain;
use App\Models\Consultation\ConsultationCategory as Category;
use App\Services\UserService;

class UserCategoryTextController extends Controller
{
	public function index()
	{
		$texts = Category::whereHas('textForCategory')
			->withCount('textForCategory')
			->get();
		
		return view('dashboard.user.categories', compact('texts'));
	}
	
	public function form()
	{
		return view('dashboard.user.add-description');
	}
	
	public function create(Request $request)
    {
		$comment = CategoryText::create([
			'user_id' => $request->user_id,
			'category_id' => $request->category_id,
			'description' => $request->description
		]);

		return redirect()->route('dashboard.user.show-category')->with('success', 'Текст успешно добавлен');
		
    }
	
	public function edit(string $user_id, string $text_id, UserService $userService)
    {
        $user = $userService->user($user_id);
		
		$text = CategoryText::findOrFail($text_id);

		return view('dashboard.user.edit-description-category', compact('user', 'text'));
    }
	
	public function update(string $user_id, Request $request)
    {
        $text = CategoryText::findOrFail($request->id);
		
		$text->user_id = $request->input('user_id');
		$text->category_id = $request->input('category_id');
		$text->description = $request->input('description');
		$text->save();
		
		return redirect()->back()->with('success', 'Текст успешно обновлен');
    }
	
	public function destroy(string $id)
    {
        $text = CategoryText::findOrFail($id);
		$text->delete();

		return redirect()->back()->with('success', 'Текст успешно удален');
    }
}
