<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // force https only in production
        if($this->app->environment('production')){
            URL::forceScheme('https');
            $this->app['request']->server->set('HTTPS', true);
        }
    }
}
