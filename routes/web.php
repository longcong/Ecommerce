<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\CartController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\ViewAdminPaymentController;
use App\Http\Controllers\UserDashboard\UserDashboardController;
use app\Http\Controllers\User\ProductDetailController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\PaymentController;


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
Route::get('/cart/checkout', 'CheckoutController@index')->name('checkout');
Route::get('/user/logout','Auth\LoginController@userLogout')->name('user.logout');
Route::get('/list', 'ProductListController@index')->name('list');

//Route::get('/product', 'ProductDetailController@getProductDetail')->name('productdetail');
Route::get('product/{slug}',['as' => 'detail.productdetail', 'uses' =>'User\ProductDetailController@getProductDetail']) 
     -> where('slug','[\w\d\-\_]+');
Route::get('ordersuser','UserDashboard\OrderUserController@vỉeworderuser')->name('orderuser');
Route::get('cart',[CartController::class,'viewcart'])->name('cart');
Route::post('/cart/apply-coupon',[CartController::class,'applyCoupon'])->name('applyCoupon');
//Route::get('product', ['uses' => 'ProductDetailController@getDetail', 'as' => 'detail.product_detail']);
Route::middleware(['auth'])->group(function(){
    Route::get('/userdashboard', [UserDashboardController::class,'index'])->name('dashboard');
    Route::get('ordersuser','UserDashboard\OrderUserController@vieworderuser')->name('orderuser');
    Route::get('view-orderuser/{id}', 'UserDashboard\OrderUserController@userview')->name('userview');
    Route::post('add-to-cart',[CartController::class,'addProduct']);
    Route::post('delete-cart-item',[CartController::class,'deleteProduct']);
    Route::post('update-cart',[CartController::class,'updateCart']);
    Route::get('/cart/checkout', 'CheckoutController@index')->name('checkout');
    Route::post('place-order',[CheckoutController::class,'placeOrder'])->name('placeorder');
    Route::get('order-info/{id}',[CheckoutController::class,'info'])->name('order-info');
    Route::post('update-cart2',[ProductDetailController::class,'updateCart2']);
    Route::get('wishlist', [WishlistController::class, 'viewwishlist'])->name('wishlist');
    Route::post('add-to-wishlist',[WishlistController::class, 'addWishlist'])->name('addWishlist');
    Route::post('delete-wishlist-item',[WishlistController::class, 'deleteWishlist'])->name('deleteWishlist');    
    
    
    
    Route::middleware(['seller'])->group(function(){
        
    });
});


Route::group(['middleware'=> ['auth','isAdmin'], 'prefix' => 'admin'], function(){
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

    Route::get('orders', [OrderController::class, 'index'])->name('admin.orders');
    Route::get('view-order/{id}', [OrderController::class, 'view']);
    Route::put('update-order/{id}',[OrderController::class,'updateorder']);

    Route::get('order-history', [OrderController::class, 'orderhistory']);

    Route::get('users', [DashboardController::class, 'users']);

    Route::get('view-user/{id}',[DashboardController::class,'viewusers']);
    Route::get('payment-admin',[ViewAdminPaymentController::class,'index'])->name('payments');

    Route::resource('coupons','Admin\CouponController');

}); 
Route::get('payment',[PaymentController::class, 'viewpayment'])->name('viewpayment');
Route::post('/momo_payment',[CheckoutController::class,'momo_payment'])->name('momo_payment');

