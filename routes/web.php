<?php

use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ConfirmPasswordController;
use App\Http\Controllers\Auth\VerificationController;

Route::middleware(['auth', 'verified'])
    ->group(function () {
        Route::post('/home', [MainController::class, "createProject"])->name("project.create");
        Route::get('/home', [MainController::class, "allProjects"])->name("project.all");
        Route::get('/home/edit/{project}', [MainController::class, "editProject"])->name("project.edit");
        Route::post('/home/update/{project}', [MainController::class, "updateProject"])->name("project.update");
        Route::get('/home/delete/{project}', [MainController::class, "deleteProject"])->name("project.delete");
        Route::get('/home/dash', [MainController::class, "dashboard"])->name("project.dashboard");
        Route::post('/home/contact', [MainController::class, "sendMessage"])->name("project.contact");
    });

// Route::post('/home', [MainController::class, "createProject"])->middleware(["auth", "verified"])->name("project.create");
// Route::get('/home', [MainController::class, "allProjects"])->middleware(["auth", "verified"])->name("project.all");
// Route::get('/home/edit/{project}', [MainController::class, "editProject"])->middleware(["auth", "verified"])->name("project.edit");
// Route::post('/home/update/{project}', [MainController::class, "updateProject"])->middleware(["auth", "verified"])->name("project.update");
// Route::get('/home/delete/{project}', [MainController::class, "deleteProject"])->middleware(["auth", "verified"])->name("project.delete");
// Route::get('/home/dash', [MainController::class, "dashboard"])->middleware(["auth", "verified"])->name("project.dashboard");



Route::get('/', [MainController::class, "projectsWelcome"])->name("project.welcome");
Route::get('/detail/{project}', [MainController::class, "detailProject"])->name("project.detail");

// Login Routes
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Registration Routes...
// Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
// Route::post('register', [RegisterController::class, 'register']);

// Password Reset Routes...
Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [ForgotPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ForgotPasswordController::class, 'reset'])->name('password.update');

// Confirm Password 
Route::get('password/confirm', [ConfirmPasswordController::class, 'showConfirmForm'])->name('password.confirm');
Route::post('password/confirm', [ConfirmPasswordController::class, 'confirm']);

// Email Verification Routes...
Route::get('email/verify', [VerificationController::class, 'show'])->name('verification.notice');
Route::get('email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify');
Route::get('email/resend', [VerificationController::class, 'resend'])->name('verification.resend');