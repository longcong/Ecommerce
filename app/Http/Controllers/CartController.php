<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Auth;
use App\Cart;

class CartController extends Controller
{
    public function addProduct(Request $request)
    {
        $product_id = $request->input('product_id');

        if(Auth::check())
        {
            $prod_check = Product::where('id',$product_id)->first();
            
            if($prod_check)
            {
                if(Cart::where('prod_id',$product_id)->where('user_id',Auth::id())->exists())
                {
                    return response()->json(['status'=>$prod_check->name."Already Added to Cart"]);
                }
                else
                {
                    $cartItem = new Cart();
                    $cartItem->prod_id = $product_id;
                    $cartItem->prod_qty = 1;
                    $cartItem->user_id = Auth::id();
                    $cartItem->save();
                    return response()->json(['status'=>$prod_check->name."Added to Cart"]);
                }       

            }

        }
        else
        {
            return response()->json(['status'=>"Login to Continue"]);
        }
    }
    public function viewcart(Request $request)
    {
        $cartitems = Cart::where('user_id',Auth::id())->get();
        return view('cart', compact('cartitems'));
    }
}
