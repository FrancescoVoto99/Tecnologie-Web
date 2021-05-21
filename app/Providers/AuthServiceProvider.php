<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        Gate::define('isAdmin', function ($user) {
            return $user->hasRole('admin');
        });

        Gate::define('isUser', function ($user) {
            return $user->hasRole('user');
        });
        
        Gate::define('isAmm', function ($user) {
            return $user->hasRole('amm');
        });
        Gate::define('get_acquista', function ($user) {
            return $user->hasRole('user');
        });

    }
}
