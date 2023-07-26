@extends('layouts.admin')

@section('title', '| Quản lý sản phẩm')

@section('content')

<div class="row">
    <div class="col-md-9">
        <h1>Tất cả sản phẩm</h1>
    </div>

    <div class="col-md-3" style="text-align: right">
        <a href="{{ route('products.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Thêm mới sản phẩm</a>
    </div>
</div>

<div class="card">
    <div class="row">
        <div class="col-md-12">
            <table id="tblabc" class="table table-bordered">
                <thead class="order1" >
                    <th>ID</th>
                    <th>Tên</th>
                    <th>Giá</th>
                    <!-- <th>Mã giảm giá</th> -->
                    <th>Số lượng</th>
                    <th>Giảm giá</th>
                    <th>Ảnh</th>
                    <th>Mô tả</th>
                    <th>Thời gian tạo</th>
                    <th>Hoạt động</th>
                </thead>

                <tbody>
                    @foreach($products as $post)

                        <tr class="order1">
                            <th class="id-product"></th>
                            <td>{{ $post->title }}</td>
                            <td>{{ number_format($post->price) }} đ</td>
                            <!-- <td>{{ $post->discount_unit}}</td> -->
                            <td>{{ $post->quantity}}</td>
                            <td>{{ number_format($post->discount_value) }} đ</td>
                            <td><img src="{{asset('images/' . $post->image)}}" height="100" width="100" alt="This is a Photo"></td>
                            <td>{{ substr($post->note, 0, 20) }} {{ strlen($post->note) > 20 ? "..." : "" }}</td>
                            <td>{{ date('M j, Y', strtotime($post->created_at)) }}</td>
                            <td>
                                <div class="dropdown show">
                                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="{{ route('products.show', $post->id) }}">Xem chi tiết</a>
                                        <a class="dropdown-item" href="{{ route('products.edit' , $post->id) }}">Chỉnh sửa</a> 
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            
        </div>
        <div class="row">
            {!! $products->links(); !!}
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