<?php

use App\Http\Controllers\backend\AuthController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\MenuController;
use App\Http\Controllers\Frontend\ServiceController;
use App\Http\Controllers\Frontend\SetMenuController;
use Illuminate\Support\Facades\Route;

// Frontend route
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/services', [ServiceController::class, 'index'])->name('service');

Route::get('/menu', [MenuController::class, 'index'])->name('menu');
Route::get('/set-menu', [MenuController::class, 'setMenu'])->name('set_menu');
Route::get('/menu-detail', [MenuController::class, 'menuDetail'])->name('menu_detail');

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

