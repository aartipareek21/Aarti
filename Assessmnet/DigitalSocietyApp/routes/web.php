<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', [UserController::class, 'home']);
Route::get('/login', [UserController::class, 'showLoginForm']);
Route::post('/login', [UserController::class, 'login']);
Route::get('/register', [UserController::class, 'showRegisterForm']);
Route::post('/register', [UserController::class, 'register']);
Route::get('/profile', [UserController::class, 'showProfile'])->middleware('auth');
Route::post('/profile', [UserController::class, 'updateProfile'])->middleware('auth');

Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');

