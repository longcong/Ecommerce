<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Product;
use Illuminate\Support\Facades\Auth;
use App\Order;
use App\OrderItem;
use phpDocumentor\Reflection\Types\Null_;
use App\User;

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
    public function placeOrder(Request $request)
    {
        $order = new Order();
        $order->user_id = Auth::id();
        $order->fname = $request->input('fname');
        $order->lname = $request->input('lname');
        $order->cname = $request->input('cname');
        $order->address1 = $request->input('address1');
        $order->address2 = $request->input('address2');
        $order->city = $request->input('city');
        $order->state = $request->input('state');
        $order->zipcode = $request->input('zipcode');
        $order->email = $request->input('email');
        $order->phone = $request->input('phone');
        $order->note = $request->input('note');

        $total = 0;
        $cartitemsTotal = Cart::where('user_id',Auth::id())->get();
        foreach($cartitemsTotal as $prod)
        {
            $total += ($prod->products->price - $prod->products->discount_value) * $prod->prod_qty ;
        }

        $order->total_price = $total;

        $order->tracking_no= 'Ánh'.rand(1111,9999);
        $order->save();

        $cartitems = Cart::where('user_id',Auth::id())->get();
        foreach($cartitems as $item)
        {
            OrderItem::create([
                'order_id'=> $order->id,
                'product_id'=> $item->prod_id,
                'quantity' => $item->prod_qty,
                'price' => $item-> products->price,
            ]);

            $prod = Product::where('id',$item->prod_id)->first();
            $prod->quantity = $prod->quantity - $item->prod_qty;
            $prod->update();
        }

        if(Auth::user()->address1 == NULL)
        {
            $user = User::where('id', Auth::id())->first();
            $user->fname = $request->input('fname');
            $user->lname = $request->input('lname');
            $user->cname = $request->input('cname');
            $user->address1 = $request->input('address1');
            $user->address2 = $request->input('address2');
            $user->city = $request->input('city');
            $user->state = $request->input('state');
            $user->zipcode = $request->input('zipcode');
            $user->email = $request->input('email');
            $user->phone = $request->input('phone');
            $user->note = $request->input('note');
            $user->update();

        }
        $cartitems = Cart::where('user_id',Auth::id())->get();
        Cart::destroy($cartitems);

        return redirect('order-info')->with('status',"Order placed Successfully");
    }
    public function info()
    {
        $orders = Order::where('user_id',Auth::id())->first();
        $products = Product::orderBy('id','desc')->paginate(10);
        $users = User::where('id', Auth::id())->first();
        return view('components.order.index', compact('orders','products','users'));
    }
}
