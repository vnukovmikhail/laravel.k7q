<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

Route::get('/', function (){
    // $courses = DB::select('select * from courses');
    // $courses = DB::table('courses')->dump()->get();
    // $courses = DB::table('courses')->dd()->get();
    $courses = DB::table('courses')->get();
    return view('pages.index', compact('courses'));
})->name('index');

Route::controller(CourseController::class)
->prefix('courses')
->name('courses.')
->group(function (){
    Route::get('/', 'index')->name('index');
    Route::get('/{id}', 'show')->name('show');
});

// Route::get('/courses', [CourseController::class, 'index'])->name('courses');
// Route::get('/course/{id}', [CourseController::class, 'show'])->name('course');

Route::view('/contacts', 'pages.contacts')->name('contacts');
Route::view('/login', 'pages.login')->name('login');
Route::view('/register', 'pages.register')->name('register');

Route::view('/terms', 'pages.terms')->name('terms');
Route::view('/privacy', 'pages.privacy')->name('privacy');