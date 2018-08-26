<?php

namespace ElevateDigital\Metatags;

use Illuminate\Support\ServiceProvider;

class MetatagsServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            if ( ! class_exists('CreateMetatagsTable')) {
                $timestamp = date('Y_m_d_His', time());
                $this->publishes([
                    __DIR__ . '/../database/migrations/create_metatags_table.php.stub' => database_path('migrations/' . $timestamp . '_create_metatags_table.php'),
                ], 'migrations');
            }
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
    }
}
