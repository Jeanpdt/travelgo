<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RoomController;
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

Route::post('/upload', [FileController::class, 'upload'])->name('upload');

Route::group(['prefix' => 'room'], function () {
  Route::get('', [RoomController::class, 'index']);
  Route::get('{id}', [RoomController::class, 'getById']);
  Route::post('add', [RoomController::class, 'add']);
  Route::post('update/{id}', [RoomController::class, 'update']);
  Route::delete('delete/{id}', [RoomController::class, 'delete']);
});

Route::group(['prefix' => 'reservation'], function () {
    Route::get('', [ReservationController::class, 'index']);
    Route::get('{id}', [ReservationController::class, 'getById']);
    Route::post('add', [ReservationController::class, 'add']);
    Route::post('update/{id}', [ReservationController::class, 'update']);
    Route::delete('delete/{id}', [ReservationController::class, 'delete']);
});

Route::prefix('auth')->group(function () {
    Route::post('register', [AuthController::class, 'register']);
    Route::post('login', [AuthController::class, 'login']);
    Route::get('refresh', [AuthController::class, 'refresh']);
    Route::get('users', [AuthController::class, 'index']);
    Route::get('user', [AuthController::class, 'user']);
    Route::post('logout', [AuthController::class, 'logout']);

});


