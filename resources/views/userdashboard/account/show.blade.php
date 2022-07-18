@extends('layouts.userdashboard')

@section('title', '| Information Details User')

@section('content')
<div class="card-body">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>User Information<a href="{{ route('dashboard') }}"
                                class="btn btn-primary float-end">Back</a></h4>
                        <hr>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 mt-3">
                                <label for="">Full Name</label>
                                <div class="p-2 border">
                                    {{ $account->fname }}&nbsp;{{ $account->lname }}
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <label for="">Email</label>
                                <div class="p-2 border">{{ $account->email }}</div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <label for="">Company</label>
                                <div class="p-2 border">{{ $account->company }}</div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <label for="">Phone</label>
                                <div class="p-2 border">{{ $account->phone }}</div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <label for="">Address 1</label>
                                <div class="p-2 border">{{ $account->address1 }}</div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <label for="">Address 2</label>
                                <div class="p-2 border">{{ $account->address2 }}</div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <label for="">City</label>
                                <div class="p-2 border">{{ $account->city }}</div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <label for="">State</label>
                                <div class="p-2 border">{{ $account->state }}</div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <label for="">Zip Code</label>
                                <div class="p-2 border">{{ $account->zipcode }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
