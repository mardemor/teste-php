<?php

use Illuminate\Http\Request;
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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
    //return $request->user();
//});

Route::get('users', [\App\Http\Controllers\Api\UserController::class, 'index'])->name('api.index');
Route::post('users/new',[\App\Http\Controllers\Api\UserController::class, 'store']);
Route::get('users/{id}', [\App\Http\Controllers\Api\UserController::class, 'show']);
Route::put('users/edit/{id}', [\App\Http\Controllers\Api\UserController::class, 'update']);
Route::delete('users/destroy/{id}', [\App\Http\Controllers\Api\UserController::class, 'destroy']);
