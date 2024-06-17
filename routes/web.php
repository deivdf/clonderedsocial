<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegistroController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('principal');
});

Route::get('/registro', [RegistroController::class, 'index'])->name('registro');
Route::post('/registro', [RegistroController::class, 'store']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::get('logout', [LogoutController::class, 'store'])->name('logout');
Route::post('/muro', [PostController::class, 'store'])->name('images.store');
Route::controller(DashController::class)->middleware('auth');
Route::get('{user:username}',[DashController::class, 'index'])->name('dash.index');
Route::get('/post/create', [DashController::class, 'create'])->name('post.create');
