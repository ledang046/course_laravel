<?php
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckLogin;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
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
    
    // Users
    Route::resource('users', UsersController::class);

    // Product
    Route::resource('products', ProductController::class);
    Route::get('arrangecategory/{cate}/{type}',  [ProductController::class, 'arrangeCategory'])
        ->name('products.arrangecategory');

    // Category
    Route::resource('categories', CategoryController::class);
    Route::get('arrangecategory/{cate}/{type}',  [CategoryController::class, 'arrangeCategory'])
        ->name('products.arrangecategory');
});


