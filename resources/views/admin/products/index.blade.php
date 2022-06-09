@extends('layouts.admin')

@section('title', '| All Products')

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
            <table id="tblabc" class="table">
                <thead >
                    <th>ID</th>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Code</th>
                    <th>Quantity</th>
                    <!-- <th>Discount</th> -->
                    <th>Image</th>
                    <th>Note</th>
                    <th>Created At</th>
                    <th class="order1">action</th>
                </thead>

                <tbody>
                    @foreach($products as $post)

                        <tr>
                            <th class="id-product"></th>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->price }}</td>
                            <!-- <td>{{ $post->discount_unit}}</td> -->
                            <td>{{ $post->quantity}}</td>
                            <td>{{ $post->discount_value}}</td>
                            <td><img src="{{asset('images/' . $post->image)}}" height="100" width="100" alt="This is a Photo"></td>
                            <td>{{ substr($post->note, 0, 50) }} {{ strlen($post->note) >50 ? "..." : "" }}</td>
                            <td>{{ date('M j, Y', strtotime($post->created_at)) }}</td>
                            <td class="order1"><a href="{{ route('products.show', $post->id) }}" class="btn btn-primary btn-sm" style="margin-right:3px;">View</a><a href="{{ route('products.edit' , $post->id )}}" class="btn btn-info btn-sm">Edit</a></td>
                        </tr>

                    @endforeach
                </tbody>
            </table>
            
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    var elth = document.getElementsByClassName('id-product');
    for(var i =0; i <elth.length; i++){
        elth[i].innerHTML = i + 1;
    }
</script>
@endsection