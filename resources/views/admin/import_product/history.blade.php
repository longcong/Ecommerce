@extends('layouts.admin')

@section('title', '| Lịch sử nhập hàng')

@section('content')

<div class="row">
    <div class="col-md-9">
       
    </div>
</div>

<div class="card">
    <div class="row">
        <div class="card">
            <div class="card-header">
            <h4>Lịch sử nhập hàng
                    <a href="{{ route('import.index') }}" class="btn btn-primary float-end">Trở về</a>
                </h4>
                <div class="col-md-12">
                    <table id="tblabc" class="table table-bordered">
                        <thead class="order1" >
                            <th>ID</th>
                            <th>Tên Sản Phẩm</th>
                            <th>Giá Cũ</th>
                            <th>Giá Bán</th>
                            <th>Số lượng</th>
                            <th>Ngày tạo</th>
                        </thead>

                        <tbody>
                            @foreach($import as $productImport)

                                <tr class="order1">
                                    <th class="id-product"></th>
                                    <td>{{ $productImport->title }}</td>
                                    <td>{{ number_format($productImport->price) }} đ</td>
                                    <td>{{ number_format($productImport->price) }} đ</td>
                                    <td>{{ $productImport->quantity }}</td>
                                    <td>{{ date('M j, Y', strtotime($productImport->created_at)) }}</td>
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

@section('scripts')
<script>
    var elth = document.getElementsByClassName('id-product');
    for(var i =0; i <elth.length; i++){
        elth[i].innerHTML = i + 1;
    }
</script>
@endsection