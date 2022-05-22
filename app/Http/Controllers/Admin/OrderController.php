<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::where('status','0')->get();
        return view('admin.orders.index', compact('orders'));
    }
    public function view($id)
    {
        $orders = Order::where('id', $id)->get();
        return view('admin.orders.view', compact('orders'));
    }
}
