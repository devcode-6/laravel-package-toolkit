<?php

namespace Devcode6\PackageToolkit\Providers;

use Illuminate\Support\ServiceProvider;
use Devcode6\PackageToolkit\Services\ToolkitManager;

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