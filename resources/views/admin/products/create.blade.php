@extends('layouts.admin')

@section('stylesheet')

    {!! Html::style('css/parsley.css') !!}
    {!! Html::style('css/select2.min.css') !!}


@section('content')

<div class="card">
    <div class="card-body">
        <div class="container">
            <h1 class="text-center">Create New Products</h1>
            <hr>
            <div class="row">
                {!! Form::open(['route' => 'products.store','data-parsley-validate' =>'', 'files' => true]) !!}
                    <div class="row g-2 align-items-center">
                        <div class="col-auto">
                            {{ Form::label('title','Title:',array('style' => 'margin-top: 10px;')) }}
                        </div>
                        <div class="col-11">
                            {{ Form::text('title',null, array('class'=>'form-control','required' => '', 'maxlength' => '255' ))  }}
                        </div>
                    </div>
                    <div class="row g-2 align-items-center">
                        <div class="col-auto">
                            {{ Form::label('price','Price:',array('style' => 'margin-top: 10px;')) }}
                        </div>
                        <div class="col-3">
                            {{ Form::text('price',null, array('class'=>'form-control','required' => '', 'maxlength' => '255' ))  }}
                        </div>
                        <div class="col-auto">
                            {{ Form::label('discount_unit','Discount Code:',array('style' => 'margin-top: 10px;')) }}
                        </div>
                        <div class="col-3">
                            {{ Form::text('discount_unit',null, array('class'=>'form-control','required' => '', 'maxlength' => '255' ))  }}
                        </div>
                        <div class="col-auto">
                            {{ Form::label('discount_value','Discount:',array('style' => 'margin-top: 10px;')) }}
                        </div>
                        <div class="col-3">
                            {{ Form::text('discount_value',null, array('class'=>'form-control','required' => '', 'maxlength' => '255' ))  }}
                        </div>
                    </div>
                    {{ Form::label ('featured_image','Upload Featured Image:') }}
                    {{ Form::file('featured_image')}} 

                    <br>
                    {{Form::label('note',"Post Note:")}}
                    {{Form::textarea('note',null,array('class' => 'form-control','required' =>'' )) }}

                    {{ Form::submit('Create Post', array('class' => 'btn-success btn-lg btn-block','style' => 'margin-top: 20px;')) }}
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