<?php

namespace Gw19900524\Hashing;

use Illuminate\Support\ServiceProvider;

class MD5HashServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('hash', function () {
            return new \Gw19900524\Hashing\MD5Hasher;
        });
    }
}
