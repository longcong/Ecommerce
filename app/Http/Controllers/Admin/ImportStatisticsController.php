<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\ImportProduct;
use Illuminate\Http\Request;

class ImportStatisticsController extends Controller
{
    public function ProductStatistcs()
    {
        $importProducts = ImportProduct::orderBy('prod_id','asc')->orderBy('created_at','asc')->get();
        return view('admin.import_product_stages',Compact('importProducts'));
    }
}
