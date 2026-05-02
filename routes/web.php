<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get(
    '/blog',
    [BlogController::class, 'Blog']
);
Route::get('/about', [AboutController::class, 'about']);

Route::get('/contact', [ContactController::class, 'index']);
