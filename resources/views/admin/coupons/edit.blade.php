@extends('layouts.admin')

@section('title', '| Edit Coupon')

@section('content')

{!! Form::model($coupons, ['route' => ['coupons.update', $coupons->id],'data-parsley-validate' =>'', 'method'
=> 'PUT']) !!}
<hr>
<div class="card">
    <div class="card-body">
        <div class="row cate">
        <h1 class="edit catgory">Edit Coupon</h1>
        <hr>
            <div class="col-md-8">
                <!-- title -->
                <div class="row g-2 align-items-center" style="margin-top:1px;">
                    <div class="col-2 ">
                        {{ Form::label('title', 'Title:') }}
                    </div>
                    <div class="col-8">
                        {{ Form::text('title',null,array('class' => 'form-control','required' => '', 'style'=>'margin-bottom: 5px;')) }}
                    </div>
                </div>
                <!-- description -->
                <div class="row g-2 align-items-center" style="margin-top:1px;">
                    <div class="col-2 ">
                        {{ Form::label('description', 'Description:') }}
                    </div>
                    <div class="col-8">
                        {{ Form::text('description',null, array('class' => 'form-control','required' => '', 'style'=>'margin-bottom: 5px;')) }}
                    </div>
                </div>
                <!-- seller -->
                <div class="row g-2 align-items-center" style="margin-top:1px;">
                    <div class="col-2 ">
                        {{ Form::label('seller_id', 'Seller_id:') }}
                    </div>
                    <div class="col-8">
                        <select id="select" name="seller_id" value="" class="form-control null">
                            <option value="1">Admin</option>
                        </select>                     
                    </div>
                </div>
                <!-- code -->
                <div class="row g-2 align-items-center" style="margin-top:1px;">
                    <div class="col-2 ">
                        {{ Form::label('code', 'Code:') }}
                    </div>
                    <div class="col-8">
                        {{ Form::text('code',null, array('class' => 'form-control','required' => '', 'style'=>'margin-bottom: 5px;')) }}
                    </div>
                </div>
                <!-- type -->
                <div class="row g-2 align-items-center" style="margin-top:1px;">
                    <div class="col-2 ">
                        {{ Form::label('type', 'Coupon_Type:') }}
                    </div>
                    <div class="col-8">
                        <select id="select" name="type" value="" class="form-control">
                            @if($coupons->type == 'Category_base')
                                <option value="Category_base">Category_base</option>
                                <option value="Product_base">Product_base</option>
                                <option value="Cart_base">Cart_base</option>
                            @elseif($coupons->type == 'Product_base')
                                <option value="Product_base">Product_base</option>
                                <option value="Category_base">Category_base</option>
                                <option value="Cart_base">Cart_base</option>
                            @else                                
                                <option value="Cart_base">Cart_base</option>
                                <option value="Category_base">Category_base</option>
                                <option value="Product_base">Product_base</option>
                            @endif
                        </select>
                    </div>
                </div>
                <!-- end type -->
                <!-- discount type -->
                <div class="row g-2 align-items-center" style="margin-top:1px;">
                    <div class="col-2 ">
                        {{ Form::label('discount_type', 'Discount_type:') }}
                    </div>
                    <div class="col-8">
                        <select id="select" name="discount_type" value="discount_type" class="form-control">
                            @if($coupons->discount_type == 'Amount')
                                <option value="Amount">Amount</option>
                                <option value="Percent">Percent</option>
                            @else
                                <option value="Percent">Percent</option>
                                <option value="Amount">Amount</option>
                            @endif
                        </select> 
                    </div>
                </div>
                <!-- end discount type -->
                <!-- discount coupon -->
                <div class="row g-2 align-items-center" style="margin-top:1px;">
                    <div class="col-2 ">
                        {{ Form::label('discount_coup', 'Discount_coupon:') }}
                    </div>
                    <div class="col-8">
                        {{ Form::text('discount_coup',null, array('class' => 'form-control','required' => '', 'style'=>'margin-bottom: 5px;')) }}
                    </div>
                </div>
                <!--end discount coupon -->
                <!-- expiry date -->
                <div class="row g-2 align-items-center" style="margin-top:1px;">
                    <div class="col-2">
                        {{ Form::label('expiry_date','Expiry_date:',array('style' => 'margin-top: 10px;')) }}
                    </div>
                    <div class="col-8" wire:ignore inline="true">
                        {{ Form::text('expiry_date',null, array('class'=>'form-control','required' => '', 'maxlength' => '255','placeholder' => 'Expiry Date','wire:model' => 'expiry_date', 'id' => 'expiry_date' ))  }}
                    </div>
                </div>
                <!-- end expiry date -->
                <!-- active -->
                <div class="row g-2 align-items-center" style="margin-top:1px;">
                    <div class="col-2 ">
                        {{ Form::label('is_active', 'Active:') }}
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
                        {{ Form::submit('Save As', ['class' => 'btn btn-success btn-block']) }}
                    </div>
                    <!-- delete  -->
                    <div class="col-sm-4">
                        {!! Html::linkRoute('coupons.index','Cancel', array($coupons -> id), array('class'=> 'btn
                        btn-warning btn-block', 'style'=>'margin-left:10px;')) !!}
                    </div>
                    {!! Form::close() !!}
                    
                    
                </div>
                <div class="row action-cate">
                    <!-- Cancel -->
                    <div class="col-sm-6">
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('coupons.destroy', $coupons -> id), 'onsubmit' => 'return confirm_delete()')) }}
                        {{ Form::submit('Delete', array('class' => 'btn btn-danger btn-block', 'style'=>'margin-right:5px;')) }}
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
                $this.set('expiry_date',data);
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
