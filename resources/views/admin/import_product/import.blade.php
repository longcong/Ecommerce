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
                        {{ Form::label('title', 'Tên Sản Phẩm:') }}
                        {{ Form::text('title', null, array('class' => 'form-control input-lg', 'readonly')) }}
                        
                        {{ Form::label('price', 'Giá Cũ:') }}
                        {{ Form::text('price', null, array('class' => 'form-control input-lg', 'readonly')) }}

                        {{ Form::label('importPrice', 'Giá Nhập:') }}
                        {{ Form::text('importPrice', null, array('class'=> 'form-control input-lg')) }}

                        {{ Form::label('price', 'Giá Bán Ra:') }}
                        {{ Form::text('price', null, ['class' => 'form-control input-lg']) }}  

                        {{ Form::label('quantity', 'Số lương:') }}
                        {{ Form::text('quantity', null, ['class' => 'form-control input-lg']) }} 

                    
                    </div>

                    <div class="col-md-4" >
                        <div class="well pr-edit" >
                            <dl class="dl-horizontal">
                                <dt>Thời gian tạo sản phẩm:</dt>
                                <dd>{{ date('M j, Y h:ia', strtotime($importProduct->created_at)) }}</dd>
                            </dl>

                            <hr>
                            <div class="row">
                                <div class="col-sm-auto">
                                    {{ Form::submit('Nhập Hàng', ['class' => 'btn btn-success btn-block']) }}
                                </div>
                                <div class="col-sm-auto">
                                    <a class="btn btn-danger btn-block" href="{{ route('import.index') }}">Hủy Bỏ</a>
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
    