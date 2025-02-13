<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SwapiController;

Route::middleware('api')->group(function () {
    Route::get('/people', [SwapiController::class, 'getPeople']);
    Route::get('/films', [SwapiController::class, 'getFilms']);
});
