<?php

namespace Devcode6\PackageToolKit\Providers;

use Illuminate\Support\ServiceProvider;

Class PackageToolkitServiceProvider extends ServiceProvider {
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../../config/package-toolkit.php', 'package-toolkit');
    }

    public function boot(): void
    {
        // config publish
        $this->publishes([
            __DIR__ . '/../../config/package-toolkit.php' =>
                config_path('package-toolkit.php'),
        ], 'package-toolkit-config');

        // routes
        $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');
    }
}