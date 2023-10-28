<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ReviewsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// API routes with sanctum

// Public routes/ Do not need authentication to access
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

// Protected routes

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::resource('/reviews', ReviewsController::class);
    Route::post('/logout', [AuthController::class, 'logout']);
});
