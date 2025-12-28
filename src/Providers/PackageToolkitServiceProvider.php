<?php

namespace Devcode6\PackageToolKit\Providers;

use Illuminate\Support\ServiceProvider;

Class PackageToolkitServiceProvider extends ServiceProvider {
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../../config/package-toolkit.php',
            'package-toolkit'
        );

        $this->app->singleton('package-toolkit', function () {
            return new ToolkitManager();
        });
    }

    public function boot(): void
    {
        // Publish config
        $this->publishes([
            __DIR__ . '/../../config/package-toolkit.php' =>
                config_path('package-toolkit.php'),
        ], 'package-toolkit-config');

        // Conditional routes
        if (config('package-toolkit.enabled') &&
            config('package-toolkit.routes.enabled')) {

            $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');
        }
    }

}