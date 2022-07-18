@extends('layouts.admin')

@section('title', '| Order Done')

@section('content')


<div class="card-body">
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h4>New History
                        <a href="{{ 'orders' }}" class="btn btn-primary float-end">New Order</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="order1">
                                <th>Tracking Number</th>
                                <th>Total Price</th>
                                <th>Address</th>
                                <th>Order Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $item)
                                <tr class="order1">
                                <td>{{ $item->tracking_no }}</td>
                                    <td>{{ $item->total_price }}</td>
                                    <td>{{ $item->address1 }}</td>
                                    <td>{{ date('d-m-Y', strtotime($item->created_at)) }}</td>
                                    <td>{{ $item->status == '0' ? 'Pending' : 'Completed' }}
                                    </td>
                                    <td>
                                        <div class="dropdown show">
                                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </a>
                                            <div class="dropdown-menu"  aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="{{  url('admin/view-order/'.$item->id) }}">View</a>
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
