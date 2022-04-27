<?php

namespace Bymega\LoginWithId;

use Illuminate\Support\ServiceProvider;

class LoginWithIdServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/loginwithid.php' => config_path('loginwithid.php'),
            ], 'config');
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/routes.php';

        $this->mergeConfigFrom(__DIR__.'/../config/loginwithid.php', 'loginwithid');
    }
}
