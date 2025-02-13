<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SwapiController;
use App\Http\Controllers\MetricsController;

Route::middleware('api')->group(function () {
    Route::get('/people', [SwapiController::class, 'getPeople']);
    Route::get('/films', [SwapiController::class, 'getFilms']);
    Route::get('/metrics', [MetricsController::class, 'getMetrics']);
    Route::post('/metrics/reset', [MetricsController::class, 'resetMetrics']);
});
