<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\BannerController;
use App\Http\Controllers\Api\NewController;
use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\DiscountController;

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
Route::get('product/{id}', [ProductController::class, 'getACourse']);

// Category
Route::get('categories', [CategoryController::class, 'index']);
Route::get('categories/show/{id}', [CategoryController::class, 'show']);
Route::get('categories/{id}', [CategoryController::class, 'getAcategory']);

// Users
Route::get('users', [UserController::class, 'index']);
Route::get('arrangeuser/{cate}/{type}',  [UserController::class, 'arrangeUser']);

// Banners
Route::get('banners', [BannerController::class, 'index']);

// News 
Route::get('news/{number}', [NewController::class, 'index']);
Route::get('new/{id}', [NewController::class, 'getNew']);
Route::get('newslist', [NewController::class, 'getNews']);

// Customer 
Route::post('register', [CustomerController::class, 'create']);
Route::post('login', [CustomerController::class, 'login']);
Route::put('edit-password', [CustomerController::class, 'editPassword']);

// Order 
Route::post('order/store', [OrderController::class, 'store']);
Route::get('get-order/{id}', [OrderController::class, 'getOrder']);
Route::delete('delete-order/{id}', [OrderController::class, 'destroy']);

// Order 
Route::get('discount/{userid}/{code}', [DiscountController::class, 'getDiscoutPrice']);


