@extends('layouts.admin')

@section('title', "| Edit Tag")

@section('content')
<h1>Edit Tag</h1>
<br>
<div class="card">
    <div class="card-body">
        <div class="container">
        {!! Form::model($tag, ['route' => ['tags.update', $tag->id], 'method' => 'PUT']) !!}

            {{ Form::label('name', "Name:")}}
            {{ Form::text('name', null, ['class' => 'form-control'])}}

            {{ Form::submit('Save Change', array('class' => ' btn btn-success', 'style' => 'margin-top: 8px;'))}}

        {!! Form::close() !!}

        </div>
    </div>
</div>
    
@endsection