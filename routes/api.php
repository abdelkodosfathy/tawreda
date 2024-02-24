<?php

use App\Http\Controllers\BrandController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiscountController;


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
Route::put('updatebrand/{id}', [BrandController::class, 'update']);
Route::delete('deletebrand/{id}', [BrandController::class, 'destroy']);
//----------------------------------------------------------------------------------------------------------