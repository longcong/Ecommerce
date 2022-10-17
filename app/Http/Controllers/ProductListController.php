<?php

namespace App\Http\Controllers;

use App\Product;

class ProductListController extends Controller
{
    protected $sorting;
    protected  $pagesize;
    public function Mount()
    {
        $this->sorting = 'default';
        $this->pagesize = 4;
    }
    public function index(){
        if($this->sorting === 'date') {
            $products = Product::orderBy('Create_at','desc')->paginate($this->pagesize);
        } elseif ($this->sorting === 'price') {
            $products = Product::orderBy('price','asc')->paginate($this->pagesize);
        } elseif ($this->sorting === 'price-desc') {
            $products = Product::orderBy('price','desc')->paginate($this->pagesize);
        } elseif ($this->sorting === 'populars') {
            $products = Product::orderBy('is_popular', 1)->paginate($this->pagesize);
        } else {
            $products = Product::paginate($this->pagesize);
        }
        return view('list')->withProducts($products);
    }

}
