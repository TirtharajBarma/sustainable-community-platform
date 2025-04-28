<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/forum', function () {
    return view('forum');
})->name('forum');

Route::get('/resources', function () {
    return view('resources');
})->name('resources');
Route::get('/resource/{id}', [App\Http\Controllers\ResourceController::class, 'show'])->name('resource.show');

Route::get('/projects', function () {
    return view('projects');
})->name('projects');

Route::get('/events', function () {
    return view('events');
})->name('events'); 

// Route::get('/login', function () {
//     return view('login');
// })->name('login'); 

// Route::get('/register', function () {
//     return view('register');
// })->name('register'); 

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');