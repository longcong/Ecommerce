<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Product;
use Illuminate\Support\Facades\Auth;
use App\Order;


class CheckoutController extends Controller
{
    public function index()
    {
        $old_cartitems = Cart::where('user_id',Auth::id())->get();
        foreach($old_cartitems as $item)
        {
            if(!Product::where('id', $item->prod_id)->where('quantity','>=',$item->prod_qty)->exists())
            {
                $removeItem = Cart::where('user_id',Auth::id())->where('prod_id', $item->prod_id)->first();
                $removeItem->delete();
            }
        }
        $cartitems = Cart::where('user_id',Auth::id())->get();
        return view('checkout', compact('cartitems'));
    }
    public function placeorder(Request $request)
    {
        $order = new Order();
        $order->fname = $request->input('fname');
        $order->fname = $request->input('lname');
        $order->fname = $request->input('cname');
        $order->fname = $request->input('address1');
        $order->fname = $request->input('address2');
        $order->fname = $request->input('city');
        $order->fname = $request->input('state');
        $order->fname = $request->input('zipcode');
        $order->fname = $request->input('email');
        $order->fname = $request->input('phone');
    }
}
