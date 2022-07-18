<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Product;

class FontendController extends Controller
{
    public function index(){
        $products = Product::orderBy('id','desc');
        return view('admin.dashboard.index', compact('products'));
    }
}
