<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::prefix('auth')->group(function () {
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login',    [AuthController::class, 'login']);
    Route::post('/refresh',  [AuthController::class, 'refresh'])->middleware('auth:api');
    Route::post('/logout',   [AuthController::class, 'logout'])->middleware('auth:api');
    Route::get('/me',        [AuthController::class, 'me'])->middleware('auth:api');
});

Route::group(['middleware' => 'auth:api'], function() {
    Route::get('/profile',[ProfileController::class, 'profile']);
});
