<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AssetAssignmentController;

Route::get('/auth/login', [AuthController::class, 'create'])->name('auth.form');
Route::post('/auth/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/auth/register', [AuthController::class, 'register'])->name('auth.register');


Route::group(['middleware'=>['auth:api']], function(){
    // Auth
    Route::post('/auth/logout', [AuthController::class, 'logout']);
    Route::post('/auth/refresh', [AuthController::class, 'refresh']);
    Route::get('/auth/user-profile', [AuthController::class, 'userProfile']);
    // User area
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    Route::apiResource('/assets', AssetController::class);
    Route::apiResource('/users', UserController::class);
    Route::apiResource('/vendors', VendorController::class);
    Route::apiResource('/asset-assignments', AssetAssignmentController::class);
    
    // require __DIR__.'/auth.php';
});