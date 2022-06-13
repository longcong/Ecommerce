<?php

namespace App\Http\Controllers;

use App\Cart;
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

        $product_id = $request->input('product_id');
        if(!Product::find($product_id))
        {
            return response()->json(['status' => "Product doesnot exist"]);
        }
        $wishlist = new Wishlist();
        $wishlist->product_id = $product_id;    
        $wishlist->user_id = Auth::id();
        $wishlist->save();
        return response()->json(['status' => "Product Added to Wishlist"]);
    }
    public function viewwishlist(Request $request, ProductInterface $productService){
        $wishlists = $productService->getViewWishlist();
        return view('wishlist', compact('wishlists'));
    }

    

    public function deleteWishlist(Request $request){
        if(!Auth::check())
        {
            return response()->json(['status'=>"Login to Continue"]);
        }
        
        $id = $request->input('id');
        if(Wishlist::where('id',$id)->where('user_id',Auth::id())->exists())
        {
            $wishlist = Wishlist::where('id',$id)->where('user_id',Auth::id())->first();
            $wishlist -> delete();
            return response()->json(['status'=> "Item Remove from Wishlish"]);
        }
        
    }
}
