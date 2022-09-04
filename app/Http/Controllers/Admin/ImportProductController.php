<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\ImportProduct;
use App\Interfaces\ProductInterface;
use Illuminate\Http\Request;
use App\Product;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ImportProductController extends Controller
{
    public function index(Request $request, ProductInterface $productService)
    {
        $productImports = $productService->getProductImport();
        return view('admin.productImport.index',compact('productImports'));
    }
    public function edit($id)
    {
        $importProduct = Product::find($id);
        return view('admin.productImport.import',compact('importProduct'));
    }
    
    public function update(Request $request, $id){
        //dd($request->all());
        try{
            DB::beginTransaction();
            $product               = Product::find($id);
            $oldprice              = $product->price;
            $product->price        = $request->price;
            $product->sizeS        = $request->sizeS;
            $product->sizeM        = $request->sizeM;
            $product->sizeL        = $request->sizeL;
            $product->quantity     = $request->sizeS + $request->sizeM + $request->sizeL;
            $product->save();

            $import                = new ImportProduct();
            $import->prod_id       = $product->id;
            $import->title         = $product->title;
            $import->oldPrice      = $oldprice;
            $import->importPrice   = $request->importPrice;
            $import->price         = $request->price;
            $import->sizeS         = $request->sizeS;
            $import->sizeM         = $request->sizeM;
            $import->sizeL         = $request->sizeL;
            $import->quantity      = $request->sizeS + $request->sizeM + $request->sizeL;
            $import->save();

            DB::commit();
            $request->session()->flash('success', 'The product update successfully save!');
            return redirect()->route('import.index');
        }catch(Exception $e){
            DB::rollBack();
            Log::error('Error import',['error' => $e->getMessage()]);
            $request->session()->flash('error', 'The product update error save!');
            return redirect()->back();
        }
    }
    public function importHistory()
    {
        $import = Importproduct::orderBy('prod_id','desc')->orderBy('created_at','desc')->get();   
        return view('admin.importProduct.history', compact('import'));
    }
}
