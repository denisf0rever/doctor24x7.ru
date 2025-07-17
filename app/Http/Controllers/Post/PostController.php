<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post\Post;
use App\Models\Post\PostViews;
use App\Models\Post\PostCategory;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManager;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Services\BreadcrumbService;

class PostController extends Controller
{
	public function __construct(BreadcrumbService $breadcrumbService)
	{
		$this->breadcrumbService = $breadcrumbService;
	}
	
    public function list()
    {
        $articles = Post::select('id', 'title')
			->orderBy('created_at', 'desc')
            ->take(10)
            ->get();
		
		return view('articles.list', ['articles' => $articles]);
    } 
	
	public function index()
    {
        $articles = Post::query()
			->orderBy('created_at')
            ->take(10)
            ->get();
			
		$totalArticles = Post::count();
		
		return view('dashboard.articles.articles', ['articles' => $articles, 'total' => $totalArticles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
		$data = $request->validate([
            'h1' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'metadescription' => 'required|string|max:255',
            'metakey' => 'required|string|max:255',
            'author_id' => 'required|integer|max:255',
            'reading_time' => 'required',
            'category' => 'required|integer|max:20',
            'short_text' => 'required|string',
            'content' => 'required|string',
            'full_text' => 'required|string',
			'image' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);
		
		if ($request->hasFile('image')) {
			$datePath = date('Y') . '/' . date('m');
			$savedImage = $request->file('image')->store('public/article/' . $datePath);
			$filename = Str::of($savedImage)->basename();
			
			$path = storage_path('app/public/article/' . $datePath . '/' . $filename);
			
			$image = ImageManager::imagick()->read($path);
			$image->resizeDown(width: 700);
			
			$directoryPath = storage_path('app/public/article/' . $datePath . '/small');

			if (!File::exists($directoryPath)) {
				File::makeDirectory($directoryPath, 0755, true);
			}
			
			$path = storage_path('app/public/article/' .  $datePath . '/small/' . $filename);
			$image->save($path);
			
			Storage::delete('public/article/' .  $datePath . '/' . $filename);
			$finalImage = 'public/article/' .  $datePath . '/small/' . $filename;
		}
		
		$article = Post::create([
                'h1' => $data['h1'],
                'title' => $data['title'],
				'subtitle' => $data['subtitle'],
				'metadescription' => Str::replace('  ', ' ', $data['metadescription']),
				'metakey' => $data['metakey'],
				'author_id' => $data['author_id'],
				'reading_time' => $data['reading_time'],
				'category' => $data['category'],
				'short_text' => Str::replace('  ', ' ', $data['short_text']),
				'content' => Str::replace('  ', ' ', $data['content']),
				'full_text' => Str::replace('  ', ' ', $data['full_text']),
				'thumb' => $finalImage
            ]);

		
		if ($article) {
			 return redirect()->route('dashboard.article.edit', ['id' => $article->id])->with('post_added', 'Пост успешно обновлен');
		} else {
			return redirect()->back()->withInput($this->all());
		}
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
		$categories = PostCategory::all();
		
		return view('dashboard.articles.add-article', ['categories' => $categories]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $article = Post::query()
			->with(['comments:id,comment,post_id'])
            ->where('id', $id)
            ->firstOrFail();		
		
		$article->increment('hits');
		
		$date = $this->getDate($article->created_at);
		
		$this->breadcrumbService->add('articles', 'Статьи', route('articles.list.items'));
		
		$breadcrumbs = $this->breadcrumbService->getAll('articles');
		
		return view('articles.item', compact('article', 'date', 'breadcrumbs'));
    }
	
	public function getDate($date)
	{
		Carbon::setLocale('ru');
		$created_at = $date;
		$carbonDate = Carbon::parse($created_at);
		$date = $carbonDate->translatedFormat('j F Y') . ' года';
		
		return $date;
	}

    public function edit(string $id)
    {
        $article = Post::query()
            ->where('id', $id)
            ->firstOrFail();
			
		$categories = PostCategory::all();

		return view('dashboard.articles.edit-article', ['article' => $article, 'categories' => $categories]);
    }
	
    public function update(Request $request, string $id)
    {	
        $data = $request->validate([
            'h1' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'metadescription' => 'required|string|max:255',
            'metakey' => 'required|string|max:255',
            'author_id' => 'required|integer|max:255',
            'reading_time' => 'required',
            'category' => 'integer|max:20',
            'short_text' => 'required|string',
            'content' => 'required|string',
            'full_text' => 'required|string',
			'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
		
	    $article = Post::query()
            ->where('id', '=', $id)
            ->firstOrFail();
			
		$articleImage = $article->thumb;
			
		if ($request->hasFile('image'))
		{
			$datePath = date('Y') . '/' . date('m');
			$savedImage = $request->file('image')->store('public/article/' . $datePath);
			$filename = Str::of($savedImage)->basename();
			$path = storage_path('app/public/article/' . $datePath . '/' . $filename);
			
			$image = ImageManager::imagick()->read($path);
			$image->resizeDown(width: 700);
			
			$directoryPath = storage_path('app/public/article/' . $datePath . '/small');

			if (!File::exists($directoryPath)) {
				File::makeDirectory($directoryPath, 0755, true);
			}
			
			$path = storage_path('app/public/article/' .  $datePath . '/small/' . $filename);
			$image->save($path);
			
			Storage::delete($articleImage);
			$finalImage = 'public/article/' .  $datePath . '/small/' . $filename;
			
			$article->thumb = $finalImage;
		}
		
		$article->h1 = $request->input('h1');
		$article->title = Str::replace('  ', ' ', $request->input('title'));
		$article->subtitle = $request->input('subtitle');
		$article->metadescription = $request->input('metadescription');
		$article->metakey = $request->input('metakey');	    
		$article->author_id = $request->input('author_id');
		$article->reading_time = $request->input('reading_time');
		$article->category = $request->input('category');
		$article->short_text = Str::replace('  ', ' ', $request->input('short_text'));
		$article->content = $request->input('content');
		$article->full_text = Str::replace('  ', ' ', $request->input('full_text'));
		$article->save();
		
		return redirect()->back()->with('success', 'Пост успешно обновлен');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $article = Post::query()
            ->where('id', '=', $id)
            ->firstOrFail();
		
		if ($article->thumb) {
			$articleImage = $article->thumb;
			Storage::delete($articleImage);
		}
		
		$article->delete();
				
		if ($article) {
			 return redirect()->route('dashboard.article')->with('success', 'Пост успешно удален');
		}
    }
	
	 public function incrementView(string $id)
    {
        // Найти статью по ID
        $article = Post::query()
            ->where('id', $id)
            ->firstOrFail();

        if ($article) {
            $view = PostViews::create([
                'post_id' => $id,
                'created_at' => Carbon::now(),
            ]);

            // Увеличить количество просмотров в таблице статей
            $article->increment('views');

            return response()->json([
                'message' => 'Просмотр добавлен и количество просмотров увеличено.',
                'article' => $article
            ]);
        } else {
            return response()->json([
                'message' => 'Статья не найдена.'
            ], 404);
        }
    }
}
