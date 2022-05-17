@extends('buy.app_buy')

@section('title' , "| $product->title ")

@section('buy_main')

		
	<!-- BEGIN: LAYOUT/HEADERS/HEADER-1 -->
<!-- BEGIN: HEADER -->
@include('components.header')
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
            <a href="../../index.html" class="c-setting_font-style btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase active">LTR</a>		
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
        <h3 class="c-font-uppercase c-font-sbold">Product Details 2</h3>
        <h4 class="">Page Sub Title Goes Here</h4>
    </div>
    <ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
                                                        <li><a href="shop-product-details-2.html">Product Details 2</a></li>
        <li>/</li>
                                                        <li class="c-state_active">Jango Components</li>
                                
    </ul>
</div>
</div><!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
    <!-- BEGIN: PAGE CONTENT -->
    <!-- BEGIN: CONTENT/SHOPS/SHOP-PRODUCT-DETAILS-2 -->
<div class="c-content-box c-size-lg c-overflow-hide c-bg-white">
<div class="container">
    <div class="c-shop-product-details-2">
        <div class="row">
            <div class="col-md-6">
                <div class="c-product-gallery">
                    <div class="c-product-gallery-content">
                        <div class="c-zoom">
                            <img src="{{asset('images/' .$product->image)}}">
                        </div>
                    </div>                        
                    <div class="row c-product-gallery-thumbnail">
                        <div class="col-xs-3 c-product-thumb">
                            <img src="{{asset('images/' .$product->image)}}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 product_data">
            <input type="hidden" value="{{ $product->id }}" class="product_id">
                <div class="c-product-meta">
                    <div class="c-content-title-1">
                        <h3 class="c-font-uppercase c-font-bold">{{$product->title }}</h3>
                        <div class="c-line-left"></div>
                    </div>
                    <div class="c-product-badge">
                        <div class="c-product-sale">Sale</div>
                        <div class="c-product-new">New</div>
                    </div>
                    <div class="c-product-review">
                        <div class="c-product-rating">
                            <i class="fa fa-star c-font-red"></i>
                            <i class="fa fa-star c-font-red"></i>
                            <i class="fa fa-star c-font-red"></i>
                            <i class="fa fa-star c-font-red"></i>
                            <i class="fa fa-star-half-o c-font-red"></i>
                        </div>
                        <div class="c-product-write-review">
                            <a class="c-font-red" href="#">Write a review</a>
                        </div>
                    </div>
                    <div class="c-product-price">{{$product->price -$product->discount_value}}$</div>
                    <div class="c-product-price c-font-line-through c-font-red">{{$product->price }}$</div>
                    <div class="c-product-short-desc">
                        {{$product->note }}
                    </div>
        
                    <div class="row c-product-variant">
                        <div class="col-sm-12 col-xs-12">
                            <p class="c-product-meta-label c-product-margin-1 c-font-uppercase c-font-bold">Size:</p>
                            <div class="c-product-size">
                                <select>
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                    <option value="XL">XL</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12 col-xs-12 c-margin-t-20">
                            <div class="c-product-color"> 
                                <p class="c-product-meta-label c-font-uppercase c-font-bold">Color:</p>
                                <select>
                                    <option value="Red">Red</option>
                                    <option value="Black">Black</option>
                                    <option value="Beige">Beige</option>
                                    <option value="White">White</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="c-product-add-cart c-margin-t-20">
                        <div class="row">
                            <div class="col-sm-4 col-xs-12">
                                <div class="c-input-group c-spinner">
                                    <p class="c-product-meta-label c-product-margin-2 c-font-uppercase c-font-bold">QTY:</p>
                                    <input type="text" class="form-control c-item-1" value="1">
                                    <div class="c-input-group-btn-vertical">
                                        <button class="btn btn-default" type="button" data_input="c-item-1"><i class="fa fa-caret-up"></i></button>
                                        <button class="btn btn-default" type="button" data_input="c-item-1"><i class="fa fa-caret-down"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-xs-12 c-margin-t-20">
                            <button type="submit" class="btn btn-sm c-theme-btn c-btn-square c-btn-uppercase c-btn-bold addToCartBtn">
                                <i class="fa fa-shopping-cart"></i>Add Cart
                            </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div><!-- END: CONTENT/SHOPS/SHOP-PRODUCT-DETAILS-2 -->

<!-- BEGIN: CONTENT/SHOPS/SHOP-PRODUCT-TAB-1 -->
<div class="c-content-box c-size-md c-no-padding">
<div class="c-shop-product-tab-1" role="tabpanel">
    <div class="container">
        <ul class="nav nav-justified" role="tablist">
            <li role="presentation" class="active">
                <a class="c-font-uppercase c-font-bold" href="#tab-1" role="tab" data-toggle="tab">Description</a>
            </li>
            <li role="presentation">
                <a class="c-font-uppercase c-font-bold" href="#tab-2" role="tab" data-toggle="tab">Additional Information</a>
            </li>
            <li role="presentation">
                <a class="c-font-uppercase c-font-bold" href="#tab-3" role="tab" data-toggle="tab">Reviews (3)</a>
            </li>
        </ul>
    </div>
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade in active" id="tab-1"> 
            <div class="c-product-desc c-center">
                <div class="container">
                    <img src="{{ asset('main/base/img/content/shop5/30.png') }}"/>
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer
                        adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                        magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud
                        exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
                        consequat.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer
                        adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                        magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud
                        exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
                        consequat. Lorem ipsum dolor sit amet, consectetuer
                        adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                        magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud
                        exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
                        consequat.
                    </p>
                </div>
            </div>
            <div class="c-product-desc c-bg-dark">
                <div class="container">
                    <div class"row">
                        <div class="col-md-6">
                            <img src="{{ asset('main/base/img/content/shop5/32.png') }}"/>
                        </div>
                        <div class="col-md-6">
                            <div class="c-content-title-1">
                                <h3 class="c-font-uppercase c-font-white c-font-bold">Incredibly Versatile</h3>
                                <div class="c-line-left"></div>
                            </div>
                            <p class="c-font-grey">
                                Lorem ipsum dolor sit amet, consectetuer
                                adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                                magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud
                                exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
                                consequat. Lorem ipsum dolor sit amet, consectetuer
                                adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                                magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud
                                exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
                                consequat.
                            </p>
                            <br>
                            <button class="btn c-btn btn-lg c-theme-btn c-font-uppercase c-font-bold c-btn-square">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="c-product-desc c-bg-grey">
                <div class="container">
                    <div class"row">
                        <div class="col-md-6">
                            <div class="c-content-title-1">
                                <h3 class="c-font-uppercase c-font-bold c-right">High Quality</h3>
                                <div class="c-line-right"></div>
                            </div>
                            <p class="c-right">
                                Lorem ipsum dolor sit amet, consectetuer
                                adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                                magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud
                                exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
                                consequat. Lorem ipsum dolor sit amet, consectetuer
                                adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                                magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud
                                exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
                                consequat.
                            </p>
                            <br>
                            <button class="btn c-float-r c-btn btn-lg c-theme-btn c-font-uppercase c-font-bold c-btn-square">Add to Cart</button>
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('main/base/img/content/shop5/31.png') }}"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div role="tabpanel" class="tab-pane fade" id="tab-2">
            <div class="container">
                <p class="c-center"><strong>Sizes:</strong> S, M, L, XL</p><br>
                <p class="c-center"><strong>Colors:</strong> Red, Black, Beige, White</p><br/>
            </div>
            <div class="c-product-tab-meta-bg c-bg-grey c-center">
                <div class="container">
                    <p class="c-product-tab-meta"><strong>SKU:</strong> 1410SL</p>
                    <p class="c-product-tab-meta"><strong>Categories:</strong> <a href="#">Jacket</a>, <a href="#">Winter</a></p>
                </div>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane fade" id="tab-3">
            <div class="container">
                <h3 class="c-font-uppercase c-font-bold c-font-22 c-center c-margin-b-40 c-margin-t-40">Reviews for Warm Winter Jacket</h3>
                <div class="row">
                    <div class="col-xs-6">
                        <div class="c-user-avatar">
                            <img src="{{ asset('main/base/img/content/avatars/team1.jpg') }}"/>
                        </div>
                        <div class="c-product-review-name">
                            <h3 class="c-font-bold c-font-24 c-margin-b-5">Steve</h3>
                            <p class="c-date c-theme-font c-font-14">July 4, 2015</p>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="c-product-rating c-right">
                            <i class="fa fa-star c-font-red"></i>
                            <i class="fa fa-star c-font-red"></i>
                            <i class="fa fa-star c-font-red"></i>
                            <i class="fa fa-star c-font-red"></i>
                            <i class="fa fa-star-half-o c-font-red"></i>
                        </div>
                    </div>
                </div>
                <div class="c-product-review-content">
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer
                        adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                        magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud
                    </p>
                </div>
                <div class="row c-margin-t-40">
                    <div class="col-xs-6">
                        <div class="c-user-avatar">
                            <img src="{{ asset('main/base/img/content/avatars/team12.jpg') }}"/>
                        </div>
                        <div class="c-product-review-name">
                            <h3 class="c-font-bold c-font-24 c-margin-b-5">John</h3>
                            <p class="c-date c-theme-font c-font-14">July 4, 2015</p>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="c-product-rating c-right">
                            <i class="fa fa-star c-font-red"></i>
                            <i class="fa fa-star c-font-red"></i>
                            <i class="fa fa-star c-font-red"></i>
                            <i class="fa fa-star c-font-red"></i>
                            <i class="fa fa-star-half-o c-font-red"></i>
                        </div>
                    </div>
                </div>
                <div class="c-product-review-content">
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer
                        adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                        magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud
                    </p>
                </div>
                <div class="row c-margin-t-40">
                    <div class="col-xs-6">
                        <div class="c-user-avatar">
                            <img src="{{ asset('main/base/img/content/avatars/team8.jpg') }}"/>
                        </div>
                        <div class="c-product-review-name">
                            <h3 class="c-font-bold c-font-24 c-margin-b-5">Alice</h3>
                            <p class="c-date c-theme-font c-font-14">July 4, 2015</p>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="c-product-rating c-right">
                            <i class="fa fa-star c-font-red"></i>
                            <i class="fa fa-star c-font-red"></i>
                            <i class="fa fa-star c-font-red"></i>
                            <i class="fa fa-star c-font-red"></i>
                            <i class="fa fa-star-half-o c-font-red"></i>
                        </div>
                    </div>
                </div>
                <div class="c-product-review-content">
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer
                        adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                        magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud
                    </p>
                </div>
                <div class="row c-product-review-input">
                    <h3 class="c-font-bold c-font-uppercase">Submit your Review</h3>
                    <p class="c-review-rating-input">Rating:
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </p>
                    <textarea></textarea>
                    <button class="btn c-btn c-btn-square c-theme-btn c-font-bold c-font-uppercase c-font-white">Submit Review</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div><!-- END: CONTENT/SHOPS/SHOP-PRODUCT-TAB-1 -->

<!-- BEGIN: CONTENT/SHOPS/SHOP-2-2 -->
<div class="c-content-box c-size-md c-overflow-hide c-bs-grid-small-space">
<div class="container">
    <div class="c-content-title-4">
        <h3 class="c-font-uppercase c-center c-font-bold c-line-strike"><span class="c-bg-white">Most Popular</span></h3>
    </div>
    <div class="row">
        <div data-slider="owl">
            <div class="owl-carousel owl-theme c-theme owl-small-space c-owl-nav-center" data-rtl="false" data-items="4" data-slide-speed="8000">
                <div class="item">
                    <div class="c-content-product-2 c-bg-white c-border">
                        <div class="c-content-overlay">
                            <div class="c-label c-bg-red c-font-uppercase c-font-white c-font-13 c-font-bold">Sale</div>
                            <div class="c-overlay-wrapper">
                                <div class="c-overlay-content">
                                    <a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                </div>
                            </div>
                            <div class="c-bg-img-center-contain c-overlay-object" data-height="height" style="height: 270px; background-image: url({{ asset('main/base/img/content/shop5/18.png') }}) ;"></div>
                        </div>
                        <div class="c-info">
                            <p class="c-title c-font-18 c-font-slim">Samsung Galaxy Note 4</p>
                            <p class="c-price c-font-16 c-font-slim">$548 &nbsp;
                                <span class="c-font-16 c-font-line-through c-font-red">$600</span>
                            </p>
                        </div>
                        <div class="btn-group btn-group-justified" role="group">
                            <div class="btn-group c-border-top" role="group">
                                <a href="shop-product-wishlist.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Wishlist</a>
                            </div>
                            <div class="btn-group c-border-left c-border-top" role="group">
                                <a href="shop-cart.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="c-content-product-2 c-bg-white c-border">
                        <div class="c-content-overlay">
                            <div class="c-overlay-wrapper">
                                <div class="c-overlay-content">
                                    <a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                </div>
                            </div>
                            <div class="c-bg-img-center-contain c-overlay-object" data-height="height" style="height: 270px; background-image: url({{ asset('main/base/img/content/shop5/27.png') }}) ;"></div>
                        </div>
                        <div class="c-info">
                            <p class="c-title c-font-18 c-font-slim">Samsung Galaxy S4</p>
                            <p class="c-price c-font-16 c-font-slim">$548 &nbsp;
                                <span class="c-font-16 c-font-line-through c-font-red">$600</span>
                            </p>
                        </div>
                        <div class="btn-group btn-group-justified" role="group">
                            <div class="btn-group c-border-top" role="group">
                                <a href="shop-product-wishlist.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Wishlist</a>
                            </div>
                            <div class="btn-group c-border-left c-border-top" role="group">
                                <a href="shop-cart.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="c-content-product-2 c-bg-white c-border">
                        <div class="c-content-overlay">
                            <div class="c-overlay-wrapper">
                                <div class="c-overlay-content">
                                    <a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                </div>
                            </div>
                            <div class="c-bg-img-center-contain c-overlay-object" data-height="height" style="height: 270px; background-image:  url({{ asset('main/base/img/content/shop5/21.png') }});"></div>
                        </div>
                        <div class="c-info">
                            <p class="c-title c-font-18 c-font-slim">Apple iPhone 5</p>
                            <p class="c-price c-font-16 c-font-slim">$548 &nbsp;
                                <span class="c-font-16 c-font-line-through c-font-red">$600</span>
                            </p>
                        </div>
                        <div class="btn-group btn-group-justified" role="group">
                            <div class="btn-group c-border-top" role="group">
                                <a href="shop-product-wishlist.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Wishlist</a>
                            </div>
                            <div class="btn-group c-border-left c-border-top" role="group">
                                <a href="shop-cart.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="c-content-product-2 c-bg-white c-border">
                        <div class="c-content-overlay">
                            <div class="c-label c-bg-red c-font-uppercase c-font-white c-font-13 c-font-bold">Sale</div>
                            <div class="c-label c-label-right c-theme-bg c-font-uppercase c-font-white c-font-13 c-font-bold">New</div>
                            <div class="c-overlay-wrapper">
                                <div class="c-overlay-content">
                                    <a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                </div>
                            </div>
                            <div class="c-bg-img-center-contain c-overlay-object" data-height="height" style="height: 270px; background-image: url({{ asset('main/base/img/content/shop5/22.png') }}) ;"></div>
                        </div>
                        <div class="c-info">
                            <p class="c-title c-font-18 c-font-slim">HTC</p>
                            <p class="c-price c-font-16 c-font-slim">$548 &nbsp;
                                <span class="c-font-16 c-font-line-through c-font-red">$600</span>
                            </p>
                        </div>
                        <div class="btn-group btn-group-justified" role="group">
                            <div class="btn-group c-border-top" role="group">
                                <a href="shop-product-wishlist.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Wishlist</a>
                            </div>
                            <div class="btn-group c-border-left c-border-top" role="group">
                                <a href="shop-cart.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="c-content-product-2 c-bg-white c-border">
                        <div class="c-content-overlay">
                            <div class="c-overlay-wrapper">
                                <div class="c-overlay-content">
                                    <a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                </div>
                            </div>
                            <div class="c-bg-img-center-contain c-overlay-object" data-height="height" style="height: 270px; background-image: url({{ asset('main/base/img/content/shop5/20.png') }})"></div>
                        </div>
                        <div class="c-info">
                            <p class="c-title c-font-18 c-font-slim">Apple iPhone 6</p>
                            <p class="c-price c-font-16 c-font-slim">$548 &nbsp;
                                <span class="c-font-16 c-font-line-through c-font-red">$600</span>
                            </p>
                        </div>
                        <div class="btn-group btn-group-justified" role="group">
                            <div class="btn-group c-border-top" role="group">
                                <a href="shop-product-wishlist.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Wishlist</a>
                            </div>
                            <div class="btn-group c-border-left c-border-top" role="group">
                                <a href="shop-cart.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="c-content-product-2 c-bg-white c-border">
                        <div class="c-content-overlay">
                            <div class="c-label c-bg-red-2 c-font-uppercase c-font-white c-padding-10 c-font-13 c-font-bold">Hot</div>
                            <div class="c-overlay-wrapper">
                                <div class="c-overlay-content">
                                    <a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                </div>
                            </div>
                            <div class="c-bg-img-center-contain c-overlay-object" data-height="height" style="height: 270px; background-image: url ({{ asset('main/base/img/content/shop5/24.png') }}) "></div>
                        </div>
                        <div class="c-info">
                            <p class="c-title c-font-18 c-font-slim">Apple iPhone 6+</p>
                            <p class="c-price c-font-16 c-font-slim">$548 &nbsp;
                                <span class="c-font-16 c-font-line-through c-font-red">$600</span>
                            </p>
                        </div>
                        <div class="btn-group btn-group-justified" role="group">
                            <div class="btn-group c-border-top" role="group">
                                <a href="shop-product-wishlist.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Wishlist</a>
                            </div>
                            <div class="btn-group c-border-left c-border-top" role="group">
                                <a href="shop-cart.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div><!-- END: CONTENT/SHOPS/SHOP-2-2 -->

    <!-- END: PAGE CONTENT -->
</div>
<!-- END: PAGE CONTAINER -->

<!-- BEGIN: LAYOUT/FOOTERS/FOOTER-6 -->

@endsection

@section('buy_script')

@endsection