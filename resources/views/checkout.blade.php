@extends('buy.app_buy')

@section('title' ,  '| CheckOut')

@section('buy_main')

		
	<!-- BEGIN: LAYOUT/HEADERS/HEADER-1 -->
<!-- BEGIN: HEADER -->
@include('components.header')
<!-- END: HEADER --><!-- END: LAYOUT/HEADERS/HEADER-1 -->
<!-- BEGIN: CONTENT/USER/FORGET-PASSWORD-FORM -->

<!-- BEGIN: CONTENT/USER/SIGNUP-FORM -->

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
        <li>
            <a href="shop-checkout.html">Checkout</a>
        </li>
        <li>/</li>
        <li class="c-state_active">Jango Components</li>                        
    </ul>
</div>
</div><!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
    <!-- BEGIN: PAGE CONTENT -->
    <div class="c-content-box c-size-lg">
<div class="container">
    <form action="{{ route('placeorder')}}" class="c-shop-form-1" method="POST">
        @csrf
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
                                <input type="text" class="form-control c-square c-theme" value="{{Auth::user()->fname}}" name="fname" placeholder="First Name">
                            </div>
                            <div class="col-md-6">
                                <label class="control-label">Last Name</label>
                                <input type="text" class="form-control c-square c-theme" value="{{Auth::user()->lname}}" name="lname" placeholder="Last Name">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="control-label">Company Name</label>
                        <input type="text" class="form-control c-square c-theme" value="{{Auth::user()->cname}}" name="cname" placeholder="Company Name">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="control-label">Address</label>
                        <input type="text" class="form-control c-square c-theme" value="{{Auth::user()->address1}}" name="address1" placeholder="Street Address">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <input type="text" class="form-control c-square c-theme" value="{{Auth::user()->address2}}" name="address2" placeholder="Apartment, suite, unit etc. (optional)">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="control-label">Town / City</label>
                        <input type="text" class="form-control c-square c-theme" value="{{Auth::user()->city}}" name="city" placeholder="Town / City">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="control-label">State / County</label> <select name="state" value="{{Auth::user()->state}}" class="form-control c-square c-theme">
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
                                <input type="text" class="form-control c-square c-theme" value="{{Auth::user()->zipcode}}" name="zipcode" placeholder="Postcode / Zip">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="control-label">Email Address</label>
                                <input type="email" class="form-control c-square c-theme" value="{{Auth::user()->email}}" name="email" placeholder="Email Address">
                            </div>
                            <div class="col-md-6">
                                <label class="control-label">Phone</label>
                                <input type="tel" class="form-control c-square c-theme" value="{{Auth::user()->phone}}" name="phone" placeholder="Phone">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="control-label">Order Notes</label>
                        <textarea class="form-control c-square c-theme" rows="3" value="{{Auth::user()->note}}" name="note" placeholder="Note about your order, e.g. special notes for delivery."></textarea>
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
                            <p>$<span class="c-subtotal">{{ $total }}.00</span></p>
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
                        <div class="form-group col-md-12" role="group">
                            <button type="submit" class="btn btn-lg c-theme-btn c-btn-square c-btn-uppercase c-btn-bold">Submit</button>
                            {{-- <button type="submit" class="btn btn-lg btn-default c-btn-square c-btn-uppercase c-btn-bold">Cancel</button> --}}
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