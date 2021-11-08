<?php

use App\Http\Controllers\EpisodiosController;
use App\Http\Controllers\seriesController;
use App\Http\Controllers\TemporadasController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/series', [seriesController::class, 'index'])
    ->name('listar_series');
Route::get('/series/criar', [seriesController::class, 'create'])
    ->name('form_criar_serie');
Route::post('/series/criar', [seriesController::class, 'store']);
Route::delete('/series/{id}', [seriesController::class, 'destroy']);
Route::post('/series/{id}/editanome', [seriesController::class, 'editaNome']);

Route::get('/series/{serieId}/temporadas', [TemporadasController::class, 'index']);

Route::get('/temporadas/{temporada}/episodios', [EpisodiosController::class, 'index']);
Route::post('/temporadas/{temporada}/episodios/assistir', [EpisodiosController::class, 'assistir']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
