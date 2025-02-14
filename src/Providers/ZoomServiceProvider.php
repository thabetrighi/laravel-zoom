<?php

namespace Thabetrighi\Zoom\Providers;

use Illuminate\Support\ServiceProvider;

class ZoomServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../../config/config.php' => config_path('zoom.php'),
            ], 'config');
        }
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../../config/config.php', 'zoom');

        // Register the main class to use with the facade
        $this->app->singleton('zoom', 'Thabetrighi\Zoom\Contracts\Zoom');
        $this->app->bind('Thabetrighi\Zoom\Contracts\Zoom', 'Thabetrighi\Zoom\Support\Entry');

        $this->app->bind('zoom.client', 'Thabetrighi\Zoom\Support\Client');
    }
}
