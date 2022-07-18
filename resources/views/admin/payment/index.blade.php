@extends('layouts.admin')

@section('title', '| Payments')

@section('content')


<div class="card-body">
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h4>Payments </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered ">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Order_ID</th>
                                <th>Request_ID</th>
                                <th>Amount</th>
                                <th>Order_Info</th>
                                <th>Trans_ID</th>
                                <th>Pay_Type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($payments as $payment)
                                <tr>
                                    <td>{{ $payment->id }}</td>
                                    <td>{{ $payment->order_id }}</td>
                                    <td>{{ $payment->request_id }}</td>
                                    <td>{{ $payment->amount }}</td>
                                    <td>{{ $payment->order_info }}</td>
                                    <td>{{ $payment->trans_id }}</td>
                                    <td>{{ $payment->pay_type }}</td>
                                    
                                    <td>
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
