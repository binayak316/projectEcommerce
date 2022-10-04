<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;


// -----------------Admin Side-----------------------//
// Route::get('/admin/login', function(){
//    return view('admin.login');
// });

// Route::get('/admin/forgot-password', function(){
//    return view('admin.forgot-password');
// });
// Route::get('/dashboard', function(){
//    return view('admin.dashboard');
// });

Route::get('/admin/login', [AdminController::class, 'index']);
Route::get('/admin/forgot-password', [AdminController::class, 'forgot_password']);
Route::get('/dashboard', [AdminController::class, 'dashboard']);







// -----------------Users Side-----------------------//
Route::get('/', [UserController::class, 'index'])->name('home_page');

Route::get('/login', [UserController::class, 'login'])->middleware('guest')->name('userLogin');
Route::post('/login', [UserController::class, 'loginUser'])->middleware('guest')->name('user_login');

Route::get('/signup', [UserController::class, 'signup'])->middleware('guest');
Route::post('/signup', [UserController::class, 'store'])->middleware('guest')->name('user_signup');

Route::get('/logout', [UserController::class, 'logout'])->name('logout');