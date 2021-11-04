<?php

use App\Http\Controllers\seriesController;
use Illuminate\Support\Facades\Route;

Route::get('/series', [seriesController::class, 'index']);
Route::get('/series/criar', [seriesController::class, 'create']);
Route::post('/series/criar', [seriesController::class, 'store']);