<?php

use App\Http\Controllers\seriesController;
use App\Http\Controllers\TemporadasController;
use Illuminate\Support\Facades\Route;

Route::get('/series', [seriesController::class, 'index'])
    ->name('listar_series');
Route::get('/series/criar', [seriesController::class, 'create'])
    ->name('form_criar_serie');
Route::post('/series/criar', [seriesController::class, 'store']);
Route::delete('/series/{id}', [seriesController::class, 'destroy']);

Route::get('/series/{serieId}/temporadas', [TemporadasController::class, 'index']);