@extends('layouts.admin')

@section('title', '| Đơn hàng thành công')

@section('content')


<div class="card-body">
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h4>Trạng thái đơn hàng
                        <a href="{{ 'orders' }}" class="btn btn-primary float-end">Đơn hàng</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="order1">
                                <th>ID</th>
                                <th>Tổng giá tiền</th>
                                <th>Địa chỉ</th>
                                <th>Ngày đặt hàng</th>
                                <th>Trạng thái</th>
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
                                        @if($item->status == '2')
                                            Đơn hàng giao không thành công
                                        @elseif($item->status == '1')
                                            đơn hàng thành công
                                        @else
                                            đơn đang chờ
                                        @endif
                                    </td>
                                    <td>
                                        <div class="dropdown show">
                                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Hành động
                                            </a>
                                            <div class="dropdown-menu"  aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="{{  url('admin/view-order/'.$item->id) }}">Xem chi tiết</a>
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
