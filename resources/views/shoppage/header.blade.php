    <!-- BEGIN: HEADER -->
    <div class="c-navbar">
    <div class="container">
        <!-- BEGIN: BRAND -->
        <div class="c-navbar-wrapper clearfix">
            <div class="c-brand c-pull-left">
                <a href="index.html" class="c-logo">
                    <p class="c-desktop-logo"></p>
                    <!-- <img src="{{ asset('main/base/img/layout/logos/logo-1.png') }}" alt="JANGO" class="c-desktop-logo">
                    <img src="{{ asset('main/base/img/layout/logos/logo-1.png') }}" alt="JANGO" class="c-desktop-logo-inverse">
                    <img src="{{ asset('main/base/img/layout/logos/logo-1.png') }}" alt="JANGO" class="c-mobile-logo"> -->
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
                    <i class="icon-handbag"></i></span>
                </button>
            </div>
            <!-- END: BRAND -->				
            <!-- BEGIN: QUICK SEARCH -->
            <div>
                <div class="search" style="padding-left: 50%;">
                    <form  class="c-quick-search" action="{{ route('search') }}">
                        <input id="search" style="color:black; border-style: groove;border-width: 6px; padding: 10px;" 
                        type="text" name="query" placeholder="Tìm kiếm..." value="{{ request()->input('query') }}" 
                        class="form-control typeahead" autocomplete="off">
                        <span style="padding-right: 20px;" class="c-theme-link">&times;</span>
                    </form>
                </div>
                <script src="{{ asset('main/js/jquery.min.js') }}"  type="text/javascript" ></script>
                <script type="text/javascript">

                     $(document).ready(function(){
                        $("#search").autocomplete({
                            source: "{{ url('search/autocompleteajax') }}",
                                focus: function( event, ui ) {
                                //$( "#search" ).val( ui.item.title ); // uncomment this line if you want to select value to search box  
                                return false;
                            },
                            select: function( event, ui ) {
                                window.location.href = ui.item.url;
                            }
                        }).data( "ui-autocomplete" )._renderItem = function( ul, item ) {
                            var inner_html = '<a href="' + item.url + '" ><div class="list_item_container"><div class="image1"><img src="' + item.image + '" ></div><div class="label"><h4><b>' + item.title + '</b></h4></div></div></a>';
                            return $( "<li></li>" )
                                    .data( "item.autocomplete", item )
                                    .append(inner_html)
                                    .appendTo( ul );
                        };
                    });
                </script>
            </div>
           
            
            <!-- END: QUICK SEARCH -->	
            <!-- BEGIN: HOR NAV -->
            <!-- BEGIN: LAYOUT/HEADERS/MEGA-MENU -->
    <!-- BEGIN: MEGA MENU -->
    <!-- Dropdown menu toggle on mobile: c-toggler class can be applied to the link arrow or link itself depending on toggle mode -->
    <nav class="c-mega-menu c-pull-right c-mega-menu-dark c-mega-menu-dark-mobile c-fonts-uppercase c-fonts-bold">
    <ul class="nav navbar-nav c-theme-nav"> 
        <li>
            <a href="javascript:;" class="c-link dropdown-toggle">Trang chủ<span class="c-arrow c-toggler"></span></a>
        </li>
        <li>
            <a href="javascript:;" class="c-link dropdown-toggle">Danh Mục<span class="c-arrow c-toggler"></span></a>     
            <ul class="dropdown-menu c-menu-type-mega">
                <li>
                    <ul class="dropdown-menu">
                    @foreach($categories as $category)
                        <li>
                            <a href="{{ url('category/'.$category->slug) }}">{{ $category->name }}</a>
                        </li>
                    @endforeach         
                    </ul>
                </li>
            </ul>
        </li>
        <li>
            <a href="{{ 'list' }}" class="c-link dropdown-toggle">Danh sách sản phẩm<span class="c-arrow c-toggler"></span></a>
        </li>
        <li>
            <a href="{{ 'wishlist' }}" class="c-link dropdown-toggle">Danh sách sản phẩm yêu thích<span class="c-arrow c-toggler"></span></a>
        </li>
        
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
                        
                        
                        
                        
                </div>
                            </div>
                </li>
                                </ul>
            <!-- END: MOBILE VERSION OF THE TAB MEGA MENU -->
                        
                </li>


            <li class="c-search-toggler-wrapper">
        <a  href="#" class="c-btn-icon c-search-toggler"><i class="fa fa-search"></i></a>
    </li>
    @if(Auth::check())
        <li class="c-cart-toggler-wrapper">
            <a href="#" class="c-btn-icon c-cart-toggler"
                ><i class="icon-handbag c-cart-icon"></i>
                <span
                    class="c-cart-number c-theme-bg"
                    >{{ $minicartitems->COUNT('user_id') }}
                </span>
            </a>
        </li>
    @else
        <li class="c-cart-toggler-wrapper">
            <a  href="#" class="c-btn-icon c-cart-toggler"><i class="icon-handbag c-cart-icon"></i></a>
        </li>
    @endif
    <li>
        <!-- Authentication Links -->
        @guest
            <a href="#" data-toggle="modal" data-target="#login-form" class="c-btn-border-opacity-04 c-btn btn-no-focus c-btn-header btn btn-sm c-btn-border-1x c-btn-white c-btn-circle c-btn-uppercase c-btn-sbold"><i class="icon-user"></i>
                Đăng nhập
            </a>
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdownProfile" class="nav-link dropdown-toggle c-btn-border-opacity-04 c-btn btn-no-focus c-btn-header btn btn-sm c-btn-border-1x c-btn-white c-btn-circle c-btn-uppercase c-btn-sbold" href="#" role="button" data-toggle="dropdown modal" aria-haspopup="true" aria-expanded="false" v-pre><i class="icon-user"></i>
                    {{ Auth::user()->username }}
                </a>

                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdownProfile" style="background-color: initial; padding-bottom:20px; padding-left:10px;">
                    @if(Auth::user()->role == '1')
                        <a 
                            class="dropdown-item c-btn-border-opacity-04 c-btn btn-no-focus c-btn-header btn btn-sm c-btn-border-1x c-btn-white c-btn-circle c-btn-uppercase c-btn-sbold" 
                            href="{{ route('admin.dashboard') }}">
                                {{ __('Admin') }}
                        </a>
                    @else
                        <a 
                            class="dropdown-item c-btn-border-opacity-04 c-btn btn-no-focus c-btn-header btn btn-sm c-btn-border-1x c-btn-white c-btn-circle c-btn-uppercase c-btn-sbold" 
                            href="{{ route('dashboard') }}">
                                {{ __('User') }}
                        </a>
                    @endif
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
            @if (Auth::check())
                @if($minicartitems != null)
                    <div class="c-cart-menu">
                        <ul class="c-cart-menu-items">
                            @php $total =0;@endphp 
                                @foreach ($minicartitems as $item)
                                <li>
                                    <img
                                        src="{{ asset('images/' . $item->products->image) }}"
                                    />
                                    <div class="c-cart-menu-content">
                                        <p>
                                            <span class="c-item-price c-theme-font"
                                                >${{ number_format(($item->products->price - $item->products->discount_value))
                                                }} đ</span
                                            >
                                        </p>
                                        <a
                                            href="{{ url('product/'.$item->products->slug) }}"
                                            class="c-item-name c-font-sbold"
                                            >{{$item->products->title}}</a
                                        >
                                    </div>
                                </li>
                                @php $total += ($item->products->price -
                                $item->products->discount_value) * $item->prod_qty ; @endphp
                            @endforeach
                            
                            <div class="c-cart-menu-title">
                                <p class="c-cart-menu-float-l c-font-sbold">
                                    {{ $minicartitems->COUNT('user_id') }} item(s)
                                </p>
                                <p
                                    class="c-cart-menu-float-r c-theme-font c-font-sbold"
                                >
                                    {{ number_format($total) }} đ
                                </p>
                            </div>
                        </ul>
                        <div class="c-cart-menu-footer">
                            <a 
                                href="{{ route('cart') }}" class="btn btn-md c-btn c-btn-square c-btn-grey-3 c-font-white c-font-bold c-center c-font-uppercase"
                                >View Cart
                            </a>
                            <a 
                                href="{{ route('checkout') }}" class="btn btn-md c-btn c-btn-square c-theme-btn c-font-white c-font-bold c-center c-font-uppercase"
                                >Checkout</a>
                        </div>
                    </div>
                @else
                    <div class="c-cart-menu">
                        <div class="c-cart-menu-footer">
                            <li
                                class="c-title c-font-18 c-font-slim"
                                >Your Cart is empty
                            </li>
                        
                        </div>
                    </div>
                @endif
            @else
                <div class="c-cart-menu">
                    <div class="c-cart-menu-footer">
                        <ul>
                            <p class="c-title c-font-18 c-font-slim">
                                Your Cart is empty
                            </p>
                        </ul>
                    </div>
                </div>
            @endif                         
    <!-- END: CART MENU --><!-- END: LAYOUT/HEADERS/QUICK-CART -->
        </div>
    </div>
@yield('headershop')