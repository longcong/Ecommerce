<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Intervention\Image\Facades\Image;

class ProductDetailController extends Controller
{
    //
    public function getProductDetail($slug){
        $product = Product::where('slug', '=', $slug)->firstorfail();
        return view('detail.productdetail')->withProduct($product);
    }
}
