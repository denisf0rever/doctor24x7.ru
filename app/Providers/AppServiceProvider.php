<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;
use App\Http\View\Composer\CategoriesComposer;
use App\Http\View\Composer\ConsultationComposer;
use App\Http\View\Composer\ArticleComposer;
use App\Http\View\Composer\ForumComposer;
use App\Services\BreadcrumbService;

class AppServiceProvider extends ServiceProvider
{
	public function register(): void
	{
		  $this->app->singleton(BreadcrumbService::class, function ($app) {
			return new BreadcrumbService();
		});
	}

	public function boot(): void
	{
		View::composer(['app', 'articleSidebars'], CategoriesComposer::class);
		View::composer(['app', 'articleSidebars'], ConsultationComposer::class);
		View::composer(['app', 'articleSidebars'], ArticleComposer::class);
		View::composer('forum.sidebar', ForumComposer::class);
		
		Blade::directive('parseLinks', function ($expression) {
            return "<?php echo preg_replace(
                '/\[a href=\"([^\"]+)\" title=\"([^\"]+)\" text=\"([^\"]+)\"\]/',
                '<a href=\"$1\" title=\"$2\">$3</a>',
                $expression
            ); ?>";
        });
	}
}
