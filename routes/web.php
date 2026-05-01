<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'index']);

Route::get(
    '/blog',
    [BlogController::class, 'Blog']
);
Route::get('/about', [AboutController::class, 'about']);

Route::get('/contact', function () {
    return view('contact');
});
