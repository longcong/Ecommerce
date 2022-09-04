@extends('layouts.admin')

@section('title', '| Statistics')

@section('content')

<div class="row">
    <div class="col-md-9">
        <h1>Statistics Products</h1>
    </div>
</div>

<div class="card">
    <div class="row">
        <div class="col-md-12">
            <table id="tblabc" class="table table-bordered">
                <thead class="order1" >
                    <th>ID</th>
                    <th>Title</th>
                    <th>Old Price</th>
                    <th>Import Price</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>size S</th>
                    <th>size M</th>
                    <th>size L</th>
                    <th>Created At</th>
                </thead>

                <tbody>
                    @foreach($importProducts as $importProduct)

                        <tr class="order1">
                            <th class="id-product"></th>
                            <td>{{ $importProduct->title }}</td>
                            <td>{{ number_format($importProduct->oldPrice) }} đ</td>
                            <td>{{ number_format($importProduct->importPrice) }}</td>
                            <td>{{ number_format($importProduct->price) }} đ</td>
                            <td>{{ $importProduct->quantity }}</td>
                            <td>{{ $importProduct->sizeS }}</td>
                            <td>{{ $importProduct->sizeM }}</td>
                            <td>{{ $importProduct->sizeL }}</td>
                            <td>{{ date('M j, Y', strtotime($importProduct->created_at)) }}</td>
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