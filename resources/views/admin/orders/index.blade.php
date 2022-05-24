@extends('layouts.admin')

@section('title', '| Order All')

@section('content')


<div class="card-body">
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h4>New Order </h4>
                </div>
                
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Order Date</th>
                                <th>Tracking Number</th>
                                <th>Total Price</th>
                                <th>Status</th>
                                <th class="order1">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $item)
                            <tr>
                                <td>{{date('d-m-Y', strtotime($item->created_at))}}</td>
                                <td>{{$item->tracking_no}}</td>
                                <td>{{$item->total_price}}</td>
                                <td>{{$item->status == '0' ? 'pending' : 'completed'}}</td>
                                <td class="order1">
                                    <a href="{{url('view-orderuser/'.$item->id)}}" class="btn btn-primary">View</a>
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