@extends('buy.app_buy')

@section('title' ,  '| Cart')

@section('buy_main')
		
	<!-- BEGIN: LAYOUT/HEADERS/HEADER-1 -->
@include('components.header')

<!-- END: HEADER --><!-- END: LAYOUT/HEADERS/HEADER-1 -->
	<!-- BEGIN: CONTENT/USER/FORGET-PASSWORD-FORM -->
	
	<!-- BEGIN: PAGE CONTAINER -->
	<div class="c-layout-page">
		<!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
<div class="c-layout-breadcrumbs-1 c-subtitle c-fonts-uppercase c-fonts-bold c-bordered c-bordered-both">
	<div class="container">
		<div class="c-page-title c-pull-left">
			<h3 class="c-font-uppercase c-font-sbold">Cart</h3>
			<h4 class="">Page Sub Title Goes Here</h4>
		</div>
		<ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
			<li><a href="shop-cart.html">Shopping Cart</a></li>
			<li>/</li>
			<li class="c-state_active">Jango Components</li>
									
		</ul>
	</div>
</div><!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
		<!-- BEGIN: PAGE CONTENT -->
		<!-- BEGIN: CONTENT/SHOPS/SHOP-CART-1 -->
<div class="c-content-box c-size-lg">
	<div class="container">
		<div class="c-shop-cart-page-1">
			<div class="row c-cart-table-title">
				<div class="col-md-2 c-cart-image">
					<h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">Image</h3>
				</div>
				<div class="col-md-4 c-cart-desc">
					<h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">Description</h3>
				</div>
				<div class="col-md-1 c-cart-ref">
					<h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">SKU</h3>
				</div>
				<div class="col-md-1 c-cart-qty">
					<h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">Qty</h3>
				</div>
				<div class="col-md-1 c-cart-price">
					<h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">Unit Price</h3>
				</div>
				<div class="col-md-1 c-cart-price">
					<h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">Sale</h3>
				</div>
				<div class="col-md-1 c-cart-total">
					<h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">Total</h3>
				</div>
				<div class="col-md-1 c-cart-remove"></div>
			</div>
			<!-- BEGIN: SHOPPING CART ITEM ROW -->
			@php $total =0;@endphp
			@foreach ($cartitems as $item)
			<div class="row c-cart-table-row product_data" id="product_data">
				<h2 class="c-font-uppercase c-font-bold c-theme-bg c-font-white c-cart-item-title c-cart-item-first">Item {{$item->id}}</h2>
				<div class="col-md-2 col-sm-3 col-xs-5 c-cart-image">
					<img src="{{ asset('images/' . $item->products->image) }}" height="100px" width="100px"/>
				</div>
				<div class="col-md-4 col-sm-9 col-xs-7 c-cart-desc">
					<h3><a href="{{ url('product/'.$item->products->slug) }}" class="c-font-bold c-theme-link c-font-22 c-font-dark">{{$item->products->title}}</a></h3>
				</div>
				<div class="col-md-1 col-sm-3 col-xs-6 c-cart-ref">
					<p class="c-cart-sub-title c-theme-font c-font-uppercase c-font-bold">SKU</p>
					<p>{{$item->products->slug}}</p>
				</div>
				<div class="col-md-1 col-sm-3 col-xs-6 c-cart-qty">
					<input type="hidden" value="{{ $item->prod_id }}" class="product_id">
					@if($item->products->quantity >= $item->prod_qty)
						<p class="c-cart-sub-title c-theme-font c-font-uppercase c-font-bold">QTY</p>
						<div class="c-input-group c-spinner">
							<input type="text" class="form-control qty-input" value="{{$item->prod_qty}}">
							<div class="c-input-group-btn-vertical">
								<button class="btn btn-default" type="button" data_input="c-item-1" data-maximum="10"><i class="fa fa-caret-up changeQuantity increment-btn"></i></button>
								<button class="btn btn-default" type="button" data_input="c-item-1"><i class="fa fa-caret-down changeQuantity decrement-btn"></i></button>
							</div>
						</div>
						@php $total += ($item->products->price - $item->products->discount_value) * $item->prod_qty ; @endphp
					@else
					<p class="c-cart-sub-title c-theme-font c-font-uppercase c-font-bold">QTY</p>
					<span class="c-font-20 c-font-red">Out of stock</span>
					@endif
				</div>
				<div class="col-md-1 col-sm-3 col-xs-6 c-cart-price">
					<p class="c-cart-sub-title c-theme-font c-font-uppercase c-font-bold">Unit Price</p>
					<p class="c-cart-price c-font-bold">${{$item->products->price }}.00</p>
				</div>
				<div class="col-md-1 col-sm-3 col-xs-6 c-cart-price">
					<p class="c-cart-sub-title c-theme-font c-font-uppercase c-font-bold">Sale</p>
					<p class="c-cart-price c-font-bold">${{$item->products->discount_value }}.00</p>
				</div>
				<div class="col-md-1 col-sm-3 col-xs-6 c-cart-total">
					<p class="c-cart-sub-title c-theme-font c-font-uppercase c-font-bold">Total</p>
					<p class="c-cart-price c-font-bold">${{ ($item->products->price - $item->products->discount_value) * $item->prod_qty }}.00</p>
				</div>
				<div class="col-md-1 col-sm-12 c-cart-remove">
					<button class="btn btn-danger delete-cart-item"><i class="fa fa-trash"></i></button>
				</div>
			</div>
			@endforeach
			<!-- END: SHOPPING CART ITEM ROW -->
			<!-- BEGIN: SUBTOTAL ITEM ROW -->
			
			<div class="row">
				<div class="c-cart-subtotal-row c-margin-t-20">
					<div class="col-md-2 col-md-offset-9 col-sm-6 col-xs-6 c-cart-subtotal-border">
						<h3 class="c-font-uppercase c-font-bold c-right c-font-16 c-font-grey-2">Subtotal</h3>
					</div>
					<div class="col-md-1 col-sm-6 col-xs-6 c-cart-subtotal-border">
						<h3 class="c-font-bold c-font-16">${{ $total }}.00</h3>
					</div>
				</div>
			</div>
			<!-- END: SUBTOTAL ITEM ROW -->
			<!-- BEGIN: SUBTOTAL ITEM ROW -->
			<div class="row">
				<div class="c-cart-subtotal-row">
					<div class="col-md-2 col-md-offset-9 col-sm-6 col-xs-6 c-cart-subtotal-border">
						<h3 class="c-font-uppercase c-font-bold c-right c-font-16 c-font-grey-2">Code</h3>
					</div>
					<div class="col-md-1 col-sm-6 col-xs-6 c-cart-subtotal-border">
						<h3 class="c-font-bold c-font-16">$0</h3>
					</div>
				</div>
			</div>
			<!-- END: SUBTOTAL ITEM ROW -->
			<!-- BEGIN: SUBTOTAL ITEM ROW -->
			<div class="row">
				<div class="c-cart-subtotal-row">
					<div class="col-md-2 col-md-offset-9 col-sm-6 col-xs-6 c-cart-subtotal-border">
						<h3 class="c-font-uppercase c-font-bold c-right c-font-16 c-font-grey-2">Grand Total</h3>
					</div>
					<div class="col-md-1 col-sm-6 col-xs-6 c-cart-subtotal-border">
						<h3 class="c-font-bold c-font-16">${{ $total }}.00</h3>
					</div>
				</div>
			</div>
			<!-- END: SUBTOTAL ITEM ROW -->
			<div class="c-cart-buttons">
				<a href="#" class="btn c-btn btn-lg c-btn-red c-btn-square c-font-white c-font-bold c-font-uppercase c-cart-float-l">Continue Shopping</a>
				<a href="{{route('checkout')}}" class="btn c-btn btn-lg c-theme-btn c-btn-square c-font-white c-font-bold c-font-uppercase c-cart-float-r">Checkout</a>
			</div>
		</div>
	</div>
</div><!-- END: CONTENT/SHOPS/SHOP-CART-1 -->

<!-- BEGIN: CONTENT/STEPS/STEPS-3 -->
<div class="c-content-box c-size-md c-theme-bg">
    <div class="container">
        <div class="c-content-step-3 c-font-white">
            <div class="row">
                <div class="col-md-4 c-steps-3-block">
                    <i class="fa fa-truck"></i>
                    <div class="c-steps-3-title">
                        <h2 class="c-font-white c-font-uppercase c-font-30 c-font-thin">Free shipping</h2>
                        <em>Express delivery withing 3 days</em>
                    </div>
                    <span>&nbsp;</span>
                </div>  
                <div class="col-md-4 c-steps-3-block">
                    <i class="fa fa-gift"></i>
                    <div class="c-steps-3-title">
                        <h2 class="c-font-white c-font-uppercase c-font-30 c-font-thin">Daily Gifts</h2>
                        <em>3 Gifts daily for lucky customers</em>
                    </div>
                    <span>&nbsp;</span>
                </div>
                <div class="col-md-4 c-steps-3-block">
                    <i class="fa fa-phone"></i>
                    <div class="c-steps-3-title">
                        <h2 class="c-font-white c-font-uppercase c-font-30 c-font-thin">477 505 8877</h2>
                        <em>24/7 customer care available</em>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- END: CONTENT/STEPS/STEPS-3 -->
  
		<!-- END: PAGE CONTENT -->
	</div>
	<!-- END: PAGE CONTAINER -->

	<!-- BEGIN: LAYOUT/FOOTERS/FOOTER-6 -->
@endsection

@section('buy_script')

@endsection