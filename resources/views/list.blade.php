@extends('buy.app_buy')

@section('title' , '| Product List')

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
			<h3 class="c-font-uppercase c-font-sbold">Danh sách sản phẩm</h3>
			<!-- <h4 class="">Page Sub Title Goes Here</h4> -->
		</div>
		<ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
			<li><a href="shop-product-list.html">Danh sách</a></li>
			<li>/</li>
			<li class="c-state_active">Denimst</li>						
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
		<a href="javascript:;" class="c-toggler">Hoạt động 1<span class="c-arrow"></span></a>
		<ul class="c-dropdown-menu">
			
			
		</ul>
	</li>
	<li class="c-dropdown">
		<a href="javascript:;" class="c-toggler">Hoạt động phụ<span class="c-arrow"></span></a>
		<ul class="c-dropdown-menu">
			<li>
				<a href="#">Ví dụ</a>
			</li>
			<li class="c-dropdown c-dropdown-sub">
				<a href="javascript:;" class="c-toggler c-toggler-sub">Sub Menu
				<span class="c-arrow"></span></a>
				<ul class="c-dropdown-menu">
					<li>
						<a href="#">Ví dụ</a>
					</li>
					<li>
						<a href="#">Ví dụ</a>
					</li>
					<li>
						<a href="#">Ví dụ</a>
					</li>
					<li>
						<a href="#">Ví dụ</a>
					</li>
					<li>
						<a href="#">Ví dụ</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="#">Ví dụ</a>
			</li>
			<li>
				<a href="#">Ví dụ</a>
			</li>
		</ul>
	</li>
	<li class="c-dropdown">
		<a href="javascript:;" class="c-toggler">Hoạt động 2<span class="c-arrow"></span></a>
		<ul class="c-dropdown-menu">
			<li>
				<a href="#"><i class="icon-social-dribbble"></i> Ví dụ</a>
			</li>
			<li>
				<a href="#"><i class="icon-bell"></i> Ví dụ</a>
			</li>
			<li>
				<a href="#"><i class="icon-bubbles"></i> Ví dụ</a>
			</li>
			<li>
				<a href="#"><i class="icon-user"></i> Ví dụ</a>
			</li>
		</ul>
	</li>
	<li class="c-dropdown">
		<a href="javascript:;" class="c-toggler">Hoạt động 3<span class="c-arrow"></span></a>
		<ul class="c-dropdown-menu">
			<li>
				<a href="#">Ví dụ</a>
			</li>
			<li>
				<a href="#">Ví dụ</a>
			</li>
			<li>
				<a href="#">Ví dụ</a>
			</li>
			<li>
				<a href="#">Ví dụ</a>
			</li>
		</ul>
	</li>
	<li class="c-dropdown">
		<a href="javascript:;">Hoạt động 4 <span class="c-arrow c-toggler"></span></a>
		<ul class="c-dropdown-menu">
			<li>
				<a href="#">Ví dụ</a>
			</li>
			<li>
				<a href="#">Ví dụ</a>
			</li>
			<li>
				<a href="#">Ví dụ</a>
			</li>
			<li>
				<a href="#">Ví dụ</a>
			</li>
			<li class="c-dropdown">
				<a href="javascript:;">Sub Menu
				<span class="c-arrow c-toggler"></span></a>
				<ul class="c-dropdown-menu">
					<li>
						<a href="#">Ví dụ</a>
					</li>
					<li>
						<a href="#">Ví dụ</a>
					</li>
					<li>
						<a href="#">Ví dụ</a>
					</li>
					<li>
						<a href="#">Ví dụ</a>
					</li>
					<li>
						<a href="#">Ví dụ</a>
					</li>
				</ul>
			</li>
		</ul>
	</li>
</ul>

<div class="c-padding-20 c-margin-t-40 c-bg-grey-1 c-bg-img-bottom-right" style="background-image:url({{ asset('main/base/img/content/misc/feedback_box_2.png') }});">
	<div class="c-content-title-1 c-margin-t-20">
		<h3 class="c-font-uppercase c-font-bold">Có câu hỏi?</h3>
		<div class="c-line-left"></div>
		<form action="#">
			<div class="input-group input-group-lg c-square">
				<input type="text" class="form-control c-square" placeholder="Ask a question"/>
				<span class="input-group-btn">
				<button class="btn c-theme-btn c-btn-square c-btn-uppercase c-font-bold" type="button">Go!</button>
				</span>
			</div>
		</form>
		<p class="c-font-thin">Đặt câu hỏi của bạn và để dịch vụ khách hàng tận tâm của chúng tôi giúp bạn xem qua Câu hỏi thường gặp của chúng tôi để nhận được câu trả lời cho câu hỏi của bạn!</p>
	</div>
</div><!-- END: LAYOUT/SIDEBARS/SHOP-SIDEBAR-MENU -->
			</div>
			<div class="c-layout-sidebar-content ">
			<!-- BEGIN: PAGE CONTENT -->
			<!-- BEGIN: CONTENT/SHOPS/SHOP-RESULT-FILTER-1 -->
<div class="c-shop-result-filter-1 clearfix form-inline">
	<div class="c-filter">
		<!-- <label class="control-label c-font-16">Hiện:</label>
		<select class="form-control c-square c-theme c-input" wire:model="pagesize">
			<option value="4" selected="selected">4</option>
			<option value="6">6</option>
			<option value="10">10</option>
			<option value="12">12</option>
		</select> -->
	</div>
	<div class="c-filter">
		<label class="control-label c-font-16">Theo&nbsp;:</label>
		<select class="form-control c-square c-theme c-input" wire:model="sorting">
			<option value="default" selected="selected">Tìm kiếm mặc định</option>
			<option value="populars">Hiện hành</option>
			<option value="date">Mới nhất</option>
			<option value="price">Giá (Thấp &gt; Cao)</option>
			<option value="price-desc">Price (Cao &gt; Thấp)</option>
		</select>
	</div>
</div><!-- END: CONTENT/SHOPS/SHOP-RESULT-FILTER-1 -->

<div class="c-margin-t-20"></div>

<!-- BEGIN: CONTENT/SHOPS/SHOP-2-8 -->
@foreach($products as $post)
<div class="row c-margin-b-40 product_data">
	<input type="hidden" value="{{ $post->id }}" class="product_id">
	<div class="c-content-product-2 c-bg-white">
            <div class="col-md-4">
                <div class="c-content-overlay">
                    <div class="c-label c-bg-red c-font-uppercase c-font-white c-font-13 c-font-bold">Sale</div>
                    <div class="c-label c-bg-red c-font-uppercase c-font-white c-font-13 c-font-bold">Sale</div>
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
                    <p class="c-price c-font-26 c-font-thin">{{ $post->price - $post->discount_value}}$ &nbsp;
                        <span class="c-font-26 c-font-line-through c-font-red">{{ $post->price }}$</span>
                    </p>
                </div>
                <div>
					@if($post->quantity > 0 )
                    <!-- <button type="submit" class="btn btn-sm c-theme-btn c-btn-square c-btn-uppercase c-btn-bold addToCartBtn">
                        <i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng
                    </button> -->
					<a href="{{ url('product/'.$post->slug) }}" class="btn btn-sm c-theme-btn c-btn-square c-btn-uppercase c-btn-bold">
						<i class="fa fa-shopping-cart"></i>Chi Tiết
					</a>
					@endif
                    <button type="submit" class="btn btn-sm btn-default c-btn-square c-btn-uppercase c-btn-bold addtoWishlist">
                        <i class="fa fa-heart-o"></i>Thêm vào mục yêu thích
                    </button>
                </div>
				<br>
				<div>
				@if($post->quantity > 0 )
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
        {!! $products->links(); !!}
    </div>
</ul>			<!-- END: PAGE CONTENT -->
			</div>
		</div>
	</div>
	<!-- END: PAGE CONTAINER -->


@endsection

@section('buy_script')

@endsection
