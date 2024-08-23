<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserLoginController;
use App\Http\Controllers\User\UserRegistationController;
use App\Http\Controllers\User\UserDashBoardController;
use App\Http\Controllers\User\RecordViewController;
use App\Http\Controllers\ProductController;


// Define the index route with a name
// Route::get('/', function () {
//     return view('index');
// })->name('index');



Route::get('/', [ProductController::class, 'IndexPage'])->name('index');
// Route::get('/', [ProductController::class, 'IndexPageCategories'])->name('index');

//productdisplay
Route::get('/productdisplay',[ProductController::class,'ProductDisplay'])->name('productdisplay');

//All category display
Route::get('/allcategory',[ProductController::class, 'IndexPageCategories'])->name('allcategory');

// Product details
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');
//Displaying Products by  its category
Route::get('/category/{id}', [ProductController::class, 'showcategories'])->name('categoryshow');



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
