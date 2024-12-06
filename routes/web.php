<?php

use App\Http\Controllers\SocialiteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::controller(Authcontroller::class)->group(function () {
    Route::get('/', 'index')->name('welcome');
    Route::get('/login', 'login')->name('login');

    Route::middleware(['auth'])->group(function() {
        Route::get('dashboard', 'redirectDashboard')->name('dashboard');
        Route::get('find_match', 'findMatch')->name('find_match');
        Route::post('logout', 'logout')->name('logout');
    });
});

Route::controller(SocialiteController::class)->group(function () {
    Route::get('auth/google', 'redirectToGoogle')->name('google.login');
    Route::get('auth/callback', 'googleCallback')->name('google.callback');
});

