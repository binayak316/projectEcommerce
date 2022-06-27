<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;



// Route::get('/', function () {
//     return view('welcome');
// });

 Route::get('/', [UserController::class, 'index'])->name('user_login');
 Route::get('/login', [UserController::class, 'login'])->name('user_login');