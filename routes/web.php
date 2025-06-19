<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\Facades\Route;

// Admin Authentication Routes
Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('register/post', [AuthController::class, 'store'])->name('register.post');
Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
Route::post('/post-admin-login', [AuthController::class, 'postAdminLogin'])->name('admin.login.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/validate-email', [AuthController::class, 'validateEmail'])->name('validate-email');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');


    // User Management Routes
    Route::get('admin/all-users', [UserController::class, 'allUsers'])->name('all-users');
});

