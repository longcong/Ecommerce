@extends('layouts.admin')

@section('title', '| Nhập sản phẩm')

@section('content')

<div class="row">
    <div class="col-md-9">
       
    </div>
</div>

<div class="card">
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h4>Nhập sản phẩm
                    <a href="{{ route('import.importhistory') }}" class="btn btn-primary float-end">Lịch sử nhập hàng</a>
                </h4>
                <div class="col-md-12">
                    <table id="tblabc" class="table table-bordered">
                        <thead class="order1" >
                            <th>ID</th>
                            <th>Tên Sản Phẩm</th>
                            <th>Giá Bán</th>
                            <th>Số lượng</th>
                            <th>Ngày tạo</th>
                            <th>Hoạt Động</th>
                        </thead>

                        <tbody>
                            @foreach($productImports as $productImport)

                                <tr class="order1">
                                    <th class="id-product"></th>
                                    <td>{{ $productImport->title }}</td>
                                    <td>{{ number_format($productImport->price) }} đ</td>
                                    <td>{{ $productImport->quantity }}</td>
                                    <td>{{ date('M j, Y', strtotime($productImport->created_at)) }}</td>
                                    <td>
                                        <div class="dropdown show">
                                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Hoạt Động
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="{{ route('import.create', $productImport->id) }}">Nhập hàng</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                </div>
                <div class="row">
                    {!! $productImports->links(); !!}
                </div>
            </div>
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