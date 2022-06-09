<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    //
    public function getProductDetail($slug){
        $product = Product::where('slug', '=', $slug)->firstorfail();
        return view('user.detail.productdetail')->withProduct($product);
    }
}
