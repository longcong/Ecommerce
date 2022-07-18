@extends('layouts.userdashboard')

@section('title', '| Account Information')

@section('content')


<div class="card-body">
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h4>Account Information</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered ">
                        <thead>
                            <tr style="text-align: center;">
                                <th>Id</th>
                                <th>Username</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="text-align: center;">
                                <td>{{ $account->id }}</td>
                                <td>{{ $account->email }}</td>
                                <td>{{ $account->fname }}&nbsp;{{ $account->lname }}</td>
                                <td>{{ $account->email }}</td>
                                <td>{{ $account->phone }}</td>
                                <td>
                                    <div class="dropdown show">
                                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Action
                                        </a>

                                        <div class="dropdown-menu"  aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="{{ route('showaccount',$account->id) }}">View</a>
                                            <a class="dropdown-item" href="{{ route('update',$account->id) }}">Update</a>
                                            
                                        </div>
                                    </div>  
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('buy_script')
    
@endsection
