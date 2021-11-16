<?php

use App\Http\Controllers\BannerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\OrderController;
use App\Models\Order;

// use App\Http\Controllers\NewsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
Route::get('/logout', function() {
    Auth::Logout(); 
    return redirect(url('/login')); 
});

Route::group(["prefix"=>"admin"], function() {
    Route::get('/', [App\Http\Controllers\HomeController::class,'index'])->name('home');
    // Route::get('home',function(){
    //     return view('backend.home');
    // });
    Route::get('/403',function() {
        return view('backend.403');
    });
    // Users
    Route::resource('users', UsersController::class)->middleware('permission.checker:admin');
    Route::get('arrangeuser/{cate}/{type}',  [UsersController::class, 'arrangeUser'])
        ->name('users.arrangeuser'); 

    // Product
    Route::resource('products', ProductController::class);
    Route::get('arrangeproduct/{cate_id}/{cate}/{type}',  [ProductController::class, 'arrangeProduct'])
        ->name('products.arrangeproduct');

    Route::get('arrangecategory/{cate}/{type}',  [ProductController::class, 'arrangeCategory'])
        ->name('products.arrangecategory');
        
    // Category
    Route::resource('categories', CategoryController::class);
    Route::get('arrangecategory/{cate}/{type}',  [CategoryController::class, 'arrangeCategory'])
        ->name('products.arrangecategory');

    // New
    Route::resource('news', NewsController::class);
    
    // Discount
    Route::resource('discounts', DiscountController::class);

    // Banner
    Route::resource('banners', BannerController::class);

    // Order
    Route::resource('orders', OrderController::class);
});


