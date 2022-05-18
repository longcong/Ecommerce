<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Auth;
use App\Cart;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function addProduct(Request $request)
    {
        if (!Auth::check()) {
            return response()->json(['status'=>"Login to Continue"]);
        }

        $product_id = $request->get('product_id');
        $prod_check = Product::where('id',$product_id)->first();

        if (!$prod_check) {
            return response()->json(['status'=>"Product not found"]);
        }

        if(Cart::where('prod_id',$product_id)->where('user_id',Auth::id())->exists())
        {
            $cartItem = Cart::where('prod_id',$product_id)->where('user_id',Auth::id())->first();
            $cartItem->prod_qty = $cartItem->prod_qty + 1;
            $cartItem->save();
            return response()->json(['status'=>$prod_check->name."Quantity Update"]);
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




        // $product_id = $request->input('product_id');
        // if(Auth::check())
        // {
        //     $prod_check = Product::where('id',$product_id)->first();
            
        //     if($prod_check)
        //     {
        //         if(Cart::where('prod_id',$product_id)->where('user_id',Auth::id())->exists())
        //         {
        //             return response()->json(['status'=>$prod_check->name."Already Added to Cart"]);
        //         }
        //         else
        //         {
        //             $cartItem = new Cart();
        //             $cartItem->prod_id = $product_id;
        //             $cartItem->prod_qty = 1;
        //             $cartItem->user_id = Auth::id();
        //             $cartItem->save();
        //             return response()->json(['status'=>$prod_check->name."Added to Cart"]);
        //         }       

        //     } else {
        //         dd('sdfsd');
        //     }
        // }
        // else
        // {
        //     return response()->json(['status'=>"Login to Continue"]);
        // }
    }

    public function viewcart(Request $request)
    {
        $cartitems = Cart::where('user_id',Auth::id())->get();
        return view('cart', compact('cartitems'));
    }

    public function updateCart(Request $request){

        if(!Auth::check())
        {
            return response()->json(['status'=>"Need login"]);
            
        }
        $product_id = $request->input('product_id');
        $cartItemQty = $request->input('prod_qty');

        $product = Product::where('id',$product_id)->first();
        $stockQuantity = $product->quantity;
        if($stockQuantity < $cartItemQty )
        {
            return response()->json(['status'=>"Not enough quantity in stock"]);
        }
        if(!Cart::where('prod_id',$product_id)->where('user_id',Auth::id())->first())
        {
            return response()->json(['status'=>"Not found product"]);
        }
        $cart = Cart::where('prod_id',$product_id)->where('user_id',Auth::id())->first();
        $cart->prod_qty = $cartItemQty ;
        $cart->update();
        return response()->json(['status'=>"Quatity update"]);
        
        // if(Auth::check()){
            
        //     if(Cart::where('prod_id',$product_id)->where('user_id',Auth::id())->exists())
        //     {
        //         $cart = Cart::where('prod_id',$product_id)->where('user_id',Auth::id())->first();
        //         $cart->prod_qty = $prod_qty;
        //         $cart->update();
        //         return response()->json(['status'=>"Quatity update"]);
        //     }
        //     if(Cart::where('prod_id',$product_id)->where('user_id',Auth::id())->exists())
        //     {
        //         $cart = Cart::where('prod_id',$product_id)->where('user_id',Auth::id())->first();
        //         $product = Product::where('id',$product_id)->where('user_id',Auth::id());
        //         $product->quantity >= $cart->prod_qty;
        //         $cart->update();
        //         return response()->json(['status'=>"Quatity update"]);
        //     }
        // }
    }

    public function deleteProduct(Request $request){
        if(Auth::check())
        {
            $product_id = $request->input('product_id');
            if(Cart::where('prod_id',$product_id)->where('user_id',Auth::id())->exists())
            {
                $cartItem = Cart::where('prod_id',$product_id)->where('user_id',Auth::id())->first();
                $cartItem -> delete();
                return response()->json(['status'=> "Product Deleted Successfully"]);
            }
        }
        else{
            return response()->json(['status'=>"Login to Continue"]);
        }
    }
}
