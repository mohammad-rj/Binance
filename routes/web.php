<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\Admin\TopController;

/*
 * Access Controllers
 * All route names are prefixed with 'auth'.
 */
Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
Route::group(['namespace' => 'Auth', 'as' => 'auth.'], function () {
    // These routes require the user to be logged in
    Route::group(['middleware' => 'auth'], function () {
        Route::get('logout', [LoginController::class, 'logout'])->name('logout');
    });

    // These routes require no user to be logged in
    Route::group(['middleware' => 'guest'], function () {
        // Authentication Routes
        Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
        Route::post('login', [LoginController::class, 'login'])->name('login.post');

        // Registration Routes
        Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
        Route::post('register', [RegisterController::class, 'register'])->name('register.post');

        // Password Reset Routes
        Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('forgot');
        Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('forgot.post');

        Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset.form');
        Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.reset');
    });
    
});

Route::group(['namespace' => 'admin','prefix' => 'admin', 'as' => 'admin.'], function () {
    // These routes require the user to be logged in
    Route::group(['middleware' => 'auth'], function () {
       
        // Authentication Routes
        Route::get('top', [TopController::class, 'index'])->name('top');
       
    });
    
});