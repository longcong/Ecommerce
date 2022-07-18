@extends('buy.app_buy')

@section('title' ,  '| Payment')

@section('buy_main')

@include('components.header')
<div class="c-layout-page">
    <!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
    <div class="c-layout-breadcrumbs-1 c-subtitle c-fonts-uppercase c-fonts-bold c-bordered c-bordered-both">
        <div class="container">
            <div class="c-page-title c-pull-left">
                <h3 class="c-font-uppercase c-font-sbold">Payment Pages</h3>
                <h4 class="">Page Sub Title Goes Here</h4>
            </div>
            <ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
                <li>
                    <a href="shop-checkout.html">Payment</a>
                </li>
                <li>/</li>
                <li class="c-state_active">Components</li>
            </ul>
        </div>
    </div>
</div>
@include('layouts.inc.messager')
<div class="c-content-box c-size-lg">
	<div class="container">
		<div class="c-shop-cart-page-1">
			<div class="row c-cart-table-title">
                <div class="col-md-12" style="text-align: center;">
					<h2 class="c-font-uppercase c-font-bold c-font-20 c-font-grey-2">You have successfully paid with momo wallet </h2>
				</div>
            </div>
            <br>
            <div class="row c-cart-table-title">
                <div class="c-cart-buttons" style="text-align: center;">
                    <a href="{{route('checkout') }}" class="btn c-btn btn-lg c-btn-red c-btn-square c-font-white c-font-bold c-font-uppercase c-cart-float-l">Done Checkout</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
