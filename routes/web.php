<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CorpController;
use App\Http\Controllers\BarrackController;
use App\Http\Controllers\SoldierController;
use App\Http\Controllers\CompanyController;

// Página de inicio
Route::get('/', function () {
    return view('welcome');
});

// Rutas para Services
Route::resource('services', ServiceController::class);

// Rutas para Corps (Cuerpos del ejército)
Route::resource('corps', CorpController::class);

// Rutas para Barracks (Cuarteles)
Route::resource('barracks', BarrackController::class);

// Rutas para Soldiers (Soldados)
Route::resource('soldiers', SoldierController::class);

// Rutas para Companies (Compañías)
Route::resource('companies', CompanyController::class);

