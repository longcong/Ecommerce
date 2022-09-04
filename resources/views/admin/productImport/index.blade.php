@extends('layouts.admin')

@section('title', '| Import Products')

@section('content')

<div class="row">
    <div class="col-md-9">
        <h1>Import Products</h1>
    </div>
</div>

<div class="card">
    <div class="row">
        <div class="col-md-12">
            <table id="tblabc" class="table table-bordered">
                <thead class="order1" >
                    <th>ID</th>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>size S</th>
                    <th>size M</th>
                    <th>size L</th>
                    <th>Created At</th>
                    <th>Action</th>
                </thead>

                <tbody>
                    @foreach($productImports as $productImport)

                        <tr class="order1">
                            <th class="id-product"></th>
                            <td>{{ $productImport->title }}</td>
                            <td>{{ number_format($productImport->price) }} đ</td>
                            <td>{{ $productImport->quantity }}</td>
                            <td>{{ $productImport->sizeS }}</td>
                            <td>{{ $productImport->sizeM }}</td>
                            <td>{{ $productImport->sizeL }}</td>
                            <td>{{ date('M j, Y', strtotime($productImport->created_at)) }}</td>
                            <td>
                                <div class="dropdown show">
                                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="{{ route('import.create', $productImport->id) }}">Import</a>
                                    </div>
                                </div>
                            </td>
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