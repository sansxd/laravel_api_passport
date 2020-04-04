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
        //el tokensExpireIn expira en 20 min
        Passport::tokensExpireIn(now()->addMinutes(20));
        //el refreshTokensExpireIn expira en 10 min
        Passport::refreshTokensExpireIn(now()->addMinutes(10));
        //el personalAccessTokensExpireIn expira en 30 min
        Passport::personalAccessTokensExpireIn(now()->addMinutes(40));

    }
}
