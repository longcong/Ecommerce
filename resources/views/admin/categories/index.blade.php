@extends('layouts.admin')

@section('title', '| All Categories')

@section('stylesheets')

{!! Html::style('css/parsley.css') !!}
{!! Html::style('css/select2.min.css') !!}

@endsection
@section('content')
<h1>Categories</h1>
<div class="card">
    <div class="card-body">
        <div class="container">
            <div class="row">
                <div class="well index-cate">
                    {!! Form::open(['route' => 'categories.store', 'data-parsley-validate' =>'', 'method' => 'POST'])
                    !!}
                    <h4>New Category</h4>
                    <div class="row g-2 align-items-center">
                        <div class="col-2 ">
                            {{ Form::label('name', 'Name:') }}
                        </div>
                        <div class="col-8">
                            {{ Form::text('name',null,array('class' => 'form-control', 'required' => '', 'style'=>'margin-bottom: 5px;')) }}
                        </div>
                    </div>
                    <div class="row g-2 align-items-center">
                        <div class="col-2 ">
                            {{ Form::label('description', 'Description:') }}
                        </div>
                        <div class="col-8">
                            {{ Form::text('description',null, array('class' => 'form-control', 'required' => '', 'style'=>'margin-bottom: 5px;')) }}
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
                    <th style="text-align: center;">action</th>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <th>{{ $category->id }}</th>
                            <th>{{ $category->name }}</th>
                            <th>{{ $category->description }}</th>

                            <td style="text-align: center;">
                                {!! Html::linkRoute('categories.edit','Edit', array($category->id), array('class' =>
                                'btn btn-primary btn-block')) !!}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

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
