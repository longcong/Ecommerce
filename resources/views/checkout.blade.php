@extends('buy.app_buy')

@section('title' ,  '| CheckOut')

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
            <form>
                <div class="form-group">
                    <label for="signup-email" class="hide">Email</label>
                    <input type="email" class="form-control input-lg c-square" id="signup-email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="signup-username" class="hide">Username</label>
                    <input type="email" class="form-control input-lg c-square" id="signup-username" placeholder="Username">
                </div>
                <div class="form-group">
                    <label for="signup-fullname" class="hide">Fullname</label>
                    <input type="email" class="form-control input-lg c-square" id="signup-fullname" placeholder="Fullname">
                </div>
                <div class="form-group">
                    <label for="signup-country" class="hide">Country</label>
                    <select class="form-control input-lg c-square" id="signup-country">
                        <option value="1">Country</option>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login">Signup</button>
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
            <form>
                <div class="form-group">
                    <label for="login-email" class="hide">Email</label>
                    <input type="email" class="form-control input-lg c-square" id="login-email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="login-password" class="hide">Password</label>
                    <input type="password" class="form-control input-lg c-square" id="login-password" placeholder="Password">
                </div>
                <div class="form-group">
                    <div class="c-checkbox">
                        <input type="checkbox" id="login-rememberme" class="c-check">
                        <label for="login-rememberme" class="c-font-thin c-font-17">
                            <span></span>
                            <span class="check"></span>
                            <span class="box"></span>
                            Remember Me
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login">Login</button>
                    <a href="javascript:;" data-toggle="modal" data-target="#forget-password-form" data-dismiss="modal" class="c-btn-forgot">Forgot Your Password ?</a>
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
                            <img src="{{ asset('main/base/img/content/quick-sidebar/default.jpg')}}" class="c-demo-thumb-img"/>
                        </div>
                    </a>	
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <a href="../corporate_1/index.html" class="c-demo-container">
                        <div class="c-demo-thumb  c-thumb-left">
                            <img src="{{ asset('main/base/img/content/quick-sidebar/corporate_1.jpg')}}" class="c-demo-thumb-img"/>
                        </div>
                    </a>	
                </div>
                <div class="col-md-6">
                    <a href="../agency_1/index.html" class="c-demo-container">
                        <div class="c-demo-thumb  c-thumb-right">
                            <img src="{{ asset('main/base/img/content/quick-sidebar/corporate_1-onepage.jpg')}}" class="c-demo-thumb-img"/>
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
            <a href="#" class="c-setting_font-style btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase active">LTR</a>		
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
        <h3 class="c-font-uppercase c-font-sbold">Checkout</h3>
        <h4 class="">Page Sub Title Goes Here</h4>
    </div>
    <ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
                                                        <li><a href="shop-checkout.html">Checkout</a></li>
        <li>/</li>
                                                        <li class="c-state_active">Jango Components</li>
                                
    </ul>
</div>
</div><!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
    <!-- BEGIN: PAGE CONTENT -->
    <div class="c-content-box c-size-lg">
<div class="container">
    <form action="{{url('place-order')}}" class="c-shop-form-1" method="POST">
        <div class="row">
            <!-- BEGIN: ADDRESS FORM -->
            <div class="col-md-7 c-padding-20">
                <!-- BEGIN: BILLING ADDRESS -->
                <h3 class="c-font-bold c-font-uppercase c-font-24">Billing Address</h3>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="control-label">Country</label>
                        <select class="form-control c-square c-theme">
                            <option value="1">Vietnam</option>
                            <option value="2">Singapore</option>
                            <option value="3">Indonesia</option>
                            <option value="4">Thailand</option>
                            <option value="5">China</option>
                            <option value="6">Malaysia</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="control-label">First Name</label>
                                <input type="text" class="form-control c-square c-theme" placeholder="First Name">
                            </div>
                            <div class="col-md-6">
                                <label class="control-label">Last Name</label>
                                <input type="text" class="form-control c-square c-theme" placeholder="Last Name">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="control-label">Company Name</label>
                        <input type="text" class="form-control c-square c-theme" placeholder="Company Name">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="control-label">Address</label>
                        <input type="text" class="form-control c-square c-theme" placeholder="Street Address">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <input type="text" class="form-control c-square c-theme" placeholder="Apartment, suite, unit etc. (optional)">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="control-label">Town / City</label>
                        <input type="text" class="form-control c-square c-theme" placeholder="Town / City">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="control-label">State / County</label> <select class="form-control c-square c-theme">
                                    <option value="0">Select an option...</option>
                                    <option value="1">Vietnam</option>
                                    <option value="2">Singapore</option>
                                    <option value="3">Indonesia</option>
                                    <option value="4">Thailand</option>
                                    <option value="5">China</option>
                                    <option value="6">Malaysia</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="control-label">Postcode / Zip</label>
                                <input type="text" class="form-control c-square c-theme" placeholder="Postcode / Zip">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="control-label">Email Address</label>
                                <input type="email" class="form-control c-square c-theme" placeholder="Email Address">
                            </div>
                            <div class="col-md-6">
                                <label class="control-label">Phone</label>
                                <input type="tel" class="form-control c-square c-theme" placeholder="Phone">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row c-margin-t-15">
                    <div class="form-group col-md-12">
                        <div class="c-checkbox c-toggle-hide" data-object-selector="c-account" data-animation-speed="600">
                            <input type="checkbox" id="checkbox1-77" class="c-check">
                            <label for="checkbox1-77">
                                <span class="inc"></span>
                                <span class="check"></span>
                                <span class="box"></span>
                                Create an account?
                            </label>
                        </div>
                        <p class="help-block">Create an account by entering the information below. If you are a returning customer please login.</p>
                    </div>
                </div>
                <div class="row c-account">
                    <div class="form-group col-md-12">
                        <label class="control-label">Account Password</label>
                        <input type="password" class="form-control c-square c-theme" placeholder="Password">
                    </div>
                </div>
                <!-- BILLING ADDRESS -->
                <!-- SHIPPING ADDRESS -->
                <h3 class="c-font-bold c-font-uppercase c-font-24">Shipping Address</h3>
                <div class="row">
                    <div class="form-group col-md-12">
                        <div class="c-checkbox-inline">
                            <div class="c-checkbox c-toggle-hide" data-object-selector="c-shipping-address" data-animation-speed="600">
                                <input type="checkbox" id="checkbox6-444" class="c-check">
                                <label for="checkbox6-444">
                                    <span class="inc"></span>
                                    <span class="check"></span>
                                    <span class="box"></span>
                                    Ship to different address?
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="c-shipping-address">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="control-label">Country</label> <select class="form-control c-square c-theme">
                                <option value="1">Vietnam</option>
                                <option value="2">Singapore</option>
                                <option value="3">Indonesia</option>
                                <option value="4">Thailand</option>
                                <option value="5">China</option>
                                <option value="6">Malaysia</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label class="control-label">First Name</label>
                                    <input type="text" class="form-control c-square c-theme" name="fname" placeholder="First Name">
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label">Last Name</label>
                                    <input type="text" class="form-control c-square c-theme" name="lname" placeholder="Last Name">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="control-label">Company Name</label>
                            <input type="text" class="form-control c-square c-theme" name="cname" placeholder="Company Name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="control-label">Address</label>
                            <input type="text" class="form-control c-square c-theme" name="address1" placeholder="Street Address">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <input type="text" class="form-control c-square c-theme" name="address2" placeholder="Street Address 2">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="control-label">Town / City</label>
                            <input type="text" class="form-control c-square c-theme" name="city" placeholder="Town / City">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label class="control-label">State / County</label> <select class="form-control c-square c-theme" name="state">
                                        <option value="0">Select an option...</option>
                                        <option value="1">Malaysia</option>
                                        <option value="2">Singapore</option>
                                        <option value="3">Indonesia</option>
                                        <option value="4">Thailand</option>
                                        <option value="5">China</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label">Postcode / Zip</label>
                                    <input type="text" class="form-control c-square c-theme" name="zipcode" placeholder="Postcode / Zip">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label class="control-label">Email Address</label>
                                    <input type="email" class="form-control c-square c-theme" name="email" placeholder="Email Address">
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label">Phone</label>
                                    <input type="tel" class="form-control c-square c-theme" name="phone" placeholder="Phone">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- SHIPPING ADDRESS -->
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="control-label">Order Notes</label>
                        <textarea class="form-control c-square c-theme" rows="3" placeholder="Note about your order, e.g. special notes for delivery."></textarea>
                    </div>
                </div>
            </div>
            <!-- END: ADDRESS FORM -->
            <!-- BEGIN: ORDER FORM -->
            <div class="col-md-5">
                <div class="c-content-bar-1 c-align-left c-bordered c-theme-border c-shadow">
                <h1 class="c-font-bold c-font-uppercase c-font-24">Your Order</h1>
                <ul class="c-order list-unstyled">
                    <li class="row c-margin-b-15">
                        <div class="col-md-6 c-font-20"><h2>Product</h2></div>
                        <div class="col-md-6 c-font-20"><h2>Total</h2></div>
                    </li>
                    <li class="row c-border-bottom"></li>
                    @php $total =0;@endphp
                    @foreach ($cartitems as $item)
                    <li class="row c-margin-b-15 c-margin-t-15">
                        <div class="col-md-6 c-font-20"><a href="shop-product-details.html" class="c-theme-link">{{$item->products->title}}</a></div>
                        <div class="col-md-6 c-font-20">
                            <p class="">${{ ($item->products->price - $item->products->discount_value) * $item->prod_qty }}.00</p>
                        </div>
                    </li>
                    @php $total += ($item->products->price - $item->products->discount_value) * $item->prod_qty ; @endphp
                    @endforeach
                    <li class="row c-margin-b-15 c-margin-t-15">
                        <div class="col-md-6 c-font-20">Subtotal</div>
                        <div class="col-md-6 c-font-20">
                            <p class="">$<span class="c-subtotal">{{ $total }}.00</span></p>
                        </div>
                    </li>
                    <li class="row c-border-top c-margin-b-15"></li>
                    <li class="row">
                        <div class="col-md-6 c-font-20">Shipping</div>
                        <div class="col-md-6">
                            <div class="c-radio-list c-shipping-calculator" data-name="shipping_price" data-subtotal-selector="c-subtotal" data-total-selector="c-shipping-total">
                                <div class="c-radio">
                                    <input type="radio" value="20" id="radio11" class="c-radio" name="shipping_price" checked="">
                                    <label for="radio11">
                                        <span class="inc"></span>
                                        <span class="check"></span>
                                        <span class="box"></span>
                                        Flat Rate
                                    </label>
                                    <p class="c-shipping-price c-font-bold c-font-20">$20.00</p>
                                </div>
                                <div class="c-radio">
                                    <input type="radio" value="10" id="radio12" class="c-radio" name="shipping_price">
                                    <label for="radio12">
                                        <span class="inc"></span>
                                        <span class="check"></span>
                                        <span class="box"></span>
                                        Local Delivery
                                    </label>
                                    <p class="c-shipping-price c-font-bold c-font-20">$10.00</p>
                                </div>
                                <div class="c-radio">
                                    <input type="radio" value="0" id="radio13" class="c-radio" name="shipping_price">
                                    <label for="radio13">
                                        <span class="inc"></span>
                                        <span class="check"></span>
                                        <span class="box"></span>
                                        Local Pickup
                                    </label>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="row c-margin-b-15 c-margin-t-15">
                        <div class="col-md-6 c-font-20">
                            <p class="c-font-30">Total</p>
                        </div>
                        <div class="col-md-6 c-font-20">
                            <p class="c-font-bold c-font-30">$<span class="c-shipping-total">{{ $total }}.00</span></p>
                        </div>
                    </li>
                    <li class="row">
                        <div class="col-md-12">
                            <div class="c-radio-list">
                                <div class="c-radio">
                                    <input type="radio" id="radio1" class="c-radio" name="payment" checked="">
                                    <label for="radio1" class="c-font-bold c-font-20">
                                        <span class="inc"></span>
                                        <span class="check"></span>
                                        <span class="box"></span>
                                        Direct Bank Transfer
                                    </label>
                                    <p class="help-block">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                </div>
                                <div class="c-radio">
                                    <input type="radio" id="radio2" class="c-radio" name="payment">
                                    <label for="radio2" class="c-font-bold c-font-20">
                                        <span class="inc"></span>
                                        <span class="check"></span>
                                        <span class="box"></span>
                                        Cheque Payment
                                    </label>
                                </div>
                                <div class="c-radio">
                                    <input type="radio" id="radio3" class="c-radio" name="payment">
                                    <label for="radio3" class="c-font-bold c-font-20">
                                        <span class="inc"></span>
                                        <span class="check"></span>
                                        <span class="box"></span>
                                        Paypal
                                    </label>
                                    <img class="img-responsive" width="250" src="https://www.paypalobjects.com/webstatic/mktg/Logo/AM_mc_vs_ms_ae_UK.png" />
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="row c-margin-b-15 c-margin-t-15">
                        <div class="form-group col-md-12">
                            <div class="c-checkbox">
                                <input type="checkbox" id="checkbox1-11" class="c-check">
                                <label for="checkbox1-11">
                                    <span class="inc"></span>
                                    <span class="check"></span>
                                    <span class="box"></span>
                                    I’ve read and accept the Terms & Conditions
                                </label>
                            </div>
                        </div>
                    </li>
                    <li class="row">
                        <div class="form-group col-md-12" role="group">
                            <button type="submit" class="btn btn-lg c-theme-btn c-btn-square c-btn-uppercase c-btn-bold">Submit</button>
                            <button type="submit" class="btn btn-lg btn-default c-btn-square c-btn-uppercase c-btn-bold">Cancel</button>
                        </div>
                    </li>
                </ul>
            </div>     

            </div>
            <!-- END: ORDER FORM -->
        </div>
    </form>
</div>
</div>  
    <!-- END: PAGE CONTENT -->
</div>
<!-- END: PAGE CONTAINER -->

<!-- BEGIN: LAYOUT/FOOTERS/FOOTER-6 -->
@endsection

@section('buy_script')

@endsection