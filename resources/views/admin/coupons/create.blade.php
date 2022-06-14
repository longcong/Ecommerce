@extends('layouts.admin')

@section('title', '| Create Coupon')

@section('stylesheet')

    {!! Html::style('css/parsley.css') !!}
    {!! Html::style('css/select2.min.css') !!}

@endsection

@section('content')

<div class="card">
    <div class="card-body">
        <div class="container">
            <h1 class="text-center">Create New Coupon</h1>
            <hr>
            <div class="row">
                {!! Form::open(['route' => 'coupons.store', 'data-parsley-validate' =>'','method' => 'POST' ]) !!}
                    @csrf
                    <div class="row g-2 align-items-center">
                        <div class="col-1">
                            {{ Form::label('title','Title:',array('style' => 'margin-top: 10px;')) }}
                        </div>
                        <div class="col-11">
                            {{ Form::text('title',null, array('class'=>'form-control','required' => '', 'maxlength' => '255' ))  }}
                        </div>
                    </div>
                    
                    <!-- description -->
                    <div class="row g-2 align-items-center">
                        <div class="col-1">
                            {{ Form::label('description','Description: ',array('style' => 'margin-top: 10px;')) }}
                        </div>
                        <div class="col-11">
                            {{ Form::text('description',null, array('class'=>'form-control','required' => '', 'maxlength' => '255' ))  }}
                        </div>
                    </div>
                    
                    <div class="row g-2 align-items-center">
                        <!-- Type -->
                        <div class="col-1">
                            {{ Form::label('type','Type:',array('style' => 'margin-top: 10px;')) }}
                        </div>
                        <div class="col-3">
                            {{ Form::text('Type',null, array('class'=>'form-control','required' => '', 'maxlength' => '255' ))  }}
                        </div>
                        <!-- Seller_id -->
                        <div class="col-1">
                            {{ Form::label('seller_id','Seller_id:',array('style' => 'margin-top: 10px;')) }}
                        </div>
                        <div class="col-3">
                            {{ Form::text('seller_id',null, array('class'=>'form-control','required' => '', 'maxlength' => '255' ))  }}
                        </div>
                        <!-- Code -->
                        <div class="col-1">
                            {{ Form::label('code','Code:',array('style' => 'margin-top: 10px;')) }}
                        </div>
                        <div class="col-3">
                            {{ Form::text('code',null, array('class'=>'form-control','required' => '',))  }}
                        </div>
                        
                        <br>
                    </div>
                   
                    <div class="row g-2 align-items-center">
                        <!-- discount_coup -->
                        <div class="col-2">
                            {{ Form::label('discount_coup','Discount_coup:',array('style' => 'margin-top: 10px;')) }}
                        </div>
                        <div class="col-4">
                            {{ Form::text('discount_coup',null, array('class'=>'form-control','required' => '', 'maxlength' => '255' ))  }}
                        </div>
                        <!-- end discount_coup -->
                        <!-- discount_type -->
                        <!-- <div class="col-2">
                            {{ Form::label('discount_type','Discount_type:',array('style' => 'margin-top: 10px;')) }}
                        </div>
                        <div class="col-4">
                            {{ Form::text('discount_type',null, array('class'=>'form-control','required' => '', 'maxlength' => '255' ))  }}
                        </div> -->
                        <!-- end discount_type -->
                    </div>
                    <br>
                    <!-- {{Form::label('detail',"Detail:")}}
                    {{Form::textarea('detail',null,array('class' => 'form-control','required' =>'' )) }} -->
                    <div class="row">
                        <div class="col-3">
                            {{ Form::submit('Create Coupon', array('class' => 'btn btn-success btn-lg btn-block','style' => 'margin-top: 20px;')) }}
                        </div>
                        <div class="col-3">
                            {{ Html::linkRoute('coupons.index', 'All Coupons',[],array('class'=>'btn btn-info btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}
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

@endsection