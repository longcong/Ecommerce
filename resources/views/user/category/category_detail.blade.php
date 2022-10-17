@extends('buy.app_buy')

@section('title' , "| $filter_category->name")

@section('buy_main')

 	
	<!-- BEGIN: LAYOUT/HEADERS/HEADER-1 -->
<!-- BEGIN: HEADER -->
	<header class="c-layout-header c-layout-header-default c-layout-header-dark-mobile c-header-transparent-dark"
        data-minimize-offset="80">
        @include('components.header')
    </header>
<!-- END: HEADER --><!-- END: LAYOUT/HEADERS/HEADER-1 -->
	
	<!-- BEGIN: CONTENT/USER/FORGET-PASSWORD-FORM -->
<div class="modal fade c-content-login-form" id="forget-password-form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content c-square">
            <div class="modal-header c-no-border">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <h3 class="c-font-24 c-font-sbold">Password Recovery</h3>
                <p>To recover your password please fill in your email address</p>
                <form>
                    <div class="form-group">
                        <label for="forget-email" class="hide">Email</label>
                        <input type="email" class="form-control input-lg c-square" id="forget-email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login">Submit</button>
                        <a href="javascript:;" class="c-btn-forgot" data-toggle="modal" data-target="#login-form" data-dismiss="modal">Back To Login</a>
                    </div>
                </form>
            </div>
            <div class="modal-footer c-no-border">                
                <span class="c-text-account">Don't Have An Account Yet ?</span>
                <a href="javascript:;" data-toggle="modal" data-target="#signup-form" data-dismiss="modal" class="btn c-btn-dark-1 btn c-btn-uppercase c-btn-bold c-btn-slim c-btn-border-2x c-btn-square c-btn-signup">Signup!</a>
            </div>
        </div>
    </div>
</div><!-- END: CONTENT/USER/FORGET-PASSWORD-FORM -->
	<!-- BEGIN: CONTENT/USER/SIGNUP-FORM -->
<div class="modal fade c-content-login-form" id="signup-form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content c-square">
            <div class="modal-header c-no-border">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <h3 class="c-font-24 c-font-sbold">Create An Account</h3>
                <p>Please fill in below form to create an account with us</p>
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="username" class="hide">Username</label>
                        <div class="col-md-6">
                            <input id="username" type="text" class="form-control input-lg @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" placeholder="Username">
                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                            <label for="password" class="col-md-4  col-form-label text-md-right hide">{{ __('Password:') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control input-lg @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4  col-form-label text-md-right hide">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control input-lg" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                            </div>
                        </div>
                    <div class="form-group">
                        <button type="submit" class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login">
                            {{ __('Register') }}
                        </button>
                        <a href="javascript:;" class="c-btn-forgot" data-toggle="modal" data-target="#login-form" data-dismiss="modal">Back To Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div><!-- END: CONTENT/USER/SIGNUP-FORM -->
	<!-- BEGIN: CONTENT/USER/LOGIN-FORM -->
<div class="modal fade c-content-login-form" id="login-form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content c-square">
            <div class="modal-header c-no-border">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <h3 class="c-font-24 c-font-sbold">Good Afternoon!</h3>
                <p>Let's make today a great day!</p>
                <form  method="POST" action="{{ route('login') }}">
            @csrf

                <div class="form-group row">
                    <label for="username" class="hide">Username:</label>
                    <div class="col-md-6">
                        <input id="username" type="text" class="form-control input-lg  @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus placeholder="Username">
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="hide">{{ __('Password:') }}</label>
                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control input-lg  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                <div class="form-group">

                    <button type="submit" class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login">
                        Login
                    </button>
                    <a href="javascript:;" data-toggle="modal" data-target="#forget-password-form" data-dismiss="modal" class="c-btn-forgot">
                        Forgot Your Password ?
                    </a>

                </div>
                <div class="clearfix">
                    <div class="c-content-divider c-divider-sm c-icon-bg c-bg-grey c-margin-b-20">
                        <span>or signup with</span>
                    </div>
                    <ul class="c-content-list-adjusted">
                        <li>
                            <a class="btn btn-block c-btn-square btn-social btn-twitter">
                              <i class="fa fa-twitter"></i>
                              Twitter
                            </a>
                        </li>
                        <li>
                            <a class="btn btn-block c-btn-square btn-social btn-facebook">
                              <i class="fa fa-facebook"></i>
                              Facebook
                            </a>
                        </li>
                        <li>
                            <a class="btn btn-block c-btn-square btn-social btn-google">
                              <i class="fa fa-google"></i>
                              Google
                            </a>
                        </li>
                    </ul>
                </div>
            </form>
            </div>
            <div class="modal-footer c-no-border">                
                <span class="c-text-account">Don't Have An Account Yet ?</span>
                <a href="javascript:;" data-toggle="modal" data-target="#signup-form" data-dismiss="modal" class="btn c-btn-dark-1 btn c-btn-uppercase c-btn-bold c-btn-slim c-btn-border-2x c-btn-square c-btn-signup">Signup!</a>
            </div>
        </div>
    </div>
</div><!-- END: CONTENT/USER/LOGIN-FORM -->

	<!-- BEGIN: LAYOUT/SIDEBARS/QUICK-SIDEBAR -->
<nav class="c-layout-quick-sidebar">
	<div class="c-header">
		<button type="button" class="c-link c-close">
		<i class="icon-login"></i>		
		</button>
	</div>
	<div class="c-content">
		<div class="c-section">
			<h3>JANGO DEMOS</h3>
			<div class="c-settings c-demos c-bs-grid-reset-space">	
				<div class="row">
					<div class="col-md-12">
						<a href="index.html" class="c-demo-container c-demo-img-lg">
							<div class="c-demo-thumb active">
								<img src="{{ asset('main/base/img/content/quick-sidebar/default.jpg') }}" class="c-demo-thumb-img"/>
							</div>
						</a>	
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<a href="../corporate_1/index.html" class="c-demo-container">
							<div class="c-demo-thumb  c-thumb-left">
								<img src="{{ asset('main/base/img/content/quick-sidebar/corporate_1.jpg') }}" class="c-demo-thumb-img"/>
							</div>
						</a>	
					</div>
					<div class="col-md-6">
						<a href="../agency_1/index.html" class="c-demo-container">
							<div class="c-demo-thumb  c-thumb-right">
								<img src="{{ asset('main/base/img/content/quick-sidebar/corporate_1-onepage.jpg') }}" class="c-demo-thumb-img"/>
							</div>
						</a>	
					</div>
				</div>			
			</div>
		</div>	
		<div class="c-section">
			<h3>Theme Colors</h3>
			<div class="c-settings">

				<span class="c-color c-default c-active" data-color="default"></span>
				
				<span class="c-color c-green1" data-color="green1"></span>
				<span class="c-color c-green2" data-color="green2"></span>
				<span class="c-color c-green3" data-color="green3"></span>

				<span class="c-color c-yellow1" data-color="yellow1"></span>
				<span class="c-color c-yellow2" data-color="yellow2"></span>
				<span class="c-color c-yellow3" data-color="yellow3"></span>
				
				<span class="c-color c-red1" data-color="red1"></span>
				<span class="c-color c-red2" data-color="red2"></span>
				<span class="c-color c-red3" data-color="red3"></span>

				<span class="c-color c-purple1" data-color="purple1"></span>
				<span class="c-color c-purple2" data-color="purple2"></span>
				<span class="c-color c-purple3" data-color="purple3"></span>

				<span class="c-color c-blue1" data-color="blue1"></span>
				<span class="c-color c-blue2" data-color="blue2"></span>
				<span class="c-color c-blue3" data-color="blue3"></span>

				<span class="c-color c-brown1" data-color="brown1"></span>
				<span class="c-color c-brown2" data-color="brown2"></span>
				<span class="c-color c-brown3" data-color="brown3"></span>

				<span class="c-color c-dark1" data-color="dark1"></span>
				<span class="c-color c-dark2" data-color="dark2"></span>
				<span class="c-color c-dark3" data-color="dark3"></span>
			</div>
		</div>	
		<div class="c-section">
			<h3>Header Type</h3>
			<div class="c-settings">				
				<input type="button" class="c-setting_header-type btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase active" data-value="boxed" value="boxed"/>
				<input type="button" class="c-setting_header-type btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase" data-value="fluid" value="fluid"/>
			</div>
		</div>		
		<div class="c-section">
			<h3>Header Mode</h3>
			<div class="c-settings">			
				<input type="button" class="c-setting_header-mode btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase active" data-value="fixed" value="fixed"/>
				<input type="button" class="c-setting_header-mode btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase" data-value="static" value="static"/>
			</div>
		</div>
		<div class="c-section">
			<h3>Mega Menu Style</h3>
			<div class="c-settings">			
				<input type="button" class="c-setting_megamenu-style btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase active" data-value="dark" value="dark"/>
				<input type="button" class="c-setting_megamenu-style btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase" data-value="light" value="light"/>
			</div>
		</div>
		<div class="c-section">
			<h3>Font Style</h3>
			<div class="c-settings">			
				<input type="button" class="c-setting_font-style btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase active" data-value="default" value="default"/>
				<input type="button" class="c-setting_font-style btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase" data-value="light" value="light"/>
			</div>
		</div>
		<div class="c-section">
			<h3>Reading Style</h3>
			<div class="c-settings">	
				<a href="{{ url('index.html') }}" class="c-setting_font-style btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase active">LTR</a>		
				<a href="http://www.themehats.com/themes/jango/rtl/" class="c-setting_font-style btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase ">RTL</a>		
			</div>
		</div>
	</div>
</nav><!-- END: LAYOUT/SIDEBARS/QUICK-SIDEBAR -->

	<!-- BEGIN: PAGE CONTAINER -->
	<div class="c-layout-page">
		<!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
<div class="c-layout-breadcrumbs-1 c-subtitle c-fonts-uppercase c-fonts-bold c-bordered c-bordered-both">
	<div class="container">
		<div class="c-page-title c-pull-left">
			<h3 class="c-font-uppercase c-font-sbold">Sản phẩm theo thể loại</h3>
			<h4 class="">{{ $filter_category->meta_title }}</h4>
		</div>
		<ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
			<li class="c-state_active">{{ $filter_category->name }}</li>						
		</ul>
	</div>
</div><!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
		<div class="container">
			<div class="c-layout-sidebar-menu c-theme ">
			<!-- BEGIN: LAYOUT/SIDEBARS/SHOP-SIDEBAR-MENU -->
<div class="c-sidebar-menu-toggler">
	<h3 class="c-title c-font-uppercase c-font-bold">Navigation</h3>
	<a href="javascript:;" class="c-content-toggler" data-toggle="collapse" data-target="#sidebar-menu-1">		     		
	<span class="c-line"></span>
	<span class="c-line"></span>
	<span class="c-line"></span>
	</a>
</div>

<ul class="c-sidebar-menu collapse " id="sidebar-menu-1">
	<li class="c-dropdown c-active c-open">
		<a href="javascript:;" class="c-toggler">{{  $filter_category->name }}<span class="c-arrow"></span></a>
		<ul class="c-dropdown-menu">
			<div class="attribute-title">
				<label style="line-height: 38px;
							  width: 280px;
							  color: #333;
							  border-bottom: solid 1px #ccc;
							  text-shadow: 0px 1px 0 #fff;
							  background: #eee;
							  font-weight: bold;
							  padding: 0px 10px;
							  font-family: 'Roboto', sans-serif;
							  font-size: 16px;" 
							  class="form-label tpInputLabel">Hãng Sản Xuất
				</label>
			</div>
			<div class="filter-checkbox">
				<div class="container-sm">
					<div class="row">
						<div class="col-6 col-sm-6">
							<div class="form-check">
								<input name="brand" id="2" class="form-check-input filterhang" type="checkbox" value="Việt Nam" >
								<label class="form-check-label">
									Việt Nam
								</label>
							</div>
						</div>
						<div class="col-6 col-sm-6">
							<div class="form-check">
								<input name="brand" id="2" class="form-check-input filterhang" type="checkbox" value="Quảng Châu" >
								<label class="form-check-label">
									Quảng Châu
								</label>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</ul>
		<ul class="c-dropdown-menu">
			<div class="attribute-title">
				<label style="line-height: 38px;
							  width: 280px;
							  color: #333;
							  border-bottom: solid 1px #ccc;
							  text-shadow: 0px 1px 0 #fff;
							  background: #eee;
							  font-weight: bold;
							  padding: 0px 10px;
							  font-family: 'Roboto', sans-serif;
							  font-size: 16px;" 
							  class="form-label tpInputLabel">{{  $filter_category->name }}
				</label>
			</div>
			<!-- 1 cái if quần què gì đó đi -->
			<div class="filter-checkbox">
				<div class="container-sm">
					<div class="row">
						<div class="col-6 col-sm-6">
							<div class="form-check">
								<input name="brand" id="1" class="form-check-input filterdanhmuc" type="checkbox" value="đủi" >
								<label class="form-check-label">
									Đủi
								</label>
							</div>
						</div>
						<div class="col-6 col-sm-6">
							<div class="form-check">
								<input name="brand" id="1" class="form-check-input filterdanhmuc" type="checkbox" value="đủi" >
								<label class="form-check-label">
									Short
								</label>
							</div>
						</div>
					
					</div>
				</div>
			</div>
			
		</ul>
    </li>
</ul>

<div class="c-padding-20 c-margin-t-40 c-bg-grey-1 c-bg-img-bottom-right" style="background-image:url({{ asset('main/base/img/content/misc/feedback_box_2.png') }});">
	<div class="c-content-title-1 c-margin-t-20">
		<h3 class="c-font-uppercase c-font-bold">Bạn có câu hỏi</h3>
		<div class="c-line-left"></div>
		<form action="#">
			<div class="input-group input-group-lg c-square">
				<input type="text" class="form-control c-square" placeholder="Hãy nhập câu hỏi"/>
				<span class="input-group-btn">
				<button class="btn c-theme-btn c-btn-square c-btn-uppercase c-font-bold" type="button">Gửi!</button>
				</span>
			</div>
		</form>
		<p class="c-font-thin">Hãy đặt câu hỏi của bạn và để dịch vụ khách hàng tận tâm của chúng tôi giúp bạn xem qua Câu hỏi thường gặp của chúng tôi để nhận được câu trả lời cho câu hỏi của bạn!</p>
	</div>
</div><!-- END: LAYOUT/SIDEBARS/SHOP-SIDEBAR-MENU -->
			</div>
			<div class="c-layout-sidebar-content ">
			<!-- BEGIN: PAGE CONTENT -->
			<!-- BEGIN: CONTENT/SHOPS/SHOP-RESULT-FILTER-1 -->
<div class="c-shop-result-filter-1 clearfix form-inline">
	<div class="c-filter">
		<label class="control-label c-font-16">Show:</label>
		<select class="form-control c-square c-theme c-input">
			<option value="#?limit=24" selected="selected">24</option>
			<option value="#?limit=25">25</option>
			<option value="#?limit=50">50</option>
			<option value="#?limit=75">75</option>
			<option value="#?limit=100" selected>100</option>
		</select>
	</div>
	<div class="c-filter">
		<label class="control-label c-font-16">Sort&nbsp;By:</label>
		<select class="form-control c-square c-theme c-input">
			<option value="#?sort=p.sort_order&amp;order=ASC" selected="selected">Default</option>
			<option value="#?sort=pd.name&amp;order=ASC">Name (A - Z)</option>
			<option value="#?sort=pd.name&amp;order=DESC">Name (Z - A)</option>
			<option value="#?sort=p.price&amp;order=ASC">Price (Low &gt; High)</option>
			<option value="#?sort=p.price&amp;order=DESC" selected>Price (High &gt; Low)</option>
			<option value="#?sort=rating&amp;order=DESC">Rating (Highest)</option>
			<option value="#?sort=rating&amp;order=ASC">Rating (Lowest)</option>
			<option value="#?sort=p.model&amp;order=ASC">Model (A - Z)</option>
			<option value="#?sort=p.model&amp;order=DESC">Model (Z - A)</option>
		</select>
	</div>
</div>
<!-- END: CONTENT/SHOPS/SHOP-RESULT-FILTER-1 -->

<div class="c-margin-t-20"></div>

<!-- BEGIN: CONTENT/SHOPS/SHOP-2-8 -->
@foreach($product_filter as $post)
<div class="row c-margin-b-40 product_data">
	<input type="hidden" value="{{ $post->id }}" class="product_id">
	<div class="c-content-product-2 c-bg-white">
            <div class="col-md-4">
                <div class="c-content-overlay">
                    <div class="c-label c-bg-red c-font-uppercase c-font-white c-font-13 c-font-bold">Sale</div>
                    <div class="c-label c-bg-red c-font-uppercase c-font-white c-font-13 c-font-bold"></div>
                    <div class="c-overlay-wrapper">
                        <div class="c-overlay-content">
                            <a href="{{ url('product/'.$post->slug) }}" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                        </div>
                    </div>
                    <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 230px; background-image: url({{ asset('images/' . $post->image) }});"></div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="c-info-list">
                    <h3 class="c-title c-font-bold c-font-22 c-font-dark">
                        <a class="c-theme-link" href="{{ url('product/'.$post->slug) }}">{{ $post->title }}</a>
                    </h3>
                    <p class="c-desc c-font-16 c-font-thin">{{ $post->note }}</p>
                    <p class="c-price c-font-26 c-font-line-through">{{number_format($post->price) }} VNĐ </p>
					<p>
                        <span class="c-font-26 c-font-red">{{ number_format($post->price - $post->discount_value) }} VNĐ</span>
                    </p>
                </div>
                <div>
					@if($post->quantity>0)
                    <button type="submit" class="btn btn-sm c-theme-btn c-btn-square c-btn-uppercase c-btn-bold addToCartBtn">
                        <i class="fa fa-shopping-cart"></i>Thêm vào giỏ
                    </button>
					@endif
                    <button type="submit" class="btn btn-sm btn-default c-btn-square c-btn-uppercase c-btn-bold addtoWishlist">
                        <i class="fa fa-heart-o"></i>Yêu Thích
                    </button>
                </div>
				<br>
				<div>
				@if($post->quantity >0)
					<label class="badge c-btn-border-2x c-btn-green-1">Còn hàng</label>
				@else
					<label class="badge c-btn-border-2x c-btn-red-1">Hết hàng</label>
				@endif	
				</div>
            </div>
       
	</div>
 
</div>
@endforeach

</div><!-- END: CONTENT/SHOPS/SHOP-2-8 -->

<div class="c-margin-t-20"></div>

<ul class="c-content-pagination c-square c-theme pull-right">
    <div class="row">
        {!! $product_filter->links(); !!}
    </div>
</ul>			<!-- END: PAGE CONTENT -->
			</div>
		</div>
	</div>
	<!-- END: PAGE CONTAINER -->


@endsection

@section('buy_script')
	<script type="text/javascript">
            //Chơi lẻ
            
            // const brands = 
            // document.getElementById('2').onclick = function() {
            //     if(document.getElementById("2").checked == true) {
            //         var test =  document.getElementById("2").value;	
            //         var asus =  document.getElementsByClassName('product_data')
            //         for (  var index = 0 ; index < asus.length ; index++) {
            //             if(asus[index].getAttribute("data-filter") != "ASUS"){
            //                 asus[index].style.display="none";
            //             }    
            //         }
            //     }   
            //     else{ 
            //         var asus =  document.getElementsByClassName('product_data');
            //         for (  var index = 0 ; index < asus.length ; index++) {
            //             asus[index].style.display="block";
            //         }
            //     }
            // };
            
            //Chấp tất
            var classtesst = document.querySelectorAll(".filterhang");
            var producttest = document.querySelectorAll(".product_data");
            for(var i = 0; i < classtesst.length ;i++){
                classtesst[i].addEventListener("click", function() {
                    if(this.checked == true){
                        for(var j = 0; j < producttest.length; j++){
                            if(this.value == producttest[j].getAttribute("data-filter")){
                                producttest[j].style.display = "block";
                            }
                        }
                    }
                    else{
                        for(var j = 0; j < producttest.length; j++){
                            producttest[j].style.display = "none";
                        }
                    }
                    
                })
            };

            var danhmuc = document.querySelectorAll(".filterdanhmuc");
            var producttest = document.querySelectorAll(".product_data");
            for(var i = 0; i < danhmuc.length ;i++){
                danhmuc[i].addEventListener("click", function() {
                    if(this.checked == true){
                        for(var j = 0; j < producttest.length; j++){
                            if(this.value == producttest[j].getAttribute("data-categories")){
                                producttest[j].style.display = "block";
                            }
                        }
                    }
                    else{
                        for(var j = 0; j < producttest.length; j++){
                            producttest[j].style.display = "none";
                        }
                    }
                    
                })
            };
    </script>
@endsection
