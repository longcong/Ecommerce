@extends('layouts.admin')

@section('title', '| Quản lý Chất Liệu')

@section('stylesheets')

{!! Html::style('css/parsley.css') !!}
{!! Html::style('css/select2.min.css') !!}

@endsection
@section('content')

<div class="card">
    <div class="card-body">
        <h2>Chất Liệu</h2> 
        <div class="container">
            <div class="row">
        
                <div class="well index-cate">
                    {!! Form::open(['route' => 'fabric.store', 'data-parsley-validate' =>'', 'method' => 'POST'])
                    !!}
                    <h4>Tạo Chất Liệu Mới</h4>
                    <div class="row g-2 align-items-center">
                        <div class="col-2 ">
                            {{ Form::label('name', 'Tên Chất Liệu:') }}
                        </div>
                        <div class="col-9">
                            {{ Form::text('name',null,array('class' => 'form-control', 'required' => '', 'style'=>'margin-bottom: 5px;','placeholder' => 'Tên danh mục')) }}
                        </div>
                    </div>
                    <br>
                    {{ Form::submit ('Tạo Chất Liệu Mới',['class' => 'btn btn-primary btn-block']) }}
                    {!! Form::close() !!}
                </div>

            </div>

            <br>
            <table class="table">
                <thead>
                    <tr class="order1">
                        <th>#</th>
                        <th>Chất Liệu</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach($fabrics as $fabric)
                        <tr class="order1">
                            <th>{{ $fabric->id }}</th>
                            <th>{{ $fabric->fabric }}</th>
                            <td class="order1">
                                <a class="btn btn-primary btn-block" href="{{ route('fabric.edit' , $fabric->id) }}">Chỉnh sửa</a> 
                                <!-- <div class="dropdown show">
                                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Hành động
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="margin-left:30px;">                                       
                                        <a class="dropdown-item" href="{{ route('fabric.edit' , $fabric->id) }}">Chỉnh sửa</a> 
                                    </div>
                                </div> -->
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
        
        // $(function() { 
        //         $('.toggle-class').change(function() { 
        //         var status = $(this).prop('checked') == true ? 1 : 0;  
        //         var category_id = $(this).data('id');   
        //         $.ajax({ 

        //             type: "GET", 
        //             dataType: "json", 
        //             url: 'update/status', 
        //             data: {'status': status, 'category_id': category_id }, 
        //             success: function(response){
        //                 alert(response.status);
        //             } 
        //         }); 
        //     }) 
        // }); 
            
    </script>

@endsection
