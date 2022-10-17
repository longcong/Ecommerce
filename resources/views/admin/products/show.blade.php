@extends('layouts.admin')

@section('title', '| Chi tiết sản phẩm')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-7">
                <div>
                    <h1> {{ $product->title }}</h1>
                    <div class="tags">
                        @foreach($product->tags as $tag)
                            <span class="l1">{{ $tag -> name }}</span>
                        @endforeach
                    </div>
                </div>
                <br>
                <img src="{{ asset('images/' . $product->image) }}" height="500" width="500"
                    alt="This is a Photo">
                <p class="lead">Ảnh 1</p>

                <hr>
                <div class="md-5">
                    <img src="{{ asset('meta_images/' . $product->meta_image) }}" height="200" width="200"
                        alt="This is a Photo">
                        <br>
                    <p class="lead">Ảnh 2</p>
                </div>
            </div>

            <div class="col-md-5">
                <div class="well pr-edit">
                    <dl class="dl-horizontal">
                        <label>Url:</label>
                        <p><a
                            href="{{ route('detail.productdetail', $product->slug) }}">{{ route('detail.productdetail', $product->slug) }}</a>
                        </p>
                    </dl>

                    <dl class="dl-horizontal">
                        <label>Danh Mục:</label>
                        <p>{{ $product->category->name }}</p>
                    </dl>

                    <dl class="dl-horizontal">
                        <label>Thịnh hành:</label>
                        <p>{{ $product->is_popular }}</p>
                    </dl>
                    <dl class="dl-horizontal">
                        <label>Nhãn hàng:</label>
                        <p>{{ $product->brand->name }}</p>
                    </dl>
                    <dl class="dl-horizontal">
                        <label>Số lượng:</label>
                        <p>{{ $product->quantity }}</p>
                    </dl>

                    <dl class="dl-horizontal">
                        <label>Giá:</label>
                        <p>{{number_format($product->price) }} đ</p>
                    </dl>

                    <dl class="dl-horizontal">
                        <label>Giảm giá:</label>
                        <p>{{ number_format($product->discount_value) }} đ</p>
                    </dl>
                    <dl class="dl-horizontal">
                        <label>Size:</label>
                        <p>{{ $product->product_size }}</p>
                    </dl>
                    @if($product->product_color == null)
                    @else
                        <dl class="dl-horizontal">
                            <label>màu:</label>
                            <p>{{ $product->product_color }}</p>
                        </dl>
                    @endif
                    <dl class="dl-horizontal">
                        <label>Nội dung:</label>
                        <p>{{ substr($product->note, 0, 20) }} {{ strlen($product->note) > 20 ? "..." : "" }}</p>
                    </dl>

                    <dl class="dl-horizontal">
                        <label>Ngày Tạo:</label>
                        <p>{{ date('M j, Y h:ia', strtotime($product->created_at)) }}
                        </p>
                    </dl>

                    <dl class="dl-horizontal">
                        <label>Ngày Cập Nhật:</label>
                        <p>{{ date('M j, Y h:ia', strtotime($product->updated_at)) }}
                        </p>
                    </dl>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            {!! Html::linkRoute('products.edit', 'Chỉnh sửa', array($product->id), array('class' => 'btn
                            btn-primary btn-block')) !!}
                        </div>
                        <div class="col-sm-2">
                            {{ Form::open(array('method' => 'DELETE', 'route' => array('products.destroy', $product->id), 'onsubmit' => 'return confirm_delete()')) }}
                            {{ Form::submit('Xóa sản phẩm', array('class' => 'btn btn-info')) }}
                            {{ Form::close() }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            {{ Html::linkRoute('products.index', '<< Tất cả sản phẩm',[],['class'=>'btn btn-info btn-block btn-h1-spacing']) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
