<?php

namespace AjayJoshi\PolymorphicHistory;

use Illuminate\Support\ServiceProvider;

class PolymorphicHistoryServiceProvider extends ServiceProvider
{
   /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $config = $this->app['config']['polymorphic-history'];

        $this->publishes([
            __DIR__ . '/migrations/' => base_path('/database/migrations'),
        ], 'migrations');
        
        $this->publishes([
            __DIR__ . '/../config/polymorphic-history.php' => config_path('polymorphic-history.php'),
        ], 'config');

        //$this->loadTranslationsFrom(__DIR__.'/../../resources/lang', 'userhistory');
        // $this->publishes([
        //     __DIR__.'/../../resources/lang'     => $this->resource_path('lang/vendor/userhistory'),
        // ], 'resources');

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->setupConfig();
        
        // Register the main class to use with the facade
        $this->app->singleton('polymorphic-history', function () {
            return new PolymorphicHistory;
        });
    }

    /**
     * Get the Configuration
     */
    private function setupConfig() {
    
        $this->mergeConfigFrom(__DIR__.'/../config/polymorphic-history.php', 'polymorphic-history');
    
    }

    /**
     * Return a fully qualified path to a given file.
     *
     * @param string $path
     *
     * @return string
     */
    public function resource_path($path = '')
    {
        return app()->basePath().'/resources'.($path ? '/'.$path : $path);
    }
}
