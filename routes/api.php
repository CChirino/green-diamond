<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//Controladores
use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\API\RoleController;


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

Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [RegisterController::class, 'login']);
//Administrador
Route::resource('roles', RoleController::class);



// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
