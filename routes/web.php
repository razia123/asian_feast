<?php

use App\Http\Controllers\backend\AuthController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;

// Frontend route
Route::get('/', [HomeController::class, 'index']);

Route::get('/login', [AuthController::class, 'index']);
Route::post('/login', [AuthController::class, 'login'])->name('login');

//Admin routes
Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/category', [CategoryController::class, 'index'])->name('category');
    Route::get('/create-category', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/create-category', [CategoryController::class, 'store'])->name('category.store');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

