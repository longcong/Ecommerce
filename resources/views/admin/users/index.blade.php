@extends('layouts.admin')

@section('title', '| Registered User')

@section('content')


<div class="card-body">
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h4>Registered users</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered ">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->username }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>
                                        <a href="{{ url('admin/view-user/'.$item->id) }}"
                                            class="btn btn-primary">View</a>
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
