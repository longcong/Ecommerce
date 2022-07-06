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
                            <tr style="text-align:center">
                                <th>Coupon Code</th>
                                <th>Coupon Type</th>
                                <th>Coupon Discount</th>
                                <th>Expiry Date</th>
                                <th>Active</th>
                                <th class="order1">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($coupons as $coupon)
                                <tr style="text-align:center;">
                                    <td>{{ $coupon->code }}</td>
                                    <td>{{ $coupon->type }}</td>
                                    <td>
                                        @if($coupon->discount_type == 'Amount')
                                                ${{ $coupon->discount_coup }}.00
                                        @else
                                                {{ $coupon->discount_coup }}.00%
                                        @endif
                                    </td>
                                    <td>{{ $coupon->expiry_date }}</td>
                                    <td>{{ $coupon->is_active == '1' ? 'Active' : 'Inactive' }}</td>
                                    <td class="order1">
                                        <a 
                                            href="{{ route('coupons.show', $coupon->id) }}" class="btn btn-primary btn-sm" style="margin-right:3px;">
                                            View
                                        </a>
                                        <a 
                                            href="{{ route('coupons.edit' , $coupon->id )}}" class="btn btn-info btn-sm">
                                            Edit
                                            
                                        </a>
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
