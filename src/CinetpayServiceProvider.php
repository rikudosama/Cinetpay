<?php

namespace Rikudosama\Cinetpay;

use Illuminate\Support\ServiceProvider;

class CinetpayServiceProvider extends ServiceProvider
{
    
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/cinetpay.php', 'cinetpay');

        $this->app->singleton(Cinetpay::class, function ($app) {
            return new Cinetpay(
                $app['config']['cinetpay.api_key'],
                $app['config']['cinetpay.site_id'],
                $app['config']['cinetpay.base_url']
            );
        });
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/cinetpay.php' => config_path('cinetpay.php'),
        ], 'config');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'cinetpay');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/cinetpay'),
            ], 'cinetpay-views');
        }
    }
  }