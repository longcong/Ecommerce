<!DOCTYPE html>
<!-- 
Theme: JANGO - Ultimate Multipurpose HTML Theme Built With Twitter Bootstrap 3.3.7
Version: 2.0.1
Author: Themehats
Site: http://www.themehats.com
Purchase: http://themeforest.net/item/jango-responsive-multipurpose-html5-template/11987314?ref=themehats
Contact: support@themehats.com
Follow: http://www.twitter.com/themehats
-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en"  >
<!--<![endif]-->
<!-- BEGIN HEAD -->

<!-- Mirrored from themehats.com/themes/jango/demos/default/shop-home-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Feb 2019 04:56:00 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	@include('shoppage.head')
</head><body class="c-layout-header-fixed c-layout-header-mobile-fixed c-layout-header-fullscreen"> 
		
<!-- BEGIN: LAYOUT/HEADERS/HEADER-1 -->
<header class="c-layout-header c-layout-header-default c-layout-header-dark-mobile c-header-transparent-dark" data-minimize-offset="80">
	@include('components.header')
</header>
<!-- END: HEADER --><!-- END: LAYOUT/HEADERS/HEADER-1 -->
	<!-- BEGIN: CONTENT/USER/FORGET-PASSWORD-FORM -->
	@include('shoppage.sidebar')
	<!-- BEGIN: CONTENT/USER/LOGIN-FORM -->
<div class="modal fade c-content-login-form" id="login-form" role="dialog">
  	@include('shoppage.login')
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
								<img src="{{ asset('main/base/img/content/quick-sidebar/default.jpg') }}" class="c-demo-thumb-img" />
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
		
			<!-- BEGIN: PAGE CONTENT -->
		<!-- BEGIN: CONTENT/MISC/SHOP-BANNER-1 -->
        <div class="c-content-box c-reset c-pos-relative c-overflow-hide">
            <div class="c-bg-splash c-splash-left"></div>
            <div class="c-bg-splash c-splash-right"></div>
            <div class="container">
                <div class="c-shop-banner-1 c-shop-banner-height">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 c-shop-banner-height c-shop-banner-m-bg">
                            <div class="c-shop-banner-content c-shop-banner-left">
                                <img src="{{ asset('main/base/img/content/shop5/17.png') }} " class="c-shop-banner-img"/>
                                <div class="c-shop-banner-title">
                                    <h1 class="c-font-thin">MOTO<br/><span class="c-font-bold">PHONE</span></h1>
                                    <button class="btn btn-md c-btn c-btn-square c-btn-white c-btn-border-1x c-font-uppercase">Buy Now</button>
                                </div>	
                            </div>				
                        </div>
                        <div class="col-md-6 col-sm-12 c-shop-banner-height c-shop-banner-m-bg">
                            <div class="c-shop-banner-content c-shop-banner-right">
                                <img src="{{ asset('main/base/img/content/shop5/32.png') }} " class="c-shop-banner-img"/>
                                <div class="c-shop-banner-title">
                                    <h1 class="c-font-thin">MOTO<br/><span class="c-font-bold">WATCH</span></h1>
                                    <button class="btn btn-md c-btn c-btn-square c-btn-white c-btn-border-1x c-font-uppercase">Buy Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- END: CONTENT/MISC/SHOP-BANNER-1 -->
        
        <!-- BEGIN: CONTENT/ISOTOPE/GRID-3 -->
        <div class="c-content-box c-size-md c-bg-img-center" style="background-image: url({{ asset('main/base/img/content/backgrounds/bg-82.jpg ') }}">
            <div class="container">
                <div class="c-content-title-1">
                    <h3 class="c-center c-font-uppercase c-font-bold c-font-white">Quick Shop</h3>
                    <div class="c-line-center c-theme-bg"></div>
                </div>
                <div class="c-content-isotope-grid c-opt-3">
                    <div class="c-content-isotope-item">
                        <div class="c-content-isotope-image-container">
                            <img class="c-content-isotope-image" src="{{ asset('main/base/img/content/shop6/85.jpg') }}"/>
                                <div class="c-content-isotope-overlay">
                                <div class="c-content-isotope-overlay-content">
                                    <h3 class="c-content-isotope-overlay-title c-font-white c-font-uppercase">White Sweater</h3>
                                    <p class="c-content-isotope-overlay-price c-font-white c-font-bold">$59.00</p>
                                    <p class="c-content-isotope-overlay-desc c-font-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dictum nibh pharetra ligula rhoncus, nec iaculis nulla semper.</p>
                                    <a href="javascript:;" class="c-content-isotope-overlay-btn btn c-btn-white c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Add to Cart</a>
                                    <a href="javascript:;" class="c-content-isotope-overlay-btn btn c-btn-white c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Add to Wishlist</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="c-content-isotope-item">
                        <div class="c-content-isotope-image-container">
                            <img class="c-content-isotope-image" src="{{ asset('main/base/img/content/shop6/97.jpg') }}"/>
                                <div class="c-content-isotope-overlay">
                                <div class="c-content-isotope-overlay-content">
                                    <h3 class="c-content-isotope-overlay-title c-font-white c-font-uppercase">Blue Shirt</h3>
                                    <p class="c-content-isotope-overlay-price c-font-white c-font-bold">$39.00</p>
                                    <p class="c-content-isotope-overlay-desc c-font-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dictum nibh pharetra ligula rhoncus, nec iaculis nulla semper.</p>
                                    <a href="javascript:;" class="c-content-isotope-overlay-btn btn c-btn-white c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Add to Cart</a>
                                    <a href="javascript:;" class="c-content-isotope-overlay-btn btn c-btn-white c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Add to Wishlist</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="c-content-isotope-item">
                        <div class="c-content-isotope-image-container">
                            <img class="c-content-isotope-image" src="{{ asset('main/base/img/content/shop6/93.jpg') }}"/>
                                <div class="c-content-isotope-overlay">
                                <div class="c-content-isotope-overlay-content">
                                    <h3 class="c-content-isotope-overlay-title c-font-white c-font-uppercase">Elegant Gown</h3>
                                    <p class="c-content-isotope-overlay-price c-font-white c-font-bold">$99.00</p>
                                    <p class="c-content-isotope-overlay-desc c-font-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dictum nibh pharetra ligula rhoncus, nec iaculis nulla semper.</p>
                                    <a href="javascript:;" class="c-content-isotope-overlay-btn btn c-btn-white c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Add to Cart</a>
                                    <a href="javascript:;" class="c-content-isotope-overlay-btn btn c-btn-white c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Add to Wishlist</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="c-content-isotope-item">
                        <div class="c-content-isotope-image-container">
                            <img class="c-content-isotope-image" src="{{ asset('main/base/img/content/shop6/20.jpg') }}"/>
                                <div class="c-content-isotope-overlay">
                                <div class="c-content-isotope-overlay-content">
                                    <h3 class="c-content-isotope-overlay-title c-font-white c-font-uppercase">Red Bikini Set</h3>
                                    <p class="c-content-isotope-overlay-price c-font-white c-font-bold">$29.00</p>
                                    <p class="c-content-isotope-overlay-desc c-font-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dictum nibh pharetra ligula rhoncus, nec iaculis nulla semper.</p>
                                    <a href="javascript:;" class="c-content-isotope-overlay-btn btn c-btn-white c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Add to Cart</a>
                                    <a href="javascript:;" class="c-content-isotope-overlay-btn btn c-btn-white c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Add to Wishlist</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="c-content-isotope-item">
                        <div class="c-content-isotope-image-container">
                            <img class="c-content-isotope-image" src="{{ asset('main/base/img/content/shop6/22.jpg') }}"/>
                                <div class="c-content-isotope-overlay">
                                <div class="c-content-isotope-overlay-content">
                                    <h3 class="c-content-isotope-overlay-title c-font-white c-font-uppercase">Purple Bikini</h3>
                                    <p class="c-content-isotope-overlay-price c-font-white c-font-bold">$29.00</p>
                                    <p class="c-content-isotope-overlay-desc c-font-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dictum nibh pharetra ligula rhoncus, nec iaculis nulla semper.</p>
                                    <a href="javascript:;" class="c-content-isotope-overlay-btn btn c-btn-white c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Add to Cart</a>
                                    <a href="javascript:;" class="c-content-isotope-overlay-btn btn c-btn-white c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Add to Wishlist</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="c-content-isotope-item">
                        <div class="c-content-isotope-image-container">
                            <img class="c-content-isotope-image" src="{{ asset('main/base/img/content/shop6/103.jpg') }}"/>
                                 <div class="c-content-isotope-overlay">
                                <div class="c-content-isotope-overlay-content">
                                    <h3 class="c-content-isotope-overlay-title c-font-white c-font-uppercase">Casual Women's Shirt</h3>
                                    <p class="c-content-isotope-overlay-price c-font-white c-font-bold">$25.00</p>
                                    <p class="c-content-isotope-overlay-desc c-font-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dictum nibh pharetra ligula rhoncus, nec iaculis nulla semper.</p>
                                    <a href="javascript:;" class="c-content-isotope-overlay-btn btn c-btn-white c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Add to Cart</a>
                                    <a href="javascript:;" class="c-content-isotope-overlay-btn btn c-btn-white c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Add to Wishlist</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="c-content-isotope-item">
                        <div class="c-content-isotope-image-container">
                            <img class="c-content-isotope-image" src="{{ asset('main/base/img/content/shop6/91.jpg') }}"/>
                            <div class="c-content-isotope-overlay">
                                <div class="c-content-isotope-overlay-content">
                                    <h3 class="c-content-isotope-overlay-title c-font-white c-font-uppercase">Luxury Leather Bag</h3>
                                    <p class="c-content-isotope-overlay-price c-font-white c-font-bold">$99.00</p>
                                    <p class="c-content-isotope-overlay-desc c-font-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dictum nibh pharetra ligula rhoncus, nec iaculis nulla semper.</p>
                                    <a href="javascript:;" class="c-content-isotope-overlay-btn btn c-btn-white c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Add to Cart</a>
                                    <a href="javascript:;" class="c-content-isotope-overlay-btn btn c-btn-white c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Add to Wishlist</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="c-content-isotope-item">
                        <div class="c-content-isotope-image-container">
                            <img class="c-content-isotope-image" src="{{ asset('main/base/img/content/shop6/42.jpg') }}"/>
                                <div class="c-content-isotope-overlay">
                                <div class="c-content-isotope-overlay-content">
                                    <h3 class="c-content-isotope-overlay-title c-font-white c-font-uppercase">Nude Sleeveless Top</h3>
                                    <p class="c-content-isotope-overlay-price c-font-white c-font-bold">$19.00</p>
                                    <p class="c-content-isotope-overlay-desc c-font-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dictum nibh pharetra ligula rhoncus, nec iaculis nulla semper.</p>
                                    <a href="javascript:;" class="c-content-isotope-overlay-btn btn c-btn-white c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Add to Cart</a>
                                    <a href="javascript:;" class="c-content-isotope-overlay-btn btn c-btn-white c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Add to Wishlist</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div><!-- END: CONTENT/ISOTOPE/GRID-3 -->
        
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
                                        <div class="c-bg-img-center-contain c-overlay-object" data-height="height" style="height: 270px; background-image: url({{ asset('main/base/img/content/shop5/18.png') }})"></div> 
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
                                        <div class="c-bg-img-center-contain c-overlay-object" data-height="height" style="height: 270px; background-image: url({{ asset('main/base/img/content/shop5/27.png') }}"></div> 
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
                                        <div class="c-bg-img-center-contain c-overlay-object" data-height="height" style="height: 270px; background-image: url({{ asset('main/base/img/content/shop5/21.png') }}"></div> 
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
                                        <div class="c-bg-img-center-contain c-overlay-object" data-height="height" style="height: 270px; background-image: url({{ asset('main/base/img/content/shop5/22.png') }}"></div>
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
                                        <div class="c-bg-img-center-contain c-overlay-object" data-height="height" style="height: 270px; background-image: url({{ asset('main/base/img/content/shop5/20.png') }}"></div> 
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
                                        <div class="c-bg-img-center-contain c-overlay-object" data-height="height" style="height: 270px; background-image: url({{ asset('main/base/img/content/shop5/24.png') }}"></div>
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
        
        <!-- BEGIN: CONTENT/SHOPS/SHOP-1-5 -->
        <div class="c-content-box c-size-md">
            <div class="c-content-tab-5 c-bs-grid-reset-space c-theme">
                <!-- Nav tabs -->
                <ul class="nav nav-pills c-nav-tab c-arrow" role="tablist">
                    <li role="presentation" class="active">
                        <a class="c-font-uppercase" href="#watches5" aria-controls="watches" role="tab" data-toggle="tab">Watches</a>
                    </li>
                    <li role="presentation">
                        <a class="c-font-uppercase" href="#phone5" aria-controls="phone" role="tab" data-toggle="tab">Phone</a>
                    </li>
                    <li role="presentation">
                        <a class="c-font-uppercase" href="#imac5" aria-controls="imac" role="tab" data-toggle="tab">iMac</a>
                    </li>
                    <li role="presentation">
                        <a class="c-font-uppercase" href="#accessories5" aria-controls="accessories" role="tab" data-toggle="tab">Accessories</a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="watches5">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="c-content c-content-overlay">
                                    <div class="c-overlay-wrapper c-overlay-padding">
                                        <div class="c-overlay-content">
                                            <a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                        </div>
                                    </div>
                                    <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 270px; background-image: url({{ asset('main/base/img/content/shop2/69.jpg') }}"></div> 
                                    <div class="c-overlay-border"></div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="c-content c-content-overlay">
                                    <div class="c-overlay-wrapper c-overlay-padding">
                                        <div class="c-overlay-content">
                                            <a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                        </div>
                                    </div>
                                    <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 270px; background-image: url({{ asset('main/base/img/content/shop2/70.jpg') }}"></div> 
                                    <div class="c-overlay-border"></div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="c-content c-content-overlay">
                                    <div class="c-overlay-wrapper c-overlay-padding">
                                        <div class="c-overlay-content">
                                            <a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                        </div>
                                    </div>
                                    <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 270px; background-image: url({{ asset('main/base/img/content/shop2/79.jpg') }}"></div> 
                                    <div class="c-overlay-border"></div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="c-content c-content-overlay">
                                    <div class="c-overlay-wrapper c-overlay-padding">
                                        <div class="c-overlay-content">
                                            <a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                        </div>
                                    </div>
                                    <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 270px; background-image: url({{ asset('main/base/img/content/shop2/60.jpg') }}"></div> 
                                    <div class="c-overlay-border"></div>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <div role="tabpanel" class="tab-pane fade" id="phone5">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="c-content c-content-overlay">
                                    <div class="c-overlay-wrapper c-overlay-padding">
                                        <div class="c-overlay-content">
                                            <a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                        </div>
                                    </div>
                                    <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 270px; background-image: url({{ asset('main/base/img/content/shop2/63.jpg') }}"></div> 
                                    <div class="c-overlay-border"></div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="c-content c-content-overlay">
                                    <div class="c-overlay-wrapper c-overlay-padding">
                                        <div class="c-overlay-content">
                                            <a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                        </div>
                                    </div>
                                    <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 270px; background-image: url({{ asset('main/base/img/content/shop2/59.jpg') }}"></div> 
                                    <div class="c-overlay-border"></div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="c-content c-content-overlay">
                                    <div class="c-overlay-wrapper c-overlay-padding">
                                        <div class="c-overlay-content">
                                            <a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                        </div>
                                    </div>
                                    <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 270px; background-image: url({{ asset('main/base/img/content/shop2/71.jpg') }}"></div> 
                                    <div class="c-overlay-border"></div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="c-content c-content-overlay">
                                    <div class="c-overlay-wrapper c-overlay-padding">
                                        <div class="c-overlay-content">
                                            <a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                        </div>
                                    </div>
                                    <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 270px; background-image: url({{ asset('main/base/img/content/shop3/91.jpg') }}"></div> 
                                    <div class="c-overlay-border"></div>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <div role="tabpanel" class="tab-pane fade" id="imac5">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="c-content c-content-overlay">
                                    <div class="c-overlay-wrapper c-overlay-padding">
                                        <div class="c-overlay-content">
                                            <a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                        </div>
                                    </div>
                                    <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 270px; background-image: url({{ asset('main/base/img/content/shop3/73.jpg') }}"></div> 
                                    <div class="c-overlay-border"></div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="c-content c-content-overlay">
                                    <div class="c-overlay-wrapper c-overlay-padding">
                                        <div class="c-overlay-content">
                                            <a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                        </div>
                                    </div>
                                    <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 270px; background-image: url({{ asset('main/base/img/content/shop3/74.jpg') }}"></div> 
                                    <div class="c-overlay-border"></div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="c-content c-content-overlay">
                                    <div class="c-overlay-wrapper c-overlay-padding">
                                        <div class="c-overlay-content">
                                            <a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                        </div>
                                    </div>
                                    <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 270px; background-image: url({{ asset('main/base/img/content/shop3/91.jpg') }}"></div> 
                                    <div class="c-overlay-border"></div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="c-content c-content-overlay">
                                    <div class="c-overlay-wrapper c-overlay-padding">
                                        <div class="c-overlay-content">
                                            <a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                        </div>
                                    </div>
                                    <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 270px; background-image: url({{ asset('main/base/img/content/shop2/71.jpg') }}"></div> 
                                    <div class="c-overlay-border"></div>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <div role="tabpanel" class="tab-pane fade" id="accessories5">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="c-content c-content-overlay">
                                    <div class="c-overlay-wrapper c-overlay-padding">
                                        <div class="c-overlay-content">
                                            <a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                        </div>
                                    </div>
                                    <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 270px; background-image: url({{ asset('main/base/img/content/shop3/63.jpg') }}"></div> 
                                    <div class="c-overlay-border"></div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="c-content c-content-overlay">
                                    <div class="c-overlay-wrapper c-overlay-padding">
                                        <div class="c-overlay-content">
                                            <a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                        </div>
                                    </div>
                                    <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 270px; background-image: url({{ asset('main/base/img/content/shop3/67.jpg') }}"></div> 
                                    <div class="c-overlay-border"></div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="c-content c-content-overlay">
                                    <div class="c-overlay-wrapper c-overlay-padding">
                                        <div class="c-overlay-content">
                                            <a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                        </div>
                                    </div>
                                    <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 270px; background-image: url({{ asset('main/base/img/content/shop3/77.jpg') }}"></div> 
                                    <div class="c-overlay-border"></div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="c-content c-content-overlay">
                                    <div class="c-overlay-wrapper c-overlay-padding">
                                        <div class="c-overlay-content">
                                            <a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                        </div>
                                    </div>
                                    <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 270px; background-image: url({{ asset('main/base/img/content/shop3/74.jpg') }}"></div> 
                                    <div class="c-overlay-border"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- END: CONTENT/SHOPS/SHOP-1-5 -->
        
        <!-- BEGIN: CONTENT/MISC/PROMO-1-2 -->
        <div class="c-content-box c-size-lg c-bg-purple-1">
            <div class="container">
                <div class="row">
                    <div class="c-shop-banner-3 c-center">
                        <h3 class="c-title c-font-uppercase c-font-bold c-font-35 c-font-white">New Summer Collection</h3>
                        <p class="c-desc c-font-uppercase c-font-bold c-font-25 c-font-yellow-1">70% Off With Promo</p>
                        <button class="btn btn-lg c-btn-white c-btn-border-1x c-btn-square c-btn-bold">EXPLORE</button>
                        <button class="btn btn-lg c-btn-white c-btn-square c-btn-bold">PURCHASE</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: CONTENT/MISC/PROMO-1-2 -->
        
        <!-- BEGIN: CONTENT/SHOPS/SHOP-4-1 -->
        <div class="c-content-box c-no-padding c-overflow-hide c-bs-grid-reset-space">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="c-content-product-4 c-content-bg-1">
                        <div class="col-md-6 col-sm-6">
                            <div class="c-wrapper">
                                <div class="c-side-image" style="background-image: url({{ asset('main/base/img/content/shop5/23.png') }}"></div> 
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="c-content c-align-right">
                                <h3 class="c-title c-font-bold c-font-35 c-font-dark">iPhone 6</h3>
                                <p class="c-description c-font-20 c-font-regular">Lorem ipsum dolor sit amet, adipiscing elit coectetuer adipiscing elit adipiscing consectetuer.</p>
                                <p class="c-price c-font-60 c-font-thin c-font-dark">$649</p>
                                <a href="shop-product-details-2.html" class="btn btn-lg c-btn-grey-3 c-font-uppercase c-btn-square c-btn-border-1x">BUY NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="c-content-product-4 c-content-bg-2">
                        <div class="col-md-6 col-sm-6">
                            <div class="c-content c-align-left">
                                <h3 class="c-title c-font-bold c-font-35 c-font-dark">360 Watch</h3>
                                <p class="c-description c-font-20 c-font-regular">Lorem ipsum dolor sit amet, adipiscing elit coectetuer adipiscing elit adipiscing consectetuer.</p>
                                <p class="c-price c-font-60 c-font-thin c-font-dark">$649</p>
                                <a href="shop-product-details-2.html" class="btn btn-lg c-btn-grey-3 c-font-uppercase c-btn-square c-btn-border-1x">BUY NOW</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="c-wrapper">
                                <div class="c-side-image" style="background-image: url({{ asset('main/base/img/content/shop5/32.png') }}"></div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- END: CONTENT/SHOPS/SHOP-4-1 -->
        
        <div class="c-content-box c-size-md c-bg-white">
            <div class="container">
                <div class="c-content-title-1">
                    <h3 class="c-center c-font-uppercase c-font-bold">Product Grid</h3>
                    <div class="c-line-center"></div>
                </div>
                <!-- BEGIN: CONTENT/SHOPS/SHOP-2-7 -->
        <div class="c-bs-grid-small-space">
            <div class="row">
                @foreach($products as $post)
                <div class="col-md-3 col-sm-6 c-margin-b-20 product_data">
					<input type="hidden" value="{{ $post->id }}" class="product_id">
                    <div class="c-content-product-2 c-bg-white c-border">
                        <div class="c-content-overlay">
                            <div class="c-overlay-wrapper">
                                <div class="c-overlay-content">
                                    <a href="{{ url('product/'.$post->slug) }}" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                </div>
                            </div>
                            <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 230px; background-image: url({{ asset('images/' . $post->image) }}"></div> 
                        </div>
                        <div class="c-info">
                            <p class="c-title c-font-16 c-font-slim">{{ $post->title }}</p>
                            <p class="c-price c-font-14 c-font-slim">{{ $post->price - $post->discount_value}}$ &nbsp;
                                <span class="c-font-14 c-font-line-through c-font-red">{{ $post->price }}$</span>
                            </p>
                        </div>
                        <div class="btn-group btn-group-justified" role="group">
                            <div class="btn-group c-border-top" role="group">
                                <button type="submit" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">
                                    <i class="fa fa-heart-o"></i>Add Wishlist
                                </button>                            
                            </div>
                            <div class="btn-group c-border-left c-border-top" role="group">
                                <button type="submit" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product addToCartBtn">
                                    <i class="fa fa-shopping-cart"></i>Add Cart
                                </button>

                            </div>
                            
                        </div>
                    </div>
                </div>
                @endforeach
            </div><!-- END: CONTENT/SHOPS/SHOP-2-7 -->
        </div>
        
        <!-- BEGIN: CONTENT/SHOPS/SHOP-3-1 -->
        <div class="c-content-box c-overflow-hide c-bg-grey">
            <div class="c-content-product-3 c-bs-grid-reset-space">
                <div class="row">
                    <div class="col-md-8 col-sm-6">
                        <div class="c-content-overlay">
                            <div class="c-overlay-wrapper">
                                <div class="c-overlay-content">
                                    <a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                </div>
                            </div>
                            <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 550px; background-image: url({{ asset('main/base/img/content/shop7/01.png') }}"></div> 
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="c-wrapper c-bg-red" style="height: 550px;">
                            <div class="c-content c-border c-border-padding c-border-padding-right">
                                <h3 class="c-title c-font-25 c-font-white c-font-uppercase c-font-bold">MOTO 360 WATCH</h3>
                                <p class="c-description c-font-17 c-font-white">Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy et nibh euismod aliquam erat volutpat.</p>
                                <p class="c-description c-font-17 c-font-white">Dolor sit amet, consectetuer adipiscing elit sed diam nonummy</p>
                                <p class="c-price c-font-55 c-font-white c-font-thin">$249</p>
                                <a href="shop-product-details-2.html" class="btn btn-lg c-btn-white c-font-uppercase c-btn-square c-btn-border-1x">BUY NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- END: CONTENT/SHOPS/SHOP-3-1 -->
        
        <!-- BEGIN: CONTENT/SHOPS/SHOP-6-1 -->
        <div class="c-content-box c-size-sm c-overflow-hide c-bg-white c-bs-grid-reset-space">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-6">
                        <div class="c-content c-content-overlay">
                            <div class="c-overlay-wrapper c-overlay-padding">
                                <div class="c-overlay-content">
                                    <a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                </div>
                            </div>
                            <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 550px; background-image: url({{ asset('main/base/img/content/shop7/05.png') }}"></div> 
                            <div class="c-overlay-border"></div>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-6">
                        <div class="c-content c-content-overlay">
                            <div class="c-overlay-wrapper c-overlay-padding">
                                <div class="c-overlay-content">
                                    <a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                </div>
                            </div>
                            <div class="c-bg-img-top-center c-overlay-object" data-height="height" style="height: 550px; background-image: url({{ asset('main/base/img/content/shop7/02.png') }}"></div> 
                            <div class="c-overlay-border"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- END: CONTENT/SHOPS/SHOP-6-1 -->
                <!-- END: PAGE CONTENT -->
@section('javascript')

@endsection
        
                
	</div>
	<!-- END: PAGE CONTAINER -->
	<!-- BEGIN: LAYOUT/FOOTERS/FOOTER-5 -->
<a name="footer"></a>
<footer class="c-layout-footer c-layout-footer-3 c-bg-dark">
	@include('shoppage.footer')
</footer><!-- END: LAYOUT/FOOTERS/FOOTER-5 -->

	<!-- BEGIN: LAYOUT/FOOTERS/GO2TOP -->
<div class="c-layout-go2top">
	<i class="icon-arrow-up"></i>
</div><!-- END: LAYOUT/FOOTERS/GO2TOP -->

	<!-- BEGIN: LAYOUT/BASE/BOTTOM -->
    <!-- BEGIN: CORE PLUGINS -->
	@include('shoppage.javascript')

	@yield('javascript')
    </body>
	

<!-- Mirrored from themehats.com/themes/jango/demos/default/shop-home-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Feb 2019 04:56:51 GMT -->
</html>