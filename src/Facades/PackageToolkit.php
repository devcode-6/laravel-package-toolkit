<?php

namespace Devcode6\PackageToolkit\Facades;

use Illuminate\Support\Facades\Facade;

class PackageToolkit extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'package-toolkit';
    }
}
