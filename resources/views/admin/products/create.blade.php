@extends('layouts.admin')

@section('title', '| Create Product')

@section('stylesheet')

    {!! Html::style('css/parsley.css') !!}
    {!! Html::style('css/select2.min.css') !!}


@section('content')

<div class="card">
    <div class="container">
        <h1 class="text-center">Create New Products</h1>
        <hr>
        
        {!! Form::open(['route' => 'products.store','data-parsley-validate' =>'', 'files' => true]) !!}
            {{ Form::label('title','Title:') }}
            {{ Form::text('title',null, array('class'=>'form-control','required' => '', 'maxlength' => '255' ))  }}
            
            {{ Form::label ('featured_image','Upload Featured Image:') }}
            {{ Form::file('featured_image')}} 
            <br>
            {{Form::label('note',"Post Note:")}}
            {{Form::textarea('note',null,array('class' => 'form-control','required' =>'' )) }}

            {{ Form::submit('Create Post', array('class' => 'btn-success btn-lg btn-block','style' => 'margin-top: 20px;')) }}
        {!! Form::close() !!}
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