<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\ImportProduct;
use App\Interfaces\ProductInterface;
use App\Product;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ImportProductController extends Controller
{
    public function index(Request $request, ProductInterface $productService)
    {
        $productImports = $productService->getProductImport();
        return view('admin.import_product.index',compact('productImports'));
    }
    public function edit($id)
    {
        $importProduct = Product::find($id);
        return view('admin.import_product.import',compact('importProduct'));
    }
    
    public function update(Request $request, $id){
        //dd($request->all());
        try {
            DB::beginTransaction();
            $product               = Product::find($id);
            $oldprice              = $product->price;
            $product->price        = $request->price;
            $product->import_price = $request->importPrice;
            $product->quantity     = $request->quantity;
            //dd($product);
            $product->save();

            $import                = new ImportProduct();
            $import->prod_id       = $product->id;
            $import->title         = $product->title;
            $import->old_price     = $oldprice;
            $import->import_price  = $request->importPrice;
            $import->price         = $request->price;
            $import->quantity      = $request->quantity;
            $import->save();
            //dd($import, $product);
            DB::commit();
            $request->session()->flash('success', 'Mặt hàng đã được cập nhật thành công!');
            return redirect()->route('import.index');
        } catch(Exception $e) {
            dd(123);
            DB::rollBack();
            Log::error('Error import',['error' => $e->getMessage()]);
            $request->session()->flash('error', 'Mặt hàng cập nhật thất bại!');
            return redirect()->back();
        }
    }
    public function importHistory()
    {
        $import = Importproduct::orderBy('id','desc')->orderBy('created_at','desc')->get();  
        return view('admin.import_product.history', compact('import'));
    }
}
