<?php

namespace ComputanPackages\Hubspot;

use Illuminate\Support\ServiceProvider;

class HubspotServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/config.php' => config_path('hubspot.php'),
        ], 'config');

    }

    /**
     * Register the application services.
     */
    public function register()
    {

        $this->app->singleton('ComputanPackages\Hubspot\Hubspot', function ($app) {
            return HubSpot::create(
                env('HUBSPOT_API_KEY', config('hubspot.api_key')),
                null,
                config('hubspot.client_options', [])
            );
        });
    }
}
