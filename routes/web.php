<?php

use App\Http\Controllers\EntrarController;
use App\Http\Controllers\EpisodiosController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\seriesController;
use App\Http\Controllers\TemporadasController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::group(['middleware' => ['autenticador']], function () {

    Route::get('/series/criar', [seriesController::class, 'create'])->name('form_criar_serie');
    Route::post('/series/criar', [seriesController::class, 'store']);
    Route::post('/series/{id}/editanome', [seriesController::class, 'editaNome']);
    Route::delete('/series/{id}', [seriesController::class, 'destroy']);

    Route::post('/temporadas/{temporada}/episodios/assistir', [EpisodiosController::class, 'assistir']);

});

Route::get('/series', [seriesController::class, 'index'])->name('listar_series');
Route::get('/series/{serieId}/temporadas', [TemporadasController::class, 'index']);

Route::get('/temporadas/{temporada}/episodios', [EpisodiosController::class, 'index']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/entrar', [EntrarController::class, 'index'])->name('entrar');
Route::post('/entrar', [EntrarController::class, 'entrar']);

Route::get('/registrar', [RegistroController::class, 'create']);
Route::post('/registrar', [RegistroController::class, 'store']);

Route::get('/sair', function() {
    Auth::logout();
    return redirect('/entrar');
});
