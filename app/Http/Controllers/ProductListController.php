<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductListController extends Controller
{
    //
    public function index(){
        $products = Product::orderBy('id','desc')->paginate(2);

        return view('list')->withProducts($products);
    }
}
