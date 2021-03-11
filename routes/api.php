<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//Controladores
use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\API\RoleController;
use App\Http\Controllers\API\PermissionController;
use App\Http\Controllers\API\UsersController;
use App\Http\Controllers\API\ProductsController;




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
Route::post('login-administrador', [RegisterController::class, 'login_admin']);

//Administrador
Route::resource('roles', RoleController::class);
Route::resource('permission', PermissionController::class);
Route::resource('users', UsersController::class);
Route::resource('products', ProductsController::class);




// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
