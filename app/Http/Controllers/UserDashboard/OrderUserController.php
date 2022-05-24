<?php

namespace App\Http\Controllers\UserDashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;
use App\User;
use Illuminate\Support\Facades\Auth;

class OrderUserController extends Controller
{
    //
    public function vỉeworderuser(Request $request)
    {
        $orders = Order::where('user_id',Auth::id())->get();
        return view('userdashboard.orderuser.index', compact('orders'));
    }
    
    public function userview($id)
    {
        $orders = Order::where('id', $id)->first();
        $users = User::where('id',Auth::id())->first();
        return view('userdashboard.orderuser.userview', compact(['orders','users']));
    }
}

