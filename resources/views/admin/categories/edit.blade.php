@extends('layouts.admin')

@section('title', '| Edit Category')

@section('content')

{!! Form::model($categories, ['route' => ['categories.update', $categories->id],'data-parsley-validate' =>'', 'method'
=> 'PUT']) !!}
<h1 class="edit catgory">Edit Category</h1>
<hr>
<div class="card">
    <div class="card-body">
        <div class="row cate">
            <div class="col-md-8">
                <div class="row g-2 align-items-center">
                    <div class="col-2 ">
                        {{ Form::label('name', 'Name:') }}
                    </div>
                    <div class="col-8">
                        {{ Form::text('name',null,array('class' => 'form-control','required' => '', 'style'=>'margin-bottom: 5px;')) }}
                    </div>
                </div>
                <div class="row g-2 align-items-center">
                    <div class="col-2 ">
                        {{ Form::label('slug', 'Slug:') }}
                    </div>
                    <div class="col-8">
                        {{ Form::text('slug',null,array('class' => 'form-control','required' => '', 'style'=>'margin-bottom: 5px;')) }}
                    </div>
                </div>
                <div class="row g-2 align-items-center">
                    <div class="col-2 ">
                        {{ Form::label('description', 'Description:') }}
                    </div>
                    <div class="col-8">
                        {{ Form::text('description',null, array('class' => 'form-control','required' => '', 'style'=>'margin-bottom: 5px;')) }}
                    </div>
                </div>
            </div>
            <!-- xử lý -->
            <div class="col-md-4">
                <div class="row action-cate">
                    <!-- save change -->
                    <div class="col-sm-3">
                        {{ Form::submit('Save As', ['class' => 'btn btn-success btn-block']) }}
                    </div>
                    <!-- delete  -->
                    <div class="col-sm-4">
                        {!! Html::linkRoute('categories.index','Cancel', array($categories -> id), array('class'=> 'btn
                        btn-warning btn-block', 'style'=>'margin-left:10px;')) !!}
                    </div>
                    {!! Form::close() !!}
                    <!-- Cancel -->
                    <div class="col-sm-4">
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('categories.destroy', $categories -> id), 'onsubmit' => 'return confirm_delete()')) }}
                        {{ Form::submit('Delete', array('class' => 'btn btn-danger btn-block', 'style'=>'margin-right:5px;')) }}
                        {{ Form::close() }}
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
