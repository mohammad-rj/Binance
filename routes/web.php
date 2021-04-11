<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\VerificationController;

//admin route
use App\Http\Controllers\Admin\TopController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\SignalController;
use App\Http\Controllers\Admin\LogManageController;
use App\Http\Controllers\Admin\ProfitManagement;
use App\Http\Controllers\Admin\MailController;
use App\Http\Controllers\Admin\TelegramController;
use App\Http\Controllers\Admin\AdmininfoController;

//user route

use App\Http\Controllers\User\ProfitSetting;
use App\Http\Controllers\User\UserInfoController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\SettingController;



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
        Route::get('userinfo', [UserController::class, 'index'])->name('userinfo');
        Route::get('signal', [SignalController::class, 'index'])->name('signal');
        Route::get('logmanagement', [LogManageController::class, 'index'])->name('logmanagement');
        
        Route::group(['namespace' => 'profitmanagement','prefix' => 'profitmanagement'], function () {
            Route::get('/', [ProfitManagement::class, 'index'])->name('profitmanagement');
            Route::post('buy', [ProfitManagement::class, 'buysetting'])->name('profitmanagement.buy');
            Route::post('sell', [ProfitManagement::class, 'sellsetting'])->name('profitmanagement.sell');
        });

        Route::get('mail', [MailController::class, 'index'])->name('mail');
        Route::get('telegram', [TelegramController::class, 'index'])->name('telegram');
        Route::get('admininfo', [AdmininfoController::class, 'index'])->name('admininfo');
    });
});

Route::group(['namespace' => 'user','prefix' => 'user', 'as' => 'user.'], function () {
    // These routes require the user to be logged in
    Route::group(['middleware' => 'auth'], function () {
        // Authentication Routes
        Route::get('top', [HomeController::class, 'index'])->name('top');
        Route::get('userinfo', [UserInfoController::class, 'index'])->name('userinfo');
        Route::get('setting', [SettingController::class, 'index'])->name('setting');
        Route::get('profitsetting', [ProfitSetting::class, 'index'])->name('profitsetting');
    });
});