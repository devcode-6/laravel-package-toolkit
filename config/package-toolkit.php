<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Package Toolkit Enabled
    |--------------------------------------------------------------------------
    |
    | Master switch for the package.
    |
    */

    'enabled' => true,

    /*
    |--------------------------------------------------------------------------
    | Route Registration
    |--------------------------------------------------------------------------
    |
    | Enable or disable package routes.
    |
    */

    'routes' => [
        'enabled' => true,
        'prefix' => 'package-toolkit',
        'middleware' => ['web'],
    ],

];
