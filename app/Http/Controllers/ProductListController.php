<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductListController extends Controller
{
    //
    public function index(){
<<<<<<< Updated upstream
        $products = Product::orderBy('id','desc')->paginate(2);
=======
        $products = Product::orderBy('id','desc')->paginate(5);

>>>>>>> Stashed changes
        return view('list')->withProducts($products);
    }
}
