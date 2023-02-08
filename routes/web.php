<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', [MainController::class, "home"]);

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('login', [LoginController::class, "showLoginForm"])->name('login');
Route::get('register', 'App\Http\Controllers\Auth\RegisterController@showRegistrationForm')->name('register');