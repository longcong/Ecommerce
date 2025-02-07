@extends('layouts.admin')

@section('title', '| All Coupons')

@section('content')


<div class="card-body">
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h4>Mã giảm giá
                        <a href="{{ route('coupons.create') }}" class="btn btn-primary float-end">Tạo mới mã giảm giá</a>
                    </h4>
                </div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="order1">
                                <th>Mã giảm giá</th>
                                <th>Giảm giá theo</th>
                                <th>Giá tiền</th>
                                <th>Số lượng</th>
                                <th>Ngày bắt đầu</th>
                                <th>Ngày hết hạn</th>
                                <th>Trạng thái</th>
                                <th>Hoạt động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($coupons as $coupon)
                                <tr class="order1">
                                    <td>{{ $coupon->code }}</td>
                                    <td>{{ $coupon->type }}</td>
                                    <td>
                                        @if($coupon->discount_type == 'Amount')
                                                {{ number_format($coupon->discount_coup) }}đ
                                        @else
                                                {{ $coupon->discount_coup }}.00%
                                        @endif
                                    </td>
                                    
                                    <td>
                                        @if($coupon->quantity == null)
                                            Out of stock
                                        @else
                                            {{ $coupon->quantity }}
                                        @endif
                                    </td>
                                    <td>{{ $coupon->start_date }}</td>
                                    <td>{{ $coupon->expiry_date }}</td>
                                    <td>
                                        <div class="form-check form-switch ps-0 is-filled" >
                                            <input data-id="{{$coupon->id}}" class="toggle-class form-check-input ms-auto" type="checkbox" {{ $coupon->is_active ? 'checked' : '' }}>                                        
                                        </div>
                                    </td>
                                    <td class="order1">
                                        <div class="dropdown show">
                                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Hoạt động
                                            </a>

                                            <div class="dropdown-menu"  aria-labelledby="dropdownMenuLink" ">
                                                <a class="dropdown-item" href="{{ route('coupons.show', $coupon->id) }}">Xem</a>
                                                <a class="dropdown-item" href="{{ route('coupons.edit', $coupon->id) }}">Chỉnh sửa</a>  
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
    <script>
        
        $(function() { 
                $('.toggle-class').change(function() { 
                var is_active = $(this).prop('checked') == true ? 1 : 0;  
                var coupon_id = $(this).data('id');   
                $.ajax({ 

                    type: "GET", 
                    dataType: "json", 
                    url: 'update/active', 
                    data: {'is_active': is_active, 'coupon_id': coupon_id }, 
                    success: function(response){
                        alert(response.status);
                    } 
                }); 
            }) 
        }); 
            
    </script>
@endsection
