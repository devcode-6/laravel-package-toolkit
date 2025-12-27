<?php

use Illuminate\Support\Facades\Route;

Route::get('/package-toolkit/health', function () {
    return 'Package Toolkit is alive';
});