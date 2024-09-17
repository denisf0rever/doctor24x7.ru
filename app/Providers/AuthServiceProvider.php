<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\User;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
	 * 1 - админ
	 * 2 - юзер
	 * 3 - редактор
	 * 4 - консультант
     */
	 
    public function boot(): void
    {
        Gate::define('show', function (User $user) {
			return $user->role === 1 || $user->role === 3 || $user->role === 4;
		});
    }
}
