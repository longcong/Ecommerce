<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function viewpayment(Request $request)
    {   
        if($request->isMethod('get')){
            
            $payment = new Payment();

            $payment->partnerCode = $request->partnerCode;
            $payment->order_id    = $request->orderId;
            $payment->request_id  = $request->requestId;
            $payment->amount      = $request->amount;
            $payment->order_info  = $request->orderInfo;
            $payment->order_type  = $request->orderType;
            $payment->trans_id    = $request->transId;
            $payment->pay_type    = $request->payType;

            $payment->save();
            $request->session()->flash('success', 'Your order has been paid!');
            $cartitems = Cart::where('user_id',Auth::id())->get();
            return view('checkout', compact('cartitems'));
        }
        
    }
}
