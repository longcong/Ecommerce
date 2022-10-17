@extends('layouts.admin')

@section('title', '| Chỉnh sửa nhãn hàng')

@section('content')

{!! Form::model($brands, ['route' => ['brands.update', $brands->id],'data-parsley-validate' =>'','files' => true,'method'
=> 'PUT']) !!}
<h1 class="edit catgory">Chỉnh sửa nhãn hàng</h1>
<hr>
<div class="card">
    <div class="card-body">
        <div class="row cate">
            <div class="col-md-8">
                <div class="row g-2 align-items-center">
                    <div class="col-2 ">
                        {{ Form::label('name', 'Tên nhãn hàng:', ['class' => 'margin-top']) }}
                    </div>
                    <div class="col-8">
                        {{ Form::text('name',null,array('class' => 'form-control','required' => '', 'style'=>'margin-bottom: 5px;')) }}
                    </div>
                </div>
                <div class="row g-2 align-items-center">
                    <div class="col-2 ">
                        {{ Form::label('slug', 'Slug:', ['class' => 'margin-top']) }}
                    </div>
                    <div class="col-8">
                        {{ Form::text('slug', null, array('class' => 'form-control','required' => '', 'minlength' => '2', 'maxlength'=>'255', 'style'=>'margin-bottom: 5px;')) }}  
                    </div>
                </div>
                <br>
                <div class="row g-2">
                    <div class="col-2 ">
                        {{ Form::label ('featured_image','Hình ảnh:') }}
                    </div>
                    <div class="col-8">
                        {{ Form::file('featured_image')}}
                    </div>
                </div>
                <br>
                <div class="row g-2 align-items-center">
                    <div class="col-2 ">
                        {{ Form::label('meta_title', 'Tiêu đề:') }}
                    </div>
                    <div class="col-8">
                        {{ Form::text('meta_title',null, array('class' => 'form-control', 'required' => '', 'style'=>'margin-bottom: 10px;')) }}
                    </div>
                </div>
                <div class="row g-2 align-items-center">
                    <div class="col-2 ">
                        {{ Form::label('meta_description', 'Mô tả:') }}
                    </div>
                    <div class="col-8">
                        {{ Form::textarea('meta_description',null, array('class' => 'form-control', 'required' => '', 'style'=>'margin-bottom: 10px;')) }}
                    </div>
                </div>
            </div>
            <!-- xử lý -->
            <div class="col-md-4">
                <div class="row action-cate">
                    <!-- save change -->
                    <div class="col-sm-3">
                        {{ Form::submit('Lưu thay đổi', ['class' => 'btn btn-success btn-block']) }}
                    </div>
                    <!-- delete  -->
                    <div class="col-sm-4">
                        {!! Html::linkRoute('brands.index','Trở về', array($brands->id), array('class'=> 'btn
                        btn-warning btn-block', 'style'=>'margin-left:10px;')) !!}
                    </div>
                    {!! Form::close() !!}
                    <!-- Cancel -->
                    <div class="col-sm-4">
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('brands.destroy', $brands->id), 'onsubmit' => 'return confirm_delete()')) }}
                        {{ Form::submit('Xóa', array('class' => 'btn btn-danger btn-block', 'style'=>'margin-right:5px;')) }}
                        {{ Form::close() }}
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
