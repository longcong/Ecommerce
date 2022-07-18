<?php

namespace App\Http\Controllers\User;

use App\Cart;
use App\Http\Controllers\Controller;
use App\Interfaces\ProductInterface;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductDetailController extends Controller
{
    //
    public function getProductDetail(Request $request,ProductInterface $productService, $slug){
        $product = Product::where('slug', '=', $slug)->firstorfail();
        $cartitems = Cart::where('user_id',Auth::id())->get();
        return view('user.detail.productdetail',compact('product','cartitems'));
    }
    public function updateCart2 (Request $request){

        if(!Auth::check())
        {
            return response()->json(['status'=>"Need login"]);
            
        }
        $product_id = $request->input('prod_id');
        $cartItemQty = $request->input('prod_qty');

        $product = Product::where('id',$product_id)->first();
        $stockQuantity = $product->quantity;
        if($stockQuantity < $cartItemQty )
        {
            return response()->json(['status'=>"Not enough quantity in stock"]);
        }
        $carttm = Cart::where('prod_id',$product_id)->where('user_id',Auth::id())->first();
        $quantitycartitems = $carttm->prod_qty;
        if($quantitycartitems >= $stockQuantity){
            return response()->json(['status'=>"Over quantity in stock"]);
        }
        if(Cart::where('prod_id',$product_id)->where('user_id',Auth::id())->exists()){

            $cart = Cart::where('prod_id',$product_id)->where('user_id',Auth::id())->first();
            $cart->prod_qty = $cart->prod_qty + 1;
            $cart->update();
            return response()->json(['status'=>"Quantity Update"]);
        }
        else{
            $cart = new Cart();
            $cart->prod_id = $product_id;
            $cart->prod_qty = $cartItemQty;
            $cart->user_id = Auth::id();

            $cart->save();
            return response()->json(['status'=>"Quatity update"]);
        }
    }
}
