@extends('layouts.admin')

@section('title', '| Quản lý nhãn hàng')

@section('stylesheets')

{!! Html::style('css/parsley.css') !!}
{!! Html::style('css/select2.min.css') !!}

@endsection
@section('content')
<h1>Nhãn hàng</h1>
<div class="card ">
    <div class="card-body">
        <div class="container">
            <div class="row">
                <div class="well index-cate">
                    {!! Form::open(['route' => 'brands.store', 'data-parsley-validate' =>'','files' => true ,'method' => 'POST',])
                    !!}
                    <h4>Tạo mới nhãn hàng</h4>
                    <div class="row g-2 align-items-center">
                        <div class="col-2 ">
                            {{ Form::label('name', 'Tên nhãn hàng:') }}
                        </div>
                        <div class="col-8">
                            {{ Form::text('name',null,array('class' => 'form-control', 'required' => '', 'style'=>'margin-bottom: 10px;', 'placeholder' => 'Tên nhãn hàng')) }}
                        </div>
                    </div>
                    <div class="row g-2 align-items-center">
                        <div class="col-2 ">
                            {{ Form::label('slug', 'Slug: ', array('style' => 'margin-top:10px;')) }}
                        </div>
                        <div class="col-8">
                            {{ Form::text('slug', null, array('class'=>'form-control', 'required' => '', 'minlength' => '2', 'maxlength'=>'255', 'style'=>'margin-bottom: 10px;', 'placeholder' => 'Đường dẫn')) }}
                        </div>
                    </div>
                    <br>
                    <div class="row g-2">
                        <div class="col-2 ">
                            {{ Form::label ('brand_image','Hình ảnh:') }}
                        </div>
                        <div class="col-8">
                            {{ Form::file('brand_image',array('style' => 'text-align: left;'))}}
                        </div>
                    </div>
                    <br>
                    <div class="row g-2 align-items-center">
                        <div class="col-2 ">
                            {{ Form::label('meta_title', 'Tiêu đề:') }}
                        </div>
                        <div class="col-8">
                            {{ Form::text('meta_title',null, array('class' => 'form-control', 'required' => '', 'style'=>'margin-bottom: 10px;', 'placeholder' => 'Tiêu đề')) }}
                        </div>
                    </div>
                    <div class="row g-2 align-items-center">
                        <div class="col-2 ">
                            {{ Form::label('meta_description', 'Description:') }}
                        </div>
                        <div class="col-8">
                            {{ Form::textarea('meta_description',null, array('class' => 'form-control', 'required' => '', 'style'=>'margin-bottom: 10px;', 'placeholder' => 'Mô tả')) }}
                        </div>
                    </div>

                    {{ Form::submit ('Create New Brand',['class' => 'btn btn-primary btn-block']) }}
                    {!! Form::close() !!}
                </div>

            </div>

            <br>
            <table class="table table-bordered">
                <thead class="order1">
                    <th>#</th>
                    <th>Tên nhãn hàng</th>
                    <th>Slug</th>
                    <th>Mô tả</th>
                    <th>Hành động</th>
                </thead>
                <tbody>
                    @foreach($brands as $brand)
                        <tr class="order1">
                            <th class="id-brand">{{ $brand->id }}</th>
                            <th>{{ substr( $brand->name, 0, 20) }} {{ strlen( $brand->name) >20 ? "..." : "" }}</th>
                            <th>{{ substr( $brand->slug, 0, 20) }} {{ strlen( $brand->slug) >20 ? "..." : "" }}</th>
                            <th>{{ substr($brand->meta_description, 0, 60) }} {{ strlen($brand->meta_description) >60 ? "..." : "" }}</th>

                            <td>
                                {!! Html::linkRoute('brands.edit','Chỉnh sửa', array($brand->id), array('class' =>
                                'btn btn-primary btn-block')) !!}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
        <div>
            {!! $brands->links() !!}
        </div>
    </div>
</div>

@endsection

@section('scripts')

{!! Html::script('js/parsley.min.js') !!}
{!! Html::script('js/select2.min.js') !!}

<script type="text/javascript">
    $('.select2-multi').select2();

    var elth = document.getElementsByClassName('id-brand');
    for(var i =0; i <elth.length; i++){
        elth[i].innerHTML = i + 1;
    }
</script>

@endsection
