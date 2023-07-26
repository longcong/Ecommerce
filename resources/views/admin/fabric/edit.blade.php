@extends('layouts.admin')

@section('title', '| Thay đổi chất liệu')

@section('content')

{!! Form::model($fabric, ['route' => ['fabric.update', $fabric->id],'data-parsley-validate' =>'', 'method'
=> 'PUT']) !!}
<h1 class="edit catgory">Chỉnh sửa danh mục</h1>
<hr>
<div class="card">
    <div class="card-body">
        <div class="row cate">
            <div class="col-md-8">
                <div class="row g-2 align-items-center">
                    <div class="col-2 ">
                        {{ Form::label('name', 'Chất Liệu:') }}
                    </div>
                    <div class="col-8">
                        {{ Form::text('fabric',null,array('class' => 'form-control','required' => '', 'style'=>'margin-bottom: 5px;')) }}
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
                        {!! Html::linkRoute('fabric.index','Trở lại', array($fabric -> id), array('class'=> 'btn
                        btn-warning btn-block', 'style'=>'margin-left:10px;')) !!}
                    </div>
                    {!! Form::close() !!}
                    <!-- Cancel -->
                    <div class="col-sm-4">
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('fabric.destroy', $fabric -> id), 'onsubmit' => 'return confirm_delete()')) }}
                        {{ Form::submit('Xóa', array('class' => 'btn btn-danger btn-block', 'style'=>'margin-right:5px;')) }}
                        {{ Form::close() }}
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
