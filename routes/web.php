<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'index']);

Route::get('/about', function (){
    return view('about');
});

Route::get('/blog', function (){
    return view('blog');
});

Route::get('/contact', function (){
    return view('contact');
});