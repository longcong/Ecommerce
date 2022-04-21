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
Route::get('/shop', 'ShopController@index')->name('shop');
Route::get('/user/logout','Auth\LoginController@userLogout')->name('user.logout');


route::group(['middleware'=> ['auth','isAdmin']], function(){
    Route::get('/dashboard','Admin\FontendController@index');
    Route::resource('products', 'Admin\ProductController');
    Route::resource('categories', 'Admin\CategoryController', ['except' => ['create']]);
}); 

