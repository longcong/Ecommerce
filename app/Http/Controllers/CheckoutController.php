<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class CheckoutController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::orderBy('created_at', 'desc')->limit (4)->get();
        return view('checkout')->withProduct($products);
    }
}
