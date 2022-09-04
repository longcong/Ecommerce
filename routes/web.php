<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ImportProductController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\Admin\ViewAdminPaymentController;
use App\Http\Controllers\UserDashboard\UserDashboardController;
use App\Http\Controllers\User\ProductDetailController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\Admin\ImportStatisticsController;

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
Route::get('/search',[ShopController::class,'search'])->name('search');
Route::get('/cart/checkout', 'CheckoutController@index')->name('checkout');
Route::get('/user/logout','Auth\LoginController@userLogout')->name('user.logout');
Route::get('/list', 'ProductListController@index')->name('list');

//Route::get('/product', 'ProductDetailController@getProductDetail')->name('productdetail');
Route::get('product/{slug}',['as' => 'detail.productdetail', 'uses' =>'User\ProductDetailController@getProductDetail']) 
     -> where('slug','[\w\d\-\_]+');
Route::get('brand/{slug}',[ProductDetailController::class,'getBrand']);
Route::get('ordersuser','UserDashboard\OrderUserController@vỉeworderuser')->name('orderuser');
Route::get('cart',[CartController::class,'viewcart'])->name('cart');
Route::post('/cart/apply-coupon',[CartController::class,'applyCoupon'])->name('applyCoupon');
//Route::get('product', ['uses' => 'ProductDetailController@getDetail', 'as' => 'detail.product_detail']);
Route::middleware(['auth'])->group(function(){
    Route::get('/userdashboard', [UserDashboardController::class,'index'])->name('dashboard');
    Route::get('/create/{id}', [UserDashboardController::class,'create'])->name('update');
    Route::put('/update-account/{id}',[UserDashboardController::class,'UpdateAccount'])->name('updateaccount');
    Route::get('showaccount/{id}',[UserDashboardController::class,'show'])->name('showaccount');
    Route::get('ordersuser','UserDashboard\OrderUserController@vieworderuser')->name('orderuser');
    Route::get('view-orderuser/{id}', 'UserDashboard\OrderUserController@userview')->name('userview');
    Route::post('add-to-cart',[CartController::class,'addProduct']);
    Route::post('delete-cart-item',[CartController::class,'deleteProduct']);
    Route::post('update-cart',[CartController::class,'updateCart']);
    Route::get('/cart/checkout', 'CheckoutController@index')->name('checkout');
    Route::post('place-order',[CheckoutController::class,'placeOrder'])->name('placeorder');
    Route::get('order-info/{id}',[CheckoutController::class,'info'])->name('order-info');
    Route::post('update-cart-2',[ProductDetailController::class,'updateCart2'])->name('updateCart2');
    Route::get('wishlist', [WishlistController::class, 'viewwishlist'])->name('wishlist');
    Route::post('add-to-wishlist',[WishlistController::class, 'addWishlist'])->name('addWishlist');
    Route::post('delete-wishlist-item',[WishlistController::class, 'deleteWishlist'])->name('deleteWishlist');    
    
    
    
    Route::middleware(['seller'])->group(function(){
        
    });
});


Route::group(['middleware'=> ['auth','isAdmin'], 'prefix' => 'admin'], function(){
    Route::get('/main','Admin\FontendController@index')->name('admin.dashboard');
    Route::resource('products', 'Admin\ProductController');
    Route::resource('categories', 'Admin\CategoryController', ['except' => ['create']]);
    Route::get('update/status',[CategoryController::class,'updateStatus'])->name('update.status');
    Route::resource('tags', 'Admin\TagController', ['except' => ['create']]); 
   
    Route::get('orders', [OrderController::class, 'index'])->name('admin.orders');
    Route::get('view-order/{id}', [OrderController::class, 'view']);
    Route::get('update/order',[OrderController::class,'updateorder']);

    Route::get('order-history', [OrderController::class, 'orderhistory']);

    Route::get('users', [DashboardController::class,'users'])->name('admin.users');
    Route::get('create/{id}',[DashboardController::class,'create'])->name('admin.create');
    Route::get('view-user/{id}',[DashboardController::class,'viewusers'])->name('viewuser');
    Route::put('update-admin/{id}',[DashboardController::class,'Updateadmin'])->name('update.admin');
    Route::get('update/role',[DashboardController::class,'updateRole'])->name('update.roles');

    Route::get('payment-admin',[ViewAdminPaymentController::class,'index'])->name('payments');

    Route::resource('brands','Admin\BrandsController');
    Route::resource('attributes','Admin\ProductAttributesController');
    Route::resource('coupons','Admin\CouponController');
    Route::get('update/active','Admin\CouponController@active')->name('update.active');

    Route::get('import', [ImportProductController::class, 'index'])->name('import.index');
    Route::get('import/{id}',[ImportProductController::class, 'edit'])->name('import.create');
    Route::put('import/{id}',[ImportProductController::class, 'update'])->name('import.edit');
    Route::get('import/history', [ImportProductController::class, 'importHistory'])->name('import.importhistory');

    Route::get('statistics',[ImportStatisticsController::class, 'ProductStatistcs'])->name('statistics.products');

}); 
Route::get('payment',[PaymentController::class, 'viewpayment'])->name('viewpayment');
Route::post('/momo_payment',[CheckoutController::class,'momo_payment'])->name('momo_payment');

