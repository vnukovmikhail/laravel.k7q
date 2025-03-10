<?php

use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */

$courses = [
    [
        "id"=> 0,
        'title' => 'Course 1',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, nisi?',
        'lesson_count' => 21,
        'length' => '2h 30m'
    ],
    [
        'id'=> 1,
        'title' => 'Course 2',
        'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt aut aliquid, eius quibusdam quidem perferendis.',
        'lesson_count' => 12,
        'length' => '3h 30m'
    ],
    [
        'id'=> 2,
        'title' => 'Course 3',
        'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing.',
        'lesson_count' => 11,
        'length' => '1h 30m'
    ],
    [
        'id'=> 3,
        'title' => 'Course 4',
        'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta consequatur perferendis et optio unde assumenda officia magni deleniti libero nesciunt.',
        'lesson_count' => 35,
        'length' => '7h 10m'
    ],
];

Route::get('/', fn () => view('index', ['courses' => $courses]))->name('index');

Route::get('/courses', fn () => view('courses', ['courses' => $courses]))->name('courses');

Route::get('/course/{id}', fn ($id) => view('course', ['course'=> $courses[$id]]))->name('course');

/* Route::get('/about', function() {
    return 'about';
})->name('about');
Route::get('/about', fn() => 'about')->name('about');
Route::get('/contacts', fn() => 'contacts')->name('contacts');
Route::get('/login', fn() => 'login')->name('login');
Route::get('/register', fn() => 'register')->name('register'); */

Route::view('/contacts', 'contacts')->name('contacts');
Route::view('/login', 'login')->name('login');
Route::view('/register', 'register')->name('register');

Route::view('/terms', 'terms')->name('terms');
Route::view('/privacy', 'privacy')->name('privacy');