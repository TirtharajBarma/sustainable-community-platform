<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/forum', function () {
    return view('forum');
})->name('forum');

Route::get('/resources', function () {
    return view('resources');
})->name('resources');

Route::get('/projects', function () {
    return view('projects');
})->name('projects');

Route::get('/events', function () {
    return view('events');
})->name('events'); 

Route::get('/login', function () {
    return view('login');
})->name('login'); 

Route::get('/register', function () {
    return view('register');
})->name('register'); 