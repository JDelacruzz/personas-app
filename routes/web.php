<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComunaController;
/*
Route::get('/', function () {
    return view('welcome');
});
Route::get('/people/{name}', function ($name) {
    return view('people');
});
*/
Route::get('/', function () {
    return view('welcome');
});
Route::get('/comunas', [ComunaController::class, 'index'])->name('comunas.index');
Route::post('/comunas', [ComunaController::class, 'store'])->name('comunas.store');