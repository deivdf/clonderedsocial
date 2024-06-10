<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistroController;


Route::get('/', function () {
    return view('principal');
});

Route::get('/registro', [RegistroController::class, 'index'])->name('registro');
Route::post('/registro', [RegistroController::class, 'store']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/muro', [PostController::class, 'index'])->name('post.index');
