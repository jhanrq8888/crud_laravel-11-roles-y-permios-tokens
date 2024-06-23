<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Ejemplo de rutas sin middleware o políticas específicas
Route::middleware(['auth'])->group(function () {
    Route::resource('posts', App\Http\Controllers\PostController::class);
});
