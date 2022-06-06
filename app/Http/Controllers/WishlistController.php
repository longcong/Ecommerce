<?php

namespace App\Http\Controllers;

use App\Interfaces\ProductInterface;
use App\Product;
use App\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function addWishlist(Request $request)
    {
        if (!Auth::check()) {
            return response()->json(['status' => "Login to Continue"]);
        }

        $prod_id = $request->input('product_id');
        if(!Product::find($prod_id))
        {
            return response()->json(['status' => "Product doesnot exist"]);
        }
        $wish = new Wishlist();
        $wish->prod_id = $prod_id;
        $wish->user_id = Auth::id();
        $wish->save();
        return response()->json(['status' => "Product Added to Wishlist"]);
    }
    public function viewwishlist(Request $request, ProductInterface $productService){
        $wishlist = $productService->getViewWishlist();
        return view('wishlist', compact('wishlist'));
    }
    public function deleteWishlist(Request $request){
        if(Auth::check())
        {
            $product_id = $request->input('product_id');
            if(Wishlist::where('prod_id',$product_id)->where('user_id',Auth::id())->exists())
            {
                $wish=Wishlist::where('prod_id',$product_id)->where('user_id',Auth::id())->first();
                $wish->delete();
                return response()->json(['status'=> "Item Remove from Wishlish"]);
            }
        }
        else{
            return response()->json(['status'=>"Login to Continue"]);
        }
    }
}
