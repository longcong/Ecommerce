@extends('layouts.admin')

@section('title', '| Coupon Detail')

@section('content')
<div class="card-body">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Mã giảm giá
                            <a href="{{ route('coupons.index') }}"
                                class="btn btn-primary float-end">
                                Trở lại
                            </a>
                            <a 
                                href="{{ route('coupons.edit' , $coupon->id )}}" class="btn btn-info float-end" style="margin-right:4px;">
                                Chỉnh sửa
                            </a>
                        </h4>
                                
                        <hr>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 mt-3">
                                <label for="">Tiêu đề</label>
                                <div class="p-2 border">{{ $coupon->title }}</div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <label for="">Người tạo</label>
                                @if( $coupon->seller_id == '')
                                    <div class="p-2 border">Null</div>
                                
                                @else
                                    <div class="p-2 border">{{ $coupon->seller_id }}</div>
                                @endif
                            </div>
                            <div class="col-md-4 mt-3">
                                <label for="">Mã giảm giá</label>
                                <div class="p-2 border">{{ $coupon->code }}</div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <label for="">Giảm giá theo</label>
                                <div class="p-2 border">{{ $coupon->type == 'Category_base' ? 'Danh mục' : 'Giỏ hàng' }}</div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <label for="">Giá tiền theo</label>
                                <div class="p-2 border">{{ $coupon->discount_type == 'Amount' ? 'Giá tiền' : 'Phần trăm' }}</div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <label for="">Giá</label>
                                @if($coupon->discount_type == 'Amount')
                                    <div class="p-2 border">
                                        {{ number_format($coupon->discount_coup) }}đ
                                    </div>
                                @else
                                    <div class="p-2 border">
                                        {{ $coupon->discount_coup }}.00%
                                    </div>
                                @endif
                            </div>
                            @if($coupon->quantity == null)
                                <div class="col-md-4 mt-3">
                                    <label for="">Số lượng</label>
                                    <div class="p-2 border">Out of stock</div>
                                </div>
                            @else
                                <div class="col-md-4 mt-3">
                                    <label for="">Số lượng</label>
                                    <div class="p-2 border">{{ $coupon->quantity }}</div>
                                </div>
                            @endif
                            <div class="col-md-4 mt-3">
                                <label for="">Ngày bắt đầu</label>
                                <div class="p-2 border">{{  $coupon->start_date  }}</div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <label for="">Ngày hết hạn</label>
                                <div class="p-2 border">{{  $coupon->expiry_date  }}</div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <label for="">Người tạo</label>
                                <div class="p-2 border">{{ $coupon->seller_id == '1' ? 'Admin' : 'Users' }}</div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <label for="">Hoạt động</label>
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
