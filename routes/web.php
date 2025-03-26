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

Route::get('/paises', [PaisController::class, 'index'])->name('paises.index');
Route::post('/paises', [PaisController::class, 'store'])->name('paises.store');
Route::get('/paises/create', [PaisController::class, 'create'])->name('paises.create');
Route::delete('/paises/{pais}', [PaisController::class, 'destroy'])->name('paises.destroy');
Route::put('/paises/{pais}', [PaisController::class, 'update'])->name('paises.update');
Route::get('/paises/{pais}/edit', [PaisController::class, 'edit'])->name('paises.edit');
//rutas departamentos

Route::get('/departamentos', [DepartamentoController::class, 'index'])->name('departamentos.index');
Route::post('/departamentos', [DepartamentoController::class, 'store'])->name('departamentos.store');
Route::get('/departamentos/create', [DepartamentoController::class, 'create'])->name('departamentos.create');
Route::delete('/departamentos/{departamento}', [DepartamentoController::class, 'destroy'])->name('departamentos.destroy');
Route::put('/departamentos/{departamento}', [DepartamentoController::class, 'update'])->name('departamentos.update');
Route::get('/departamentos/{departamento}/edit', [DepartamentoController::class, 'edit'])->name('departamentos.edit');
