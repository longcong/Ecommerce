@extends('layouts.admin')

@section('title', '| All Tags')


@section('content')
<div class="card">
    <div class="card-body">
        <div class="container">
            <div class="row " >
                <div class="col-md-8 ">
                    <h1>Tags</h1>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tags as $tag)
                            <tr>
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
                            <h2>New Tag</h2>
                            <div class="row g-2 align-items-center">
                                <div class="col-auto">
                                    {{ Form::label('name', 'Name:') }}
                                </div>
                                <div class="col-9">
                                    {{ Form::text('name',null,array('class' => 'form-control', 'required' => '', 'style'=>'margin-bottom: 5px;')) }} 
                                </div>  
                            </div>           
                            {{ Form::submit ('Create New Tag', array('class' => 'btn btn-primary btn-block btn-h1-spacing', 'style'=>'margin-top:10px;')) }}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection