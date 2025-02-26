<?php

use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::view('/', 'index')->name('index');

/* Route::get('/about', function() {
    return 'about';
})->name('about');
Route::get('/about', fn() => 'about')->name('about');
Route::get('/contacts', fn() => 'contacts')->name('contacts');
Route::get('/login', fn() => 'login')->name('login');
Route::get('/register', fn() => 'register')->name('register'); */

Route::view('/about', 'about')->name('about');
Route::view('/contacts', 'contacts')->name('contacts');
Route::view('/login', 'login')->name('login');
Route::view('/register', 'register')->name('register');

Route::view('/terms', 'terms')->name('terms');
Route::view('/privacy', 'privacy')->name('privacy');