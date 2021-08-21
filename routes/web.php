<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckLogin;
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

use App\Http\Controllers\UsersController;
// use App\Http\Controllers\CategoriesController;
// use App\Http\Controllers\NewsController;
Route::group(["prefix"=>"admin"],function(){
    Route::get('/', [App\Http\Controllers\HomeController::class,'index'])->name('home');
    // Route::get('home',function(){
    //     return view('backend.home');
    // });
    //Trang users
    Route::resource('users', UsersController::class);
    
    // Route::resource('category', CategoriesController::class);
    // Route::resource('news', NewsController::class);


});
