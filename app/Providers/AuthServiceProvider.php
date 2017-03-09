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
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('remove-url', function ($user, $url) {
            return $user->id == $url->user_id;
        });

        Gate::define('show-url', function ($user, $url) {
            return $user->id == $url->user_id;
        });

        Gate::define('edit-user', function ($user, $user_edit) {
            return $user->id == $user_edit->id;
        });
    }
}
