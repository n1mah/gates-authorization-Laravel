<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

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
     */
    public function boot(): void
    {
        Gate::define('user-create', function ($user) {
            return $user->role == 'admin';
        });
        Gate::define('user-update', function ($user,$currentUser) {
           return ($user->id == $currentUser->id) || ($user->role == 'admin' || $user->role == 'operator');
        });
        Gate::define('user-delete', function ($user,$currentUser) {
           return ($user->id == $currentUser->id) || ($user->role == 'admin' || $user->role == 'operator');
        });
        Gate::define('user-change-role', function ($user) {
           return $user->role == 'admin' || $user->role == 'operator';
        });
        Gate::define('user-show', function ($user,$currentUser) {
            return ($user->id === $currentUser->id) || ($user->role == 'admin' || $user->role == 'operator');
        });
    }
}
