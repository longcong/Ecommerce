<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Order;
use App\OrderItem;
use App\Product;
use Illuminate\Http\Request;

class FontendController extends Controller
{
    public function index(){
        $total_final = 0;
        $orders   = Order::whereMonth('created_at', date('10'))
                         ->whereYear('created_at', date('2022'))
                         ->where('status','1')
                         ->get(['total_price','created_at']);
        
        $sumtotal = $orders->sum('total_price');
        

        $import_price = Order::whereMonth('created_at', date('10'))
                         ->whereYear('created_at', date('2022'))
                         ->where('status','1')
                         ->get(['import_price','created_at']);
        $total_import = $import_price->sum('import_price');
        
        
        $sale     = OrderItem::whereMonth('created_at', date('10'))
                             ->whereYear('created_at', date('2022'))
                             ->orderBy('id')->get();
        
        //dd($sale);
        // $total_import = 0;
        // $total = 0;
        
        // foreach ($sale as $import) {
        //     $total_import += $import->products->import_price * $import->quantity;

        // }
        // foreach ($sale as $key => $item) {
        //     $total += ($item->products->price - $item->products->discount_value) * $item->quantity;
        // }
        $total_final += $sumtotal - $total_import;
        //dd($total_final, $total, $total_import);
        //dd($sumtotal,'doanh thu', $total_import,'tổng nhập',$total_final,'lợi nhuận');
        return view('admin.dashboard.index',compact('sumtotal','total_final'));
    }
    public function profit(Request $request)
    {
        $from=$request->start_date;
        $to= $request->end_date;
        //dd($request->start_date, $request->end_date);
        //dd($from, $to);
        $lol   = Order::where('status','1')
                         ->whereBetween('created_at', [$from, $to])
                         ->get(['total_price','created_at']);
        dd($lol->sum('total_price'));
    }
}
