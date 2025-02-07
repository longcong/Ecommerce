@extends('layouts.admin')

@section('title', '| All Tags')
@section('content')
<h1>Nhãn hiệu</h1>
<div class="card">
    <div class="card-body">
        <div class="container">
            <div class="row " >
                <div class="col-md-8 ">
                 
                    <table class="table">
                        <thead>
                            <tr class="order1">
                                <th>#</th>
                                <th>Tên nhãn hiệu</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tags as $tag)
                            <tr class="order1">
                                <th>{{ $tag->id }}</th>
                                <td><a href="{{ route('tags.show', $tag->id) }}">{{ $tag->name }}</a></td> 
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div> <!-- end of .col-md-8 -->
                <div class="col-md-4" style="text-align:center;">
                    <div class="well" style="background-color: #EEEEEE; margin-top:20px; padding:20px;">
                    {!! Form::open(['route' => 'tags.store', 'data-parsley-validate' =>'', 'method' => 'POST']) !!}
                            <h2>Tạo nhãn hiệu</h2>
                            <div class="row g-2 align-items-center">
                                <div class="col-auto">
                                    {{ Form::label('name', 'Tên nhãn hiệu:') }}
                                </div>
                                <div class="col-9">
                                    {{ Form::text('name',null,array('class' => 'form-control', 'required' => '', 'style'=>'margin-bottom: 5px;')) }} 
                                </div>  
                            </div>           
                            {{ Form::submit ('Tạo mới nhãn hiệu', array('class' => 'btn btn-primary btn-block btn-h1-spacing', 'style'=>'margin-top:10px;')) }}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection