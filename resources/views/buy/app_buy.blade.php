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

<!-- Mirrored from themehats.com/themes/jango/demos/default/shop-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Feb 2019 05:00:30 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	@include('shoppage.head')
</head>
<body class="c-layout-header-fixed c-layout-header-mobile-fixed c-layout-header-topbar c-layout-header-topbar-collapse">
    
    @yield('buy_main')
    
    <a name="footer"></a>
    <footer class="c-layout-footer c-layout-footer-6 c-bg-grey-1">
        @include('buy.inc.footer')
    </footer>
<!-- END: LAYOUT/FOOTERS/FOOTER-6 -->
    
	<!-- BEGIN: LAYOUT/FOOTERS/GO2TOP -->
    <div class="c-layout-go2top">
	<i class="icon-arrow-up"></i>
    </div><!-- END: LAYOUT/FOOTERS/GO2TOP -->
	
	@include('buy.inc.script')

    @yield('buy_script')
</body>
	

<!-- Mirrored from themehats.com/themes/jango/demos/default/shop-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Feb 2019 05:00:30 GMT -->
</html>
