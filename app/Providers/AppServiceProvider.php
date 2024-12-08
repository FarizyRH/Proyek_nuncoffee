<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->registerPolicies();

        // Mendefinisikan gate untuk 'is-admin'
        Gate::define('is-admin', function ($user) {
            return $user->role === 'admin';
        });
    }
}



