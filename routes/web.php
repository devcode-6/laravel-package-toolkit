<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => config('package-toolkit.routes.prefix'),
    'middleware' => config('package-toolkit.routes.middleware'),
], function () {

    Route::get('/health', function () {
        return response()->json([
            'status' => app('package-toolkit')->status(),
        ]);
    });

});
