<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComunaController;
use App\Http\Controllers\MunicipioController;
use App\Http\Controllers\PaisController;
use App\Http\Controllers\DepartamentoController;

Route::get('/', function () {
    return view('welcome');
});

// Rutas para Comunas
Route::get('/comunas', [ComunaController::class, 'index'])->name('comunas.index');
Route::post('/comunas', [ComunaController::class, 'store'])->name('comunas.store');
Route::get('/comunas/create', [ComunaController::class, 'create'])->name('comunas.create');
Route::delete('/comunas/{comuna}', [ComunaController::class, 'destroy'])->name('comunas.destroy');
Route::put('/comunas/{comuna}', [ComunaController::class, 'update'])->name('comunas.update');
Route::get('/comunas/{comuna}/edit', [ComunaController::class, 'edit'])->name('comunas.edit');

// Rutas para Municipios
Route::get('/municipio', [MunicipioController::class, 'index'])->name('municipio.index');
Route::get('/municipio/create', [MunicipioController::class, 'create'])->name('municipio.create');
Route::post('/municipio', [MunicipioController::class, 'store'])->name('municipio.store');
Route::get('/municipio/{id}/edit', [MunicipioController::class, 'edit'])->name('municipio.edit');
Route::put('/municipio/{id}', [MunicipioController::class, 'update'])->name('municipio.update');
Route::delete('/municipio/{id}', [MunicipioController::class, 'destroy'])->name('municipio.destroy');

// Rutas para País

Route::get('/pais', [PaisController::class, 'index'])->name('pais.index');
Route::post('/pais', [PaisController::class, 'store'])->name('pais.store');
Route::get('/pais/create', [PaisController::class, 'create'])->name('pais.create');
Route::get('/pais/{pais_codi}/edit', [PaisController::class, 'edit'])->name('pais.edit');
Route::put('/pais/{pais_codi}', [PaisController::class, 'update'])->name('pais.update');
Route::delete('/pais/{pais_codi}', [PaisController::class, 'destroy'])->name('pais.destroy');

Route::get('/departamento', [DepartamentoController::class, 'index'])->name('departamento.index');
Route::post('/departamento', [DepartamentoController::class, 'store'])->name('departamento.store');
Route::get('/departamento/create', [DepartamentoController::class, 'create'])->name('departamento.create');
Route::get('/departamento/{id}/edit', [DepartamentoController::class, 'edit'])->name('departamento.edit');
Route::put('/departamento/{id}', [DepartamentoController::class, 'update'])->name('departamento.update');
Route::delete('/departamento/{id}', [DepartamentoController::class, 'destroy'])->name('departamento.destroy');