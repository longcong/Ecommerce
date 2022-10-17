@extends('layouts.admin')

@section('title', '| Chỉnh sữa mã giảm giá')

@section('content')

{!! Form::model($coupons, ['route' => ['coupons.update', $coupons->id],'data-parsley-validate' =>'', 'method'
=> 'PUT']) !!}
<hr>
<div class="card">
    <div class="card-body">
        <div class="row cate">
        <h1 class="edit catgory">Chỉnh sửa mã giảm giá</h1>
        <hr>
            <div class="col-md-8">
                <!-- title -->
                <div class="row g-2 align-items-center user1">
                    <div class="col-2 ">
                        {{ Form::label('title', 'Tiêu đề:') }}
                    </div>
                    <div class="col-8">
                        {{ Form::text('title',null,array('class' => 'form-control','required' => '', 'style'=>'margin-bottom: 5px;')) }}
                    </div>
                </div>
                <!-- description -->
                <div class="row g-2 align-items-center user1">
                    <div class="col-2 ">
                        {{ Form::label('description', 'Mô tả:') }}
                    </div>
                    <div class="col-8">
                        {{ Form::text('description',null, array('class' => 'form-control','required' => '', 'style'=>'margin-bottom: 5px;')) }}
                    </div>
                </div>
                <!-- seller -->
                <div class="row g-2 align-items-center user1">
                    <div class="col-2 ">
                        {{ Form::label('seller_id', 'Người tạo:') }}
                    </div>
                    <div class="col-8">
                        <select id="select" name="seller_id" value="" class="form-control null">
                            <option value="1">Admin</option>
                        </select>                     
                    </div>
                </div>
                <!-- code -->
                <div class="row g-2 align-items-center user1">
                    <div class="col-2 ">
                        {{ Form::label('code', 'Mã giảm giá:') }}
                    </div>
                    <div class="col-8">
                        {{ Form::text('code',null, array('class' => 'form-control','required' => '', 'style'=>'margin-bottom: 5px;')) }}
                    </div>
                </div>
                <!-- type -->
                <div class="row g-2 align-items-center user1">
                    <div class="col-2 ">
                        {{ Form::label('type', 'Giảm giá theo:') }}
                    </div>
                    <div class="col-8">
                        <select id="select" name="type" value="" class="form-control">
                            @if($coupons->type == 'Category_base')
                                <option value="Category_base">Danh mục</option>
                                <option value="Product_base">Sản phẩm</option>
                                <option value="Cart_base">Giỏ hàng</option>
                            @elseif($coupons->type == 'Product_base')
                                <option value="Product_base">Sản phẩm</option>
                                <option value="Category_base">Danh mục</option>
                                <option value="Cart_base">Giỏ hàng</option>
                            @else                                
                                <option value="Cart_base">Giỏ hàng</option>
                                <option value="Category_base">Danh mục</option>
                                <option value="Product_base">Sản phẩm</option>
                            @endif
                        </select>
                    </div>
                </div>
                <!-- end type -->
                <!-- discount type -->
                <div class="row g-2 align-items-center user1">
                    <div class="col-2 ">
                        {{ Form::label('discount_type', 'Giảm giá theo:') }}
                    </div>
                    <div class="col-8">
                        <select id="select" name="discount_type" value="discount_type" class="form-control">
                            @if($coupons->discount_type == 'Amount')
                                <option value="Amount">Giá tiền</option>
                                <option value="Percent">Phần trăm</option>
                            @else
                                <option value="Percent">Phần trăm</option>
                                <option value="Amount">Giá tiền</option>
                            @endif
                        </select> 
                    </div>
                </div>
                <!-- end discount type -->
                <!-- discount coupon -->
                <div class="row g-2 align-items-center user1">
                    <div class="col-2 ">
                        {{ Form::label('discount_coup', 'Giá:') }}
                    </div>
                    <div class="col-8">
                        {{ Form::text('discount_coup',null, array('class' => 'form-control','required' => '', 'style'=>'margin-bottom: 5px;')) }}
                    </div>
                </div>
                <!--end discount coupon -->
                <!-- quantity -->
                <div class="row g-2 align-items-center user1">
                    <div class="col-2 ">
                        {{ Form::label('quantity', 'Số lượng:') }}
                    </div>
                    <div class="col-8">
                        {{ Form::text('quantity',null, array('class' => 'form-control','style'=>'margin-bottom: 5px;')) }}
                    </div>
                </div>
                <!-- end quantity -->
                <!-- start_date -->
                <div class="row g-2 align-items-center user1">
                    <div class="col-2">
                        {{ Form::label('start_date','Ngày bắt đầu:',array('style' => 'margin-top: 10px;')) }}
                    </div>
                    <div class="col-8" wire:ignore inline="true">
                        {{ Form::text('start_date',null, array('class'=>'form-control','required' => '', 'maxlength' => '255','id' => 'start_date' , 'name' => 'start_date'))  }}
                    </div>
                </div>
                <!-- expiry date -->
                <div class="row g-2 align-items-center user1">
                    <div class="col-2">
                        {{ Form::label('expiry_date','Ngày hết hạn:',array('style' => 'margin-top: 10px;')) }}
                    </div>
                    <div class="col-8" inline="true">
                        {{ Form::text('expiry_date',null, array('class'=>'form-control','required' => '', 'maxlength' => '255', 'id' => 'expiry_date' ,'name' => 'expiry_date'))  }}
                    </div>
                </div>
                <!-- end expiry date -->
                <!-- active -->
                <div class="row g-2 align-items-center user1">
                    <div class="col-2 ">
                        {{ Form::label('is_active', 'Hoạt động:') }}
                    </div>
                    <div class="col-8">
                        {{ Form::text('is_active',null, array('class' => 'form-control','required' => '', 'style'=>'margin-bottom: 5px;')) }}
                    </div>
                </div>
                <!-- end active -->
            </div>
            <!--  -->



            <!-- xử lý -->
            <div class="col-md-4">
                <div class="row action-cate">
                    <!-- save change -->
                    <div class="col-sm-4">
                        {{ Form::submit('Lưu thay đổi', ['class' => 'btn btn-success btn-block']) }}
                    </div>
                    <!-- delete  -->
                    <div class="col-sm-4">
                        {!! Html::linkRoute('coupons.index','Trở về', array($coupons -> id), array('class'=> 'btn
                        btn-warning btn-block', 'style'=>'margin-left:10px;')) !!}
                    </div>
                    {!! Form::close() !!}
                    
                    
                </div>
                <div class="row action-cate">
                    <!-- Cancel -->
                    <div class="col-sm-6">
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('coupons.destroy', $coupons -> id), 'onsubmit' => 'return confirm_delete()')) }}
                        {{ Form::submit('Xóa', array('class' => 'btn btn-danger btn-block', 'style'=>'margin-right:5px;')) }}
                        {{ Form::close() }}
                    </div>
                </div>
                    
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
                dateFormat: 'yy-mm-dd'
            })
            .on('dp.change',function(ev){
                var data = $('#expiry_date').val();
            })
       });  
    </script>
    <script>
        $(function(){
            $('#start_date').datepicker({
                dateFormat: 'yy-mm-dd'
            })
            .on('dp.change',function(ev){
                var data = $('#start_date').val();
            })
       });  
    </script>
    <script>
        var div_contents =document.getElementById("select");
        var elements = div_contents.getElementsByTagName("select");
        for (i=0; i<elements.length; i++) {
            elements[i].selectedIndex = -1;
        }
    </script>

@endsection
