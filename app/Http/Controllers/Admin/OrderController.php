<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Order;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::where('status','0')->get();
        return view('admin.orders.index', compact('orders'));
    }
    public function view($id)
    {
        $orders = Order::where('id', $id)->first();
        $users = User::where('id',Auth::id())->first();
        return view('admin.orders.view', compact('orders','users'));
    }
    public function updateorder(Request $request, $id)
    {
        dd('cak');
        $orders = Order::find($id);
        $orders->status = $request->input('order_status');
        $orders->update();
        return redirect('orders')->with('status',"Order Update Successfully");
    }
    public function orderhistory()
    {
        $orders = Order::where('status','1')->get();
        return view('admin.orders.history', compact('orders'));
    }
}
