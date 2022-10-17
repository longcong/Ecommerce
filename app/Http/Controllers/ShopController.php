<?php

namespace App\Http\Controllers;

use App\Category;
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
        $categories = Category::all();
        $productAoPhong = $productService->getAoPhong();
        $productAoPolo = $productService->getAoPolo();
        $productQuanDai = $productService->getQuanDai();
        $productQuanDui = $productService->getQuanDui();
       
        
        return view('shop', compact('products','populars','brand',
                    'categories','productAoPhong','productAoPolo','productQuanDai',
                    'productQuanDui'));
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
    public function autoCompleteAjax(Request $request)
    {
        $search = $request->term;
        $products = Product::where('title','like',"%$search%")
                    ->orWhere('note', 'like', "%$search%")->paginate(4);
        // dd($products);
        if(!$products->isEmpty())
        {
            foreach($products as $product)
            {
                
                $new_row['title']= $product->title;
	            $new_row['image']= url('images/' . $product->image);
                $new_row['url']= url('product/'. $product->slug);
                
                $row_set[] = $new_row; //build an array
            }
        }
        
        echo json_encode($row_set); 
    }
}
