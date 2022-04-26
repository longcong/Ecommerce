@extends('layouts.admin')

@section('title', '| Edit Product')
@section('stylesheet')

    {!! Html::style('css/select2.min.css') !!}

@endsection

@section('content')

{!! Form::model($post, ['route' => ['products.update', $post->id] , 'method' => 'Put']) !!}

<div class="row">
    
    <div class="col-md-8">
            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title', null, ["class" => 'form-control input-lg']) }}
            
            {{ Form::label('price', 'Price:') }}
            {{ Form::text('price', null, ["class" => 'form-control input-lg']) }}

            {{ Form::label('discount_unit', 'Code:') }}
            {{ Form::text('discount_unit', null, ["class" => 'form-control input-lg']) }}

            {{ Form::label('category_id', 'Category:') }}
            {{ Form::select('category_id', $categories, null, ['class' => 'form-control input-lg']) }}

            {{ Form::label('discount_value', 'Discount:') }}
            {{ Form::text('discount_value', null, ["class" => 'form-control input-lg']) }}

            {{ Form::label('feature','Update Featured Image:', ['class' => 'form-spacing-top'])}}
            {{ Form::file('featured_image')}}
            <br>
            {{ Form::label('body',"Body:", ['class' => 'form-spacing-top']) }}
            {{ Form::textarea('body', null, ['class' => 'form-csontrol', 'rows' =>'5', 'cols'=>'82'])}}
    </div>

    <div class="col-md-4">
            <div class="well">
                <dl class="dl-horizontal">
                    <dt>Created At:</dt>
                    <dd>{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</dd>
                </dl>

                <dl class="dl-horizontal">
                    <dt>Last Updated:</dt>
                    <dd>{{ date('M j, Y h:ia', strtotime($post->updated_at)) }}</dd>
                </dl>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        {{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block']) }}
                    </div>
                    <div class="col-sm-6">
                        {!! Html::linkRoute('products.show', 'Cancel', array($post->id),array('class' => 'btn btn-danger btn-block')) !!}
                    </div>
                </div>
            </div>
    </div>      
</div>
{!! Form::close() !!}

@stop

@section('scripts')

    {!! Html::script('js/select2.min.js') !!}

    <script type="text/javascript">
        $('.select2-multi').select2();
    </script>


@endsection
    