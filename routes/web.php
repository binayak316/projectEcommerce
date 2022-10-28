<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;

// -----------------Admin Side-----------------------//
Route::group(['prefix' => 'admin'], function() {
	Route::group(['middleware' => 'admin.guest'], function(){
		Route::view('/login','admin.login')->name('admin.login');
        Route::view('/forgot-password', 'admin.forgot-password')->name('admin.forgot_password');
		Route::post('/login',[AdminController::class, 'authenticate'])->name('admin.auth');
	});
	
	Route::group(['middleware' => 'admin.auth'], function(){
		Route::get('/dashboard',[AdminController ::class, 'dashboard'])->name('admin.dashboard');
		Route::get('/our-user',[AdminController ::class, 'ourUser'])->name('admin.our-user');
		// Route::view('/our-user','admin.our-user')->name('admin.our-user');
		Route::get('/add-product',[ProductController::class, 'index'])->name('admin.add-product');
		Route::post('/add-product', [ProductController::class, 'storeProduct'])->name('storeProduct');
		Route::get('/edit-product/{id}', [ProductController::class, 'editProduct'])->name('editProduct');
		Route::put('/edit-product/{id}', [ProductController::class, 'updateProduct'])->name('updateProduct');
		Route::get('/delete-product/{id}', [ProductController::class, 'deleteProduct'])->name('deleteProduct');

		Route::view('/new-order','admin.new-order')->name('admin.new-order');
		Route::get('/dashboard',[AdminController ::class, 'dashboard'])->name('admin.dashboard'); 
		Route::get('/dashboard',[AdminController ::class, 'dashboard'])->name('admin.dashboard'); 
        Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');
	}); 
});




// -----------------Users Side-----------------------//
Route::get('/', [UserController::class, 'index'])->name('home_page');

Route::get('/login', [UserController::class, 'login'])->middleware('guest')->name('userLogin');
Route::post('/login', [UserController::class, 'loginUser'])->middleware('guest')->name('user_login');

Route::get('/signup', [UserController::class, 'signup'])->middleware('guest')->name('userSignup');
Route::post('/signup', [UserController::class, 'store'])->middleware('guest')->name('user_signup');

Route::get('/logout', [UserController::class, 'logout'])->middleware('auth')->name('user_logout');