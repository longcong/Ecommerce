@extends('buy.app_buy')

@section('title' , '| Product List')

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
	</div>
		<div class="c-navbar">
		<div class="container">
			<!-- BEGIN: BRAND -->
			<div class="c-navbar-wrapper clearfix">
				<div class="c-brand c-pull-left">
					<a href="{{ ('/') }}" class="c-logo">
						<img src="{{ asset('main/base/img/layout/logos/logo-3.png') }}" alt="JANGO" class="c-desktop-logo">
						<img src="{{ asset('main/base/img/layout/logos/logo-3.png') }}" alt="JANGO" class="c-desktop-logo-inverse">
						<img src="{{ asset('main/base/img/layout/logos/logo-3.png') }}" alt="JANGO" class="c-mobile-logo">
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
						<i class="icon-handbag"></i> <span class="c-cart-number c-theme-bg">2</span>
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
                            <a href="{{ url('/') }}">Shop Home 2</a>
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
																                        <li class="c-active">
                            <a href="{{ 'list' }}">Product List</a>
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
											                        <li>
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
			<a  href="#" class="c-btn-icon c-cart-toggler"><i class="icon-handbag c-cart-icon"></i> <span class="c-cart-number c-theme-bg">2</span></a>
		</li>
		
		<li>
        <!-- Authentication Links -->
        @guest
            <a href="#" data-toggle="modal" data-target="#login-form" class="c-btn-border-opacity-04 c-btn btn-no-focus c-btn-header btn btn-sm c-btn-border-1x c-btn-white c-btn-circle c-btn-uppercase c-btn-sbold"><i class="icon-user"></i>
                Sign In
            </a>
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdownProfile" class="nav-link dropdown-toggle c-btn-border-opacity-04 c-btn btn-no-focus c-btn-header btn btn-sm c-btn-border-1x c-btn-white c-btn-circle c-btn-uppercase c-btn-sbold" href="#" role="button" data-toggle="dropdown modal" aria-haspopup="true" aria-expanded="false" v-pre><i class="icon-user"></i>
                    {{ Auth::user()->username }}
                </a>

                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdownProfile" style="background-color: initial; padding-bottom:20px; padding-left:10px;">
                    <a class="dropdown-item c-btn-border-opacity-04 c-btn btn-no-focus c-btn-header btn btn-sm c-btn-border-1x c-btn-white c-btn-circle c-btn-uppercase c-btn-sbold" href="{{ route('admin.dashboard') }}">
                        {{ __('Admin') }}
                    </a>
                    <br>
                    <a class="dropdown-item c-btn-border-opacity-04 c-btn btn-no-focus c-btn-header btn btn-sm c-btn-border-1x c-btn-white c-btn-circle c-btn-uppercase c-btn-sbold" href="{{ route('logout') }}" style="margin-top: 10px;"
                        onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
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
	<div class="c-cart-menu-title">
		<p class="c-cart-menu-float-l c-font-sbold">2 item(s)</p>
		<p class="c-cart-menu-float-r c-theme-font c-font-sbold">$79.00</p>
	</div>
	<ul class="c-cart-menu-items">
		<li>
			<div class="c-cart-menu-close">
				<a href="#" class="c-theme-link">×</a>
			</div>
			<img src="{{ asset('main/base/img/content/shop2/24.jpg') }}"/>
			<div class="c-cart-menu-content">
				<p>1 x <span class="c-item-price c-theme-font">$30</span></p>
				<a href="shop-product-details-2.html" class="c-item-name c-font-sbold">Winter Coat</a>
			</div>
		</li>
		<li>
			<div class="c-cart-menu-close">
				<a href="#" class="c-theme-link">×</a>
			</div>
			<img src="{{ asset('main/base/img/content/shop2/12.jpg') }}"/>
			<div class="c-cart-menu-content">
				<p>1 x <span class="c-item-price c-theme-font">$30</span></p>
				<a href="shop-product-details.html" class="c-item-name c-font-sbold">Sports Wear</a>
			</div>
		</li>
	</ul> 
	<div class="c-cart-menu-footer">
		<a href="{{'cart'}}" class="btn btn-md c-btn c-btn-square c-btn-grey-3 c-font-white c-font-bold c-center c-font-uppercase">View Cart</a>
		<a href="shop-checkout.html" class="btn btn-md c-btn c-btn-square c-theme-btn c-font-white c-font-bold c-center c-font-uppercase">Checkout</a>
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
			<h3 class="c-font-uppercase c-font-sbold">Product List</h3>
			<h4 class="">Page Sub Title Goes Here</h4>
		</div>
		<ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
															<li><a href="shop-product-list.html">Product List</a></li>
			<li>/</li>
															<li class="c-state_active">Jango Components</li>
									
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
		<a href="javascript:;" class="c-toggler">Active Section<span class="c-arrow"></span></a>
		<ul class="c-dropdown-menu">
			<li class="c-active">
				<a href="#">Active Link</a>
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
	<li class="c-dropdown">
		<a href="javascript:;" class="c-toggler">Sub Menu Section<span class="c-arrow"></span></a>
		<ul class="c-dropdown-menu">
			<li>
				<a href="#">Example Link</a>
			</li>
			<li class="c-dropdown c-dropdown-sub">
				<a href="javascript:;" class="c-toggler c-toggler-sub">Sub Menu
				<span class="c-arrow"></span></a>
				<ul class="c-dropdown-menu">
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
					<li>
						<a href="#">Example Link</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="#">Example Link</a>
			</li>
			<li class="c-dropdown">
				<a href="javascript:;" class="c-toggler">Sub Menu<span class="c-arrow"></span></a>
				<ul class="c-dropdown-menu">
					<li>
						<a href="#">Example Link</a>
					</li>
					<li>
						<a href="#">Example Link</a>
					</li>
					<li class="c-dropdown">
						<a href="javascript:;" class="c-toggler">Sub Menu<span class="c-arrow"></span></a>
						<ul class="c-dropdown-menu">
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
			<li>
				<a href="#">Example Link</a>
			</li>
		</ul>
	</li>
	<li class="c-dropdown">
		<a href="javascript:;" class="c-toggler">Section With Icons<span class="c-arrow"></span></a>
		<ul class="c-dropdown-menu">
			<li>
				<a href="#"><i class="icon-social-dribbble"></i> Example Link</a>
			</li>
			<li>
				<a href="#"><i class="icon-bell"></i> Example Link</a>
			</li>
			<li>
				<a href="#"><i class="icon-bubbles"></i> Example Link</a>
			</li>
			<li>
				<a href="#"><i class="icon-user"></i> Example Link</a>
			</li>
		</ul>
	</li>
	<li class="c-dropdown">
		<a href="javascript:;" class="c-toggler">Expanded Section<span class="c-arrow"></span></a>
		<ul class="c-dropdown-menu">
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
	<li class="c-dropdown">
		<a href="javascript:;">Arrow Toggler <span class="c-arrow c-toggler"></span></a>
		<ul class="c-dropdown-menu">
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
			<li class="c-dropdown">
				<a href="javascript:;">Sub Menu
				<span class="c-arrow c-toggler"></span></a>
				<ul class="c-dropdown-menu">
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
					<li>
						<a href="#">Example Link</a>
					</li>
				</ul>
			</li>
		</ul>
	</li>
</ul>

<div class="c-padding-20 c-margin-t-40 c-bg-grey-1 c-bg-img-bottom-right" style="background-image:url({{ asset('main/base/img/content/misc/feedback_box_2.png') }});">
	<div class="c-content-title-1 c-margin-t-20">
		<h3 class="c-font-uppercase c-font-bold">Have a question?</h3>
		<div class="c-line-left"></div>
		<form action="#">
			<div class="input-group input-group-lg c-square">
				<input type="text" class="form-control c-square" placeholder="Ask a question"/>
				<span class="input-group-btn">
				<button class="btn c-theme-btn c-btn-square c-btn-uppercase c-font-bold" type="button">Go!</button>
				</span>
			</div>
		</form>
		<p class="c-font-thin">Ask your questions away and let our dedicated customer service help you look through our FAQs to get your questions answered!</p>
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
</div><!-- END: CONTENT/SHOPS/SHOP-RESULT-FILTER-1 -->

<div class="c-margin-t-20"></div>

<!-- BEGIN: CONTENT/SHOPS/SHOP-2-8 -->
@foreach($products as $post)
<div class="row c-margin-b-40">
	<div class="c-content-product-2 c-bg-white product_data">
			<input type="hidden" value="{{ $post->id }}" class="product_id">
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
                        <a class="c-theme-link" href="shop-product-details.html">{{ $post->title }}</a>
                    </h3>
                    <p class="c-desc c-font-16 c-font-thin">{{ $post->note }}</p>
                    <p class="c-price c-font-26 c-font-thin">{{ $post->price - $post->discount_value}}$ &nbsp;
                        <span class="c-font-26 c-font-line-through c-font-red">{{ $post->price }}$</span>
                    </p>
                </div>
                <div>
					@if($post->quantity >0)
                    <button type="submit" class="btn btn-sm c-theme-btn c-btn-square c-btn-uppercase c-btn-bold addToCartBtn">
                        <i class="fa fa-shopping-cart"></i>Add Cart
                    </button>
					@endif
                    <button type="submit" class="btn btn-sm btn-default c-btn-square c-btn-uppercase c-btn-bold">
                        <i class="fa fa-heart-o"></i>Add Wishlist
                    </button>
                </div>
				<br>
				<div>
				@if($post->quantity >0)
					<label class="badge c-btn-border-2x c-btn-green-1">In stock</label>
				@else
					<label class="badge c-btn-border-2x c-btn-red-1">Out of stock</label>
				@endif	
				</div>
            </div>
	</div>
</div>
@endforeach
			</div>
		</div>
	</div>
	<!-- END: PAGE CONTAINER -->


@endsection

@section('buy_script')

@endsection
