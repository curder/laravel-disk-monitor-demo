<?php

use Illuminate\Support\Facades\Route;
use Curder\DiskMonitor\Http\Controllers\DiskMetricsController;

Route::macro('diskMonitor', function(string $prefix) {
    Route::prefix($prefix)->group(function () {
        Route::get('/', DiskMetricsController::class);
    });
});
