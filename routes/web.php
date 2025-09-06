<?php

use App\Http\Controllers\backend\LoginController;
use App\Http\Controllers\backend\VideoController;
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
Route::get('/videos', [VideoController::class, 'index'])->name('video');

Route::get('/menu', [MenuController::class, 'index'])->name('menu');
Route::get('/set-menu', [MenuController::class, 'setMenu'])->name('set_menu');
Route::get('/menu-detail', [MenuController::class, 'menuDetail'])->name('menu_detail');



//Admin routes
Route::group(['middleware' => 'auth'], function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

