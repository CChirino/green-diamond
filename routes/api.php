<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//Controladores
use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\API\RoleController;
use App\Http\Controllers\API\PermissionController;
use App\Http\Controllers\API\UsersController;
use App\Http\Controllers\API\ProductsController;
use App\Http\Controllers\API\User_descriptionController;
use App\Http\Controllers\API\CategoryController;




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

//Administrator
Route::prefix('admin')->group(function () {
    Route::resource('roles', RoleController::class);
    Route::resource('permission', PermissionController::class);
    Route::resource('users', UsersController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('products', ProductsController::class);

    // Products
    // Route::get('/products', [App\Http\Controllers\API\ProductsController::class, 'index'])->name('products.index');
    // Route::post('/products', [App\Http\Controllers\API\ProductsController::class, 'store'])->name('products.store');
    // Route::get('/products/{id}', [App\Http\Controllers\API\ProductsController::class, 'show'])->name('products.show');
    // Route::put('/products/{id}', [App\Http\Controllers\API\ProductsController::class, 'update'])->name('products.update');
    // Route::delete('/products/{id}', [App\Http\Controllers\API\ProductsController::class, 'destroy'])->name('products.delete');
    // Super -Administrator - Types or Roles for person
    Route::get('/super-administrator', [App\Http\Controllers\API\SuperadministratorController::class, 'index'])->name('super-administrator.index');
    Route::post('/super-administrator', [App\Http\Controllers\API\SuperadministratorController::class, 'store'])->name('super-administrator.store');
    Route::get('/super-administrator/{id}', [App\Http\Controllers\API\SuperadministratorController::class, 'show'])->name('super-administrator.show');
    Route::put('/super-administrator/{id}', [App\Http\Controllers\API\SuperadministratorController::class, 'update'])->name('super-administrator.update');
    Route::delete('/super-administrator/{id}', [App\Http\Controllers\API\SuperadministratorController::class, 'destroy'])->name('super-administrator.delete');
    // Administrator - Types or Roles for person
    Route::get('/administrator', [App\Http\Controllers\API\AdministratorController::class, 'index'])->name('administrator.index');
    Route::post('/administrator', [App\Http\Controllers\API\AdministratorController::class, 'store'])->name('administrator.store');
    Route::get('/administrator/{id}', [App\Http\Controllers\API\AdministratorController::class, 'show'])->name('administrator.show');
    Route::put('/administrator/{id}', [App\Http\Controllers\API\AdministratorController::class, 'update'])->name('administrator.update');
    Route::delete('/administrator/{id}', [App\Http\Controllers\API\AdministratorController::class, 'destroy'])->name('administrator.delete');
    // Supervisor - Types or Roles for person
    Route::get('/supervisor', [App\Http\Controllers\API\SupervisorController::class, 'index'])->name('supervisor.index');
    Route::post('/supervisor', [App\Http\Controllers\API\SupervisorController::class, 'store'])->name('supervisor.store');
    Route::get('/supervisor/{id}', [App\Http\Controllers\API\SupervisorController::class, 'show'])->name('supervisor.show');
    Route::put('/supervisor/{id}', [App\Http\Controllers\API\SupervisorController::class, 'update'])->name('supervisor.update');
    Route::delete('/supervisor/{id}', [App\Http\Controllers\API\SupervisorController::class, 'destroy'])->name('supervisor.delete');
    // Seller - Types or Roles for person
    Route::get('/seller', [App\Http\Controllers\API\SellerController::class, 'index'])->name('seller.index');
    Route::post('/seller', [App\Http\Controllers\API\SellerController::class, 'store'])->name('seller.store');
    Route::get('/seller/{id}', [App\Http\Controllers\API\SellerController::class, 'show'])->name('seller.show');
    Route::put('/seller/{id}', [App\Http\Controllers\API\SellerController::class, 'update'])->name('seller.update');
    Route::delete('/seller/{id}', [App\Http\Controllers\API\SellerController::class, 'destroy'])->name('seller.delete');
    // Delivery - Types or Roles for person
    Route::get('/delivery', [App\Http\Controllers\API\DeliveryController::class, 'index'])->name('delivery.index');
    Route::post('/delivery', [App\Http\Controllers\API\DeliveryController::class, 'store'])->name('delivery.store');
    Route::get('/delivery/{id}', [App\Http\Controllers\API\DeliveryController::class, 'show'])->name('delivery.show');
    Route::put('/delivery/{id}', [App\Http\Controllers\API\DeliveryController::class, 'update'])->name('delivery.update');
    Route::delete('/delivery/{id}', [App\Http\Controllers\API\DeliveryController::class, 'destroy'])->name('delivery.delete');

    
});

Route::post('/profile', [App\Http\Controllers\API\User_descriptionController::class, 'store'])->name('profile.store');
Route::put('/profile/{id}', [App\Http\Controllers\API\User_descriptionController::class, 'update'])->name('profile.update');

// Auth::routes(['verify' => true]);






// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
