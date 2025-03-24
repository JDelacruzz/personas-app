<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComunaController;
use App\Http\Controllers\MunicipioController;
/*
Route::get('/people/{name}', function ($name) {
    return view('people');
});
*/
Route::get('/', function () {
    return view('welcome');
});
Route::get('/comunas', [ComunaController::class, 'index'])->name('comunas.index');
Route::post('/comunas', [ComunaController::class, 'store'])->name('comunas.store');
Route::get('/comunas/create', [ComunaController::class, 'create'])->name('comunas.create');
Route::delete('/comunas/{comuna}', [ComunaController::class, 'destroy'])->name('comunas.destroy');
Route::put('/comunas/{comuna}', [ComunaController::class, 'update'])->name('comunas.update');
Route::get('/comunas/{comuna}/edit', [ComunaController::class, 'edit'])->name('comunas.edit');


Route::get('/municipio', [MunicipioController::class, 'index'])->name('municipio.index');
Route::get('/municipio/create', [MunicipioController::class, 'create'])->name('municipio.create');
Route::post('/municipio', [MunicipioController::class, 'store'])->name('municipio.store');
Route::get('/municipio/{id}/edit', [MunicipioController::class, 'edit'])->name('municipio.edit');
Route::put('/municipio/{id}', [MunicipioController::class, 'update'])->name('municipio.update');
Route::delete('/municipio/{id}', [MunicipioController::class, 'destroy'])->name('municipio.destroy');

