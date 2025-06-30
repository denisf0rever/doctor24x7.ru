<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Http\View\Composer\CategoriesComposer;
use App\Http\View\Composer\ConsultationComposer;
use App\Http\View\Composer\ArticleComposer;
use App\Http\View\Composer\ForumComposer;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
    }
	
    public function boot(): void
    {
		View::composer('app', CategoriesComposer::class);
		View::composer('app', ConsultationComposer::class);
		View::composer('app', ArticleComposer::class);
		View::composer('forum.sidebar', ForumComposer::class);
    }
}
