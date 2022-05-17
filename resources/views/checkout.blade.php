@extends('buy.app_buy')

@section('title' ,  '| CheckOut')

@section('buy_main')

		
	<!-- BEGIN: LAYOUT/HEADERS/HEADER-1 -->
<!-- BEGIN: HEADER -->
<header class="c-layout-header c-layout-header-4 c-layout-header-default-mobile" data-minimize-offset="80">
    <div class="c-topbar c-topbar-light c-solid-bg">
    <div class="container">
        <!-- BEGIN: INLINE NAV -->
        <nav class="c-top-menu c-pull-left">
            <ul class="c-icons c-theme-ul">
                <li><a href="#"><i class="icon-social-twitter"></i></a></li>
                <li><a href="#"><i class="icon-social-facebook"></i></a></li>
                <li><a href="#"><i class="icon-social-dribbble"></i></a></li>
                <li class="hide"><span>Phone: +99890345677</span></li>
            </ul>
        </nav>
        <!-- END: INLINE NAV -->
        <!-- BEGIN: INLINE NAV -->
        <nav class="c-top-menu c-pull-right">
            <ul class="c-links c-theme-ul">
                <li><a href="#">Help</a></li>
                <li class="c-divider">|</li>
                <li><a href="#">Contact</a></li>
                <li class="c-divider">|</li>
                <li><a href="#">FAQ</a></li>
            </ul>
            <ul class="c-ext c-theme-ul">
                <li class="c-lang dropdown c-last">
                    <a href="#">en</a>
                    <ul class="dropdown-menu pull-right" role="menu">
                        <li class="active"><a href="#">English</a></li>
                        <li><a href="#">German</a></li>
                        <li><a href="#">Espaniol</a></li>
                        <li><a href="#">Portugise</a></li>
                    </ul>
                </li>
                <li class="c-search hide">
                    <!-- BEGIN: QUICK SEARCH -->
                    <form action="#">
                        <input type="text" name="query" placeholder="search..." value="" class="form-control" autocomplete="off">
                        <i class="fa fa-search"></i>
                    </form>
                    <!-- END: QUICK SEARCH -->	
                </li>
            </ul>
        </nav>
        <!-- END: INLINE NAV -->
    </div>

    <div class="c-navbar">
    <div class="container">
        <!-- BEGIN: BRAND -->
        <div class="c-navbar-wrapper clearfix">
            <div class="c-brand c-pull-left">
                <a href="index.html" class="c-logo">
                    <img src="{{ asset('main/base/img/layout/logos/logo-3.png')}}" alt="JANGO" class="c-desktop-logo">
                    <img src="{{ asset('main/base/img/layout/logos/logo-3.png')}}" alt="JANGO" class="c-desktop-logo-inverse">
                    <img src="{{ asset('main/base/img/layout/logos/logo-3.png')}}" alt="JANGO" class="c-mobile-logo">
                </a>
                <button class="c-hor-nav-toggler" type="button" data-target=".c-mega-menu">
                <span class="c-line"></span>
                <span class="c-line"></span>
                <span class="c-line"></span>
                </button>
                <button class="c-topbar-toggler" type="button">
                    <i class="fa fa-ellipsis-v"></i>
                </button>
                <button class="c-search-toggler" type="button">
                    <i class="fa fa-search"></i>
                </button>
                <button class="c-cart-toggler" type="button">
                    <i class="icon-handbag"></i> <span class="c-cart-number c-theme-bg"></span>
                </button>
            </div>
            <!-- END: BRAND -->				
            <!-- BEGIN: QUICK SEARCH -->
            <form class="c-quick-search" action="#">
                <input type="text" name="query" placeholder="Type to search..." value="" class="form-control" autocomplete="off">
                <span class="c-theme-link">&times;</span>
            </form>
            <!-- END: QUICK SEARCH -->	
            <!-- BEGIN: HOR NAV -->
            <!-- BEGIN: LAYOUT/HEADERS/MEGA-MENU -->
<!-- BEGIN: MEGA MENU -->
<!-- Dropdown menu toggle on mobile: c-toggler class can be applied to the link arrow or link itself depending on toggle mode -->
<nav class="c-mega-menu c-pull-right c-mega-menu-dark c-mega-menu-dark-mobile c-fonts-uppercase c-fonts-bold">
<ul class="nav navbar-nav c-theme-nav"> 
                    <li >
                    <a href="javascript:;" class="c-link dropdown-toggle">Home<span class="c-arrow c-toggler"></span></a>
        
                    
                                                                    <div class="dropdown-menu c-menu-type-mega c-menu-type-fullwidth" style="min-width: auto">
                            <div class="row">
                        <div class="col-md-3">
                <ul class="dropdown-menu c-menu-type-inline">
                                                <li>
                            <h3>Home Samples</h3>
                        </li>
                                                                                                    <li>
                            <a href="../corporate_1/index.html">NEW Corporate Demo 1</a>
                        </li>
                                                                            <li>
                            <a href="index.html">Home Version 1</a>
                        </li>
                                                                            <li>
                            <a href="home-2.html">Home Version 2</a>
                        </li>
                                                                            <li>
                            <a href="home-3.html">Home Version 3</a>
                        </li>
                                                                            <li>
                            <a href="home-4.html">Home Version 4</a>
                        </li>
                                                                            <li>
                            <a href="home-5.html">Home Version 5</a>
                        </li>
                                                                            <li>
                            <a href="home-6.html">Home Version 6</a>
                        </li>
                                                                            <li>
                            <a href="home-7.html">Home Version 7</a>
                        </li>
                                        </ul>
            </div>
                        <div class="col-md-3">
                <ul class="dropdown-menu c-menu-type-inline">
                                                <li>
                            <h3>Home Samples</h3>
                        </li>
                                                                                                    <li>
                            <a href="home-8.html">Home Version 8</a>
                        </li>
                                                                            <li>
                            <a href="home-9.html">Home Version 9</a>
                        </li>
                                                                            <li>
                            <a href="home-10.html">Home Version 10</a>
                        </li>
                                                                            <li>
                            <a href="home-11.html">Home Version 11</a>
                        </li>
                                                                            <li>
                            <a href="home-12.html">Home Version 12</a>
                        </li>
                                                                            <li>
                            <a href="home-13.html">Home Version 13</a>
                        </li>
                                                                            <li>
                            <a href="home-14.html">Home Version 14</a>
                        </li>
                                        </ul>
            </div>
                        <div class="col-md-3">
                <ul class="dropdown-menu c-menu-type-inline">
                                                <li>
                            <h3>Onepage Samples</h3>
                        </li>
                                                                                                    <li>
                            <a href="../agency_1/index.html" target="_blank">New Agency Onepage Demo</a>
                        </li>
                                                                            <li>
                            <a href="onepage-1.html" target="_blank">Onepage Version 1</a>
                        </li>
                                                                            <li>
                            <a href="onepage-2.html" target="_blank">Onepage Version 2</a>
                        </li>
                                                                            <li>
                            <a href="onepage-3.html" target="_blank">Onepage Version 3</a>
                        </li>
                                                                            <li>
                            <a href="onepage-4.html" target="_blank">Onepage Version 4</a>
                        </li>
                                                                            <li>
                            <a href="onepage-5.html" target="_blank">Onepage Version 5</a>
                        </li>
                                                                            <li>
                            <a href="onepage-6.html" target="_blank">Onepage Version 6</a>
                        </li>
                                        </ul>
            </div>
                        <div class="col-md-3">
                <ul class="dropdown-menu c-menu-type-inline">
                                                <li>
                            <h3>Onepage Samples</h3>
                        </li>
                                                                                                    <li>
                            <a href="onepage-7.html" target="_blank">Onepage Version 7</a>
                        </li>
                                                                            <li>
                            <a href="onepage-8.html" target="_blank">Onepage Version 8</a>
                        </li>
                                                                            <li>
                            <a href="onepage-9.html" target="_blank">Onepage Version 9</a>
                        </li>
                                                                            <li>
                            <a href="onepage-10.html" target="_blank">Onepage Version 10</a>
                        </li>
                                                                            <li>
                            <a href="onepage-11.html" target="_blank">Onepage Version 11</a>
                        </li>
                                                                            <li>
                            <a href="onepage-12.html" target="_blank">Onepage Version 12</a>
                        </li>
                                        </ul>
            </div>
                </div>
                        </div>
                
                                            
                </li>
                    <li class="c-menu-type-classic">
                    <a href="javascript:;" class="c-link dropdown-toggle">Features<span class="c-arrow c-toggler"></span></a>
        
                    
                                                <ul class="dropdown-menu c-menu-type-classic c-pull-left">
                                                <li class="dropdown-submenu">
            <a href="javascript:;">Headers<span class="c-arrow c-toggler"></span></a>
                <ul class="dropdown-menu c-pull-right">
                                            <li>
                <a href="home-header-1.html">Home Header v1</a>
            </li>
                                                        <li>
                <a href="home-header-1-ext.html">Home Header v1 - Extended</a>
            </li>
                                                        <li>
                <a href="home-header-2.html">Home Header v2</a>
            </li>
                                                        <li>
                <a href="home-header-2-ext.html">Home Header v2 - Extended</a>
            </li>
                                                        <li>
                <a href="home-header-3.html">Home Header v3</a>
            </li>
                                                        <li>
                <a href="home-header-4.html">Home Header v4</a>
            </li>
                                                        <li>
                <a href="home-header-4-ext.html">Home Header v4 - Extended</a>
            </li>
                                                        <li>
                <a href="home-header-5.html">Home Header v5</a>
            </li>
                                                        <li>
                <a href="home-header-5-ext.html">Home Header v5 - Extended</a>
            </li>
                                                        <li>
                <a href="home-header-6.html">Home Header v6</a>
            </li>
                                                        <li>
                <a href="home-header-6-ext.html">Home Header v6 - Extended</a>
            </li>
                                                        <li>
                <a href="home-header-7.html">Home Header v7</a>
            </li>
                                                        <li>
                <a href="home-header-8.html">Home Header v8</a>
            </li>
                                                        <li>
                <a href="inner-header-1.html">Inner Header v1</a>
            </li>
                                                        <li>
                <a href="inner-header-1-ext.html">Inner Header v1 - Extended</a>
            </li>
                                                        <li>
                <a href="inner-header-2.html">Inner Header v2</a>
            </li>
                                                        <li>
                <a href="inner-header-2-ext.html">Inner Header v2 - Extended</a>
            </li>
                                                        <li>
                <a href="inner-header-3.html">Inner Header v3</a>
            </li>
                                                        <li>
                <a href="inner-header-4.html">Inner Header v4</a>
            </li>
                                                        <li>
                <a href="inner-header-5.html">Inner Header v5</a>
            </li>
                    </ul>
            </li>
                                    <li class="dropdown-submenu">
            <a href="#">Sidebar Menu<span class="c-arrow c-toggler"></span></a>
                <ul class="dropdown-menu c-pull-right">
                                            <li>
                <a href="sidebar-menu-1.html">Sidebar Menu v1</a>
            </li>
                                                        <li>
                <a href="sidebar-menu-2.html">Sidebar Menu v2</a>
            </li>
                                                        <li>
                <a href="sidebar-menu-static.html">Expanded Static Sidebar Menu</a>
            </li>
                                                        <li>
                <a href="sidebar-menu-right.html">Right Sidebar Menu</a>
            </li>
                                                        <li>
                <a href="sidebar-menu-fluid.html">Sidebar Menu In Fluid Layout</a>
            </li>
                    </ul>
            </li>
                                    <li class="dropdown-submenu">
            <a href="javascript:;">Footers<span class="c-arrow c-toggler"></span></a>
                <ul class="dropdown-menu c-pull-right">
                                            <li>
                <a href="footer-1.html#footer">Footer 1</a>
            </li>
                                                        <li>
                <a href="footer-2.html#footer">Footer 2</a>
            </li>
                                                        <li>
                <a href="footer-3.html#footer">Footer 3</a>
            </li>
                                                        <li>
                <a href="footer-4.html#footer">Footer 4</a>
            </li>
                                                        <li>
                <a href="footer-5.html#footer">Footer 5</a>
            </li>
                                                        <li>
                <a href="footer-6.html#footer">Footer 6</a>
            </li>
                                                        <li>
                <a href="footer-7.html#footer">Footer 7</a>
            </li>
                                                        <li>
                <a href="footer-8.html#footer">Footer 8</a>
            </li>
                                                        <li>
                <a href="footer-9.html#footer">Footer 9</a>
            </li>
                    </ul>
            </li>
                                    <li class="dropdown-submenu">
            <a href="#">Breadcrumbs<span class="c-arrow c-toggler"></span></a>
                <ul class="dropdown-menu c-pull-right">
                                            <li>
                <a href="breadcrumbs-default.html">Breadcrumbs - Default</a>
            </li>
                                                        <li>
                <a href="breadcrumbs-subtitle.html">Breadcrumbs - Sub Title</a>
            </li>
                                                        <li>
                <a href="breadcrumbs-bgimage-1.html">Breadcrumbs - Bg Image V1</a>
            </li>
                                                        <li>
                <a href="breadcrumbs-bgimage-2.html">Breadcrumbs - Bg Image V2</a>
            </li>
                                                        <li>
                <a href="breadcrumbs-bgimage-3.html">Breadcrumbs - Bg Image V3</a>
            </li>
                                                        <li>
                <a href="breadcrumbs-bgimage-4.html">Breadcrumbs - Bg Image V4</a>
            </li>
                                                        <li>
                <a href="breadcrumbs-bgimage-5.html">Breadcrumbs - Bg Image V5</a>
            </li>
                                                        <li>
                <a href="breadcrumbs-bgimage-6.html">Breadcrumbs - Bg Image V6</a>
            </li>
                                                        <li>
                <a href="breadcrumbs-bgimage-7.html">Breadcrumbs - Bg Image V7</a>
            </li>
                                                        <li>
                <a href="breadcrumbs-bgimage-8.html">Breadcrumbs - Bg Image V8</a>
            </li>
                                                        <li>
                <a href="breadcrumbs-bgimage-9.html">Breadcrumbs - Bg Image V9</a>
            </li>
                                                        <li>
                <a href="breadcrumbs-bgimage-10.html">Breadcrumbs - Bg Image V10</a>
            </li>
                    </ul>
            </li>
                                    <li class="dropdown-submenu">
            <a href="javascript:;">Cookies Notification Bar<span class="c-arrow c-toggler"></span></a>
                <ul class="dropdown-menu c-pull-right">
                                            <li>
                <a href="component-cookies-1.html">Full Width - Top</a>
            </li>
                                                        <li>
                <a href="component-cookies-2.html">Full Width - Bottom</a>
            </li>
                                                        <li>
                <a href="component-cookies-3.html">Boxed - Dark Square</a>
            </li>
                                                        <li>
                <a href="component-cookies-4.html">Boxed - Theme Color Rounded</a>
            </li>
                                                        <li>
                <a href="component-cookies-5.html">Boxed - Aligned Top Left</a>
            </li>
                                                        <li>
                <a href="component-cookies-6.html">Boxed - Aligned Top Right</a>
            </li>
                                                        <li>
                <a href="component-cookies-7.html">Boxed - Aligned Bottom Left</a>
            </li>
                                                        <li>
                <a href="component-cookies-8.html">Boxed - Aligned Bottom Right</a>
            </li>
                    </ul>
            </li>
                                    <li>
            <a href="component-smooth-scroll.html">Smooth Scroll Links</a>
        </li>
                                    <li class="dropdown-submenu">
            <a href="#">Mega Menu<span class="c-arrow c-toggler"></span></a>
                <ul class="dropdown-menu c-pull-right">
                                            <li>
                <a href="megamenu-light.html">Mega Menu - Light</a>
            </li>
                                                        <li>
                <a href="megamenu-dark.html">Mega Menu - Dark</a>
            </li>
                    </ul>
            </li>
                                    <li class="dropdown-submenu">
            <a href="page-extended-portfolio.html">Multi Level Menu<span class="c-arrow c-toggler"></span></a>
                <ul class="dropdown-menu c-pull-right">
                                            <li>
                <a href="#">Example Link</a>
            </li>
                                                        <li>
                <a href="#">Example Link</a>
            </li>
                                                        <li>
                <a href="#">Example Link</a>
            </li>
                                                        <li class="dropdown-submenu">
                <a href="#">Example Sub Menu<span
                            class="c-arrow c-toggler"></span></a>
                    <ul class="dropdown-menu c-pull-left">
                                            <li>
                <a href="#">Example Link</a>
            </li>
                                                        <li>
                <a href="#">Example Link</a>
            </li>
                                                        <li>
                <a href="#">Example Link</a>
            </li>
                                                        <li class="dropdown-submenu">
                <a href="#">Example Sub Menu<span
                            class="c-arrow c-toggler"></span></a>
                    <ul class="dropdown-menu c-pull-left">
                                            <li>
                <a href="#">Example Link</a>
            </li>
                                                        <li>
                <a href="#">Example Link</a>
            </li>
                                                        <li>
                <a href="#">Example Link</a>
            </li>
                                                        <li>
                <a href="#">Example Link</a>
            </li>
                    </ul>
                </li>
                                                        <li>
                <a href="#">Example Link</a>
            </li>
                    </ul>
                </li>
                                                        <li>
                <a href="#">Example Link</a>
            </li>
                                                        <li>
                <a href="#">Example Link</a>
            </li>
                    </ul>
            </li>
                                </ul>
                        
                </li>
                    <li >
                    <a href="javascript:;" class="c-link dropdown-toggle">Pages<span class="c-arrow c-toggler"></span></a>
        
                    
                                                
                                    <ul class="dropdown-menu c-menu-type-mega c-menu-type-fullwidth" style="min-width: auto">
                                        <li>
            <ul class="dropdown-menu c-menu-type-inline">
                                        <li>
                        <h3>Page Samples 1</h3>
                    </li>
                                                                                    <li>
                        <a href="page-about-1.html">About Us 1</a>
                    </li>
                                                                <li>
                        <a href="page-about-2.html">About Us 2</a>
                    </li>
                                                                <li>
                        <a href="page-about-3.html">About Us 3</a>
                    </li>
                                                                <li>
                        <a href="page-about-4.html">About Us 4</a>
                    </li>
                                                                <li>
                        <a href="page-team.html">Meet The Team</a>
                    </li>
                                </ul>
        </li>
                <li>
            <ul class="dropdown-menu c-menu-type-inline">
                                        <li>
                        <h3>Page Samples 2</h3>
                    </li>
                                                                                    <li>
                        <a href="page-contact-1.html">Contact Us 1</a>
                    </li>
                                                                <li>
                        <a href="page-contact-2.html">Contact Us 2</a>
                    </li>
                                                                <li>
                        <a href="page-contact-3.html">Contact Us 3</a>
                    </li>
                                                                <li>
                        <a href="page-faq.html">FAQ</a>
                    </li>
                                                                <li>
                        <a href="page-faq-2.html">FAQ 2</a>
                    </li>
                                </ul>
        </li>
                <li>
            <ul class="dropdown-menu c-menu-type-inline">
                                        <li>
                        <h3>Gallery Pages</h3>
                    </li>
                                                                                    <li>
                        <a href="page-product-launch.html">Product Launch</a>
                    </li>
                                                                <li>
                        <a href="page-lightbox-gallery.html">Lightbox Gallery</a>
                    </li>
                                                                <li>
                        <a href="page-fullwidth-gallery.html">Full Width Gallery</a>
                    </li>
                                                                <li>
                        <a href="page-masonry-gallery.html">Masonry Gallery</a>
                    </li>
                                                                <li>
                        <a href="page-index-gallery.html">Gallery Index</a>
                    </li>
                                </ul>
        </li>
                <li>
            <ul class="dropdown-menu c-menu-type-inline">
                                        <li>
                        <h3>Portfolio Pages</h3>
                    </li>
                                                                                    <li>
                        <a href="page-4col-portfolio.html">4 Columns Portfolio</a>
                    </li>
                                                                <li>
                        <a href="page-2col-portfolio.html">2 Columns Portfolio</a>
                    </li>
                                                                <li>
                        <a href="page-masonry-portfolio.html">Masonry Portfolio</a>
                    </li>
                                                                <li>
                        <a href="page-extended-portfolio.html">Extended Portfolio</a>
                    </li>
                                </ul>
        </li>
                <li>
            <ul class="dropdown-menu c-menu-type-inline">
                                        <li>
                        <h3>Blog Pages</h3>
                    </li>
                                                                                    <li>
                        <a href="page-blog-list.html">Blog List View</a>
                    </li>
                                                                <li>
                        <a href="page-blog-grid.html">Blog Grid View</a>
                    </li>
                                                                <li>
                        <a href="page-blog-post.html">Blog Single Post</a>
                    </li>
                                </ul>
        </li>
                                </ul>
                                            
                </li>
                    <li >
                    <a href="javascript:;" class="c-link dropdown-toggle">Shop<span class="c-arrow c-toggler"></span></a>
        
                    
                                                
                                    <ul class="dropdown-menu c-menu-type-mega c-menu-type-fullwidth" style="min-width: auto">
                                        <li>
            <ul class="dropdown-menu c-menu-type-inline">
                                        <li>
                        <h3>Shop Pages 1</h3>
                    </li>
                                                                                    <li>
                        <a href="shop-home-1.html" target="_blank">Shop Home 1</a>
                    </li>
                                                                <li>
                        <a href="shop-home-2.html">Shop Home 2</a>
                    </li>
                                                                <li>
                        <a href="shop-home-3.html">Shop Home 3</a>
                    </li>
                                                                <li>
                        <a href="shop-home-4.html">Shop Home 4</a>
                    </li>
                                                                <li>
                        <a href="shop-home-5.html">Shop Home 5</a>
                    </li>
                                                                <li>
                        <a href="shop-home-6.html">Shop Home 6</a>
                    </li>
                                                                <li>
                        <a href="shop-home-7.html">Shop Home 7</a>
                    </li>
                                                                <li>
                        <a href="shop-home-8.html" target="_blank">Shop Home 8</a>
                    </li>
                                </ul>
        </li>
                <li>
            <ul class="dropdown-menu c-menu-type-inline">
                                        <li>
                        <h3>Shop Pages 2</h3>
                    </li>
                                                                                    <li>
                        <a href="shop-product-list.html">Product List</a>
                    </li>
                                                                <li>
                        <a href="shop-product-grid.html">Product Grid</a>
                    </li>
                                                                <li>
                        <a href="shop-product-search.html">Product Search</a>
                    </li>
                                                                <li>
                        <a href="shop-product-details.html">Product Details 1</a>
                    </li>
                                                                <li>
                        <a href="shop-product-details-2.html">Product Details 2</a>
                    </li>
                                                                <li>
                        <a href="shop-product-details-3.html">Product Details 3</a>
                    </li>
                                                                <li>
                        <a href="shop-product-details-4.html">Product Details 4</a>
                    </li>
                                                                <li>
                        <a href="shop-product-comparison.html">Product Comparison</a>
                    </li>
                                </ul>
        </li>
                <li>
            <ul class="dropdown-menu c-menu-type-inline">
                                        <li>
                        <h3>Shop Pages 3</h3>
                    </li>
                                                                                    <li>
                        <a href="shop-product-wishlist.html">Wish List</a>
                    </li>
                                                                <li>
                        <a href="shop-customer-account.html">Customer Login/Register</a>
                    </li>
                                                                <li>
                        <a href="shop-customer-dashboard.html">Customer Dashboard</a>
                    </li>
                                                                <li>
                        <a href="shop-order-history.html">Order History</a>
                    </li>
                                                                <li>
                        <a href="shop-order-history-2.html">Order History 2</a>
                    </li>
                                                                <li>
                        <a href="shop-cart.html">Shopping Cart</a>
                    </li>
                                                                <li>
                        <a href="shop-cart-empty.html">Shopping Cart(empty)</a>
                    </li>
                                                                <li class="c-active">
                        <a href="shop-checkout.html">Checkout</a>
                    </li>
                                </ul>
        </li>
                <li>
            <ul class="dropdown-menu c-menu-type-inline">
                                        <li>
                        <h3>Shop Pages 4</h3>
                    </li>
                                                                                    <li>
                        <a href="shop-checkout-complete.html">Checkout Complete</a>
                    </li>
                                                                <li>
                        <a href="component-shop-1.html">Shop Components 1</a>
                    </li>
                                                                <li>
                        <a href="component-shop-2.html">Shop Components 2</a>
                    </li>
                                                                <li>
                        <a href="component-shop-3.html">Shop Components 3</a>
                    </li>
                                                                <li>
                        <a href="component-shop-4.html">Shop Components 4</a>
                    </li>
                                                                <li>
                        <a href="component-shop-5.html">Shop Components 5</a>
                    </li>
                                                                <li>
                        <a href="component-shop-6.html">Shop Components 6</a>
                    </li>
                                                                <li>
                        <a href="component-shop-7.html">Shop Components 7</a>
                    </li>
                                </ul>
        </li>
                                </ul>
                                            
                </li>
                    <li >
                    <a href="javascript:;" class="c-link dropdown-toggle">Components<span class="c-arrow c-toggler"></span></a>
        
                    
                                            <!-- BEGIN: DESKTOP VERSION OF THE TAB MEGA MENU -->
            <div class="dropdown-menu c-menu-type-mega c-visible-desktop c-pull-right c-menu-type-fullwidth" style="min-width: auto">
                <ul class="nav nav-tabs c-theme-nav">
                                                                                            <li class="active">
                        <a href="#megamenu_jango_components"  data-toggle="tab">Jango Components</a>
                    </li>
                                                                    <li>
                        <a href="#megamenu_base_components"  data-toggle="tab">Base Components</a>
                    </li>
                                        </ul>
                <div class="tab-content">
                                                                    <div class="tab-pane active" id="megamenu_jango_components">
                                    <div class="row">
                        <div class="col-md-3">
                <ul class="dropdown-menu c-menu-type-inline">
                                                                                                    <li>
                            <a href="component-tabbed-contents.html">Tabbed Contents</a>
                        </li>
                                                                            <li>
                            <a href="component-parallax-1.html">Parallax Blocks 1</a>
                        </li>
                                                                            <li>
                            <a href="component-parallax-2.html">Parallax Blocks 2</a>
                        </li>
                                                                            <li>
                            <a href="component-parallax-3.html">Parallax Blocks 3</a>
                        </li>
                                                                            <li>
                            <a href="component-features.html">Feature Blocks</a>
                        </li>
                                                                            <li>
                            <a href="component-features-2.html">Feature Blocks 2</a>
                        </li>
                                                                            <li>
                            <a href="component-features-3.html">Feature Blocks 3</a>
                        </li>
                                                                            <li>
                            <a href="component-latest-works.html">Latest Works</a>
                        </li>
                                        </ul>
            </div>
                        <div class="col-md-3">
                <ul class="dropdown-menu c-menu-type-inline">
                                                                                                    <li>
                            <a href="component-latest-items.html">Latest Items</a>
                        </li>
                                                                            <li>
                            <a href="component-tiles.html">Tiles</a>
                        </li>
                                                                            <li>
                            <a href="component-services.html">Services</a>
                        </li>
                                                                            <li>
                            <a href="component-blog-elements.html">Blog Elements</a>
                        </li>
                                                                            <li>
                            <a href="component-counters.html">Counters</a>
                        </li>
                                                                            <li>
                            <a href="component-bars.html">Engage Bars</a>
                        </li>
                                                                            <li>
                            <a href="component-isotope.html">Isotope Gallery</a>
                        </li>
                                                                            <li>
                            <a href="component-isotope-grid.html">Isotope Grid</a>
                        </li>
                                        </ul>
            </div>
                        <div class="col-md-3">
                <ul class="dropdown-menu c-menu-type-inline">
                                                                                                    <li>
                            <a href="component-pricing-tables-1.html">Pricing Tables 1</a>
                        </li>
                                                                            <li>
                            <a href="component-pricing-tables-2.html">Pricing Tables 2</a>
                        </li>
                                                                            <li>
                            <a href="component-testimonials.html">Testimonials</a>
                        </li>
                                                                            <li>
                            <a href="component-testimonials-2.html">Testimonials 2</a>
                        </li>
                                                                            <li>
                            <a href="component-clients.html">Clients</a>
                        </li>
                                                                            <li>
                            <a href="component-abouts.html">About Blocks</a>
                        </li>
                                                                            <li>
                            <a href="component-dividers.html">Dividers</a>
                        </li>
                                        </ul>
            </div>
                        <div class="col-md-3">
                <ul class="dropdown-menu c-menu-type-inline">
                                                                                                    <li>
                            <a href="component-steps.html">Steps</a>
                        </li>
                                                                            <li>
                            <a href="component-app-showcase.html">App Showcase</a>
                        </li>
                                                                            <li>
                            <a href="component-team.html">Team</a>
                        </li>
                                                                            <li>
                            <a href="component-headings.html">Headings</a>
                        </li>
                                                                            <li>
                            <a href="component-accordions.html">Accordion Contents</a>
                        </li>
                                                                            <li>
                            <a href="component-progress-bars-2.html">Animated Progress Bars</a>
                        </li>
                                                                            <li>
                            <a href="component-subscribe-form-1.html">Subscribe Form Bars</a>
                        </li>
                                        </ul>
            </div>
                </div>
                            </div>
                                                                    <div class="tab-pane" id="megamenu_base_components">
                                    <div class="row">
                        <div class="col-md-3">
                <ul class="dropdown-menu c-menu-type-inline">
                                                                                                    <li>
                            <a href="component-lists.html">Lists</a>
                        </li>
                                                                            <li>
                            <a href="component-blockquotes.html">Blockquotes</a>
                        </li>
                                                                            <li>
                            <a href="component-navs.html">Navigations</a>
                        </li>
                                                                            <li>
                            <a href="component-fontawesome-icons.html">Fontawesome Icons</a>
                        </li>
                                                                            <li>
                            <a href="component-simpleline-icons.html">Simple Line Icons</a>
                        </li>
                                                                            <li>
                            <a href="component-glyphicons-icons.html">Glyphicons Icons</a>
                        </li>
                                        </ul>
            </div>
                        <div class="col-md-3">
                <ul class="dropdown-menu c-menu-type-inline">
                                                                                                    <li>
                            <a href="component-custom-icons.html">Custom Icons</a>
                        </li>
                                                                            <li>
                            <a href="component-business-custom-icons.html">Custom Business Icons</a>
                        </li>
                                                                            <li>
                            <a href="component-social-icons.html">Social Icons</a>
                        </li>
                                                                            <li>
                            <a href="component-media-embeds.html">Media Embeds</a>
                        </li>
                                                                            <li>
                            <a href="component-labels-badges.html">Labels & Badges</a>
                        </li>
                                        </ul>
            </div>
                        <div class="col-md-3">
                <ul class="dropdown-menu c-menu-type-inline">
                                                                                                    <li>
                            <a href="component-colors.html">UI Colors</a>
                        </li>
                                                                            <li>
                            <a href="component-buttons.html">Buttons</a>
                        </li>
                                                                            <li>
                            <a href="component-form-controls.html">Form Controls</a>
                        </li>
                                                                            <li>
                            <a href="component-tables.html">Tables</a>
                        </li>
                                                                            <li>
                            <a href="component-modals.html">Modals</a>
                        </li>
                                        </ul>
            </div>
                        <div class="col-md-3">
                <ul class="dropdown-menu c-menu-type-inline">
                                                                                                    <li>
                            <a href="component-tabs.html">Tabs</a>
                        </li>
                                                                            <li>
                            <a href="component-paginations.html">Paginations</a>
                        </li>
                                                                            <li>
                            <a href="component-panels.html">Panels</a>
                        </li>
                                                                            <li>
                            <a href="component-progress-bars.html">Progress Bars</a>
                        </li>
                                                                            <li>
                            <a href="component-alerts.html">Alerts</a>
                        </li>
                                        </ul>
            </div>
                </div>
                            </div>
                                        </div>			
            </div>
            <!-- BEGIN: DESKTOP VERSION OF THE TAB MEGA MENU -->
            <!-- BEGIN: MOBILE VERSION OF THE TAB MEGA MENU -->
            <ul class="dropdown-menu c-menu-type-mega c-visible-mobile">
                                                        <li class="dropdown-submenu">
                    <a href="javascript:;">Jango Components<span class="c-arrow c-toggler"></span></a>
                    <div class="dropdown-menu">
                                    <div class="row">
                        <div class="col-md-3">
                <ul class="dropdown-menu c-menu-type-inline">
                                                                                                    <li>
                            <a href="component-tabbed-contents.html">Tabbed Contents</a>
                        </li>
                                                                            <li>
                            <a href="component-parallax-1.html">Parallax Blocks 1</a>
                        </li>
                                                                            <li>
                            <a href="component-parallax-2.html">Parallax Blocks 2</a>
                        </li>
                                                                            <li>
                            <a href="component-parallax-3.html">Parallax Blocks 3</a>
                        </li>
                                                                            <li>
                            <a href="component-features.html">Feature Blocks</a>
                        </li>
                                                                            <li>
                            <a href="component-features-2.html">Feature Blocks 2</a>
                        </li>
                                                                            <li>
                            <a href="component-features-3.html">Feature Blocks 3</a>
                        </li>
                                                                            <li>
                            <a href="component-latest-works.html">Latest Works</a>
                        </li>
                                        </ul>
            </div>
                        <div class="col-md-3">
                <ul class="dropdown-menu c-menu-type-inline">
                                                                                                    <li>
                            <a href="component-latest-items.html">Latest Items</a>
                        </li>
                                                                            <li>
                            <a href="component-tiles.html">Tiles</a>
                        </li>
                                                                            <li>
                            <a href="component-services.html">Services</a>
                        </li>
                                                                            <li>
                            <a href="component-blog-elements.html">Blog Elements</a>
                        </li>
                                                                            <li>
                            <a href="component-counters.html">Counters</a>
                        </li>
                                                                            <li>
                            <a href="component-bars.html">Engage Bars</a>
                        </li>
                                                                            <li>
                            <a href="component-isotope.html">Isotope Gallery</a>
                        </li>
                                                                            <li>
                            <a href="component-isotope-grid.html">Isotope Grid</a>
                        </li>
                                        </ul>
            </div>
                        <div class="col-md-3">
                <ul class="dropdown-menu c-menu-type-inline">
                                                                                                    <li>
                            <a href="component-pricing-tables-1.html">Pricing Tables 1</a>
                        </li>
                                                                            <li>
                            <a href="component-pricing-tables-2.html">Pricing Tables 2</a>
                        </li>
                                                                            <li>
                            <a href="component-testimonials.html">Testimonials</a>
                        </li>
                                                                            <li>
                            <a href="component-testimonials-2.html">Testimonials 2</a>
                        </li>
                                                                            <li>
                            <a href="component-clients.html">Clients</a>
                        </li>
                                                                            <li>
                            <a href="component-abouts.html">About Blocks</a>
                        </li>
                                                                            <li>
                            <a href="component-dividers.html">Dividers</a>
                        </li>
                                        </ul>
            </div>
                        <div class="col-md-3">
                <ul class="dropdown-menu c-menu-type-inline">
                                                                                                    <li>
                            <a href="component-steps.html">Steps</a>
                        </li>
                                                                            <li>
                            <a href="component-app-showcase.html">App Showcase</a>
                        </li>
                                                                            <li>
                            <a href="component-team.html">Team</a>
                        </li>
                                                                            <li>
                            <a href="component-headings.html">Headings</a>
                        </li>
                                                                            <li>
                            <a href="component-accordions.html">Accordion Contents</a>
                        </li>
                                                                            <li>
                            <a href="component-progress-bars-2.html">Animated Progress Bars</a>
                        </li>
                                                                            <li>
                            <a href="component-subscribe-form-1.html">Subscribe Form Bars</a>
                        </li>
                                        </ul>
            </div>
                </div>
                            </div>
                </li>
                                                        <li class="dropdown-submenu">
                    <a href="javascript:;">Base Components<span class="c-arrow c-toggler"></span></a>
                    <div class="dropdown-menu">
                                    <div class="row">
                        <div class="col-md-3">
                <ul class="dropdown-menu c-menu-type-inline">
                                                                                                    <li>
                            <a href="component-lists.html">Lists</a>
                        </li>
                                                                            <li>
                            <a href="component-blockquotes.html">Blockquotes</a>
                        </li>
                                                                            <li>
                            <a href="component-navs.html">Navigations</a>
                        </li>
                                                                            <li>
                            <a href="component-fontawesome-icons.html">Fontawesome Icons</a>
                        </li>
                                                                            <li>
                            <a href="component-simpleline-icons.html">Simple Line Icons</a>
                        </li>
                                                                            <li>
                            <a href="component-glyphicons-icons.html">Glyphicons Icons</a>
                        </li>
                                        </ul>
            </div>
                        <div class="col-md-3">
                <ul class="dropdown-menu c-menu-type-inline">
                                                                                                    <li>
                            <a href="component-custom-icons.html">Custom Icons</a>
                        </li>
                                                                            <li>
                            <a href="component-business-custom-icons.html">Custom Business Icons</a>
                        </li>
                                                                            <li>
                            <a href="component-social-icons.html">Social Icons</a>
                        </li>
                                                                            <li>
                            <a href="component-media-embeds.html">Media Embeds</a>
                        </li>
                                                                            <li>
                            <a href="component-labels-badges.html">Labels & Badges</a>
                        </li>
                                        </ul>
            </div>
                        <div class="col-md-3">
                <ul class="dropdown-menu c-menu-type-inline">
                                                                                                    <li>
                            <a href="component-colors.html">UI Colors</a>
                        </li>
                                                                            <li>
                            <a href="component-buttons.html">Buttons</a>
                        </li>
                                                                            <li>
                            <a href="component-form-controls.html">Form Controls</a>
                        </li>
                                                                            <li>
                            <a href="component-tables.html">Tables</a>
                        </li>
                                                                            <li>
                            <a href="component-modals.html">Modals</a>
                        </li>
                                        </ul>
            </div>
                        <div class="col-md-3">
                <ul class="dropdown-menu c-menu-type-inline">
                                                                                                    <li>
                            <a href="component-tabs.html">Tabs</a>
                        </li>
                                                                            <li>
                            <a href="component-paginations.html">Paginations</a>
                        </li>
                                                                            <li>
                            <a href="component-panels.html">Panels</a>
                        </li>
                                                                            <li>
                            <a href="component-progress-bars.html">Progress Bars</a>
                        </li>
                                                                            <li>
                            <a href="component-alerts.html">Alerts</a>
                        </li>
                                        </ul>
            </div>
                </div>
                            </div>
                </li>
                                </ul>
            <!-- END: MOBILE VERSION OF THE TAB MEGA MENU -->
                        
                </li>
    
    
            <li class="c-search-toggler-wrapper">
        <a  href="#" class="c-btn-icon c-search-toggler"><i class="fa fa-search"></i></a>
    </li>
    
            <li class="c-cart-toggler-wrapper">
        <a  href="#" class="c-btn-icon c-cart-toggler"><i class="icon-handbag c-cart-icon"></i> <span class="c-cart-number c-theme-bg">{{$cartitems->COUNT('user_id')}} </span></a>
    </li>
    
            <li>
        <a href="#" data-toggle="modal" data-target="#login-form" class="c-btn-border-opacity-04 c-btn btn-no-focus c-btn-header btn btn-sm c-btn-border-1x c-btn-dark c-btn-circle c-btn-uppercase c-btn-sbold"><i class="icon-user"></i> Sign In</a>
    </li>
    
            <li class="c-quick-sidebar-toggler-wrapper">	
        <a href="#" class="c-quick-sidebar-toggler">		     		
            <span class="c-line"></span>
            <span class="c-line"></span>
            <span class="c-line"></span>
        </a>
    </li>
    
    
        </ul>
</nav>
<!-- END: MEGA MENU --><!-- END: LAYOUT/HEADERS/MEGA-MENU -->
            <!-- END: HOR NAV -->		
        </div>			
        <!-- BEGIN: LAYOUT/HEADERS/QUICK-CART -->
<!-- BEGIN: CART MENU -->
<div class="c-cart-menu">
	
	<ul class="c-cart-menu-items">
		@php $total =0;@endphp
		@foreach ($cartitems as $item)	
		<li>
			<img src="{{ asset('images/' . $item->products->image) }}"/>
			<div class="c-cart-menu-content">
				<p><span class="c-item-price c-theme-font">${{ ($item->products->price - $item->products->discount_value)}}.00</span></p>
				<a href="shop-product-details-2.html" class="c-item-name c-font-sbold">{{$item->products->title}}</a>
			</div>
		</li>
		@php $total += ($item->products->price - $item->products->discount_value) * $item->prod_qty ; @endphp
		@endforeach
	<div class="c-cart-menu-title">
		<p class="c-cart-menu-float-l c-font-sbold">{{$cartitems->COUNT('user_id')}} item(s)</p>
		<p class="c-cart-menu-float-r c-theme-font c-font-sbold">${{$total}}.00</p>
	</div>	
	</ul> 
	<div class="c-cart-menu-footer">
		<a href="{{route('checkout')}}" class="btn btn-md c-btn c-btn-square c-theme-btn c-font-white c-font-bold c-center c-font-uppercase">Checkout</a>
	</div>
</div>

<!-- END: CART MENU --><!-- END: LAYOUT/HEADERS/QUICK-CART -->
    </div>
</div>
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