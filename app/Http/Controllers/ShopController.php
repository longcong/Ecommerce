<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\ProductInterface;


class ShopController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request, ProductInterface $productService)
    {
        $products = $productService->getProducts();
        $populars = $productService->getPopulars();
        return view('shop', compact('products','populars'));
    }
}
