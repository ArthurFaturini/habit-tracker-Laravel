<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/hello', function() {
    return '<h1>Hello, World!<h1>';
});

Route::get('/', [SiteController::class, 'index']);