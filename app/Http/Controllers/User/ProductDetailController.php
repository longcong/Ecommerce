<?php

namespace App\Http\Controllers\User;

use App\Brands;
use App\Cart;
use App\Category;
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

        $color = $product->product_color;
        $product_color = explode(',',$color);

        $size = $product->product_size;
        // $product_size = explode(',',$size);
        // foreach($product_size as $s){
        //     echo $s.'<br>';
        // };
        //return response()->json($product_size);
        $product_size = explode(',',$size);

        return view('user.detail.productdetail',compact('product','cartitems','product_color','product_size'));
    }
    public function getBrand(Request $request,ProductInterface $productService, $slug)
    {
        if($filter_brand = Brands::where('slug', $slug)->first()) {
            $filter_brand = Brands::where('slug', $slug)->first();
            $product_filter = Product::where('brand_id',$filter_brand->id)->paginate(4);
        }
        return view('user.detail.branddetail',compact('filter_brand','product_filter'));
    }

    public function GetCategories(Request $request, $slug)
    {
        if($filter_category = Category::where('slug', $slug)->first()) {
            $filter_category = Category::where('slug', $slug)->first();
            $product_filter = Product::where('category_id',$filter_category->id)->paginate(4);
        }
        return view('user.category.category_detail',compact('filter_category','product_filter'));
    }
    public function updateCart2 (Request $request){

        if(!Auth::check())
        {
            return response()->json(['status'=>"Need login"]);
            
        }
        $product_id = $request->input('prod_id');
        $cartItemQty = $request->input('prod_qty');
        if($cartItemQty == 0){
            if(Cart::where('prod_id',$product_id)->where('user_id',Auth::id())->exists()){
                $cart = Cart::where('prod_id',$product_id)->where('user_id',Auth::id())->first();
                $cart->prod_qty = $cart->prod_qty + 1;
                $cart->update();
            }
        }
        else{
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
}
