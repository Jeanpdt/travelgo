<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesteController;

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


Route::group(['prefix' => 'teste'], function () {
  Route::post('add', [TesteController::class, 'add']);
  Route::get('edit/{id}', [TesteController::class, 'edit']);
  Route::post('update/{id}', [TesteController::class, 'update']);
  Route::delete('delete/{id}', [TesteController::class, 'delete']);
});

Route::group(['prefix' => 'room'], function () {
  Route::get('', [RoomController::class, 'index']);
  Route::get('{id}', [RoomController::class, 'getById']);
  Route::post('add', [RoomController::class, 'add']);
  Route::post('update/{id}', [RoomController::class, 'update']);
  Route::delete('delete/{id}', [RoomController::class, 'delete']);
});

Route::prefix('auth')->group(function () {
    Route::post('register', [AuthController::class, 'register']);
    Route::post('login', [AuthController::class, 'login']);
    Route::get('refresh', [AuthController::class, 'refresh']);
    Route::get('users', [AuthController::class, 'index']);
    Route::middleware('auth:api')->group(function () {
        // Get user info
        Route::get('user', [AuthController::class, 'user']);
        // Logout user from application
        Route::post('logout', [AuthController::class, 'logout']);
    });
});


