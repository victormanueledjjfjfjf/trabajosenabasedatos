<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CorpController;
use App\Http\Controllers\BarrackController;
use App\Http\Controllers\CompanyController;

// Formulario para Corps
Route::get('/form-corp', [CorpController::class, 'index']);
Route::post('/create-corp', [CorpController::class, 'store'])->name('corp.store');

// Formulario para Barracks
Route::get('/form-barrack', [BarrackController::class, 'index']);
Route::post('/create-barrack', [BarrackController::class, 'store'])->name('barrack.store');

// Formulario para Companies
Route::get('/form-company', [CompanyController::class, 'index']);
Route::post('/create-company', [CompanyController::class, 'store'])->name('company.store');
