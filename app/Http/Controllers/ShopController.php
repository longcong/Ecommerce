<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\ProductInterface;
use App\Product;

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
        $brand = $productService->getBrands();
        return view('shop', compact('products','populars','brand'));
    }
    public function search(Request $request)
    {
        $request->validate([
            'query' => 'required|min:2',
        ]);
        $query = $request->input('query');
        $products_filter = Product::where('title', 'like', "%$query%")
                            ->orWhere('note', 'like', "%$query%")
                            ->paginate(4);
        return view('search-results', compact('products_filter'));
    }
}
