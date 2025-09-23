<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\MenuitemController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'register_view'])->name('register');
Route::post('register', [AuthController::class, 'register'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('dashboard', [AuthController::class, 'dashboard']);

Route::resource('post', PostController::class);
Route::resource('category', CategoryController::class);
Route::resource('tag', TagController::class);
Route::resource('media', MediaController::class);
Route::resource('page', PageController::class);
Route::resource('menu', MenuController::class);
Route::resource('menuitem', MenuitemController::class);


