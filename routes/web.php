<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::fallback(function () {
	return '<center><br>
			<h1 style="color:darkred;">YAAAAH!!!</h1>
			<h2 style="color:red;">Sadly, page not found, mate.<br>
				Better luck next time!</h2>
			</center>';
});

Route::get('/', function () {
	return view('welcome');
});

Route::get('/home', [PageController::class, 'home'])->name('home');

Route::get('/profile', [UserController::class, 'profile'])->name('user.profileForm');
Route::post('/profile', [UserController::class, 'update'])->name('user.profileUpdate');

Route::get('/category/{name}', [AnimalController::class, 'category'])->name('category');

Route::get('/product/{id}', [AnimalController::class, 'detail'])->name('product.detail');
