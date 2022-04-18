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
	@include('shop.head')
</head><body class="c-layout-header-fixed c-layout-header-mobile-fixed c-layout-header-fullscreen"> 
		
<!-- BEGIN: LAYOUT/HEADERS/HEADER-1 -->
	@include('shop.header')
<!-- END: HEADER --><!-- END: LAYOUT/HEADERS/HEADER-1 -->
	
	<!-- BEGIN: CONTENT/USER/FORGET-PASSWORD-FORM -->
	@include('shop.sidebar')
	<!-- BEGIN: CONTENT/USER/LOGIN-FORM -->
<div class="modal fade c-content-login-form" id="login-form" role="dialog">
   @include('shop.login')
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
@include('shop.page')
	</div>
	<!-- END: PAGE CONTAINER -->
@yield('content')
	<!-- BEGIN: LAYOUT/FOOTERS/FOOTER-5 -->
<a name="footer"></a>
<footer class="c-layout-footer c-layout-footer-3 c-bg-dark">
	@include('shop.footer')
</footer><!-- END: LAYOUT/FOOTERS/FOOTER-5 -->

	<!-- BEGIN: LAYOUT/FOOTERS/GO2TOP -->
<div class="c-layout-go2top">
	<i class="icon-arrow-up"></i>
</div><!-- END: LAYOUT/FOOTERS/GO2TOP -->

	<!-- BEGIN: LAYOUT/BASE/BOTTOM -->
    <!-- BEGIN: CORE PLUGINS -->
	@include('shop.javascript')

	@yield('script')
    </body>
	

<!-- Mirrored from themehats.com/themes/jango/demos/default/shop-home-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Feb 2019 04:56:51 GMT -->
</html>