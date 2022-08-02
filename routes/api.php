<?php

use App\Http\Controllers\UserController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/hello', [UserController::class, "index"]);
Route::post('/user/create', [UserController::class, "register"]);
Route::put(' /user/update/{id}', [UserController::class, 'updateUser']);
Route::get(' /user/delete/{id}', [UserController::class, 'deleteUser']);
Route::get('/user', [UserController::class, 'getUser']);
Route::get('/users', [UserController::class, 'getUsers']);
Route::get('/logout/{id}', [UserController::class, 'logout']);
Route::post('/', [UserController::class, 'store']);

