@extends('layouts.admin')

@section('title', '| Tạo mới mã giảm giá')

@section('stylesheet')

    {!! Html::style('css/parsley.css') !!}
    {!! Html::style('css/select2.min.css') !!}

@endsection

@section('content')

<div class="card">
    <div class="card-body">
        <div class="container">
            <h1 class="text-center">Tạo mới mã giảm giá</h1>
            <hr>
            <div class="row">
                {!! Form::open(['route' => 'coupons.store', 'data-parsley-validate' =>'','method' => 'POST' ]) !!}
                    @csrf
                    <div class="row g-2 align-items-center">
                        <div class="col-1">
                            {{ Form::label('title:','Tiều đề:',array('style' => 'margin-top: 10px;')) }}
                        </div>
                        <div class="col-11">
                            {{ Form::text('title',null, array('class'=>'form-control','required' => '', 'maxlength' => '255', 'placeholder' => 'Tiêu đề' ))  }}
                        </div>
                    </div>
                   
                    <!-- description -->
                    <div class="row g-2 align-items-center" style="margin-top: 5px;">
                        <div class="col-1">
                            {{ Form::label('description','Mô tả: ',array('style' => 'margin-top: 15px;,margin-right:10px;')) }}
                        </div>
                        <div class="col-11">
                            {{ Form::text('description',null, array('class'=>'form-control','required' => '', 'maxlength' => '255','placeholder' => 'Mô tả' ))  }}
                        </div>
                    </div>
                    
                    <div class="row g-2 align-items-center user1">
                        <!-- Type coupon -->
                        <div class="col-1">
                            {{ Form::label('type','Loại giảm giá:',array('style' => 'margin-top: 10px;')) }}
                        </div>
                        <div class="col-3">
                            <select name="type" value="" class="form-control">
                                <option value="">Chọn</option>
                                <option value="Category_base">Giảm giá theo danh mục</option>
                                <option value="Product_base">Giảm giá theo sản phẩm</option>
                                <option value="Cart_base">Giảm giá theo giỏ hàng</option>
                            </select>
                        </div>
                        <!-- type coupon -->
                        <!-- Code -->
                        <div class="col-1">
                            {{ Form::label('code','Mã giảm giá:',array('style' => 'margin-top: 10px; float:left;')) }}
                        </div>
                        <div class="col-3">
                            {{ Form::text('code',null, array('class'=>'form-control','required' => '','placeholder' => 'Mã giảm giá' ))  }}
                        </div>
                        <!-- end code -->
                        <!-- Seller_id -->
                        <div class="col-1">
                            {{ Form::label('seller_id','Người tạo:',array('style' => 'margin-top: 10px; float:left;')) }}
                        </div>
                        <div class="col-3">
                            <select name="seller_id" value="" class="form-control">
                                <option value="">Chọn</option>
                                <option value="1">Admin</option>
                            </select>                        
                        </div>
                        <!-- end seller -->
                    </div>  
                    <div class="row g-2 align-items-center user1">
                        <div class="col-1">
                            {{ Form::label('start_date','Ngày bắt đầu:',array('style' => 'margin-top: 10px;')) }}
                        </div>
                        <div class="col-3">
                            {{ Form::text('start_date',null, array('class'=>'form-control','required' => '', 'maxlength' => '255','placeholder' => 'Ngày bắt đầu','wire:model' => 'expiry_date', 'id' => 'start_date' ))  }}
                        </div>

                        <div class="col-1">
                            {{ Form::label('expiry_date','Ngày hết hạn:',array('style' => 'margin-top: 10px;float:left')) }}
                        </div>
                        <div class="col-3">
                            {{ Form::text('expiry_date',null, array('class'=>'form-control','required' => '', 'maxlength' => '255','placeholder' => 'Ngày hết hạn','wire:model' => 'expiry_date', 'id' => 'expiry_date' ))  }}
                        </div>

                        <!-- active -->
                        <div class="col-1">
                            {{ Form::label('is_active', 'Hoạt động:',array('style' => 'margin-top: 10px; float:left;')) }}
                        </div>
                        <div class="col-3">
                            {{ Form::text('is_active',null, array('class' => 'form-control','required' => '', 'style'=>'margin-bottom: 5px;', 'placeholder' => '0 hoặc 1')) }}
                        </div>
                        <!-- end active -->
                    </div>

                    <div class="row g-2 align-items-center user1">
                        
                        <!-- discount_type -->
                        <div class="col-1">
                            {{ Form::label('discount_type','Phương thức:',array('style' => 'margin-top: 10px;')) }}
                        </div>
                        <div class="col-3">
                            <select name="discount_type" value="" class="form-control">
                                <option value="">Lựa chọn</option>
                                <option value="Amount">Giá tiền</option>
                                <option value="Percent">Phần trăm</option>
                            </select>                        
                        </div>
                        <!-- end discount_type -->
                        <!-- discount_coup -->
                        <div class="col-1">
                            {{ Form::label('discount_coup','Giá:',array('style' => 'margin-top: 10px; float:left;')) }}
                        </div>
                        <div class="col-3">
                            {{ Form::text('discount_coup',null, array('class'=>'form-control','required' => '', 'maxlength' => '255','placeholder' => 'Số tiền hoặc phần trăm'  ))  }}
                        </div>
                        <!-- quantity -->
                        <div class="col-1">
                            {{ Form::label('quantity','Số lượng:',array('style' => 'margin-top: 10px; float:left;')) }}
                        </div>
                        <div class="col-3">
                            {{ Form::text('quantity',null, array('class'=>'form-control','required' => '', 'maxlength' => '255','placeholder' => 'Số lượng'  ))  }}
                        </div>
                        <!-- end discount_coup -->
                    </div>
                    <br>
                    <!-- {{Form::label('detail',"Detail:")}}
                    {{Form::textarea('detail',null,array('class' => 'form-control','required' =>'' )) }} -->
                    <div class="row">
                        <div class="col-3">
                            {{ Form::submit('Tạo mới mã giảm giá', array('class' => 'btn btn-success btn-lg btn-block','style' => 'margin-top: 20px;')) }}
                        </div>
                        <div class="col-3">
                            {{ Html::linkRoute('coupons.index', 'quản lý mã giảm giá',[],array('class'=>'btn btn-info btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}
                        </div>
                    </div>

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
    <script>
       $(function(){
            $('#expiry_date').datepicker({
                dateFormat: 'yy-mm-dd',
            })
            .on('dp.change',function(ev){
                var data = $('#expiry_date').val();
                $this.set('expiry_date',data);
            })
       }); 
       $(function(){
            $('#start_date').datepicker({
                dateFormat: 'yy-mm-dd',
            })
            .on('dp.change',function(ev){
                var data = $('#start_date').val();
                $this.set('start_date',data);
            })
       });  
    </script>

@endsection
