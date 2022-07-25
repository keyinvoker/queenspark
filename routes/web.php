<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::fallback(function () {
	return '
	<div class="d-flex justify-content-center align-items-center">
		<center>
			<br>
			<h1 style="color:darkgreen;">
				YAAAAH.. :(
			</h1>
			<h2 style="color:green;">
				Sadly, page not found, mate.
				<br>
				I wish you luck on your next journey.
				<br><br>
				This is the way.
			</h2>
		</center>
	</div>
	';
});

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/home', [PageController::class, 'home'])->name('home');
Route::get('/search', [PageController::class, 'searchProduct'])->name('search');

Route::get('/about-us', [PageController::class, 'aboutUs'])->name('about-us');

Route::get('/profile', [UserController::class, 'profile'])->name('user.profileForm');
Route::post('/profile', [UserController::class, 'update'])->name('user.profileUpdate');

Route::get('/category/{name}', [AnimalController::class, 'category'])->name('category');

Route::get('/product/{id}', [AnimalController::class, 'detail'])->name('product.detail');
