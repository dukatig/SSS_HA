<?php

use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ManufacturerController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;


Route::get('/', [HomeController::class, 'index']);
Route::get('/cars', [CarController::class, 'index']);
Route::get('/manufacturers', [ManufacturerController::class, 'index']);
Route::get('/carview/{car}', [CarController::class, 'show']);

Route::get('/car', [CarController::class, 'create']);
Route::post('/car', [CarController::class, 'store']);
Route::get('/car/{car}', [CarController::class, 'edit']);
Route::put('/car/{car}', [CarController::class, 'update']);

Route::post('/car/{car}', [CarController::class, 'delete' ]);

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
        ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);
});

Route::middleware('auth')->group(function () {
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
});



