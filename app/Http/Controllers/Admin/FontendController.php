<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;

class FontendController extends Controller
{
    //
    public function index(){

        $products = Product::orderBy('id','desc');
        return view('admin.dashboard.index')->withProducts($products);
    }
}
