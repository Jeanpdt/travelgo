<?php

use Illuminate\Http\Request;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['prefix' => 'teste'], function () {
  Route::post('add', [TesteController::class, 'add']);
  Route::get('edit/{id}', [TesteController::class, 'edit']);
  Route::post('update/{id}', [TesteController::class, 'update']);
  Route::delete('delete/{id}', [TesteController::class, 'delete']);
});

