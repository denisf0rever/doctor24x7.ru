<?php

namespace App\Http\Controllers\Analytics;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\PostViews;
use App\Models\PostPhrase;
use Carbon\Carbon;

class AnalyticsController extends Controller
{
	// Главная страница аналитики статей
	public function index()
    {
        $articles = Post::query()
			->orderBy('created_at')
            ->get();
			
		$totalArticles = Post::count();
		
		$post_views = DB::table('post_views')
			->where('created_at', '>=', Carbon::now()->subDays(7))
			->count();
		
		return view('dashboard.analytics.analytics', compact('articles', 'totalArticles', 'post_views'));
    }
	
	public function show(string $id)
	{
        $article = Post::query()
            ->where('id', $id)
            ->firstOrFail();
		
		return view('analytics.analytics', compact('article'));
    }
	
	public function store(string $id)
    {	
		$article = Post::query()
            ->where('id', $id)
            ->firstOrFail();
			
		return view('dashboard.analytics.add-phrase', compact('article'));
    }
	
	// Post-запрос на создание фразы
	public function create(Request $request)
    {
		$data = $request->validate([
            'post_id' => 'integer|min:1',
            'phrase' => 'required|string',
        ]);
		
		$phrase = PostPhrase::create([
                'post_id' => $data['post_id'],
                'key' => $data['phrase']
            ]);

		if ($phrase) {
			 return redirect()->route('dashboard.analytics', ['id' => $phrase->id])->with('key_added', 'Фраза успешно обновлена');
		} else {
			return redirect()->back()->withInput($this->all());
		}
	}
	
	// Страница редактирования
	public function edit(string $id)
    {
        $article = Post::query()
            ->where('id', $id)
            ->firstOrFail();
			
		$phrase = PostPhrase::query()
            ->where('post_id', $id)
            ->firstOrFail();
		
		return view('dashboard.analytics.edit-phrase', compact('article', 'phrase'));
    }
	
	// Post-запрос на обновление фразы
	public function update(Request $request, string $id)
    {	
        $data = $request->validate([
            'post_id' => 'integer|max:20',
            'phrase' => 'required|string',
        ]);
		
	    $phrase = PostPhrase::query()
            ->where('post_id', '=', $id)
            ->firstOrFail();
		
		$phrase->post_id = $id;
		$phrase->key = $request->input('phrase');
		$phrase->save();
		
		return redirect()->back()->with('success', 'Обновлено успешно');
	}
	
	 public function destroy(string $id)
    {
        $phrase = PostPhrase::query()
            ->where('post_id', $id)
            ->firstOrFail();
			
		$phrase->delete();
				
		if ($phrase) {
			 return redirect()->route('dashboard.analytics')->with('success', 'Успешно удалено');
		}
    }
}
