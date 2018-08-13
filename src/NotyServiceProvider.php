<?php

namespace Sarfraznawaz2005\Noty;

use Illuminate\Support\ServiceProvider;

class NotyServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/Views', 'noty');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {

            // Publishing the configuration file.
            $this->publishes([
                __DIR__ . '/Config/noty.php' => config_path('noty.php'),
            ], 'noty.config');

            // Publishing the views.
            $this->publishes([
                __DIR__ . '/Views' => base_path('resources/views/vendor/noty'),
            ], 'noty.views');
        }
    }

    /**
     * Register package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/Config/noty.php', 'noty');

        $this->app->bind(SessionStore::class);

        // Register the service the package provides.
        $this->app->singleton('noty', function () {
            return $this->app->make(Noty::class);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['noty'];
    }
}
