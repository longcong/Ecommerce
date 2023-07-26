<?php

namespace App\Http\Controllers\Admin;

use App\Cart;
use App\Http\Controllers\Controller;
use App\Interfaces\ProductInterface;
use App\Order;
use App\OrderItem;
use App\Product;
use App\User;
use App\WaitCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index(Request $request, ProductInterface $productService)
    {
        $orders = $productService->getOrder();
        return view('admin.orders.index', compact('orders'));
    }
    public function view(Request $request, $id, ProductInterface $productService)
    {
        $orders = Order::where('id', $id)->first();
        $users  = User::where('id',Auth::id())->first();
        return view('admin.orders.view', compact('orders','users'));
    }
    public function updateorder(Request $request)
    {
        
        $orders         = Order::find($request->order_id);
        $orders->status = $request->status;
        if ($request->status == '1') {
            $orderitems = OrderItem::where('order_id',$request->order_id)->get();
            foreach($orderitems as $item) {

                $item->status = $request->status;
                $item->save();

                $prod = Product::where('id',$item->product_id)->first();
                $prod->quantity = $prod->quantity - $item->quantity;
                $prod->update();
            }
        }

        $orders->save();
        return redirect()->route('h');
    }
    public function orderhistory()
    {
        $orders = Order::all();
        return view('admin.orders.history', compact('orders'));
    }
    public function status(Request $request)
    {
        // $orders = Order::where('status','1')->get();
    }

}


