<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Api\ClientController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\Lang;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([Lang::class])->group(function () {
    Route::get('/', [ClientController::class, 'index'])->name('client');
    Route::get('/lang/{lang}', [ClientController::class, 'lang'])->name('lang');
    Route::post('/store', [ClientController::class, 'store'])->name('store');
    Route::middleware('role')->group(function () {
        Route::resource('users', UserController::class);
        Route::resource('categories', CategoryController::class);
        Route::resource('news', NewsController::class);
    });
});

Route::get('/login', [AuthController::class, 'index'])->name('index');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/register', [AuthController::class, 'sign'])->name('sign');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

