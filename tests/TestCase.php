<?php

namespace Devcode6\PackageToolkit\Tests;

use Devcode6\PackageToolkit\Providers\PackageToolkitServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

abstract class TestCase extends OrchestraTestCase
{
    protected function getPackageProviders($app)
    {
        return [
            PackageToolkitServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        // Setup default config
        $app['config']->set('package-toolkit.enabled', true);
        $app['config']->set('package-toolkit.routes.enabled', true);
        $app['config']->set('package-toolkit.routes.prefix', 'package-toolkit');
        $app['config']->set('package-toolkit.routes.middleware', ['web']);
        // Ensure app has an encryption key for testing
        $app['config']->set('app.key', 'base64:'.base64_encode(random_bytes(32)));
    }
}