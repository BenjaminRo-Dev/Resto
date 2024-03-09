<?php

// use App\Http\Controllers\ProductoController;

use App\Http\Controllers\Administrador\AdSesionController;
use App\Http\Controllers\SesionController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

//Rutas administrador:
Route::resource('administrador/sesiones', AdSesionController::class)
    ->middleware(['auth'])
    ->only(['index', 'show'])
    ->names('administrador.sesiones');

//Rutas usuarios:
Route::resource('sesiones', SesionController::class)
    ->middleware(['auth'])
    ->only(['create', 'store']);
    

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
