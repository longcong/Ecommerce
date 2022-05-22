@extends('buy.app_buy')

@section('title' ,  '| Checkout Done')

@section('buy_main')

<!-- BEGIN: LAYOUT/HEADERS/HEADER-1 -->
@include('components.header')

<!-- END: HEADER -->
<!-- END: LAYOUT/HEADERS/HEADER-1 -->
<!-- BEGIN: CONTENT/USER/FORGET-PASSWORD-FORM -->

<!-- BEGIN: PAGE CONTAINER -->
<div class="c-layout-page">
    <!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
    <div class="c-layout-breadcrumbs-1 c-subtitle c-fonts-uppercase c-fonts-bold c-bordered c-bordered-both">
        <div class="container">
            <div class="c-page-title c-pull-left">
                <h3 class="c-font-uppercase c-font-sbold">Checkout Complete</h3>
                <h4 class="">Page Sub Title Goes Here</h4>
            </div>
            <ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
                <li><a href="shop-checkout-complete.html">Checkout Complete</a></li>
                <li>/</li>
                <li class="c-state_active">Jango Components</li>

            </ul>
        </div>
    </div><!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
    <!-- BEGIN: PAGE CONTENT -->
    <div class="c-content-box c-size-lg c-overflow-hide c-bg-white">
        <div class="container">
            <div class="c-shop-order-complete-1 c-content-bar-1 c-align-left c-bordered c-theme-border c-shadow">
                <div class="c-content-title-1">
                    <h3 class="c-center c-font-uppercase c-font-bold">Checkout Completed</h3>
                    <div class="c-line-center c-theme-bg"></div>
                </div>
                <div class="c-theme-bg">
                    <p class="c-message c-center c-font-white c-font-20 c-font-sbold">
                        <i class="fa fa-check"></i> Thank you. Your order has been received.
                    </p>
                </div>
                <!-- BEGIN: ORDER SUMMARY -->
                <div class="row c-order-summary c-center">
                    <ul class="c-list-inline list-inline">
                        <li>
                            <h3>Order Number</h3>
                            <p>{{$orders->tracking_no}}</p>
                        </li>
                        <li>
                            <h3>Date Purchased</h3>
                            <p>{{ date('M j, Y h:ia', strtotime($orders->created_at)) }}</p>
                        </li>
                        <li>
                            <h3>Total Payable</h3>
                            <p>${{$orders->total_price}}.00</p>
                        </li>
                        <li>
                            <h3>Payment Method</h3>
                            <p>Direct Bank Transfer</p>
                        </li>
                    </ul>
                </div>
                <!-- END: ORDER SUMMARY -->
                <!-- BEGIN: BANK DETAILS -->
                <div class="c-bank-details c-margin-t-30 c-margin-b-30">
                    <p class="c-margin-b-20">Make your payment directly into our account. Please use your Order ID as
                        the payment reference. Your order won't be shipped until the funds have cleared in our account.
                    </p>

                    <h3 class="c-margin-t-40 c-margin-b-20 c-font-uppercase c-font-22 c-font-bold">OUR BANK DETAILS</h3>
                    <h3 class="c-border-bottom">Account Name : &nbsp;<span class="c-font-thin">{{$users->username}}</span></h3>
                    <ul class="c-list-inline list-inline">
                        <li>
                            <h3>Account Number</h3>
                            <p></p>
                        </li>
                        <li>
                            <h3>Sort Code</h3>
                            <p>123</p>
                        </li>
                        <li>
                            <h3>Bank</h3>
                            <p>Bank Name</p>
                        </li>
                        <li>
                            <h3>BIC</h3>
                            <p>12345</p>
                        </li>
                    </ul>
                </div>
                <!-- END: BANK DETAILS -->
                <!-- BEGIN: ORDER DETAILS -->
                <div class="c-order-details">
                    <div class="c-border-bottom hidden-sm hidden-xs">
                        <div class="row">
                            <div class="col-md-3">
                                <h3 class="c-font-uppercase c-font-16 c-font-grey-2 c-font-bold">Product</h3>
                            </div>
                            <div class="col-md-5">
                                <h3 class="c-font-uppercase c-font-16 c-font-grey-2 c-font-bold">Description</h3>
                            </div>
                            <div class="col-md-2">
                                <h3 class="c-font-uppercase c-font-16 c-font-grey-2 c-font-bold">Unit Price</h3>
                            </div>
                            <div class="col-md-2">
                                <h3 class="c-font-uppercase c-font-16 c-font-grey-2 c-font-bold">Total</h3>
                            </div>
                        </div>
                    </div>
                    <!-- BEGIN: PRODUCT ITEM ROW -->
                    @foreach($products as $product)
                    <div class="c-border-bottom c-row-item">
                        <div class="row">
                            <div class="col-md-3 col-sm-12 c-image">
                                <div class="c-content-overlay">
                                    <div class="c-overlay-wrapper">
                                        <div class="c-overlay-content">
                                            <a href="shop-product-details-2.html"
                                                class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                        </div>
                                    </div>
                                    <div class="c-bg-img-top-center c-overlay-object" data-height="height">
                                        <img width="100%" class="img-responsive"
                                            src="{{ asset('images/' . $product->image) }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-8">
                                <ul class="c-list list-unstyled">
                                    <li class="c-margin-b-25"><a href="shop-product-details-2.html"
                                            class="c-font-bold c-font-22 c-theme-link"></a></li>
                                    <li>Quantity: {{$product->quantity}}        </li>
                                </ul>
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <p class="visible-xs-block c-theme-font c-font-uppercase c-font-bold">Unit Price</p>
                                <p class="c-font-sbold c-font-uppercase c-font-18"></p>
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <p class="visible-xs-block c-theme-font c-font-uppercase c-font-bold">Total</p>
                                <p class="c-font-sbold c-font-18">$20.00</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- END: PRODUCT ITEM ROW -->
                    <!-- BEGIN: PRODUCT ITEM ROW -->
                    <!-- END: PRODUCT ITEM ROW -->
                    <div class="c-row-item c-row-total c-right">
                        <ul class="c-list list-unstyled">
                            <li>
                                <h3 class="c-font-regular c-font-22">Subtotal : &nbsp;
                                    <span class="c-font-dark c-font-bold c-font-22">$80.00</span>
                                </h3>
                            </li>
                            <li>
                                <h3 class="c-font-regular c-font-22">Shipping Fee : &nbsp;
                                    <span class="c-font-dark c-font-bold c-font-22">$15.00</span>
                                </h3>
                            </li>
                            <li>
                                <h3 class="c-font-regular c-font-22">Grand Total : &nbsp;
                                    <span class="c-font-dark c-font-bold c-font-22">$95.00</span>
                                </h3>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- END: ORDER DETAILS -->
                <!-- BEGIN: CUSTOMER DETAILS -->
                <div class="c-customer-details row" data-auto-height="true">
                    <div class="col-md-6 col-sm-6 c-margin-t-20">
                        <div data-height="height">
                            <h3 class=" c-margin-b-20 c-font-uppercase c-font-22 c-font-bold">Customer Details</h3>
                            <ul class="list-unstyled">
                                <li>{{$orders->fname.' '.$orders->lname}}</li>
                                <li>Phone: {{$orders->email}}</li>
                                <li>Email: <a href="{{$orders->email}}" class="c-theme-color">{{$orders->email}}</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 c-margin-t-20">
                        <div data-height="height">
                            <h3 class=" c-margin-b-20 c-font-uppercase c-font-22 c-font-bold">Billing Address</h3>
                            <ul class="list-unstyled">
                                <li>{{$orders->fname.' '.$orders->lname}}</li>
                                <li>
                                    {{$orders->address1}} <br />
                                    {{$orders->address2}} <br />
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- END: CUSTOMER DETAILS -->
            </div>
        </div>
    </div>
    <!-- END: PAGE CONTENT -->
</div>

@endsection

@section('buy_script')

@endsection
