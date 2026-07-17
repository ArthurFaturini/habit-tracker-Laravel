<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\RegisterController;

// Route::get('/welcome', function () {
//     return view('welcome');
// });

// Route::get('/hello', function () {
//     return '<h1>Hello, World!<h1>';
// });

// SITE
Route::get('/', [SiteController::class, 'index'])->name('site.index');

// CADASTRO
Route::get('/cadastro', [RegisterController::class, 'index'])->name('site.register');
Route::post('/cadastro', [RegisterController::class, 'store'])->name('auth.register');

// LOGIN
Route::get('/login', [LoginController::class, "index"])->name('site.login');
Route::post('/login', [LoginController::class, "authenticate"])->name('auth.login');

// AUTH
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [SiteController::class, 'dashboard'])->name('site.dashboard');
    Route::post('/logout', [LoginController::class, "logout"])->name('auth.logout');
});
