<?php

namespace App\Http\Controllers;

use App\Product;

class ProductListController extends Controller
{
    protected $sorting;
    protected  $pagesize;
    public function Mount()
    {
        $this->sorting  = 'default';
        $this->pagesize = 4;
    }
    public function index(){
        $products = Product::orderBy('id','desc')->paginate(4);
        return view('list')->withProducts($products);
    }

}
