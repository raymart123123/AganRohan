<?php

use App\Http\Controllers\RegisterController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\baseeController;
use App\Http\Controllers\MallController;

// Registration routes
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Login and Logout routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// home route protected by 'auth' middleware
Route::get('/home', [homeController::class, 'dash'])->name('home')->middleware('web');

//base dashboard
Route::get('/basee', [baseeController::class, 'dashboard'])->name('basee')->middleware('web');

Route::get('/basee', [baseeController::class, 'userw'])->name('basee')->middleware('web');


//Mall dashboard
Route::get('/itemmall', [MallController::class, 'mall1'])->name('itemmall')->middleware('web');

Route::get('/itemmall', [MallController::class, 'mall2'])->name('itemmall')->middleware('web');
