@extends('layouts.admin')

@section('title', '|Edit Category')

@section('content')

{!! Form::model($categories, ['route' => ['categories.update', $categories->id], 'method' => 'PUT']) !!}
    <h1 class="edit catgory">Edit Category</h1>
    <hr>
    <div class="row" style="margin-top: 5px;">
        <div class="col-md-8">
            <div class="row g-2 align-items-center">
                <div class="col-auto">
                    {{ Form::label('name', 'Name:') }}
                </div>
                <div class="col-8">
                    {{ Form::text('name',null,array('class' => 'form-control','style'=>'margin-bottom: 5px;')) }} 
                </div>  
            </div> 
            <div class="row g-2 align-items-center">
                <div class="col-auto">
                    {{ Form::label('description', 'Description:') }}
                </div>
                <div class="col-8">
                    {{ Form::text('description',null, array('class' => 'form-control', 'style'=>'margin-bottom: 5px;')) }} 
                </div>  
            </div>
        </div>
        <!-- xử lý -->
        <div class="col-md-4">
            <div class="row">
                <!-- save change -->
                <div class="col-sm-3">
                    {{ Form::submit('Save', ['class' => 'btn btn-success btn-block']) }}
                </div>
                <!-- delete  -->
                <div class="col-sm-3">
                    {{ Form::open(array('method' => 'DELETE', 'route' => array('categories.destroy', $categories->id), 'onsubmit' => 'return confirm_delete()')) }} 
                        {{ Form::submit('Delete', array('class' => 'btn btn-danger btn-block', 'style'=>'margin-right:5px;')) }}
                    {{ Form::close() }}
                </div>
                <!-- Cancel -->
                <div class="col-sm-3">
                    {!! Html::linkRoute('categories.index','Cancel', array($categories->id), array('class'=> 'btn btn-warning btn-block', 'style'=>'margin-left:10px;')) !!}
                </div>
            </div>
        </div>
       
    </div>
    {!! Form::close() !!}

@endsection