@extends('layouts.admin')

@section('title', '| All Coupons')

@section('content')


<div class="card-body">
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h4>Coupons
                        <a href="{{ route('coupons.create') }}" class="btn btn-primary float-end">New Coupons</a>
                    </h4>
                </div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Coupon Code</th>
                                <th>Coupon Type</th>
                                <th>Coupon Discount</th>
                                <!-- <th>Cart Value</th> -->
                                <th>Start Date</th>
                                <th>End Date</th>
                                <!-- <th>Active</th> -->
                                <th class="order1">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($coupons as $item)
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="order1">
                                        <a href="#"
                                            class="btn btn-primary">View</a><a href="#">Edit</a>
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
