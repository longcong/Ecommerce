<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\ProductInterface;
use Illuminate\Http\Request;

class ViewAdminPaymentController extends Controller
{
    public function index(Request $request, ProductInterface $productService)
    {
        $payments = $productService-> getPayments();
        return view('admin.payment.index',compact('payments'));
    }
}
