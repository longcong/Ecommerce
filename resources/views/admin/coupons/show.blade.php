@extends('layouts.admin')

@section('title', '| Coupon Detail')

@section('content')
<div class="card-body">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>User Details
                            <a href="{{ route('coupons.index') }}"
                                class="btn btn-primary float-end">
                                Back
                            </a>
                            <a 
                                href="{{ route('coupons.edit' , $coupon->id )}}" class="btn btn-info float-end" style="margin-right:4px;">
                                Edit
                            </a>
                        </h4>
                                
                        <hr>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 mt-3">
                                <label for="">Title</label>
                                <div class="p-2 border">{{ $coupon->title }}</div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <label for="">Seller_id</label>
                                @if( $coupon->seller_id == '')
                                    <div class="p-2 border">Null</div>
                                
                                @else
                                    <div class="p-2 border">{{ $coupon->seller_id }}</div>
                                @endif
                            </div>
                            <div class="col-md-4 mt-3">
                                <label for="">Code</label>
                                <div class="p-2 border">{{ $coupon->code }}</div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <label for="">Coupon_Type</label>
                                <div class="p-2 border">{{ $coupon->type }}</div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <label for="">Discount_Type</label>
                                <div class="p-2 border">{{ $coupon->discount_type }}</div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <label for="">Discount_Coupon</label>
                                @if($coupon->discount_type == 'Amount')
                                    <div class="p-2 border">
                                        ${{ $coupon->discount_coup }}.00
                                    </div>
                                @else
                                    <div class="p-2 border">
                                        {{ $coupon->discount_coup }}.00%
                                    </div>
                                @endif
                            </div>
                            <!-- <div class="col-md-4 mt-3">
                                <label for="">Quantity</label>
                                <div class="p-2 border">{{ $coupon->quantity }}</div>
                            </div> -->
                            <div class="col-md-4 mt-3">
                                <label for="">Expiry_Date</label>
                                <div class="p-2 border">{{  $coupon->expiry_date  }}</div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <label for="">Seller_id</label>
                                <div class="p-2 border">{{ $coupon->seller_id == '1' ? 'Admin' : 'Users' }}</div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <label for="">Active</label>
                                <div class="p-2 border">{{ $coupon->is_active == '1' ? 'Active' : 'Inactive' }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
