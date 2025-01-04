<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/login', [AuthController::class, 'login']);
Route::post(('/logout'), [AuthController::class, 'logout'])->middleware('auth:sanctum');

Route::middleware(['auth:sanctum'])->group(function () {
    Route::middleware('check')->group(function () {
        Route::get('/category', [CategoryController::class, 'index']);
        Route::get('/category/{category}', [CategoryController::class, 'show']);
        Route::post('/category', [CategoryController::class, 'store']);
        Route::put('/category/{category}', [CategoryController::class, 'update']);
        Route::delete('/category/{category}', [CategoryController::class, 'delete']);

        Route::get('/product', [CategoryController::class, 'index']);
        Route::get('/product/{product}', [CategoryController::class, 'show']);
        Route::post('/product', [CategoryController::class, 'store']);
        Route::put('/product/{product}', [CategoryController::class, 'update']);
        Route::delete('/product/{product}', [CategoryController::class, 'delete']);
    });
});
