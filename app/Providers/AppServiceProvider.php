<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Http\View\Composer\CategoriesComposer;
use App\Http\View\Composer\ConsultationComposer;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
    }
	
    public function boot(): void
    {
		View::composer('app', CategoriesComposer::class);
		View::composer('app', ConsultationComposer::class);
    }
}
