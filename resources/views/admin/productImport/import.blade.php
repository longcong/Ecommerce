@extends('layouts.admin')

@section('title', '| Edit Product')
@section('stylesheet')

    {!! Html::style('css/select2.min.css') !!}

@endsection

@section('content')

    {!! Form::model($importProduct, ['route' => ['import.edit', $importProduct->id] , 'method' => 'PUT']) !!}
    <div class="card">
        <div class="card-body">
            <div class="container">
                <div class="row">
        
                    <div class="col-md-8">
                        {{ Form::label('title', 'Title:') }}
                        {{ Form::text('title', null, array('class' => 'form-control input-lg', 'readonly')) }}
                        
                        {{ Form::label('price', 'Old Price:') }}
                        {{ Form::text('price', null, array('class' => 'form-control input-lg', 'readonly')) }}

                        {{ Form::label('importPrice', 'Price Import:') }}
                        {{ Form::text('importPrice', null, array('class'=> 'form-control input-lg')) }}

                        {{ Form::label('price', 'Price:') }}
                        {{ Form::text('price', null, ['class' => 'form-control input-lg']) }}  

                        <hr>
                        <label class="variant">Product Variant</label><br>
                        {{ Form::label('sizeS', 'Size S:') }}
                        {{ Form::text('sizeS', null, array('class' => 'form-control input-lg')) }}

                        {{ Form::label('sizeM', 'Size M:') }}
                        {{ Form::text('sizeM', null, array('class' => 'form-control input-lg')) }}

                        {{ Form::label('sizeL', 'Size L:') }}
                        {{ Form::text('sizeL', null, array('class' => 'form-control input-lg')) }}
                    </div>

                    <div class="col-md-4" >
                        <div class="well pr-edit" >
                            <dl class="dl-horizontal">
                                <dt>Created At:</dt>
                                <dd>{{ date('M j, Y h:ia', strtotime($importProduct->created_at)) }}</dd>
                            </dl>

                            <dl class="dl-horizontal">
                                <dt>Last Updated:</dt>
                                <dd>{{ date('M j, Y h:ia', strtotime($importProduct->updated_at)) }}</dd>
                            </dl>
                            <hr>
                            <div class="row">
                                <div class="col-sm-auto">
                                    {{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block']) }}
                                </div>
                                <div class="col-sm-auto">
                                    <a class="btn btn-danger btn-block" href="{{ route('import.index') }}">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>      
                </div>
            </div>
        </div>
    </div>
    
    {!! Form::close() !!}

@endsection

@section('scripts')

    {!! Html::script('js/select2.min.js') !!}

    <script type="text/javascript">
        $('.select2-multi').select2();
       
    </script>


@endsection
    