<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'index']);

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/about', [AboutController::class, 'about']);

Route::get('/contact', function () {
    return view('contact');
});
