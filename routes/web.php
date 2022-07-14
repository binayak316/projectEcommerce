<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;



 Route::get('/', [UserController::class, 'index'])->name('user_login');
 Route::get('/login', [UserController::class, 'login'])->name('user_login');
 Route::get('/signup', [UserController::class, 'signup'])->name('user_signup');