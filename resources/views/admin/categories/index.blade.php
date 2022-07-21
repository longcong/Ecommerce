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
                            {{ Form::text('name',null,array('class' => 'form-control', 'required' => '', 'style'=>'margin-bottom: 5px;','placeholder' => 'Category')) }}
                        </div>
                    </div>
                    <div class="row g-2 align-items-center">
                        <div class="col-2 ">
                            {{ Form::label('slug', 'Slug:') }}
                        </div>
                        <div class="col-8">
                            {{ Form::text('slug',null, array('class' => 'form-control', 'required' => '', 'minlength' => '5', 'maxlength'=>'255', 'style'=>'margin-bottom: 5px;','placeholder' => 'Slug Category')) }}
                        </div>
                    </div>
                    <div class="row g-2 align-items-center">
                        <div class="col-2 ">
                            {{ Form::label('description', 'Description:') }}
                        </div>
                        <div class="col-8">
                            {{ Form::text('description',null, array('class' => 'form-control', 'required' => '', 'style'=>'margin-bottom: 5px;' , 'placeholder' => 'Description')) }}
                        </div>
                    </div>
                    <div class="row g-2 align-items-center">
                        <div class="col-2 ">
                            {{ Form::label('status', 'Status:') }}
                        </div>
                        <div class="col-8">
                            {{ Form::text('status',null, array('class' => 'form-control', 'required' => '', 'style'=>'margin-bottom: 5px;','placeholder' => '0 or 1' )) }}
                        </div>
                    </div>

                    {{ Form::submit ('Create New Category',['class' => 'btn btn-primary btn-block']) }}
                    {!! Form::close() !!}
                </div>

            </div>

            <br>
            <table class="table">
                <thead>
                    <tr class="order1">
                        <th>#</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                        <tr class="order1">
                            <th>{{ $category->id }}</th>
                            <th>{{ $category->name }}</th>
                            <th>{{ $category->slug }}</th>
                            <th>{{ $category->description }}</th>
                            <th>
                                <div class="form-check form-switch ps-0 is-filled" >
                                    <input data-id="{{$category->id}}" class="toggle-class form-check-input ms-auto" type="checkbox" {{ $category->status ? 'checked' : '' }}>                                        
                                </div>
                            </th>
                            <td class="order1">
                                <div class="dropdown show">
                                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="margin-left:30px;">                                       
                                        <a class="dropdown-item" href="{{ route('categories.edit' , $category->id) }}">Edit</a> 
                                    </div>
                                </div>
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

    <script>
        
        $(function() { 
                $('.toggle-class').change(function() { 
                var status = $(this).prop('checked') == true ? 1 : 0;  
                var category_id = $(this).data('id');   
                $.ajax({ 

                    type: "GET", 
                    dataType: "json", 
                    url: 'update/status', 
                    data: {'status': status, 'category_id': category_id }, 
                    success: function(response){
                        alert(response.status);
                    } 
                }); 
            }) 
        }); 
            
    </script>

@endsection
