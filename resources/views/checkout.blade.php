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
        <h3 class="c-font-uppercase c-font-sbold">Thanh toán</h3>
        <!-- <h4 class="">Page Sub Title Goes Here</h4> -->
    </div>
    <ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
        <li>
            <a href="shop-checkout.html">Thanh toán</a>
        </li>
        <li>/</li>
        <li class="c-state_active">Denimst</li>                        
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
                <h3 class="c-font-bold c-font-uppercase c-font-24">Địa chỉ thanh toán</h3>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="control-label">Quốc gia</label>
                        <select class="form-control c-square c-theme">
                            <option value="1">Vietnam</option>
                            <!-- <option value="2">Singapore</option>
                            <option value="3">Indonesia</option>
                            <option value="4">Thailand</option>
                            <option value="5">China</option>
                            <option value="6">Malaysia</option> -->
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="control-label">Họ</label>
                                <input type="text" class="form-control c-square c-theme" value="{{Auth::user()->fname}}" id="fname" name="fname" placeholder="Họ">
                            </div>
                            <div class="col-md-6">
                                <label class="control-label">Tên</label>
                                <input type="text" class="form-control c-square c-theme" value="{{Auth::user()->lname}}" id="lname" name="lname" placeholder="Tên">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="control-label">Công ty</label>
                        <input type="text" class="form-control c-square c-theme" value="{{Auth::user()->company}}" id="company" name="company" placeholder="Công ty">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="control-label">Địa chỉ</label>
                        <input type="text" class="form-control c-square c-theme" value="{{Auth::user()->address1}}" id="address1" name="address1" placeholder="địa chỉ">
                    </div>
                </div>
                
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="control-label">Thành phố</label>
                        <input type="text" class="form-control c-square c-theme" value="{{Auth::user()->city}}" id="city" name="city" placeholder="Town / City">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="control-label">Quận</label> 
                                <select name="state" value="{{Auth::user()->state}}" id="state" class="form-control c-square c-theme">
                                    <option value="0">Select an option...</option>
                                    <option value="1">Vietnam</option>
                                    <!-- <option value="2">Singapore</option>
                                    <option value="3">Indonesia</option>
                                    <option value="4">Thailand</option>
                                    <option value="5">China</option>
                                    <option value="6">Malaysia</option> -->
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="control-label">Mã code</label>
                                <input type="text" class="form-control c-square c-theme" value="{{Auth::user()->zipcode}}" id="zipcode" name="zipcode" placeholder="Postcode / Zip">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="control-label">Địa chỉ email</label>
                                <input type="email" class="form-control c-square c-theme" id="email" value="{{Auth::user()->email}}" name="email" placeholder="Email Address">
                            </div>
                            <div class="col-md-6">
                                <label class="control-label">Số điện thoại</label>
                                <input type="tel" class="form-control c-square c-theme" id="phone" value="{{Auth::user()->phone}}" name="phone" placeholder="Phone">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="control-label">Lưu ý</label>
                        <textarea class="form-control c-square c-theme" rows="3" value="{{Auth::user()->note}}" id="note" name="note" placeholder="Note about your order, e.g. special notes for delivery."></textarea>
                    </div>
                </div>
            </div>
            <!-- END: ADDRESS FORM -->
            <!-- BEGIN: ORDER FORM -->
            <div class="col-md-5">
                <div class="c-content-bar-1 c-align-left c-bordered c-theme-border c-shadow">
                <h1 class="c-font-bold c-font-uppercase c-font-24">Sản phẩm của bạn</h1>
                <ul class="c-order list-unstyled">
                    <li class="row c-margin-b-15">
                        <div class="col-md-6 c-font-20"><h2>Sản phẩm</h2></div>
                        <div class="col-md-6 c-font-20"><h2>Tổng giá tiền</h2></div>
                    </li>
                    <li class="row c-border-bottom"></li>
                    <!-- @php $total =0;@endphp -->
                    @foreach($cartitems as $item)
                    <li class="row c-margin-b-15 c-margin-t-15">
                        <div class="col-md-6 c-font-20"><a href="{{ url('product/'.$item->products->slug) }}" class="c-theme-link">{{$item->products->title}}</a></div>
                        <div class="col-md-6 c-font-20">
                            <p class="">{{ number_format(($item->products->price - $item->products->discount_value) * $item->prod_qty) }}đ</p>
                        </div>
                    </li>
                    @php $total += ($item->products->price - $item->products->discount_value) * $item->prod_qty ; @endphp
                    @endforeach
                        <li class="row c-margin-b-15 c-margin-t-15">
                            <div class="col-md-6 c-font-20">Tổng tiền phụ</div>
                            <div class="col-md-6 c-font-20">
                                <p><span class="c-subtotal">{{ number_format($total) }}đ</span></p>
                            </div>
                        </li>
                    
                        @if(!empty(Session::get('couponAmount')))
                        <li class="row c-margin-b-15 c-margin-t-15">
                            <div class="col-md-6 c-font-20">mã giảm giá</div>
                            <div class="col-md-6 c-font-20">
                                <p><span class="c-subtotal">{{ Session::get('code') }}</span></p>
                            </div>
                        </li>
                        <li class="row c-margin-b-15 c-margin-t-15">
                            <div class="col-md-6 c-font-20">giá tiền giảm</div>
                            <div class="col-md-6 c-font-20">
                                <p><span class="c-subtotal">{{ number_format(Session::get('couponAmount')) }}đ</span></p>
                            </div>
                        </li>
                        @endif
                        <li class="row c-border-top c-margin-b-15"></li>
                        <li class="row">
                            <div class="col-md-6 c-font-20">Phí giao hàng</div>
                            <div class="col-md-6">
                                <div class="c-radio-list c-shipping-calculator" data-name="shipping_price" data-subtotal-selector="c-subtotal" data-total-selector="c-shipping-total">
                                    <div class="c-radio">
                                        <input type="radio" value="0" id="radio11" class="c-radio" name="shipping_price" checked="">
                                        <label for="radio11">
                                            <span class="inc"></span>
                                            <span class="check"></span>
                                            <span class="box"></span>
                                            
                                            Local Pickup
                                        </label>
                                        
                                    </div>
                                    <!-- <div class="c-radio">
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
                                        <input type="radio" value="20" id="radio13" class="c-radio" name="shipping_price">
                                        <label for="radio13">
                                            <span class="inc"></span>
                                            <span class="check"></span>
                                            <span class="box"></span>
                                            Flat Rate
                                        </label>
                                        <p class="c-shipping-price c-font-bold c-font-20">$20.00</p>
                                    </div> -->
                                </div>
                            </div>
                        </li>
                        
                        @if(!empty(Session::get('couponAmount')))
                            <li class="row c-margin-b-15 c-margin-t-15">
                                <div class="col-md-6 c-font-20">
                                    <p class="c-font-30">Tổng tiền</p>
                                </div>
                                <div class="col-md-6 c-font-20">
                                    <p class="c-font-bold c-font-30"><span class="c-shipping-total">{{ number_format(Session::get('totalFinal')) }}đ</span></p>
                                    <input type="hidden" class="form-control c-square c-theme" value="{{ Session::get('totalFinal') }}" id="totalFinal" name="totalFinal">
                                </div>
                            </li>
                        @else
                            <li class="row c-margin-b-15 c-margin-t-15">
                                <div class="col-md-6 c-font-20">Tổng tiền</div>
                                <div class="col-md-6 c-font-20">
                                    <p><span class="c-subtotal">{{ number_format($total) }}đ</span></p>
                                    <input type="hidden" class="form-control c-square c-theme" value="{{$total}}" id="totalFinal" name="totalFinal">
                                </div>
                            </li>
                        @endif
                        @if(!Session::get('success_momo') == true)
                            <li class="row c-margin-b-15 c-margin-t-15">
                                <div class="form-group col-md-6 c-font-20" role="group">
                                    <button type="submit" class="btn btn-lg c-theme-btn c-btn-square c-btn-uppercase c-btn-bold">Thanh Toán</button> 
                                </div>
                            </li> 
                        @else
                            <li class="row c-margin-b-15 c-margin-t-15">
                                <div class="form-group col-md-12 c-font-20" role="group">
                                    <h2 class="c-font-bold c-font-uppercase c-font-18">Bạn đã Thanh Toán hóa đơn qua Momo</h2>
                                    <br>
                                    <button type="submit" class="btn btn-lg c-theme-btn c-btn-square c-btn-uppercase c-btn-bold">Hoàn Thành</button> 
                                </div>
                            </li> 
                        @endif              
    </form>              
                        @if(!Session::get('success_momo') == true)
                        <li class="row c-margin-b-15 c-margin-t-15">
                            <div class="form-group col-md-6 c-font-20" role="group">
                                <form action="{{ route('momo_payment')}}" class="c-shop-form-1" method="post">
                                    @csrf
                                    @if(!empty(Session::get('couponAmount')))
                                        <input type="hidden" name="total_momo" value="{{ Session::get('totalFinal') }}">
                                    @else
                                        <input type="hidden" name="total_momo" value="{{ $total }}">
                                    @endif
                                        <button type="submit" class="btn btn-lg c-theme-btn c-btn-square c-btn-uppercase c-btn-bold" name="payUrl">Thanh Toán Momo</button>
                                </form>
                            </div>
                        </li>
                        @endif
                    </div>
                </ul>
            </div>     
        </div>  
    </div>
    

    
 
                    
    <!-- END: ORDER FORM -->
</div>
</div>  
    <!-- END: PAGE CONTENT -->
</div>
<!-- END: PAGE CONTAINER -->

<!-- BEGIN: LAYOUT/FOOTERS/FOOTER-6 -->
@endsection

@section('buy_script')
    <script>
        $("#have-code").change(function(){
            var check = $(".abc").css("display");
            if(check=="block"){
                $(".abc").css("display", "none");
            }else if(check=="none"){
                $(".abc").css("display", "block");
            }
        });
        $(document).ready(function () {
        $("form").submit(function (event) {
            var formData = {
            fname: $("#fname").val(),
            lname: $("#lname").val(),
            cname: $("#cname").val(),
            city: $("#city").val(),
            state: $("#state").val(),
            address1: $("#address1").val(),
            address2: $("#address2").val(),
            email: $("#email").val(),
            phone: $("#phone").val(),
            zipcode: $("#zipcode").val(),
            total_price: $("#totalFinal").val(),
            tracking_no: $("#('Tam Mao'.rand(1111,9999))").val(),
            };

            $.ajax({
                type: "POST",
                url: "/placeorder",
                data: formData,
                dataType: "json",
                encode: true,
                }).done(function (data) {
                console.log(data);
            });
            event.preventDefault();
        });
    });
    </script>
    
@endsection