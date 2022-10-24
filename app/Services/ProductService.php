<?php

namespace App\Services;

use App\Brands;
use App\Category;
use App\Coupon;
use App\Product;
use App\Interfaces\ProductInterface;
use App\Order;
use App\Payment;
use App\Tag;
use App\Wishlist;
use Illuminate\Support\Facades\Auth;

Class ProductService implements ProductInterface{

    public function getPopulars(int $limit = 4){
        return Product::where('is_popular', 1)->orderBy('id','desc')->paginate($limit);
    }
    public function getProducts(){
        return Product::orderBy('id', 'desc')->paginate(6);
    }
    public function getCategories(){
        return Category::all();
    }
    public function getTag(){
        return Tag::all();
    }
    public function getOrder(){
        return Order::where('status','0')->get();
    }
    public function getViewWishlist()
    {
        return Wishlist::where('user_id', Auth::id())->get();
    }
    public function getCoupons()
    {
        return Coupon::all();
    }
    public function getPayments()
    {
        return Payment::all();
    }
    public function getBrands()
    {
        return Brands::all();
    }
    public function getAoPhong(int $limit = 4)
    {
        return Product::where('phong', 1)->orderBy('id','desc')->paginate($limit);
    }
    public function getAoPolo(int $limit = 4)
    {
        return Product::where('polo', 1)->orderBy('id','desc')->paginate($limit);
    }
    public function getQuanDai(int $limit = 4)
    {
        return Product::where('dai', 1)->orderBy('id','desc')->paginate($limit);
    }
    public function getQuanDui(int $limit = 4)
    {
        return Product::where('dui', 1)->orderBy('id','desc')->paginate($limit);
    }
    public function getProductImport()
    {
        return Product::orderBy('id', 'desc')->paginate(5);   
    }
}



