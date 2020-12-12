<?php

namespace InvataProgramare\Novelist;

use Illuminate\Support\ServiceProvider;

class NovelistServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'novelist');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'novelist');

        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        $this->loadRoutesFrom(__DIR__.'/routes.php');

        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'novelist');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('novelist.php'),
            ], 'config');

            $this->publishMigrations();

            // Publishing the views.
            $this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/novelist'),
            ], 'views');

            // Publishing assets.
            $this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/novelist'),
            ], 'assets');

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/novelist'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'novelist');

        // Register the main class to use with the facade
        $this->app->singleton('novelist', function () {
            return new Novelist;
        });
    }

    private function publishMigrations()
    {
        $this->publishes([
            __DIR__ . '/../database/migrations/create_articles_table.php.stub' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_articles_table.php'),
        ], 'migrations');

        $this->publishes([
            __DIR__ . '/../database/migrations/create_comments_table.php.stub' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_comments_table.php'),
        ], 'migrations');

        $this->publishes([
            __DIR__ . '/../database/migrations/create_categories_table.php.stub' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_categories_table.php'),
        ], 'migrations');
    }
}
