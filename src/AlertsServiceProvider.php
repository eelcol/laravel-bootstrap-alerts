<?php

namespace Eelcol\LaravelBootstrapAlerts;

use Illuminate\Support\ServiceProvider;

class AlertsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /**
        * Set views dir
        */
        $this->loadViewsFrom(__DIR__.'/resources/views', 'laravel-bootstrap-alerts');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        /**
        * Register singleton: helpers
        */
        $this->app->singleton('BootstrapAlerts', function ($app) {
            return new \Eelcol\LaravelBootstrapAlerts\Classes\Alerts;
        });
    }
}
