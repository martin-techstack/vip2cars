<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\EncuestaController;

Route::get('/', function () {
    return view('welcome');
});

// CRUD de clientes
Route::resource('clientes', ClienteController::class);

// CRUD de vehiculos
Route::resource('vehiculos', VehiculoController::class);

// Encuestas
Route::resource('encuestas', EncuestaController::class);
