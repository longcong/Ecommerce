@extends('layouts.userdashboard')

@section('title', '| Cập nhật tài khoản')

@section('stylesheet_1')

    {!! Html::style('css/parsley.css') !!}
    {!! Html::style('css/select2.min.css') !!}

@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="container">
            <h1 class="text-center">Cập nhật thông tin</h1>
            <hr>
            <div class="row">
            {!! Form::model($account, ['route' => ['updateaccount', $account->id],'data-parsley-validate' =>'', 'method'
            => 'PUT']) !!}
                    <div class="row g-2 align-items-center user1">
                        <div class="col-2 m2">
                            {{ Form::label('username','Tên tài khoản:') }}
                        </div>
                        <div class="col-10 font-weight-bolder mb-0" style="margin-bottom: 5px;">
                            {{ $account->username }}
                            <input id="username" name="username" type="hidden" value="{{ $account->username }}">
                            <input id="password" name="password" type="hidden" value="{{ $account->password }}">
                            <input id="role" name="role" type="hidden" value="{{ $account->role }}">
                        </div>
                    </div>
                    <!-- Username, Password, Role -->
                    <div class="row g-2 align-items-center user1">
                        <div class="col-2 m2">
                            {{ Form::label('email','Email:') }}
                        </div>
                        <div class="col-10">
                            {{ Form::text('email',null, array('class'=>'form-control','required' => '', 'maxlength' => '255' ))  }}
                        </div>
                    </div>
                    <!-- email -->
                    <div class="row g-2 align-items-center user1">
                        <div class="col-2">
                            {{ Form::label('fname','Họ:') }}
                        </div>
                        <div class="col-10">
                            {{ Form::text('fname',null, array('class'=>'form-control','required' => '', 'maxlength' => '255' ))  }}
                        </div>
                    </div>
                    <!-- First name -->
                    <div class="row g-2 align-items-center user1">
                        <div class="col-2">
                            {{ Form::label('lname','Tên:') }}
                        </div>
                        <div class="col-10">
                            {{ Form::text('lname',null, array('class'=>'form-control','required' => '', 'maxlength' => '255' ))  }}
                        </div>
                    </div>
                    <!-- Last name -->
                    <div class="row g-2 align-items-center user1">
                        <div class="col-2">
                            {{ Form::label('company','Công ty:') }}
                        </div>
                        <div class="col-10">
                            {{ Form::text('company',null, array('class'=>'form-control','required' => '', 'maxlength' => '255' ))  }}
                        </div>
                    </div>
                    <!-- Company -->
                    <div class="row g-2 align-items-center user1">
                        <div class="col-2">
                            {{ Form::label('city','Thành phố:') }}
                        </div>
                        <div class="col-10">
                            {{ Form::text('city',null, array('class'=>'form-control','required' => '', 'maxlength' => '255' ))  }}
                        </div>
                    </div>
                    <!-- City -->
                    <div class="row g-2 align-items-center user1">
                        <div class="col-2">
                            {{ Form::label('state','Quận:') }}
                        </div>
                        <div class="col-10">
                            {{ Form::text('state',null, array('class'=>'form-control','required' => '', 'maxlength' => '255' ))  }}
                        </div>
                    </div>
                    <!-- State -->
                    <div class="row g-2 align-items-center user1">
                        <div class="col-2">
                            {{ Form::label('address1','Địa chỉ 1:') }}
                        </div>
                        <div class="col-10">
                            {{ Form::text('address1',null, array('class'=>'form-control','required' => '', 'maxlength' => '255' ))  }}
                        </div>
                    </div>
                    <!-- Address 1 -->
                    <div class="row g-2 align-items-center user1">
                        <div class="col-2">
                            {{ Form::label('address2','Địa chỉ 2:') }}
                        </div>
                        <div class="col-10">
                            {{ Form::text('address2',null, array('class'=>'form-control','required' => '', 'maxlength' => '255' ))  }}
                        </div>
                    </div>
                    <!-- Address 2-->
                    <div class="row g-2 align-items-center user1">
                        <div class="col-2">
                            {{ Form::label('phone','Số điện thoại:') }}
                        </div>
                        <div class="col-10">
                            {{ Form::text('phone',null, array('class'=>'form-control','required' => '', 'maxlength' => '255' ))  }}
                        </div>
                    </div>
                    <!-- Phone -->
                    <div class="row g-2 align-items-center user1">
                        <div class="col-2">
                            {{ Form::label('zipcode','mã code:') }}
                        </div>
                        <div class="col-10">
                            {{ Form::text('zipcode',null, array('class'=>'form-control','required' => '', 'maxlength' => '255' ))  }}
                        </div>
                    </div>
                    <!-- Postcode -->
                    <div class="row g-2 align-items-center user1">
                        <div class="col-2">
                            {{ Form::label('note','Lưu ý:') }}
                        </div>
                        <div class="col-10">
                            {{ Form::text('note',null, array('class'=>'form-control','required' => '', 'maxlength' => '255' ))  }}
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row action-cate">
                            <!-- save change -->
                            <div class="col-sm-6" style="text-align: center;">
                                {{ Form::submit('Lưu thay đổi', ['class' => 'btn btn-primary btn-block', 'style' => 'margin-top: 20px;']) }}
                            </div>
                            <div class="col-sm-6" style="text-align: center;">
                                {{ Html::linkRoute('dashboard', 'Trở về',[],array('class'=>'btn btn-info btn-block', 'style' => 'margin-top: 20px;')) }}                            
                            </div>
                        </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts_1')

    {!! Html::script('js/parsley.min.js') !!}
    {!! Html::script('js/select2.min.js') !!}
    
    <script type="text/javascript">
        $('.select2-multi').select2();
    </script>

@endsection
