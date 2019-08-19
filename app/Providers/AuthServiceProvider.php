<?php

namespace laravelito\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Laravel\Passport\Passport;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'laravelito\Model' => 'laravelito\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        /* Passport routes */
        Passport::routes();
        // Passport::loadKeysFrom('/secret-keys/oauth');

        Passport::tokensExpireIn(now()->addMinutes(20));

        Passport::refreshTokensExpireIn(now()->addMinutes(10));

        Passport::personalAccessTokensExpireIn(now()->addMinutes(30));

    }
}
