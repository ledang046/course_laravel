<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\CategoryController;

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

// Products
// Route::apiResource('products', ProductController::class);
Route::get('products/{id}', [ProductController::class, 'getCourse']);

// Category
Route::get('categories', [CategoryController::class, 'index']);
Route::get('categories/show/{id}', [CategoryController::class, 'show']);
Route::get('categories/{id}', [CategoryController::class, 'getAcategory']);

// Users
Route::get('users', [UserController::class, 'index']);
Route::get('arrangeuser/{cate}/{type}',  [UserController::class, 'arrangeUser']);
