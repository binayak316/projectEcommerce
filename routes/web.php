<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;



 Route::get('/', [UserController::class, 'index'])->name('home_page');
 Route::get('/admin/login', function(){
    return view('admin.login');
 });
 Route::get('/admin/forgot-password', function(){
    return view('admin.forgot-password');
 });
 Route::get('/dashboard', function(){
    return view('admin.dashboard');
 });
 Route::get('/login', [UserController::class, 'login'])->name('user_login');
 Route::get('/signup', [UserController::class, 'signup'])->name('user_signup');