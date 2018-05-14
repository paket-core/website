<?php

namespace TokenChef\IcoTemplate;

use Illuminate\Support\ServiceProvider;

class IcoTemplateServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes.php');
        $this->loadMigrationsFrom(__DIR__ . '/migrations');
        $this->loadTranslationsFrom(__DIR__ . '/lang', 'ico-template');
        $this->loadViewsFrom(__DIR__ . '/views', 'ico-template');

        $this->publishes([
            __DIR__.'/assets' => public_path('vendor/ico-template/'),
        ], 'public');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
