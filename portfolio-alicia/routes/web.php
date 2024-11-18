<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/about', function () {
    return view('about');
})->name('about');


Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/services', function () {
    return view('services');
})->name('services');

