<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::controller(LoginController::class)->group(function () {
    // Login Routes
    Route::get('/login', 'showLoginForm')->name('login');
    Route::post('/login', 'login');
    Route::post('/logout', 'logout')->name('logout');

    // Registration Routes
    Route::get('/register', 'showRegistrationForm')->name('register');
    Route::post('/register', 'register');   
});
