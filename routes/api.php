<?php

use App\Http\Controllers\PhoneController;
use App\Http\Controllers\UserController;
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

// GET utk mendapatkan user by id
Route::get('users/{id}', [UserController::class, 'getUserById']);

//GET utk mendapatkan semua user
Route::get('users', [UserController::class, 'getAllUsers']);

//POST utk menambahkandata user
Route::post('users', [UserController::class, 'createUser']);

//POST utk mengupdate data user
Route::post('users/{id}', [UserController::class, 'updateUser']);

//POST utk photo user
Route::post('users/photo/{id}', [UserController::class, 'addPhotoProfile']);

//GET utk mendapatkan data phone
Route::get('users/{user_id}/phone', [PhoneController::class, 'createPhone']);

//POST untuk menambhkan data telpon
Route::post('users/{user_id}/phone', [PhoneController::class, 'createPhone']);

//DELETE utk menghapus data phone
Route::delete('users/{user_id}/phone/{id}', [PhoneController::class, 'deletePhone']);
