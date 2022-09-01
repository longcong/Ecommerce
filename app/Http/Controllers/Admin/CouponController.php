<?php

namespace App\Http\Controllers\Admin;

use App\Coupon;
use App\Http\Controllers\Controller;
use App\Http\Requests\CouponFormRequest;
use App\Interfaces\ProductInterface;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, ProductInterface $ProductService)
    {
        $coupons = $ProductService->getCoupons();
        return view('admin.coupons.view',compact('coupons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.coupons.create');
    }

    public function active(Request $request)
    {       
        $coupon = Coupon::find($request->coupon_id);
        $coupon->is_active = $request->is_active;
        $coupon->save();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CouponFormRequest $request)
    { 

        $coupon = new Coupon;
        $data = $request->validated();
        $coupon->start_date = $request->start_date;
        $coupon->expiry_date = $request->expiry_date;
        $coupon->fill($data);
        $coupon->save();
        $request->session()->flash('success', 'Tạo mới phiếu giảm giá thành công!');
      
        return redirect()->route('coupons.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $coupon = Coupon::findOrFail($id);
        return view('admin.coupons.show', compact(['coupon']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $coupons = Coupon::find($id);
        return view('admin.coupons.edit',compact('coupons'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CouponFormRequest $request, $id)
    {
        $coupons = Coupon::find($id);

        $data = $request->validated();
        $coupons->start_date = $request->input('start_date');
        $coupons->expiry_date = $request->input('expiry_date');
        $coupons->fill($data);
        $coupons->save();

        $request->session()->flash('success', 'Cập nhật phiếu giảm giá thành công!');
      
        return redirect()->route('coupons.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $coupon = Coupon::find($id);
        $coupon->delete();

        $request->session()->flash('success', 'Phiếu giảm giá đã được xóa đi!');

        return redirect()->route('coupons.index');
    }
    
}
