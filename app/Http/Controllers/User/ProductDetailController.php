<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Interfaces\ProductInterface;
use App\Product;
use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    //
    public function getProductDetail(Request $request,ProductInterface $productService, $slug){
        $product = Product::where('slug', '=', $slug)->firstorfail();
        $populars = $productService->getPopulars();
        return view('user.detail.productdetail',compact('product','populars'));
    }
}
