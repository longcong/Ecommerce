<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('shop');
});



Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'ShopController@index')->name('shop');
Route::get('/cart', 'CartController@index')->name('cart');
Route::get('/cart/checkout', 'CheckoutController@index')->name('checkout');
Route::get('/user/logout','Auth\LoginController@userLogout')->name('user.logout');
Route::get('/product', 'ShopController@getProductDetail')->name('productdetail');



route::group(['middleware'=> ['auth','isAdmin'], 'prefix' => 'admin'], function(){
    Route::get('/main','Admin\FontendController@index')->name('admin.dashboard');
    Route::resource('products', 'Admin\ProductController');
    // get index -> /products
    // get show -> /products/$id
    // get edit -> /products/edit/$id -> show form
    // PUT update -> /products/edit/$id ->after submit
    // get create -> /products/create -> show form
    // POST store -> /products -> after submit
    // DELETE destroy -> /products -> after submit
    Route::resource('categories', 'Admin\CategoryController', ['except' => ['create']]);
    Route::resource('tags', 'Admin\TagController', ['except' => ['create']]);
    
}); 
