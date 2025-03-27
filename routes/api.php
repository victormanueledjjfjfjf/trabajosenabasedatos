<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CorpController;
use App\Http\Controllers\BarrackController;
use App\Http\Controllers\SoldierController;
use App\Http\Controllers\CompanyController;

// Grupo de rutas API
Route::middleware('api')->group(function () {
    // Rutas para Services
    Route::apiResource('services', ServiceController::class);

    // Rutas para Corps (Cuerpos del ejército)
    Route::apiResource('corps', CorpController::class);

    // Rutas para Barracks (Cuarteles)
    Route::apiResource('barracks', BarrackController::class);

    // Rutas para Soldiers (Soldados)
    Route::apiResource('soldiers', SoldierController::class);

    // Rutas para Companies (Compañías)
    Route::apiResource('companies', CompanyController::class);
});
