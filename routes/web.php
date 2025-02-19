<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Website\BlogController;
use App\Http\Controllers\Website\HomeController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('home');
//});

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('showRegistrationForm');
Route::post('/register', [RegisterController::class, 'register'])->name('register');


Route::middleware('auth')->group(function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/', [HomeController::class, 'index']);

    Route::resource('blogs', BlogController::class);

});

