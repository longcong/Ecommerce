@extends('layouts.admin')

@section('title', '| All Categories')


@section('content')
    <h1>Categories</h1>
    <div class="card">
        <div class="card-body">
            <div class="container">
                <div class="row">
                        <div class="well " style="background-color: #EEEEEE; padding:10px; text-align:center;">
                                {!! Form::open(['route' => 'categories.store', 'method' => 'POST']) !!}
                                    <h4>New Category</h4>
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
                                    
                                    {{ Form::submit ('Create New Category',['class' => 'btn btn-primary btn-block']) }}
                                {!! Form::close() !!}
                        </div>
                    
                </div>
                
                <br>
                <table class="table">
                    <thead>
                        <th style="padding-left: 4px;">#</th>
                        <th style="padding-left: 4px;">name</th>
                        <th style="padding-left: 4px;">description</th>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                        <tr>
                            <th>{{ $category->id }}</th>
                            <th>{{ $category->name }}</th>
                            <th>{{ $category->description}}</th>
                            <td style="text-align: right;">{!! Html::linkRoute('categories.edit','Edit', array($category->id), array('class'=> 'btn btn-primary btn-block')) !!}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>

@endsection