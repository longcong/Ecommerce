@extends('layouts.admin')

@section('title', '| Thêm mới sản phẩm')

@section('stylesheet')

    {!! Html::style('css/parsley.css') !!}
    {!! Html::style('css/select2.min.css') !!}

@endsection

@section('content')

<div class="card">
    <div class="card-body">
        <div class="container">
            <h1 class="text-center">Thêm mới sản phẩm</h1>
            <hr>
            <div class="row">
                {!! Form::open(['route' => 'products.store','data-parsley-validate' =>'', 'files' => true]) !!}
                    <div class="row g-2 align-items-center">
                        <div class="col-1">
                            {{ Form::label('title','Tên:',array('style' => 'margin-top: 10px;')) }}
                        </div>
                        <div class="col-11">
                            {{ Form::text('title',null, array('class'=>'form-control','required' => '', 'maxlength' => '255','placeholder' => 'Title' ))  }}
                        </div>
                    </div>
                    
                    <div class="row g-2 align-items-center">
                        <!-- price -->
                        <div class="col-1">
                            {{ Form::label('price','Giá:',array('style' => 'margin-top: 10px;')) }}
                        </div>
                        <div class="col-3">
                            {{ Form::text('price',null, array('class'=>'form-control','required' => '', 'maxlength' => '255','placeholder' => 'Price' ))  }}
                        </div>
                        <!-- discount code -->
                        <div class="col-1">
                            {{ Form::label('discount_unit','Mã giảm giá:',array('style' => 'margin-top: 10px;')) }}
                        </div>
                        <div class="col-3">
                            {{ Form::text('discount_unit',null, array('class'=>'form-control','required' => '', 'maxlength' => '255','placeholder' => 'Discount code' ))  }}
                        </div>
                        
                        <!-- discount -->
                        <div class="col-1">
                            {{ Form::label('discount_value','Giảm giá:',array('style' => 'margin-top: 10px;')) }}
                        </div>
                        <div class="col-3">
                            {{ Form::text('discount_value',null, array('class'=>'form-control','required' => '', 'maxlength' => '255','placeholder' => 'Discount value' ))  }}
                        </div>
                        <br>
                    </div>
                   
                    <div class="row g-2 align-items-center">
                        <!-- slug -->
                        <div class="col-1">
                            {{ Form::label('slug', 'Slug: ', array('style' => 'margin-top:10px;')) }}
                        </div>
                        <div class="col-3">
                            {{ Form::text('slug', null, array('class'=>'form-control', 'required' => '', 'minlength' => '5', 'maxlength'=>'255','placeholder' => 'Slug')) }}
                        </div>
                        <!-- category -->
                        <div class="col-1">
                            {{ Form::label('category_id', 'Danh mục:', array('style'=>'margin-top:10px;')) }}
                        </div>
                        <div class="col-3">
                            <select class="form-control select2-multi" name="category_id" >
                                @foreach($categories as $category)
                                    @if($category->status == "1")
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="col-1">
                            {{ Form::label('quantity', 'Số lượng: ', array('style' => 'margin-top:10px;')) }}
                        </div>
                        <div class="col-3">
                            {{ Form::text('quantity', null, array('class'=>'form-control', 'required' => '','maxlength'=>'255','placeholder' => 'Quantity')) }}
                        </div>
                    </div>
                    
                    <div class="row g-2 align-items-center" style="margin-top:10px;">
                        <!-- tag -->
                        <div class="col-1">
                            {{ Form::label('tags', 'Nhãn:', array('class'=>'margin-top:10px;')) }}
                        </div>
                        <div class="col-11">
                            <select class="form-control select2-multi" name="tags[]" multiple="multiple">
                                @foreach($tags as $tag)
                                    <option value="{{ $tag->id }}">{{ $tag-> name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                    <div class="row g-2 align-items-center" style="margin-top:5px;">
                        <div class="col-1">
                            {{ Form::label('is_popular', 'Thịnh hàng: ', array('style' => 'margin-top:10px;')) }}
                        </div>
                        <div class="col-5">
                            {{ Form::text('is_popular', null, array('class'=>'form-control', 'required' => '','maxlength'=>'255','placeholder' => '0 or 1')) }}
                        </div>
                        <div class="col-1">
                            {{ Form::label('brand', 'Nhãn hiệu: ', array('style' => 'margin-top:10px;')) }}
                        </div>
                        <div class="col-5">
                            <select class="form-control select2-multi" name="brand_id" >
                                @foreach($brands as $brand)
                                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row g-2 align-items-center">
                        <div class="col-6">
                        <br>
                            {{ Form::label ('featured_image','Ảnh 1:') }}
                            {{ Form::file('featured_image')}}
                        </div>
                        <!-- meta_images -->
                        <div class="col-6">
                            <br>
                            {{ Form::label ('meta_image','Ảnh 2:') }}
                            {{ Form::file('meta_image')}} 
                        </div>
                     </div>
                     
                    <div class="row g-2 align-items-center create_2" >
                        <label>Biến thể sản phẩm</label>
                         <!-- Size -->
                        <div class="col-1">
                            {{ Form::label('product_size', 'Size: ', array('style' => 'margin-top:10px;')) }}
                        </div>
                        <div class="col-5">
                            {{ Form::text('product_size', null, array('class'=>'form-control', 'required' => '', 'minlength' => '5', 'maxlength'=>'255','placeholder' => 'Size')) }}
                        </div>
                       <!-- Color -->
                        <div class="col-1">
                            {{ Form::label('product_color', 'Màu: ', array('style' => 'margin-top:10px;float:left')) }}
                        </div>
                        <div class="col-5">
                            {{ Form::text('product_color', null, array('class'=>'form-control','maxlength'=>'255','placeholder' => 'Color')) }}
                        </div>
                    </div>
                    {{Form::label('note',"Lưu Ý:")}}
                    {{Form::textarea('note',null,array('class' => 'form-control','required' =>'' )) }}
                    <div class="row">
                        <div class="col-3">
                            {{ Form::submit('Thêm mới sản phẩm', array('class' => 'btn btn-success btn-lg btn-block','style' => 'margin-top: 20px;')) }}
                        </div>
                        <div class="col-3">
                            {{ Html::linkRoute('products.index', 'Quản lý sản phẩm',[],array('class'=>'btn btn-info btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}
                        </div>
                    </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

    {!! Html::script('js/parsley.min.js') !!}
    {!! Html::script('js/select2.min.js') !!}
    
    <script type="text/javascript">
        $('.select2-multi').select2();
    </script>

@endsection