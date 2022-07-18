@extends('layouts.userdashboard')

@section('title', '| Update Account')

@section('stylesheet_1')

    {!! Html::style('css/parsley.css') !!}
    {!! Html::style('css/select2.min.css') !!}

@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="container">
            <h1 class="text-center">Update Information</h1>
            <hr>
            <div class="row">
            {!! Form::model($account, ['route' => ['updateaccount', $account->id],'data-parsley-validate' =>'', 'method'
            => 'PUT']) !!}
                    <div class="row g-2 align-items-center user1">
                        <div class="col-1">
                            {{ Form::label('username','Username:',array('style' => 'margin-top: 10px;')) }}
                        </div>
                        <div class="col-11">
                            {{ $account->username }}
                            <input id="username" name="username" type="hidden" value="{{ $account->username }}">
                            <input id="password" name="password" type="hidden" value="{{ $account->password }}">
                            <input id="role" name="role" type="hidden" value="{{ $account->role }}">
                        </div>
                    </div>
                    <!-- Username, Password, Role -->
                    <div class="row g-2 align-items-center user1">
                        <div class="col-1">
                            {{ Form::label('email','Email:',array('style' => 'margin-top: 10px;')) }}
                        </div>
                        <div class="col-11">
                            {{ Form::text('email',null, array('class'=>'form-control','required' => '', 'maxlength' => '255' ))  }}
                        </div>
                    </div>
                    <!-- email -->
                    <div class="row g-2 align-items-center user1">
                        <div class="col-1">
                            {{ Form::label('fname','First Name:',array('style' => 'margin-top: 10px;')) }}
                        </div>
                        <div class="col-11">
                            {{ Form::text('fname',null, array('class'=>'form-control','required' => '', 'maxlength' => '255' ))  }}
                        </div>
                    </div>
                    <!-- First name -->
                    <div class="row g-2 align-items-center user1">
                        <div class="col-1">
                            {{ Form::label('lname','Last Name:',array('style' => 'margin-top: 10px;')) }}
                        </div>
                        <div class="col-11">
                            {{ Form::text('lname',null, array('class'=>'form-control','required' => '', 'maxlength' => '255' ))  }}
                        </div>
                    </div>
                    <!-- Last name -->
                    <div class="row g-2 align-items-center user1">
                        <div class="col-1">
                            {{ Form::label('company','Company:',array('style' => 'margin-top: 10px;')) }}
                        </div>
                        <div class="col-11">
                            {{ Form::text('company',null, array('class'=>'form-control','required' => '', 'maxlength' => '255' ))  }}
                        </div>
                    </div>
                    <!-- Company -->
                    <div class="row g-2 align-items-center user1">
                        <div class="col-1">
                            {{ Form::label('city','City:',array('style' => 'margin-top: 10px;')) }}
                        </div>
                        <div class="col-11">
                            {{ Form::text('city',null, array('class'=>'form-control','required' => '', 'maxlength' => '255' ))  }}
                        </div>
                    </div>
                    <!-- City -->
                    <div class="row g-2 align-items-center user1">
                        <div class="col-1">
                            {{ Form::label('state','State:',array('style' => 'margin-top: 10px;')) }}
                        </div>
                        <div class="col-11">
                            {{ Form::text('state',null, array('class'=>'form-control','required' => '', 'maxlength' => '255' ))  }}
                        </div>
                    </div>
                    <!-- State -->
                    <div class="row g-2 align-items-center user1">
                        <div class="col-1">
                            {{ Form::label('address1','Address 1:',array('style' => 'margin-top: 10px;')) }}
                        </div>
                        <div class="col-11">
                            {{ Form::text('address1',null, array('class'=>'form-control','required' => '', 'maxlength' => '255' ))  }}
                        </div>
                    </div>
                    <!-- Address 1 -->
                    <div class="row g-2 align-items-center user1">
                        <div class="col-1">
                            {{ Form::label('address2','Address 2:',array('style' => 'margin-top: 10px;')) }}
                        </div>
                        <div class="col-11">
                            {{ Form::text('address2',null, array('class'=>'form-control','required' => '', 'maxlength' => '255' ))  }}
                        </div>
                    </div>
                    <!-- Address 2-->
                    <div class="row g-2 align-items-center user1">
                        <div class="col-1">
                            {{ Form::label('phone','Phone:',array('style' => 'margin-top: 10px;')) }}
                        </div>
                        <div class="col-11">
                            {{ Form::text('phone',null, array('class'=>'form-control','required' => '', 'maxlength' => '255' ))  }}
                        </div>
                    </div>
                    <!-- Phone -->
                    <div class="row g-2 align-items-center">
                        <div class="col-1">
                            {{ Form::label('zipcode','Postcode / Zip:',array('style' => 'margin-top: 10px;')) }}
                        </div>
                        <div class="col-11">
                            {{ Form::text('zipcode',null, array('class'=>'form-control','required' => '', 'maxlength' => '255' ))  }}
                        </div>
                    </div>
                    <!-- Postcode -->
                    <div class="row g-2 align-items-center">
                        <div class="col-1">
                            {{ Form::label('note','Note:',array('style' => 'margin-top: 10px;')) }}
                        </div>
                        <div class="col-11">
                            {{ Form::text('note',null, array('class'=>'form-control','required' => '', 'maxlength' => '255' ))  }}
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row action-cate">
                            <!-- save change -->
                            <div class="col-sm-6" style="text-align: center;">
                                {{ Form::submit('Save As', ['class' => 'btn btn-primary btn-block', 'style' => 'margin-top: 20px;']) }}
                            </div>
                            <div class="col-sm-6" style="text-align: center;">
                                {{ Html::linkRoute('dashboard', 'Back',[],array('class'=>'btn btn-info btn-block', 'style' => 'margin-top: 20px;')) }}                            
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
