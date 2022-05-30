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
    Route::post('update-password', [UserController::class, 'updatePassword']);
    Route::post('logout', [UserController::class, 'logout']);

    Route::resource('vehicles', VehicleController::class);

    Route::resource('locations', LocationController::class);

    Route::get('transactions', [TransactionsController::class, 'all']);
    Route::post('transactions', [TransactionsController::class, 'checkout']);

    Route::get('call', [CallMechanicController::class, 'all']);
    Route::post('call', [CallMechanicController::class, 'callMechanic']);
});

Route::post('login', [UserController::class, 'login']);
Route::post('register', [UserController::class, 'register']);

Route::get('products', [ProductController::class, 'all']);



// beberapa fungsi yang perlu kita ketahui:
// 1. Route get => nama_route => menjalankan fungsi index
// 2. Route get => nama_route/create => menjalankan fungsi create
// 3. Route post => nama_route => menjalankan fungsi store
// 4. Route get => nama_route/{ id } => menjalankan fungsi show
// 5. Route put/patch => nama_route/{ id } => menjalankan fungsi update
// 6. Route delete => nama_route/{ id } => menjalankan fungsi delete
// 7. Route get => nama_route/{ id }/edit => menjalankan fungsi edit
