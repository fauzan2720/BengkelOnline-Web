<?php

use App\Http\Controllers\API\CallMechanicController;
use App\Http\Controllers\API\LocationController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\TransactionsController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\VehicleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('user', [UserController::class, 'fetch']);
    Route::post('user', [UserController::class, 'updateProfile']);
    Route::post('logout', [UserController::class, 'logout']);

    Route::get('vehicles', [VehicleController::class, 'all']);
    Route::post('vehicles', [VehicleController::class, 'createVehicle']);

    Route::get('locations', [LocationController::class, 'all']);
    Route::post('locations', [LocationController::class, 'createLocation']);

    Route::get('transactions', [TransactionsController::class, 'all']);
    Route::post('transactions', [TransactionsController::class, 'checkout']);

    Route::get('call', [CallMechanicController::class, 'all']);
    Route::post('call', [CallMechanicController::class, 'callMechanic']);
});

Route::post('login', [UserController::class, 'login']);
Route::post('register', [UserController::class, 'register']);

Route::get('products', [ProductController::class, 'all']);
