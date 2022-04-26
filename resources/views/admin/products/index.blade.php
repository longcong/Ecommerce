@extends('layouts.admin')

@section('title', '| All Product')

@section('content')

<div class="row">
    <div class="col-md-10">
        <h1>All Product</h1>
    </div>

    <div class="col-md-2">
        <a href="{{ route('products.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Create New Product</a>
    </div>
    <div class="col-md-12">
    </div>
</div>

<div class="card">
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead >
                    <th style="padding-left: 1px;">#</th>
                    <th >Title</th>
                    <th style="padding-left: 1px;">Price</th>
                    <th style="padding-left: 1px;">Code</th>
                    <th style="padding-left: 1px;">Discount</th>
                    <th >Image</th>
                    <th style="padding-left: 1px;">Note</th>
                    <th style="padding-left: 1px;">Created At</th>
                    <th style="text-align:center;">action</th>
                </thead>

                <tbody>
                    @foreach($products as $post)

                        <tr>
                            <th>{{ $post->id }}</th>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->price }}</td>
                            <td>{{ $post->discount_unit}}</td>
                            <td>{{ $post->discount_value}}</td>
                            <td><img src="{{asset('images/' . $post->image)}}" height="100" width="100" alt="This is a Photo"></td>
                            <td>{{ substr($post->note, 0, 50) }} {{ strlen($post->note) >50 ? "..." : "" }}</td>
                            <td>{{ date('M j, Y', strtotime($post->created_at)) }}</td>
                            <td><a href="{{ route('products.show', $post->id) }}" class="btn btn-deault btn-sm">View</a><a href="{{ route('products.edit' , $post->id )}}" class="btn btn-default btn-sm">Edit</a></td>
                        </tr>

                    @endforeach
                </tbody>
            </table>
            <div class="row">
                {!! $products->links(); !!}
            </div>
        </div>
    </div>
</div>
@endsection