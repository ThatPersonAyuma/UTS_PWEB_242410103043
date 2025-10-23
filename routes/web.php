<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;

// Halaman welcome atau landing page
Route::get('/', function () {
    return view('welcome');
});

// Halaman login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::get('/login/check', [AuthController::class, 'login'])->name('login.submit');

// Logout
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Halaman dashboard (hanya bisa diakses setelah login)
Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

// Halaman course dan profile
Route::get('/course', [AuthController::class, 'course'])->name('course');
Route::get('/profile', [AuthController::class, 'profile'])->name('profile');

