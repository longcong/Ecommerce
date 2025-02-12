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
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->


<!-- Mirrored from themehats.com/themes/jango/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Feb 2019 04:00:18 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8" />
    <title>PC BBK | Main</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link
        href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all'
        rel='stylesheet' type='text/css'>
    <link href="{{ asset('main/css/socicon/socicon.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('main/css/bootstrap-social/bootstrap-social.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('main/css/font-awesome/css/font-awesome.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('main/css/simple-line-icons/simple-line-icons.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('main/css/animate/animate.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('main/css/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"
        type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN: BASE PLUGINS  -->
    <link href="{{ asset('main/css/revo-slider/css/settings.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('main/css/revo-slider/css/layers.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('main/css/revo-slider/css/navigation.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('main/css/cubeportfolio/css/cubeportfolio.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('main/css/owl-carousel/assets/owl.carousel.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('main/css/fancybox/jquery.fancybox.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('main/css/slider-for-bootstrap/css/slider.css') }}" rel="stylesheet"
        type="text/css" />
    <!-- END: BASE PLUGINS -->
    <!-- BEGIN: PAGE STYLES -->
    <link href="{{ asset('main/css/ilightbox/css/ilightbox.css') }}" rel="stylesheet"
        type="text/css" />
    <!-- END: PAGE STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link href="{{ asset('main/css/index/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('main/css/index/components.css') }}" id="style_components"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('main/css/index/themes/default.css') }}" rel="stylesheet"
        id="style_theme" type="text/css" />
    <link href="{{ asset('main/css/index/custom.css') }}" rel="stylesheet" type="text/css" />
    <!-- END THEME STYLES -->
    <link rel="shortcut icon" href="favicon.html" />
</head>

<body class="c-layout-header-fixed c-layout-header-mobile-fixed">
    <!-- BEGIN: LAYOUT/HEADERS/HEADER-1 -->
    <!-- BEGIN: HEADER -->
    <!-- END: HEADER -->
    <!-- END: LAYOUT/HEADERS/HEADER-1 -->
    <!-- BEGIN: CONTENT/USER/FORGET-PASSWORD-FORM -->
    <div class="modal fade c-content-login-form" id="forget-password-form" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content c-square">
                <div class="modal-header c-no-border">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h3 class="c-font-24 c-font-sbold">Password Recovery</h3>
                    <p>To recover your password please fill in your email address</p>
                    <form>
                        <div class="form-group">
                            <label for="forget-email" class="hide">Email</label>
                            <input type="email" class="form-control input-lg c-square" id="forget-email"
                                placeholder="Email"> </div>
                        <div class="form-group">
                            <button type="submit"
                                class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login">Submit</button>
                            <a href="javascript:;" class="c-btn-forgot" data-toggle="modal" data-target="#login-form"
                                data-dismiss="modal">Back To Login</a>
                        </div>
                    </form>
                </div>
                <div class="modal-footer c-no-border">
                    <span class="c-text-account">Don't Have An Account Yet ?</span>
                    <a href="javascript:;" data-toggle="modal" data-target="#signup-form" data-dismiss="modal"
                        class="btn c-btn-dark-1 btn c-btn-uppercase c-btn-bold c-btn-slim c-btn-border-2x c-btn-square c-btn-signup">Signup!</a>
                </div>
            </div>
        </div>
    </div>
    <!-- END: CONTENT/USER/FORGET-PASSWORD-FORM -->
    <!-- BEGIN: CONTENT/USER/SIGNUP-FORM -->
    <div class="modal fade c-content-login-form" id="signup-form" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content c-square">
                <div class="modal-header c-no-border">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h3 class="c-font-24 c-font-sbold">Create An Account</h3>
                    <p>Please fill in below form to create an account with us</p>
                    <form>
                        <div class="form-group">
                            <label for="signup-email" class="hide">Email</label>
                            <input type="email" class="form-control input-lg c-square" id="signup-email"
                                placeholder="Email"> </div>
                        <div class="form-group">
                            <label for="signup-username" class="hide">Username</label>
                            <input type="email" class="form-control input-lg c-square" id="signup-username"
                                placeholder="Username"> </div>
                        <div class="form-group">
                            <label for="signup-fullname" class="hide">Fullname</label>
                            <input type="email" class="form-control input-lg c-square" id="signup-fullname"
                                placeholder="Fullname"> </div>
                        <div class="form-group">
                            <label for="signup-country" class="hide">Country</label>
                            <select class="form-control input-lg c-square" id="signup-country">
                                <option value="1">Country</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit"
                                class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login">Signup</button>
                            <a href="javascript:;" class="c-btn-forgot" data-toggle="modal" data-target="#login-form"
                                data-dismiss="modal">Back To Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- END: CONTENT/USER/SIGNUP-FORM -->
    <!-- BEGIN: CONTENT/USER/LOGIN-FORM -->
    <div class="modal fade c-content-login-form" id="login-form" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content c-square">
                <div class="modal-header c-no-border">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h3 class="c-font-24 c-font-sbold">Good Afternoon!</h3>
                    <p>Let's make today a great day!</p>
                    <form>
                        <div class="form-group">
                            <label for="login-email" class="hide">Email</label>
                            <input type="email" class="form-control input-lg c-square" id="login-email"
                                placeholder="Email"> </div>
                        <div class="form-group">
                            <label for="login-password" class="hide">Password</label>
                            <input type="password" class="form-control input-lg c-square" id="login-password"
                                placeholder="Password"> </div>
                        <div class="form-group">
                            <div class="c-checkbox">
                                <input type="checkbox" id="login-rememberme" class="c-check">
                                <label for="login-rememberme" class="c-font-thin c-font-17">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Remember Me </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit"
                                class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login">Login</button>
                            <a href="javascript:;" data-toggle="modal" data-target="#forget-password-form"
                                data-dismiss="modal" class="c-btn-forgot">Forgot Your Password ?</a>
                        </div>
                        <div class="clearfix">
                            <div class="c-content-divider c-divider-sm c-icon-bg c-bg-grey c-margin-b-20">
                                <span>or signup with</span>
                            </div>
                            <ul class="c-content-list-adjusted">
                                <li>
                                    <a class="btn btn-block c-btn-square btn-social btn-twitter">
                                        <i class="fa fa-twitter"></i> Twitter </a>
                                </li>
                                <li>
                                    <a class="btn btn-block c-btn-square btn-social btn-facebook">
                                        <i class="fa fa-facebook"></i> Facebook </a>
                                </li>
                                <li>
                                    <a class="btn btn-block c-btn-square btn-social btn-google">
                                        <i class="fa fa-google"></i> Google </a>
                                </li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="modal-footer c-no-border">
                    <span class="c-text-account">Don't Have An Account Yet ?</span>
                    <a href="javascript:;" data-toggle="modal" data-target="#signup-form" data-dismiss="modal"
                        class="btn c-btn-dark-1 btn c-btn-uppercase c-btn-bold c-btn-slim c-btn-border-2x c-btn-square c-btn-signup">Signup!</a>
                </div>
            </div>
        </div>
    </div>
    <!-- END: CONTENT/USER/LOGIN-FORM -->
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
                            <a href="demos/default/index.html" class="c-demo-container c-demo-img-lg">
                                <div class="c-demo-thumb active">
                                    <img src="main/base/img/content/quick-sidebar/default.jpg"
                                        class="c-demo-thumb-img" /> </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <a href="demos/corporate_1/index.html" class="c-demo-container">
                                <div class="c-demo-thumb  c-thumb-left">
                                    <img src="main/base/img/content/quick-sidebar/corporate_1.jpg"
                                        class="c-demo-thumb-img" /> </div>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="demos/agency_1/index.html" class="c-demo-container">
                                <div class="c-demo-thumb  c-thumb-right">
                                    <img src="main/base/img/content/quick-sidebar/corporate_1-onepage.jpg"
                                        class="c-demo-thumb-img" /> </div>
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
                    <input type="button"
                        class="c-setting_header-type btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase active"
                        data-value="boxed" value="boxed" />
                    <input type="button"
                        class="c-setting_header-type btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase"
                        data-value="fluid" value="fluid" /> </div>
            </div>
            <div class="c-section">
                <h3>Header Mode</h3>
                <div class="c-settings">
                    <input type="button"
                        class="c-setting_header-mode btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase active"
                        data-value="fixed" value="fixed" />
                    <input type="button"
                        class="c-setting_header-mode btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase"
                        data-value="static" value="static" /> </div>
            </div>
            <div class="c-section">
                <h3>Mega Menu Style</h3>
                <div class="c-settings">
                    <input type="button"
                        class="c-setting_megamenu-style btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase active"
                        data-value="dark" value="dark" />
                    <input type="button"
                        class="c-setting_megamenu-style btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase"
                        data-value="light" value="light" /> </div>
            </div>
            <div class="c-section">
                <h3>Font Style</h3>
                <div class="c-settings">
                    <input type="button"
                        class="c-setting_font-style btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase active"
                        data-value="default" value="default" />
                    <input type="button"
                        class="c-setting_font-style btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase"
                        data-value="light" value="light" /> </div>
            </div>
            <div class="c-section">
                <h3>Reading Style</h3>
                <div class="c-settings">
                    <a href="index.html"
                        class="c-setting_font-style btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase active">LTR</a>
                    <a href="http://www.themehats.com/themes/jango/rtl/"
                        class="c-setting_font-style btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase ">RTL</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- END: LAYOUT/SIDEBARS/QUICK-SIDEBAR -->
    <!-- BEGIN: PAGE CONTAINER -->
    <div class="c-layout-page">
        <!-- BEGIN: PAGE CONTENT -->
        <!-- BEGIN: LAYOUT/SLIDERS/REVO-SLIDER-4 -->
        <section class="c-layout-revo-slider c-layout-revo-slider-4" dir="ltr">
            <div class="tp-banner-container c-theme">
                <div class="tp-banner rev_slider" data-version="5.0">
                    <ul>
                        <!--BEGIN: SLIDE #1 -->
                        <li data-transition="fade" data-slotamount="1" data-masterspeed="1000">
                            <img alt="" src="main/base/img/content/backgrounds/bg-43.jpg"
                                data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                            <div class="tp-caption customin customout" data-x="center" data-y="center" data-hoffset=""
                                data-voffset="-50" data-speed="500" data-start="1000" data-transform_idle="o:1;"
                                data-transform_in="rX:0.5;scaleX:0.75;scaleY:0.75;o:0;s:500;e:Back.easeInOut;"
                                data-transform_out="rX:0.5;scaleX:0.75;scaleY:0.75;o:0;s:500;e:Back.easeInOut;"
                                data-splitin="none" data-splitout="none" data-elementdelay="0.1"
                                data-endelementdelay="0.1" data-endspeed="600">
                                <h3
                                    class="c-main-title-circle c-font-48 c-font-bold c-font-center c-font-uppercase c-font-white c-block">
                                    TAKE THE WEB BY
                                    <br>STORM WITH JANGO </h3>
                            </div>
                            <div class="tp-caption lft" data-x="center" data-y="center" data-voffset="110"
                                data-speed="900" data-start="2000" data-transform_idle="o:1;"
                                data-transform_in="x:100;y:100;rX:120;scaleX:0.75;scaleY:0.75;o:0;s:500;e:Back.easeInOut;"
                                data-transform_out="x:100;y:100;rX:120;scaleX:0.75;scaleY:0.75;o:0;s:500;e:Back.easeInOut;">
                                <a href="#"
                                    class="c-action-btn btn btn-lg c-btn-square c-theme-btn c-btn-bold c-btn-uppercase">Learn
                                    More</a>
                            </div>
                        </li>
                        <!--END -->
                        <!--BEGIN: SLIDE #2 -->
                        <li data-transition="fade" data-slotamount="1" data-masterspeed="1000">
                            <img alt="" src="main/base/img/content/backgrounds/bg-20.jpg"
                                data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                            <div class="tp-caption customin customout" data-x="center" data-y="center" data-hoffset=""
                                data-voffset="-50" data-speed="500" data-start="1000" data-transform_idle="o:1;"
                                data-transform_in="rX:0.5;scaleX:0.75;scaleY:0.75;o:0;s:500;e:Back.easeInOut;"
                                data-transform_out="rX:0.5;scaleX:0.75;scaleY:0.75;o:0;s:600;e:Back.easeInOut;"
                                data-splitin="none" data-splitout="none" data-elementdelay="0.1"
                                data-endelementdelay="0.1" data-endspeed="600">
                                <h3
                                    class="c-main-title-circle c-font-48 c-font-bold c-font-center c-font-uppercase c-font-white c-block">
                                    JANGO IS OPTIMIZED
                                    <br>TO EVERY DEVELOPMENT </h3>
                            </div>
                            <div class="tp-caption lft" data-x="center" data-y="center" data-voffset="110"
                                data-speed="900" data-start="2000" data-transform_idle="o:1;"
                                data-transform_in="x:100;y:100;rX:120;scaleX:0.75;scaleY:0.75;o:0;s:900;e:Back.easeInOut;"
                                data-transform_out="x:100;y:100;rX:120;scaleX:0.75;scaleY:0.75;o:0;s:900;e:Back.easeInOut;">
                                <a href="#"
                                    class="c-action-btn btn btn-lg c-btn-square c-theme-btn c-btn-bold c-btn-uppercase">Learn
                                    More</a>
                            </div>
                        </li>
                        <!--END -->
                        <!--BEGIN: SLIDE #3 -->
                        <li data-transition="fade" data-slotamount="1" data-masterspeed="700" data-delay="6000"
                            data-thumb="">
                            <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
                            <img alt="" src="main/base/img/content/backgrounds/bg-19.jpg"
                                data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                                class="visible-xs" />
                            <div class="rs-background-video-layer" data-forcerewind="on" data-volume="mute"
                                data-videowidth="100%" data-videoheight="100%"
                                data-videomp4="asset/base/media/video/video-2.mp4" data-videopreload="preload"
                                data-videoloop="none" data-forceCover="1" data-aspectratio="16:9" data-autoplay="true"
                                data-autoplayonlyfirsttime="false" data-nextslideatend="true"> </div>
                            <div class="tp-caption customin customout" data-x="center" data-y="center" data-hoffset=""
                                data-voffset="-30" data-speed="500" data-start="1000" data-transform_idle="o:1;"
                                data-transform_in="rX:0.5;scaleX:0.75;scaleY:0.75;o:0;s:500;e:Back.easeInOut;"
                                data-transform_out="rX:0.5;scaleX:0.75;scaleY:0.75;o:0;s:600;e:Back.easeInOut;"
                                data-splitin="none" data-splitout="none" data-elementdelay="0.1"
                                data-endelementdelay="0.1" data-endspeed="600">
                                <h3
                                    class="c-main-title-square c-font-55 c-font-bold c-font-center c-font-uppercase c-font-white c-block">
                                    Let us show you
                                    <br>Unlimited possibilities </h3>
                            </div>
                            <div class="tp-caption lft" data-x="center" data-y="center" data-voffset="130"
                                data-speed="900" data-start="2000" data-transform_idle="o:1;"
                                data-transform_in="x:100;y:100;rX:120;scaleX:0.75;scaleY:0.75;o:0;s:900;e:Back.easeInOut;"
                                data-transform_out="x:100;y:100;rX:120;scaleX:0.75;scaleY:0.75;o:0;s:900;e:Back.easeInOut;">
                                <a href="http://themeforest.net/item/jango-responsive-multipurpose-html5-template/11987314"
                                    class="c-action-btn btn btn-lg c-btn-square c-btn-border-2x c-btn-white c-btn-bold c-btn-uppercase">Purchase</a>
                            </div>
                        </li>
                        <!--END -->
                    </ul>
                </div>
            </div>
        </section>
        <!-- END: LAYOUT/SLIDERS/REVO-SLIDER-4 -->
        <!-- BEGIN: CONTENT/FEATURES/FEATURES-1 -->
        <div class="c-content-box c-size-md c-bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="c-content-feature-1 wow animate fadeInUp">
                            <div class="c-content-line-icon c-theme c-icon-screen-chart"></div>
                            <h3 class="c-font-uppercase c-font-bold">Fully responsive</h3>
                            <p class="c-font-thin">Beautiful cinematic designs optimized for all screen sizes and types.
                                Compatible with Retina high pixel density displays.</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="c-content-feature-1 wow animate fadeInUp" data-wow-delay="0.2s">
                            <div class="c-content-line-icon c-theme c-icon-support"></div>
                            <h3 class="c-font-uppercase c-font-bold">Visual & Pragmatic</h3>
                            <p class="c-font-thin">Featuring trending modern web standards.
                                <br />Clean and easy framework design for worry and hassle free customizations.</p>
                        </div>
                    </div>
                    <div class="col-sm-4 c-card">
                        <div class="c-content-feature-1 wow animate fadeInUp" data-wow-delay="0.4s">
                            <div class="c-content-line-icon c-theme c-icon-bulb"></div>
                            <h3 class="c-font-uppercase c-font-bold">Dedicated Support</h3>
                            <p class="c-font-thin">Quick response with regular updates.
                                <br />Each update will include great new features and enhancements for free.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: CONTENT/FEATURES/FEATURES-1 -->
        <!-- BEGIN: CONTENT/MISC/WHY-CHOOSE-US-1 -->
        <div class="c-content-box c-size-lg c-bg-grey-1">
            <div class="container">
                <div class="">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="c-content-feature-5">
                                <div class="c-content-title-1 wow amimate fadeInDown">
                                    <h3 class="c-left c-font-dark c-font-uppercase c-font-bold">Why
                                        <br />JANGO ?</h3>
                                    <div class="c-line-left c-bg-blue-3 c-theme-bg"></div>
                                </div>
                                <div class="c-text wow animate fadeInLeft"> JANGO is the ultimate tool to power any of
                                    your projects. Corporate, ecommerce, SAAS, CRM and much more. </div>
                                <button type="submit"
                                    class="btn c-btn-uppercase btn-md c-btn-bold c-btn-square c-theme-btn wow animate fadeIn">Explore</button>
                                <img class="c-photo img-responsive wow animate fadeInUp" width="420" alt=""
                                    src="main/base/img/content/misc/jango-intro-2.jpg" />
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="c-content-accordion-1 c-theme wow animate fadeInRight">
                                <div class="panel-group" id="accordion" role="tablist">
                                    <div class="panel">
                                        <div class="panel-heading" role="tab" id="headingOne">
                                            <h4 class="panel-title">
                                                <a class="c-font-bold c-font-uppercase c-font-19" data-toggle="collapse"
                                                    data-parent="#accordion" href="#collapseOne" aria-expanded="true"
                                                    aria-controls="collapseOne"> Exceptional Frontend Framework </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                                            aria-labelledby="headingOne">
                                            <div class="panel-body c-font-18"> Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                                magna aliqua. Ut enim ad minim veniam. </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <div class="panel-heading" role="tab" id="headingTwo">
                                            <h4 class="panel-title">
                                                <a class="collapsed c-font-uppercase c-font-bold c-font-19"
                                                    data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"
                                                    aria-expanded="false" aria-controls="collapseTwo"> Modern Design
                                                    Trends </a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                            aria-labelledby="headingTwo">
                                            <div class="panel-body c-font-18"> Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                                magna aliqua. Ut enim ad minim veniam. </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <div class="panel-heading" role="tab" id="headingThree">
                                            <h4 class="panel-title">
                                                <a class="collapsed c-font-uppercase c-font-bold c-font-19"
                                                    data-toggle="collapse" data-parent="#accordion"
                                                    href="#collapseThree" aria-expanded="false"
                                                    aria-controls="collapseThree"> Beatifully Crafted Code </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                                            aria-labelledby="headingThree">
                                            <div class="panel-body c-font-18"> Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                                magna aliqua. Ut enim ad minim veniam. </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: CONTENT/MISC/WHY-CHOOSE-US-1 -->
        <!-- BEGIN: CONTENT/TILES/TILE-3 -->
        <div class="c-content-box c-size-md c-bg-white">
            <div class="c-content-tile-grid c-bs-grid-reset-space" data-auto-height="true">
                <div class="c-content-title-1 wow animate fadeInDown">
                    <h3 class="c-font-uppercase c-center c-font-bold">Services We Do</h3>
                    <div class="c-line-center"></div>
                </div>
                <div class="row wow animate fadeInUp">
                    <div class="col-md-6">
                        <div class="c-content-tile-1 c-bg-green">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="c-tile-content c-content-v-center" data-height="height">
                                        <div class="c-wrapper">
                                            <div class="c-body c-center">
                                                <h3
                                                    class="c-tile-title c-font-25 c-line-height-34 c-font-uppercase c-font-bold c-font-white">
                                                    Nothing is impossible for JANGO. Highly Flexible, always growing
                                                </h3>
                                                <a href="#"
                                                    class="btn btn-sm c-btn-white c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="c-tile-content c-arrow-right c-arrow-green c-content-overlay">
                                        <div class="c-overlay-wrapper">
                                            <div class="c-overlay-content">
                                                <a href="#">
                                                    <i class="icon-link"></i>
                                                </a>
                                                <a href="main/base/img/content/stock/79.jpg" data-lightbox="fancybox"
                                                    data-fancybox-group="gallery-4">
                                                    <i class="icon-magnifier"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="c-image c-overlay-object" data-height="height"
                                            style="background-image: url(main/base/img/content/stock/79.jpg)"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="c-content-tile-1 c-bg-brown-2">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="c-tile-content c-content-v-center" data-height="height">
                                        <div class="c-wrapper">
                                            <div class="c-body c-center">
                                                <h3
                                                    class="c-tile-title c-font-25 c-line-height-34 c-font-uppercase c-font-bold c-font-white">
                                                    Web Design </h3>
                                                <p class="c-tile-body c-font-white">Lorem ipsum consectetuer elit sit
                                                    amet, sit adipiscing amet, coectetuer adipiscing elit sit ame.</p>
                                                <a href="#"
                                                    class="btn btn-sm c-btn-white c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="c-tile-content c-arrow-right c-arrow-brown-2 c-content-overlay">
                                        <div class="c-overlay-wrapper">
                                            <div class="c-overlay-content">
                                                <a href="#">
                                                    <i class="icon-link"></i>
                                                </a>
                                                <a href="main/base/img/content/stock/90.jpg" data-lightbox="fancybox"
                                                    data-fancybox-group="gallery-4">
                                                    <i class="icon-magnifier"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="c-image c-overlay-object" data-height="height"
                                            style="background-image: url(main/base/img/content/stock/90.jpg)"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="c-content-tile-1 c-bg-red-2">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="c-tile-content c-arrow-left c-arrow-red-2 c-content-overlay">
                                        <div class="c-overlay-wrapper">
                                            <div class="c-overlay-content">
                                                <a href="#">
                                                    <i class="icon-link"></i>
                                                </a>
                                                <a href="main/base/img/content/stock/41.jpg" data-lightbox="fancybox"
                                                    data-fancybox-group="gallery-4">
                                                    <i class="icon-magnifier"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="c-image c-overlay-object" data-height="height"
                                            style="background-image: url(main/base/img/content/stock/41.jpg)"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="c-tile-content c-content-v-center" data-height="height">
                                        <div class="c-wrapper">
                                            <div class="c-body c-center">
                                                <h3
                                                    class="c-tile-title c-font-25 c-line-height-34 c-font-uppercase c-font-bold c-font-white">
                                                    LEARN MORE ABOUT JANGO </h3>
                                                <a href="#"
                                                    class="btn btn-sm c-btn-white c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="c-content-tile-1 c-bg-blue-3">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="c-tile-content c-arrow-left c-arrow-blue-3 c-content-overlay">
                                        <div class="c-overlay-wrapper">
                                            <div class="c-overlay-content">
                                                <a href="#">
                                                    <i class="icon-link"></i>
                                                </a>
                                                <a href="main/base/img/content/stock/78.jpg" data-lightbox="fancybox"
                                                    data-fancybox-group="gallery-4">
                                                    <i class="icon-magnifier"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="c-image c-overlay-object" data-height="height"
                                            style="background-image: url(main/base/img/content/stock/78.jpg)"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="c-tile-content c-content-v-center" data-height="height">
                                        <div class="c-wrapper">
                                            <div class="c-body c-center">
                                                <h3
                                                    class="c-tile-title c-font-25 c-line-height-34 c-font-uppercase c-font-bold c-font-white">
                                                    The Future </h3>
                                                <p class="c-tile-body c-font-white">Lorem ipsum dolor sit amet,
                                                    consectetuer adipiscing elit, nonummy nibh euismod tincidunt.</p>
                                                <a href="#"
                                                    class="btn btn-sm c-btn-white c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: CONTENT/TILES/TILE-3 -->
        <!-- BEGIN: CONTENT/ISOTOPE/GALLERY-1 -->
        <div class="c-content-box c-size-md c-bg-img-center"
            style="background-image: url(main/base/img/content/backgrounds/bg-82.jpg)">
            <div class="container">
                <div class="c-content-title-1">
                    <h3 class="c-center c-font-uppercase c-font-bold c-font-white">Our Photography</h3>
                    <div class="c-line-center c-theme-bg"></div>
                </div>
                <div class="c-content-isotope-gallery c-opt-1">
                    <div class="c-content-isotope-item wow animate zoomIn" data-wow-delay="0">
                        <div class="c-content-isotope-image-container">
                            <img class="c-content-isotope-image" src="main/base/img/content/stock/13.jpg" />
                            <div class="c-content-isotope-overlay c-ilightbox-image-1"
                                href="main/base/img/content/stock/13.jpg"
                                data-options="thumbnail:'../main/base/img/content/stock/13.jpg'"
                                data-caption="<h4>The River</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dictum nibh pharetra ligula rhoncus, nec iaculis nulla semper.</p>">
                                <div class="c-content-isotope-overlay-icon">
                                    <i class="fa fa-plus c-font-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="c-content-isotope-item c-item-size-double wow animate zoomIn" data-wow-delay="0.1s">
                        <div class="c-content-isotope-image-container">
                            <img class="c-content-isotope-image" src="main/base/img/content/stock/81.jpg" />
                            <div class="c-content-isotope-overlay c-ilightbox-image-1"
                                href="main/base/img/content/stock/81.jpg"
                                data-options="thumbnail:'../main/base/img/content/stock/81.jpg'"
                                data-caption="<h4>Speedy City</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dictum nibh pharetra ligula rhoncus, nec iaculis nulla semper.</p>">
                                <div class="c-content-isotope-overlay-icon">
                                    <i class="fa fa-plus c-font-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="c-content-isotope-item">
                        <div class="c-content-isotope-image-container wow animate zoomIn" data-wow-delay="0.2s">
                            <img class="c-content-isotope-image" src="main/base/img/content/stock/63.jpg" />
                            <div class="c-content-isotope-overlay c-ilightbox-image-1"
                                href="main/base/img/content/stock/63.jpg"
                                data-options="thumbnail:'../main/base/img/content/stock/63.jpg'"
                                data-caption="<h4>The Workstation</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dictum nibh pharetra ligula rhoncus, nec iaculis nulla semper.</p>">
                                <div class="c-content-isotope-overlay-icon">
                                    <i class="fa fa-plus c-font-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="c-content-isotope-item">
                        <div class="c-content-isotope-image-container wow animate zoomIn" data-wow-delay="0.3s">
                            <img class="c-content-isotope-image" src="main/base/img/content/stock/48.jpg" />
                            <div class="c-content-isotope-overlay c-ilightbox-image-1"
                                href="main/base/img/content/stock/48.jpg"
                                data-options="thumbnail:'../main/base/img/content/stock/48.jpg'"
                                data-caption="<h4>Exploring the Ice</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dictum nibh pharetra ligula rhoncus, nec iaculis nulla semper.</p>">
                                <div class="c-content-isotope-overlay-icon">
                                    <i class="fa fa-plus c-font-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="c-content-isotope-item">
                        <div class="c-content-isotope-image-container wow animate zoomIn" data-wow-delay="0.4s">
                            <img class="c-content-isotope-image" src="main/base/img/content/stock/33.jpg" />
                            <div class="c-content-isotope-overlay c-ilightbox-image-1"
                                href="main/base/img/content/stock/33.jpg"
                                data-options="thumbnail:'../main/base/img/content/stock/33.jpg'"
                                data-caption="<h4>Music is the way of life</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dictum nibh pharetra ligula rhoncus, nec iaculis nulla semper.</p>">
                                <div class="c-content-isotope-overlay-icon">
                                    <i class="fa fa-plus c-font-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="c-content-isotope-item c-item-size-double wow animate zoomIn" data-wow-delay="0.5s">
                        <div class="c-content-isotope-image-container">
                            <img class="c-content-isotope-image" src="main/base/img/content/stock4/36.jpg" />
                            <div class="c-content-isotope-overlay c-ilightbox-image-1"
                                href="main/base/img/content/stock/36.jpg"
                                data-options="thumbnail:'../main/base/img/content/stock4/36.jpg'"
                                data-caption="<h4>Reflection</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dictum nibh pharetra ligula rhoncus, nec iaculis nulla semper.</p>">
                                <div class="c-content-isotope-overlay-icon">
                                    <i class="fa fa-plus c-font-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: CONTENT/ISOTOPE/GALLERY-1 -->
        <!-- BEGIN: CONTENT/TABS/TAB-1 -->
        <div class="c-content-box c-size-md c-no-bottom-padding c-overflow-hide">
            <div class="c-container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="c-content-title-1">
                            <h3 class="c-font-34 c-font-center c-font-bold c-font-uppercase c-margin-b-30"> JANGO'S Main
                                Features </h3>
                            <div class="c-line-center c-theme-bg"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="c-content-tab-2 c-theme c-opt-1">
                            <ul class="nav c-tab-icon-stack c-font-sbold c-font-uppercase">
                                <li class="active">
                                    <a href="#c-tab2-opt1-1" data-toggle="tab">
                                        <span class="c-content-line-icon c-icon-25"></span>
                                        <span class="c-title">Design</span>
                                    </a>
                                    <div class="c-arrow"></div>
                                </li>
                                <li>
                                    <a href="#c-tab2-opt1-2" data-toggle="tab">
                                        <span class="c-content-line-icon c-icon-19"></span>
                                        <span class="c-title">Responsive</span>
                                    </a>
                                    <div class="c-arrow"></div>
                                </li>
                                <li>
                                    <a href="#c-tab2-opt1-3" data-toggle="tab">
                                        <span class="c-content-line-icon c-icon-14"></span>
                                        <span class="c-title">Support</span>
                                    </a>
                                    <div class="c-arrow"></div>
                                </li>
                                <li>
                                    <a href="#c-tab2-opt1-4" data-toggle="tab">
                                        <span class="c-content-line-icon c-icon-20"></span>
                                        <span class="c-title">Flexible</span>
                                    </a>
                                    <div class="c-arrow"></div>
                                </li>
                                <li>
                                    <a href="#c-tab2-opt1-5" data-toggle="tab">
                                        <span class="c-content-line-icon c-icon-33"></span>
                                        <span class="c-title">Structured</span>
                                    </a>
                                    <div class="c-arrow"></div>
                                </li>
                            </ul>
                            <div class="c-tab-content">
                                <div class="c-bg-img-center1"
                                    style="background-image: url(main/base/img/content/backgrounds/bg-62.jpg)">
                                    <div class="container">
                                        <div class="tab-content">
                                            <div class="tab-pane fade in active" id="c-tab2-opt1-1">
                                                <div class="c-tab-pane">
                                                    <img class="img-responsive" src="main/base/img/content/stock2/3.jpg"
                                                        alt="" />
                                                    <h4 class="c-font-30 c-font-thin c-font-uppercase c-font-bold">
                                                        Modern Design Trends</h4>
                                                    <p class="c-font-17 c-margin-b-20 c-margin-t-20 c-font-thin "> Lorem
                                                        ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                        nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
                                                        ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                                                        minim
                                                        veniam, exerci tation suscipit ad minim veniam, exerci tation
                                                        suscipit lobortis nisl ut aliquip ex ea commodo consequat exerci
                                                        tation suscipit lobortis nisl ut laoreet dolore magna aliquam ut
                                                        aliquip ex ea commodo consequat. </p>
                                                    <button class="btn btn-sm c-theme-btn c-btn-square c-btn-bold">
                                                        EXPLORE </button>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="c-tab2-opt1-2">
                                                <div class="c-tab-pane">
                                                    <img class="img-responsive"
                                                        src="main/base/img/content/stock2/04.jpg" alt="" />
                                                    <h4 class="c-font-30 c-font-thin c-font-uppercase c-font-bold">
                                                        Optimzied For All Screen Sizes & Types</h4>
                                                    <p class="c-font-17 c-margin-b-20 c-margin-t-20 c-font-thin "> Lorem
                                                        ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                        nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
                                                        erat volutpat. Ut wisi enim ad minim veniam, exerci tation
                                                        suscipit
                                                        lobortis nisl ut aliquip ex ea commodo consequat exerci tation
                                                        suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
                                                    <button class="btn btn-sm c-theme-btn c-btn-square c-btn-bold">
                                                        EXPLORE </button>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="c-tab2-opt1-3">
                                                <div class="c-tab-pane">
                                                    <img class="img-responsive" src="main/base/img/content/stock2/5.jpg"
                                                        alt="" />
                                                    <h4 class="c-font-30 c-font-thin c-font-uppercase c-font-bold">
                                                        Dedicated Support To All Customers</h4>
                                                    <p class="c-font-17 c-margin-b-20 c-margin-t-20 c-font-thin "> Lorem
                                                        ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                        nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
                                                        erat volutpat. Ut wisi enim ad minim veniam, exerci tation
                                                        suscipit
                                                        enim ad minim veniam lobortis nisl ut aliquip ex ea commodo
                                                        consequat exerci tation suscipit lobortis nisl ut aliquip ex ea
                                                        commodo consequat. </p>
                                                    <button class="btn btn-sm c-theme-btn c-btn-square c-btn-bold">
                                                        EXPLORE </button>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="c-tab2-opt1-4">
                                                <div class="c-tab-pane">
                                                    <img class="img-responsive"
                                                        src="main/base/img/content/stock2/06.jpg" alt="" />
                                                    <h4 class="c-font-30 c-font-thin c-font-uppercase c-font-bold">Coded
                                                        By Developers For Developers</h4>
                                                    <p class="c-font-17 c-margin-b-20 c-margin-t-20 c-font-thin "> Lorem
                                                        ipsum dolor sit amet, consectetuer adipiscing elit, sed enim ad
                                                        minim veniam diam nonummy nibh euismod tincidunt ut enim ad
                                                        minim veniam laoreet dolore magna aliquam erat volutpat. Ut wisi
                                                        enim ad minim veniam, exerci tation suscipit lobortis nisl ut
                                                        aliquip ex ea commodo consequat. </p>
                                                    <button class="btn btn-sm c-theme-btn c-btn-square c-btn-bold">
                                                        EXPLORE </button>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="c-tab2-opt1-5">
                                                <div class="c-tab-pane">
                                                    <img class="img-responsive" src="main/base/img/content/stock2/6.jpg"
                                                        alt="" />
                                                    <h4 class="c-font-30 c-font-thin c-font-uppercase c-font-bold">
                                                        Unlimited Flexible Multi-purpose Layouts & Components</h4>
                                                    <p class="c-font-17 c-margin-b-20 c-margin-t-20 c-font-thin "> Lorem
                                                        ipsum dolor sit amet, consectetuer adipiscing elit, sed enim ad
                                                        minim veniam diam nonummy nibh euismod tincidunt ut laoreet
                                                        dolore magna aliquam erat volutpat. Ut wisi enim ad minim
                                                        veniam,
                                                        exerci tation suscipit lobortis nisl ut aliquip ex ea commodo
                                                        consequat enim ad minim veniam. </p>
                                                    <button class="btn btn-sm c-theme-btn c-btn-square c-btn-bold">
                                                        EXPLORE </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: CONTENT/TABS/TAB-1 -->
        <!-- BEGIN: CONTENT/FEATURES/FEATURES-11 -->
        <div class="c-content-box c-size-md c-bg-parallax"
            style="background-image: url(main/base/img/content/backgrounds/bg-51.jpg)">
            <div class="container">
                <div class="c-content-feature-8 c-opt-1">
                    <ul class="c-grid">
                        <li>
                            <div class="c-card c-font-right c-bg-opacity-1">
                                <h3 class="c-font-40 c-font-white c-font-bold c-font-uppercase">Great
                                    <br />Customer Care</h3>
                                <p class="c-font-white c-font-18"> Lorem ipsum euismod dolor amet consetuer adipiscing
                                    elit sed diam nonummy euismod dolore </p>
                            </div>
                        </li>
                        <li>
                            <div class="c-card c-bg-opacity-1">
                                <h3 class="c-font-40 c-font-white c-font-bold c-font-uppercase">Awesome
                                    <br />Features Pack</h3>
                                <p class="c-font-white c-font-18"> Lorem ipsum euismod dolor amet consetuer adipiscing
                                    elit sed diam nonummy euismod dolore </p>
                            </div>
                        </li>
                    </ul>
                    <ul class="c-grid">
                        <li>
                            <div class="c-card c-font-right c-bg-opacity-1">
                                <h3 class="c-font-40 c-font-white c-font-bold c-font-uppercase">Unlimited
                                    <br />Themed Layouts</h3>
                                <p class="c-font-white c-font-18"> Lorem ipsum euismod dolor amet consetuer adipiscing
                                    elit sed diam nonummy euismod dolore </p>
                            </div>
                        </li>
                        <li>
                            <div class="c-card c-img c-bg-img-center"
                                style="background-image: url(main/base/img/content/stock3/6.jpg)">
                                <h3 class="c-font-white c-font-50 c-font-center">&nbsp;</h3>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- END: CONTENT/FEATURES/FEATURES-11 -->
        <!-- BEGIN: CONTENT/FEATURES/FEATURES-9 -->
        <div class="c-content-box c-size-md c-bg-parallax"
            style="background-image: url(main/base/img/content/backgrounds/bg-87.jpg)">
            <div class="container">
                <div class="c-content-feature-9">
                    <!-- Begin: Title 1 component -->
                    <div class="c-content-title-1">
                        <h3 class="c-font-uppercase c-center c-font-bold">What we can do</h3>
                        <div class="c-line-center c-theme-bg"></div>
                        <p class="c-font-center">Lorem ipsum dolor consetuer elit</p>
                    </div>
                    <!-- End-->
                    <ul class="c-list">
                        <li class="wow animate fadeInUp">
                            <div class="c-card">
                                <i class="icon-rocket c-font-blue-1-5 c-font-22 c-bg-white c-float-left"></i>
                                <div class="c-content c-content-left">
                                    <h3 class="c-theme-font c-font-uppercase c-font-bold">Full Sass Support</h3>
                                    <p> Lorem ipsum dolor consetuer adipicing sed diam ticidut erat votpat dolore </p>
                                </div>
                            </div>
                        </li>
                        <li class="wow animate fadeInUp">
                            <div class="c-card">
                                <i class="icon-user c-font-blue-1-5 c-font-27 c-bg-white c-float-left"></i>
                                <div class="c-content c-content-left">
                                    <h3 class="c-theme-font c-font-uppercase c-font-bold">Group Tasks</h3>
                                    <p> Lorem ipsum dolor consetuer adipicing sed diam ticidut erat votpat dolore </p>
                                </div>
                            </div>
                        </li>
                        <li class="wow animate fadeInUp">
                            <div class="c-card">
                                <i class="icon-basket c-font-blue-1-5 c-font-27 c-bg-white c-float-left"></i>
                                <div class="c-content c-content-left">
                                    <h3 class="c-theme-font c-font-uppercase c-font-bold">Responsive UI</h3>
                                    <p> Lorem ipsum dolor consetuer adipicing sed diam ticidut erat votpat dolore </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="c-list">
                        <li class="wow animate fadeInUp">
                            <div class="c-card">
                                <i class="icon-bulb c-font-blue-1-5 c-font-22 c-bg-white c-float-left"></i>
                                <div class="c-content c-content-left">
                                    <h3 class="c-theme-font c-font-uppercase c-font-bold">Easy Management</h3>
                                    <p> Lorem ipsum dolor consetuer adipicing sed diam ticidut erat votpat dolore </p>
                                </div>
                            </div>
                        </li>
                        <li class="wow animate fadeInUp">
                            <div class="c-card">
                                <i class="icon-pie-chart c-font-blue-1-5 c-font-27 c-bg-white c-float-left"></i>
                                <div class="c-content c-content-left">
                                    <h3 class="c-theme-font c-font-uppercase c-font-bold">Quick Reports</h3>
                                    <p> Lorem ipsum dolor consetuer adipicing sed diam ticidut erat votpat dolore </p>
                                </div>
                            </div>
                        </li>
                        <li class="wow animate fadeInUp">
                            <div class="c-card">
                                <i class="icon-trophy c-font-blue-1-5 c-font-27 c-bg-white c-float-left"></i>
                                <div class="c-content c-content-left">
                                    <h3 class="c-theme-font c-font-uppercase c-font-bold">Great Support</h3>
                                    <p> Lorem ipsum dolor consetuer adipicing sed diam ticidut erat votpat dolore </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- END: CONTENT/FEATURES/FEATURES-9 -->
        <!-- BEGIN: CONTENT/BARS/BAR-5 -->
        <div class="c-content-box c-size-md c-bg-parallax"
            style="background-image: url(main/base/img/content/backgrounds/bg-13.jpg)">
            <div class="container">
                <div class="c-content-bar-4">
                    <h3 class="c-font-uppercase c-font-bold">Clean HTML & CSS
                        <br />JANGO is Launch Ready</h3>
                    <div class="c-actions">
                        <a href="#"
                            class="btn btn-md c-btn-border-2x c-btn-square c-btn-white c-btn-uppercase c-btn-bold c-margin-b-100">Learn
                            More</a>
                        <a href="http://themeforest.net/item/jango-responsive-multipurpose-html5-template/11987314"
                            class="btn btn-md c-theme-btn c-btn-square c-btn-uppercase c-btn-bold c-theme-btn c-margin-b-100 hide">Purchase</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: CONTENT/BARS/BAR-5 -->
        <!-- BEGIN: CONTENT/MISC/SUBSCRIBE-FORM-1 -->
        <div class="c-content-box c-size-sm c-bg-dark">
            <div class="container">
                <div class="c-content-subscribe-form-1">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="c-title c-font-30 c-font-uppercase c-font-bold">Subscribe to our newsletter</h3>
                            <div class="c-body c-font-16 c-font-uppercase c-font-sbold">Lorem ipsum dolor sit amet
                                consectetuer adipiscing elit sed diam nonummy nibh euismod</div>
                        </div>
                        <div class="col-sm-6">
                            <form action="#">
                                <div class="input-group input-group-lg">
                                    <input type="text" class="form-control input-lg" placeholder="Your Email Here">
                                    <span class="input-group-btn">
                                        <button type="submit"
                                            class="btn c-theme-btn c-btn-uppercase btn-lg c-btn-bold c-btn-square">SUBSCRIBE</button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: CONTENT/MISC/SUBSCRIBE-FORM-1 -->
        <!-- BEGIN: CONTENT/TESTIMONIALS/TESTIMONIALS-6-1 -->
        <div class="c-content-box c-size-md c-bg-grey-1">
            <div class="container">
                <div class="c-content-blog-post-card-1-slider" data-slider="owl">
                    <div class="c-content-title-1">
                        <h3 class="c-center c-font-uppercase c-font-bold">Customer Reviews</h3>
                        <div class="c-line-center c-theme-bg"></div>
                        <p class="c-center c-font-uppercase1">Lorem ipsum dolor sit amet et consectetuer adipiscing elit
                        </p>
                    </div>
                    <div class="owl-carousel owl-theme c-theme c-owl-nav-center" data-items="3" data-slide-speed="8000"
                        data-rtl="false">
                        <div class="item">
                            <div class="c-content-testimonial-3 c-option-default">
                                <div class="c-content"> Lorem ipsum dolor sit amet et consectetuer adipiscing elit, sed
                                    nonummy nib euismod tincid unt ut ed laoreet dolore sit amet consectetuer
                                    adipiscing. </div>
                                <div class="c-person">
                                    <img src="main/base/img/content/avatars/team1.jpg" class="img-responsive">
                                    <div class="c-person-detail c-font-uppercase">
                                        <h4 class="c-name">Mark Doe</h4>
                                        <p class="c-position c-font-bold c-theme-font">CFO, Walmart</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="c-content-testimonial-3 c-option-default">
                                <div class="c-content"> Lorem ipsum dolor sit amet et consectetuer adipiscing elit, sed
                                    nonummy nib euismod tincid unt ut ed laoreet dolore sit amet consectetuer
                                    adipiscing. </div>
                                <div class="c-person">
                                    <img src="main/base/img/content/avatars/team6.jpg" class="img-responsive">
                                    <div class="c-person-detail c-font-uppercase">
                                        <h4 class="c-name">Ashley Benson</h4>
                                        <p class="c-position c-font-bold c-theme-font">CFO, Loop Inc</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="c-content-testimonial-3 c-option-default">
                                <div class="c-content"> Lorem ipsum dolor sit amet et consectetuer adipiscing elit, sed
                                    nonummy nib euismod tincid unt ut ed laoreet dolore sit amet consectetuer
                                    adipiscing. </div>
                                <div class="c-person">
                                    <img src="main/base/img/content/avatars/team4.jpg" class="img-responsive">
                                    <div class="c-person-detail c-font-uppercase">
                                        <h4 class="c-name">Nina Kunis</h4>
                                        <p class="c-position c-font-bold c-theme-font">CFO, ERA Tech</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="c-content-testimonial-3 c-option-default">
                                <div class="c-content"> Lorem ipsum dolor sit amet et consectetuer adipiscing elit, sed
                                    nonummy nib euismod tincid unt ut ed laoreet dolore sit amet consectetuer
                                    adipiscing. </div>
                                <div class="c-person">
                                    <img src="main/base/img/content/avatars/team8.jpg" class="img-responsive">
                                    <div class="c-person-detail c-font-uppercase">
                                        <h4 class="c-name">Ashley Benson</h4>
                                        <p class="c-position c-font-bold c-theme-font">CFO, Loop Inc</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="c-content-testimonial-3 c-option-default">
                                <div class="c-content"> Lorem ipsum dolor sit amet et consectetuer adipiscing elit, sed
                                    nonummy nib euismod tincid unt ut ed laoreet dolore sit amet consectetuer
                                    adipiscing. </div>
                                <div class="c-person">
                                    <img src="main/base/img/content/avatars/team7.jpg" class="img-responsive">
                                    <div class="c-person-detail c-font-uppercase">
                                        <h4 class="c-name">Mark Jeep</h4>
                                        <p class="c-position c-font-bold c-theme-font">CFO, ERA Tech</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: CONTENT/TESTIMONIALS/TESTIMONIALS-6-1 -->
        <!-- BEGIN: CONTENT/MISC/LATEST-ITEMS-1 -->
        <div class="c-content-box c-size-md c-bg-grey-1">
            <div class="container">
                <div class="row" data-auto-height="true">
                    <div class="col-md-4 c-margin-b-30 wow animate fadeInDown">
                        <div class="imagecontour effect2">
                            <img class="img-responsive" src="main/base/img/content/stock3/18.jpg" alt="service" />
                        </div>
                        <!--							
            <div class="c-content-media-1" data-height="height">
                <div class="c-content-label c-font-uppercase c-font-bold c-theme-bg">Blog</div>
                <a href="#" class="c-title c-font-uppercase c-font-bold c-theme-on-hover">Take the web by storm with JANGO</a>
                <p>Lorem ipsum dolor sit amet, coectetuer adipiscing elit sed diam nonummy et nibh euismod aliquam erat volutpat</p>
                <div class="c-author">
                    <div class="c-portrait" style="background-image: url(main/base/img/content/team/team1.jpg)"></div>
                    <div class="c-name c-font-uppercase">Jack Nilson</div>
                </div>
            </div> -->
                    </div>
                    <div class="col-md-4 c-margin-b-30 wow animate fadeInDown" data-wow-delay="0.2s">
                        <div class="c-content-media-1" data-height="height">
                            <div class="c-content-label c-font-uppercase c-font-bold c-theme-bg">News</div>
                            <a href="#" class="c-title c-font-uppercase c-font-bold c-theme-on-hover">The Multi-purpose
                                HTML5 Theme</a>
                            <p>Lorem ipsum dolor sit amet, coectetuer diam nonummy adipiscing elit sit amet, sit amet,
                                coectetuer adipiscing elit adipiscing consectetuer </p>
                            <div class="c-date"> 27 Jan 2015 </div>
                        </div>
                    </div>
                    <div class="col-md-4 c-margin-b-30 wow animate fadeInDown" data-wow-delay="0.4s">
                        <div class="c-content-media-1 c-content-v-center c-theme-bg" data-height="height">
                            <div class="c-wrapper">
                                <div class="c-body c-center">
                                    <h3 class="c-font-25 c-line-height-34 c-font-white c-font-uppercase c-font-bold">
                                        Nothing is impossible for JANGO. Highly Flexible, always growing</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 wow animate fadeInLeft">
                        <div class="c-content-media-2-slider" data-slider="owl">
                            <div class="c-content-label c-font-uppercase c-font-bold">Latest Uploads</div>
                            <div class="owl-carousel owl-theme c-theme owl-single" data-single-item="true"
                                data-auto-play="4000" data-rtl="false">
                                <div class="item">
                                    <div class="c-content-media-2 c-bg-img-center"
                                        style="background-image: url(main/base/img/content/stock3/18.jpg); min-height: 360px;">
                                        <div class="c-panel">
                                            <div class="c-fav">
                                                <i class="icon-heart c-font-thin"></i>
                                                <p class="c-font-thin">16</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="c-content-media-2 c-bg-img-center"
                                        style="background-image: url(main/base/img/content/stock3/22.jpg); min-height: 360px;">
                                        <div class="c-panel">
                                            <div class="c-fav">
                                                <i class="icon-heart c-font-thin"></i>
                                                <p class="c-font-thin">24</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="c-content-media-2 c-bg-img-center"
                                        style="background-image: url(main/base/img/content/stock3/32.jpg); min-height: 360px;">
                                        <div class="c-panel">
                                            <div class="c-fav">
                                                <i class="icon-heart c-font-thin"></i>
                                                <p class="c-font-thin">19</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 wow animate fadeInRight">
                        <div class="c-content-testimonial-2-slider" data-slider="owl">
                            <div class="c-title c-font-uppercase c-theme-bg">Testimonials</div>
                            <div class="owl-carousel owl-theme c-theme owl-single" data-single-item="true"
                                data-auto-play="6000" data-rtl="false">
                                <div class="item">
                                    <div class="c-content-testimonial-2" style="min-height: 360px;">
                                        <div class="c-testimonial c-font-bold c-font-uppercase">JANGO the best HTML
                                            theme I've purchased in months!</div>
                                        <div class="c-author">
                                            <div class="c-portrait"
                                                style="background-image: url(main/base/img/content/team/team13.jpg)">
                                            </div>
                                            <div class="c-name c-font-uppercase">Jim Cook</div>
                                            <p class="c-position c-theme c-font-uppercase">Orange Inc.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="c-content-testimonial-2" style="min-height: 360px;">
                                        <div class="c-testimonial c-font-bold c-font-uppercase">Quick and extremely easy
                                            to use with awesome customer support</div>
                                        <div class="c-author">
                                            <div class="c-portrait"
                                                style="background-image: url(main/base/img/content/team/team6.jpg)">
                                            </div>
                                            <div class="c-name c-font-uppercase">Jane Smith</div>
                                            <p class="c-position c-theme c-font-uppercase">Loop Inc.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: CONTENT/MISC/LATEST-ITEMS-1 -->
        <!-- BEGIN: CONTENT/PRODUCTS/PRODUCT-1 -->
        <div class="c-content-box c-size-md c-bg-white c-no-bottom-padding">
            <div class="container">
                <div class="c-content-product-1 c-opt-1">
                    <div class="c-content-title-1">
                        <h3 class="c-center c-font-uppercase c-font-bold">Learn More About JANGO</h3>
                        <div class="c-line-center"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 wow animate slideInUp">
                            <div class="c-media">
                                <img src="main/base/img/content/misc/jango-intro-3.png" alt="" /> </div>
                        </div>
                        <div class="col-md-8">
                            <div class="c-body">
                                <ul class="c-row">
                                    <li class="wow animate fadeInUp">
                                        <h4>Code Quality</h4>
                                        <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit sed diam nonummy nibh
                                            euismod</p>
                                    </li>
                                    <li class="wow animate fadeInUp">
                                        <h4>Angular JS Support</h4>
                                        <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit sed diam nonummy nibh
                                            euismod</p>
                                    </li>
                                </ul>
                                <ul class="c-row">
                                    <li class="wow animate fadeInUp">
                                        <h4>Every Growing Unique Layouts</h4>
                                        <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit sed diam nonummy nibh
                                            euismod</p>
                                    </li>
                                    <li class="wow animate fadeInUp">
                                        <h4>Fully Mobile Optimized</h4>
                                        <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit sed diam nonummy nibh
                                            euismod</p>
                                    </li>
                                </ul>
                                <button type="button"
                                    class="btn btn-md c-btn-border-2x c-btn-square c-btn-regular c-btn-uppercase c-btn-bold c-margin-b-100">Learn
                                    More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: CONTENT/PRODUCTS/PRODUCT-1 -->
        <!-- BEGIN: CONTENT/PRICING/PRICING-1 -->
        <div class="c-content-box c-size-md c-bg-grey-1">
            <div class="container">
                <div class="c-content-pricing-1">
                    <div class="c-content-title-1">
                        <h3 class="c-center c-font-uppercase c-font-bold">Purchase a Package</h3>
                        <div class="c-line-center"></div>
                    </div>
                    <div class="c-tile-container">
                        <div class="c-tile c-tile-small wow animate fadeInLeft">
                            <div class="c-label c-theme-bg">Standard</div>
                            <p class="c-price">59
                                <sup>$</sup>
                            </p>
                            <p class="c-font-uppercase">1000 Copies</p>
                            <p class="c-font-uppercase">Unlimited Data</p>
                            <p class="c-font-uppercase">Unlimited Users</p>
                            <p class="c-font-uppercase">For 7 days</p>
                            <a href="#"
                                class="btn btn-md c-btn-square c-btn-border-2x c-btn-regular c-btn-uppercase c-btn-bold">Purchase</a>
                        </div>
                        <div class="c-tile wow animate fadeInUp">
                            <div class="c-label c-theme-bg">Business</div>
                            <p class="c-price">99
                                <sup>$</sup>
                            </p>
                            <p class="c-font-uppercase">10,000 Copies</p>
                            <p class="c-font-uppercase">Unlimited Data</p>
                            <p class="c-font-uppercase">Unlimited Users</p>
                            <p class="c-font-uppercase">For 30 days</p>
                            <button type="button"
                                class="btn btn-md c-btn-square c-btn-border-2x c-btn-regular c-btn-uppercase c-btn-bold">Purchase</button>
                        </div>
                        <div class="c-tile c-tile-small wow animate fadeInRight">
                            <div class="c-label c-theme-bg">Expert</div>
                            <p class="c-price">199
                                <sup>$</sup>
                            </p>
                            <p class="c-font-uppercase">Unlimited Copies</p>
                            <p class="c-font-uppercase">Unlimited Data</p>
                            <p class="c-font-uppercase">Unlimited Users</p>
                            <p class="c-font-uppercase">For 1 Year</p>
                            <button type="button"
                                class="btn btn-md c-btn-square c-btn-border-2x c-btn-regular c-btn-uppercase c-btn-bold">Purchase</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: CONTENT/PRICING/PRICING-1 -->
        <!-- BEGIN: CONTENT/SLIDERS/CLIENT-LOGOS-2 -->
        <div class="c-content-box c-size-md c-bg-white">
            <div class="container">
                <!-- Begin: Testimonals 1 component -->
                <div class="c-content-client-logos-slider-1  c-bordered" data-slider="owl">
                    <!-- Begin: Title 1 component -->
                    <div class="c-content-title-1">
                        <h3 class="c-center c-font-uppercase c-font-bold">Happy Customers</h3>
                        <div class="c-line-center c-theme-bg"></div>
                    </div>
                    <!-- End-->
                    <!-- Begin: Owlcarousel -->
                    <div class="owl-carousel owl-theme c-theme owl-bordered1 c-owl-nav-center" data-items="6"
                        data-desktop-items="4" data-desktop-small-items="3" data-tablet-items="3"
                        data-mobile-small-items="2" data-slide-speed="5000" data-rtl="false">
                        <div class="item">
                            <a href="#">
                                <img src="main/base/img/content/client-logos/client1.jpg" alt="" />
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="main/base/img/content/client-logos/client2.jpg" alt="" />
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="main/base/img/content/client-logos/client3.jpg" alt="" />
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="main/base/img/content/client-logos/client4.jpg" alt="" />
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="main/base/img/content/client-logos/client5.jpg" alt="" />
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="main/base/img/content/client-logos/client6.jpg" alt="" />
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="main/base/img/content/client-logos/client5.jpg" alt="" />
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="main/base/img/content/client-logos/client6.jpg" alt="" />
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="main/base/img/content/client-logos/client5.jpg" alt="" />
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="main/base/img/content/client-logos/client6.jpg" alt="" />
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="main/base/img/content/client-logos/client5.jpg" alt="" />
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="main/base/img/content/client-logos/client6.jpg" alt="" />
                            </a>
                        </div>
                    </div>
                    <!-- End-->
                </div>
                <!-- End-->
            </div>
        </div>
        <!-- END: CONTENT/SLIDERS/CLIENT-LOGOS-2 -->
        <!-- END: PAGE CONTENT -->
    </div>
    <!-- END: PAGE CONTAINER -->
    <!-- BEGIN: LAYOUT/FOOTERS/FOOTER-6 -->
    <a name="footer"></a>
    <footer class="c-layout-footer c-layout-footer-6 c-bg-grey-1">
        <div class="container">
            <div class="c-prefooter c-bg-white">
                <div class="c-head">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="c-left">
                                <div class="socicon">
                                    <a href="#"
                                        class="socicon-btn socicon-btn-circle socicon-solid c-bg-grey-1 c-font-grey-2 c-theme-on-hover socicon-facebook tooltips"
                                        data-original-title="Facebook" data-container="body"></a>
                                    <a href="#"
                                        class="socicon-btn socicon-btn-circle socicon-solid c-bg-grey-1 c-font-grey-2 c-theme-on-hover socicon-twitter tooltips"
                                        data-original-title="Twitter" data-container="body"></a>
                                    <a href="#"
                                        class="socicon-btn socicon-btn-circle socicon-solid c-bg-grey-1 c-font-grey-2 c-theme-on-hover socicon-youtube tooltips"
                                        data-original-title="Youtube" data-container="body"></a>
                                    <a href="#"
                                        class="socicon-btn socicon-btn-circle socicon-solid c-bg-grey-1 c-font-grey-2 c-theme-on-hover socicon-tumblr tooltips"
                                        data-original-title="Tumblr" data-container="body"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="c-right">
                                <h3 class="c-title c-font-uppercase c-font-bold">Download Mobile App</h3>
                                <div class="c-icons">
                                    <a href="#"
                                        class="c-font-30 c-font-green-1 socicon-btn c-bg-grey-1-hover socicon-android tooltips"
                                        data-original-title="Android" data-container="body"></a>
                                    <a href="#"
                                        class="c-font-30 c-font-grey-3 socicon-btn c-bg-grey-1-hover socicon-apple tooltips"
                                        data-original-title="Apple" data-container="body"></a>
                                    <a href="#"
                                        class="c-font-30 c-font-blue-3 socicon-btn c-bg-grey-1-hover socicon-windows tooltips"
                                        data-original-title="Windows" data-container="body"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="c-line"></div>
                <div class="c-body">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <ul class="c-links c-theme-ul">
                                <li>
                                    <a href="#">About Jango</a>
                                </li>
                                <li>
                                    <a href="#">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="#">Terms & Conditions</a>
                                </li>
                                <li>
                                    <a href="#">Delivery</a>
                                </li>
                                <li>
                                    <a href="#">Promotions</a>
                                </li>
                                <li>
                                    <a href="#">News</a>
                                </li>
                            </ul>
                            <ul class="c-links c-theme-ul">
                                <li>
                                    <a href="#">Blogs</a>
                                </li>
                                <li>
                                    <a href="#">Projects</a>
                                </li>
                                <li>
                                    <a href="#">Clients</a>
                                </li>
                                <li>
                                    <a href="#">Services</a>
                                </li>
                                <li>
                                    <a href="#">Features</a>
                                </li>
                                <li>
                                    <a href="#">Stats</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-5 col-sm-6 col-xs-12">
                            <div class="c-content-title-1 c-title-md">
                                <h3 class="c-title c-font-uppercase c-font-bold">Latest Tweets</h3>
                                <div class="c-line-left hide"></div>
                            </div>
                            <div class="c-twitter">
                                <a class="twitter-timeline" href="https://twitter.com/themehats" data-tweet-limit="2"
                                    data-chrome="noheader nofooter noscrollbar noborders transparent"> Loading tweets by
                                    @themehats... </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12">
                            <div class="c-content-title-1 c-title-md">
                                <h3 class="c-title c-font-uppercase c-font-bold">Contact Us</h3>
                                <div class="c-line-left hide"></div>
                            </div>
                            <p class="c-address c-font-16"> 25, Lorem Lis Street, Orange
                                <br /> California, US
                                <br /> Phone: 800 123 3456
                                <br /> Fax: 800 123 3456
                                <br /> Email:
                                <a href="mailto:info@jango.com">
                                    <span class="c-theme-color">info@jango.com</span>
                                </a>
                                <br /> Skype:
                                <a href="#">
                                    <span class="c-theme-color">jango</span>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="c-line"></div>
                <div class="c-foot">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="c-content-title-1 c-title-md">
                                <h3 class="c-font-uppercase c-font-bold">About
                                    <span class="c-theme-font">JANGO</span>
                                </h3>
                                <div class="c-line-left hide"></div>
                            </div>
                            <p class="c-text c-font-16 c-font-regular">Tolerare unus ducunt ad brevis buxum. Est alter
                                buxum, cesaris. Eheu, lura! Racanas crescere in emeritis oenipons! Ubi est rusticus
                                repressor? Lixa grandis clabulare est. Eposs tolerare.</p>
                        </div>
                        <div class="col-md-5">
                            <div class="c-content-title-1 c-title-md">
                                <h3 class="c-font-uppercase c-font-bold">Subscribe to Newsletter</h3>
                                <div class="c-line-left hide"></div>
                            </div>
                            <div class="c-line-left hide"></div>
                            <form action="#">
                                <div class="input-group input-group-lg c-square">
                                    <input type="text" class="form-control c-square c-font-grey-3 c-border-grey c-theme"
                                        placeholder="Your Email Here" />
                                    <span class="input-group-btn">
                                        <button
                                            class="btn c-theme-btn c-theme-border c-btn-square c-btn-uppercase c-font-16"
                                            type="button">Subscribe</button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="c-postfooter c-bg-dark-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 c-col">
                        <p class="c-copyright c-font-grey">2015 &copy; JANGO
                            <span class="c-font-grey-3">All Rights Reserved.</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- END: LAYOUT/FOOTERS/FOOTER-6 -->
    <!-- BEGIN: LAYOUT/FOOTERS/GO2TOP -->
    <div class="c-layout-go2top">
        <i class="icon-arrow-up"></i>
    </div>
    <!-- END: LAYOUT/FOOTERS/GO2TOP -->
    <!-- BEGIN: LAYOUT/BASE/BOTTOM -->
    <!-- BEGIN: CORE PLUGINS -->
    <!--[if lt IE 9]>
<script src="../../asset/global/plugins/excanvas.min.js"></script> 
<![endif]-->
    <script src="{{ asset('main/js/jquery.min.js') }}" defer></script>
    <script src="{{ asset('main/js/jquery-migrate.min.js') }}" defer></script>
    <script src="{{ asset('main/js/bootstrap/js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('main/js/jquery.easing.min.js') }}" defer></script>
    <script src="{{ asset('main/js/reveal-animate/wow.js') }}" defer></script>
    <script src="{{ asset('main/js/reveal-animate/reveal-animate.js') }}" defer></script>
    <!-- END: CORE PLUGINS -->
    <!-- BEGIN: LAYOUT PLUGINS -->
    <script src="{{ asset('main/js/revo-slider/js/jquery.themepunch.tools.min.js') }}" defer>
    </script>
    <script src="{{ asset('main/js/revo-slider/js/jquery.themepunch.revolution.min.js') }}"
        defer></script>
    <script
        src="{{ asset('main/js/revo-slider/js/extensions/revolution.extension.slideanims.min.js') }}"
        defer></script>
    <script
        src="{{ asset('main/js/revo-slider/js/extensions/revolution.extension.layeranimation.min.js') }}"
        defer></script>
    <script
        src="{{ asset('main/js/revo-slider/js/extensions/revolution.extension.navigation.min.js') }}"
        defer></script>
    <script
        src="{{ asset('main/js/revo-slider/js/extensions/revolution.extension.video.min.js') }}"
        defer></script>
    <script
        src="{{ asset('main/js/revo-slider/js/extensions/revolution.extension.parallax.min.js') }}"
        defer></script>
    <script src="{{ asset('main/js/cubeportfolio/js/jquery.cubeportfolio.min.js') }}" defer>
    </script>
    <script src="{{ asset('main/js/owl-carousel/owl.carousel.min.js') }}" defer></script>
    <script src="{{ asset('main/js/counterup/jquery.waypoints.min.js') }}" defer></script>
    <script src="{{ asset('main/js/counterup/jquery.counterup.min.js') }}" defer></script>
    <script src="{{ asset('main/js/fancybox/jquery.fancybox.pack.js') }}" defer></script>
    <script src="{{ asset('main/js/smooth-scroll/jquery.smooth-scroll.js') }}" defer></script>
    <script src="{{ asset('main/js/typed/typed.min.js') }}" defer></script>
    <script src="{{ asset('main/js/slider-for-bootstrap/js/bootstrap-slider.js') }}" defer>
    </script>
    <script src="{{ asset('main/js/js-cookie/js.cookie.js') }}" defer></script>
    <!-- END: LAYOUT PLUGINS -->
    <!-- BEGIN: THEME SCRIPTS -->
    <script src="{{ asset('main/js/components.js') }}" defer></script>
    <script src="{{ asset('main/js/components-shop.js') }}" defer></script>
    <script src="{{ asset('main/js/app.js') }}" defer></script>
    <script>
        $(document).ready(function () {
            App.init(); // init core    
        });

    </script>
    <!-- END: THEME SCRIPTS -->
    <!-- BEGIN: PAGE SCRIPTS -->
    <script src="{{ asset('main/js/scripts/revo-slider/slider-4.js') }}" defer></script>
    <script src="{{ asset('main/js/isotope/isotope.pkgd.min.js') }}" defer></script>
    <script src="{{ asset('main/js/isotope/imagesloaded.pkgd.min.js') }}" defer></script>
    <script src="{{ asset('main/js/isotope/packery-mode.pkgd.min.js') }}" defer></script>
    <script src="{{ asset('main/js/ilightbox/js/jquery.requestAnimationFrame.js') }}" defer>
    </script>
    <script src="{{ asset('main/js/ilightbox/js/jquery.mousewheel.js') }}" defer></script>
    <script src="{{ asset('main/js/ilightbox/js/ilightbox.packed.js') }}" defer></script>
    <script src="{{ asset('main/js/scripts/pages/isotope-gallery.js') }}" defer></script>
    <script
        src="{{ asset('main/js/revo-slider/js/extensions/revolution.extension.parallax.min.js') }}"
        defer></script>
    <script src="http://themehats.com/assets/plugins/revo-slider/js/extensions/revolution.extension.kenburn.min.js') }}"
        defer></script>
    <!-- END: PAGE SCRIPTS -->
    <!-- END: LAYOUT/BASE/BOTTOM -->
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'http://www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-64667612-1', 'themehats.com');
        ga('send', 'pageview');

    </script>
</body>



<!-- Mirrored from themehats.com/themes/jango/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Feb 2019 04:18:05 GMT -->

</html>
