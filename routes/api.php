<?php

use App\Http\Controllers\BrandController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;


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

//user---------- user controller-------------------------------------------------------------------------------------------
Route::get('users', [UserController::class, 'index']);
Route::get('users/{id}', [UserController::class, 'show']);
Route::post('register', [UserController::class, 'store']);
Route::put('usersupdate/{id}', [UserController::class, 'update']);
Route::delete('usersdelete/{id}', [UserController::class, 'destroy']);
Route::post('login', [AuthController::class, 'login']);
Route::group(['middleware' => ['auth:api']], function () {
    Route::post('logout', [AuthController::class, 'logout']);
});
//----------------------------------------------------------------------------------------------------------

//Discount----------discount controller-------------------------------------------------------------------------------------------
Route::get('discount', [DiscountController::class, 'index']);
Route::get('discount/{id}', [DiscountController::class, 'show']);
Route::post('adddiscount', [DiscountController::class, 'store']);
Route::put('updatediscount/{id}', [DiscountController::class, 'update']);
Route::delete('discountdelete/{id}', [DiscountController::class, 'destroy']);
//----------------------------------------------------------------------------------------------------------
//barnd----------barnd controller-------------------------------------------------------------------------------------------
Route::get('brand', [BrandController::class, 'index']);
Route::get('brand/{id}', [BrandController::class, 'show']);
Route::post('addbrand', [BrandController::class, 'store']);
Route::put('brandupdate/{id}', [BrandController::class, 'update']);
Route::delete('deletebrand/{id}', [BrandController::class, 'destroy']);
//----------------------------------------------------------------------------------------------------------

//product--------product controller-------------------------------------------------------------------------------------------------
Route::get('product', [ProductController::class, 'index']);
Route::get('product/{id}', [ProductController::class, 'show']);
Route::post('product-add', [ProductController::class, 'store']);
Route::put('product-update/{id}', [ProductController::class, 'update']);
Route::delete('product-delete/{id}', [ProductController::class, 'destroy']);
//----------------------------------------------------------------------------------------------------------