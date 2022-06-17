<?php

namespace App\Http\Controllers\Admin;

use App\Coupon;
use App\Http\Controllers\Controller;
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // $this-> Validate($request, array(
        //  'title' =>  'required|max:255',
        //  'description' => 'required|max:255',
        //  'type' => 'required|max:255',
        //  'seller_id' => 'required|integer',
        //  'code' => 'required|unique:coupons,code',
        //  'detail' => 'required',
        //  'discount_coup'  => 'required|max:255',
        //  'discount_type' => 'required|max:255',
        //  'expiry_date' => 'required|integer',
        //  'end_date'  => 'required|integer', 
        //));

        $coupon = new Coupon;

        $coupon->title=$request->title;
        $coupon->description=$request->description;
        $coupon->type=$request->type;
        $coupon->seller_id=$request->seller_id;
        $coupon->code=$request->code;
        //$coupon->detail = $request->detal;
        $coupon->discount_coup=$request->discount_coup;
        $coupon->discount_type = $request->discount_type;
        $coupon->expiry_date = $request->expiry_date;
        // $coupon->end_date = $request->end_date;
        $coupon->save();
        $request->session()->flash('success', 'The coupon has been created successfully!');
      
        return redirect()->route('coupons.show', $coupon->id);
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
    public function update(Request $request, $id)
    {
        $coupons=Coupon::find($id);

        $coupons->title=$request->input('title');
        $coupons->description=$request->input('description');
        $coupons->type=$request->input('type');
        $coupons->seller_id=$request->input('seller_id');
        $coupons->code=$request->input('code');
        //$coupons->detail = $request->detal;
        $coupons->discount_coup=$request->input('discount_coup');
        $coupons->discount_type = $request->input('discount_type');
        $coupons->expiry_date = $request->input('expiry_date');
        // $coupons->end_date = $request->input('end_date');

        $coupons->save();
        $request->session()->flash('success', 'The coupon update successfully save!');
      
        return redirect()->route('coupons.show', $coupons->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $coupon=Coupon::find($id);
        $coupon->delete();

        $request->session()->flash('success', 'The coupon was successfully delete!');

        return redirect()->route('coupons.index');
    }
}
