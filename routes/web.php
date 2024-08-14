<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserLoginController;
use App\Http\Controllers\User\UserRegistationController;
use App\Http\Controllers\User\UserDashBoardController;
use App\Http\Controllers\User\RecordViewController;

// Define the index route with a name
Route::get('/', function () {
    return view('index');
})->name('index');



// Login routes
Route::get('/login', [UserLoginController::class, 'index'])->name('login');
Route::post('/check', [UserLoginController::class, 'check'])->name('check');
Route::post('/logout', [UserLoginController::class, 'logout'])->name('user.logout');

// Registration routes
Route::get('/register', [UserRegistationController::class, 'create'])->name('register');
Route::post('/register', [UserRegistationController::class, 'store'])->name('pages.user.signup');

// Middleware implementation for authenticated users
Route::middleware(['auth', 'user'])->group(function () {
    Route::get('/user/dashboard', [UserDashBoardController::class, 'dashboard'])->name('user.dashboard');
    Route::get('/records', [RecordViewController::class, 'index'])->name('record.index');
});
