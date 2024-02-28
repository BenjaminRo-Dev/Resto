<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::resource('productos', ProductoController::class)
    ->middleware(['auth'])
    ->except(['show']);

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
