@extends('layouts.admin')

@section('title', '| Quản lý đơn hàng')

@section('content')


<div class="card-body">
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h4>Đơn Hàng Hiện Tại
                        <a href="{{ 'order-history' }}" class="btn btn-primary float-end">Lịch Sử Đơn Hàng</a>
                    </h4>
                </div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="order1">
                                <th>ID</th>
                                <th>Tổng giá tiền</th>
                                <th>Địa chỉ</th>
                                <th>ngày đặt hàng</th>
                                <th>trạng thái</th>
                                <th>hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $item)
                                <tr class="order1">
                                    <td>{{ $item->tracking_no }}</td>
                                    <td>{{ $item->total_price }}</td>
                                    <td>{{ $item->address1 }}</td>
                                    <td>{{ date('d-m-Y', strtotime($item->created_at)) }}</td>
                                    <td>
                                        <div class="form-check form-switch ps-0 is-filled" >
                                            <input data-id="{{$item->id}}" class="toggle-class form-check-input ms-auto" type="checkbox" {{ $item->status ? 'checked' : '' }}>                                        
                                        </div>
                                    </td>
                                    <td class="order1">
                                        <a href="{{ url('admin/view-order/'.$item->id) }}"
                                            class="btn btn-primary">xem chi tiết</a>
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
                var status = $(this).prop('checked') == true ? 1 : 0;  
                var order_id = $(this).data('id');   
                $.ajax({ 

                    type: "GET", 
                    dataType: "json", 
                    url: 'update/order', 
                    data: {'status': status, 'order_id': order_id }, 
                    success: function(response){
                        alert(response.status);
                    } 
                }); 
            }) 
        }); 
    </script>
@endsection
