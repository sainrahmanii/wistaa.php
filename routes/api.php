<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\RestoranController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/registrasi', [AuthController::class, 'registrasi']);
Route::post('/login', [AuthController::class, 'login']);
Route::put('/edit/{user_id}', [AuthController::class, 'editProfile']);
Route::put('/editpassword/{user_id}', [AuthController::class, 'editPassword']);

//CRUD RESTO BESERTA MENUNYA
Route::post('/add/resto-dan-menu', [RestoranController::class, 'createRestoMenu']);
Route::get('/resto', [RestoranController::class, 'getRestoMenu']);

// CRUD pada resto berdasarkan ID
Route::post('/add/menu/{menu_id}', [RestoranController::class, 'create']);
Route::delete('/del/menu/{resto_id}/{menu_id}', [RestoranController::class]);

// Update resto saja
Route::post('/edit/resto/{resto_id}', [RestoranController::class, 'editResto']);

// Get semua menu
Route::get('/menu', [RestoranController::class, 'getAllMenu']);

// searching menu
Route::get('/search', [RestoranController::class, 'cari']);

// Edit password
// Route::put('/editpassword/{user_id}', [AuthController::class, 'editPassword']);

// // Edit profile
// Route::put('/editprofile/{user_id}', [AuthController::class, 'editProfile']);