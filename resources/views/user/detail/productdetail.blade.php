@extends('buy.app_buy')

@section('title' , "| $product->title ")

@section('buy_main')
<!-- BEGIN: HEADER -->

<!-- END: HEADER -->
<!-- BEGIN: PAGE CONTAINER -->
<div class="c-layout-page">
    <!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
<div class="c-layout-breadcrumbs-1 c-subtitle c-fonts-uppercase c-fonts-bold c-bordered c-bordered-both">
<div class="container">
    <div class="c-page-title c-pull-left">
        <h3 class="c-font-uppercase c-font-sbold">Chi tiết sản phẩm</h3>
        
    </div>
    <ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
        <li><a href="shop-product-details-2.html">{{ $product->category->name}}</a></li>
        <li>/</li>
        <li class="c-state_active">{{ $product->brand->name }}</li>                      
    </ul>
</div>
</div><!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
    <!-- BEGIN: PAGE CONTENT -->
    <!-- BEGIN: CONTENT/SHOPS/SHOP-PRODUCT-DETAILS-2 -->
<div class="c-content-box c-size-lg c-overflow-hide c-bg-white">
<div class="container">
    <div class="c-shop-product-details-2">
        <div class="row">
            <div class="col-md-6">
                <div class="c-product-gallery">
                    <div class="c-product-gallery-content">
                        <div class="c-zoom">
                            <img src="{{asset('images/' .$product->image)}}">
                        </div>
                    </div>                        
                    <div class="row c-product-gallery-thumbnail">
                        <div class="col-xs-3 c-product-thumb">
                            <img src="{{asset('images/' .$product->image)}}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 product_data">
            <input type="hidden" value="{{ $product->id }}" class="product_id">
                <div class="c-product-meta">
                    <div class="c-content-title-1">
                        <h3 class="c-font-uppercase c-font-bold">{{$product->title }}</h3>
                        <div class="c-line-left"></div>
                    </div>
                    <div class="c-product-badge">
                        <div class="c-product-sale">Sale</div>
                        <div class="c-product-new">Mới</div>
                    </div>
                    <div class="c-product-review">
                        <!-- <div class="c-product-rating">
                            <i class="fa fa-star c-font-red"></i>
                            <i class="fa fa-star c-font-red"></i>
                            <i class="fa fa-star c-font-red"></i>
                            <i class="fa fa-star c-font-red"></i>
                            <i class="fa fa-star-half-o c-font-red"></i>
                        </div>
                        <div class="c-product-write-review">
                            <a class="c-font-red" href="#">Write a review</a>
                        </div> -->
                    </div>
                    <div class="c-product-price c-font-line-through ">{{ number_format($product->price) }} VNĐ</div>
                    <div class="c-product-price c-font-red">{{number_format($product->price -$product->discount_value)}} VNĐ</div>
                    
                    <div class="row c-product-variant">
                        <div class="col-sm-12 col-xs-12">
                            <p class="c-product-meta-label c-product-margin-1 c-font-uppercase c-font-bold">Size:</p>
                            <div class="c-product-size product_data">
                                <select id="productsize">
                                    @foreach($product_size as $size)
                                        <option  value="{{ $size }}">{{ $size }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        @if($product->product_color == null)
                        @else
                        <div class="col-sm-12 col-xs-12 c-margin-t-20">
                            <div class="c-product-color"> 
                                <p class="c-product-meta-label c-font-uppercase c-font-bold">Màu:</p>
                                <select id="productcolor">
                                    @foreach($product_color as $color)
                                        <option value="{{ $color }}">{{ $color }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        @endif
                    </div>
                    
                    <div class="c-product-add-cart c-margin-t-20 ">
                        <div class="row">
                            <div class="col-sm-4 col-xs-12">
                                <div class="c-input-group c-spinner product_data">
                                    <input type="hidden" value="{{ $product->id }}" class="product_id">
                                    @if(!$product->quantity <= 0)
                                        <p class="c-product-meta-label c-product-margin-2 c-font-uppercase c-font-bold">Số lượng:</p>
                                        <input type="text" class="form-control qty-input" value="1">
                                        <div class="c-input-group-btn-vertical">
                                            <button class="btn btn-default" type="button" data_input="c-item-1"><i class="fa fa-caret-up changeQuantity_2 increment-btn-1"></i></button>
                                            <button class="btn btn-default" type="button" data_input="c-item-1"><i class="fa fa-caret-down changeQuantity_2 decrement-btn-1"></i></button>
                                        </div>
                                    @else
                                        
                                        <p class="c-product-meta-label c-product-margin-2 c-font-uppercase c-font-bold">QTY:</p>
                                        <input type="text" class="form-control qty-input" value="1">
                                        <div class="c-input-group-btn-vertical">
                                            <button class="btn btn-default" type="button" data_input="c-item-1"><i class="fa fa-caret-up changeQuantity_2"></i></button>
                                            <button class="btn btn-default" type="button" data_input="c-item-1"><i class="fa fa-caret-down changeQuantity_2"></i></button>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            @if($product->quantity < 6)
                            <div class="col-sm-4 col-xs-12">
                                <p class="c-product-meta-label c-font-uppercase c-font-bold">Còn trong kho:</p>
                                <div class="c-input-group-btn-vertical">
                                    <p class="c-product-meta-label c-font-uppercase c-font-bold c-font-red">{{$product->quantity}}</p>
                                </div>
                            </div>
                            @endif
                            <div class="col-sm-12 col-xs-12 c-margin-t-20">
                                @if($product->quantity > $total_quantity)
                                    <button type="submit" class="btn btn-sm c-theme-btn c-btn-square c-btn-uppercase c-btn-bold addToCartBtn">
                                        <i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng
                                    </button>
                                @else
                                    <button type="button" class="btn btn-sm-1 c-theme-btn-1 c-btn-square-1 c-btn-uppercase-1 c-btn-bold-1">
                                        <i class="fa fa-shopping-cart"></i>Hết hàng
                                    </button>
                                @endif
                                    <button type="submit" class="btn btn-sm c-theme-btn c-btn-square c-btn-uppercase c-btn-bold addtoWishlist">
                                        <i class="fa fa-heart-o"></i>Thêm vào mục yêu thích
                                    </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div><!-- END: CONTENT/SHOPS/SHOP-PRODUCT-DETAILS-2 -->

<!-- BEGIN: CONTENT/SHOPS/SHOP-PRODUCT-TAB-1 -->
<div class="c-content-box c-size-md c-no-padding">
<div class="c-shop-product-tab-1" role="tabpanel">
    <div class="container">
        <ul class="nav nav-justified" role="tablist">
            <li role="presentation" class="active">
                <a class="c-font-uppercase c-font-bold" href="#tab-1" role="tab" data-toggle="tab">Mô tả</a>
            </li>
            <!-- <li role="presentation">
                <a class="c-font-uppercase c-font-bold" href="#tab-2" role="tab" data-toggle="tab">Additional Information</a>
            </li>
            <li role="presentation">
                <a class="c-font-uppercase c-font-bold" href="#tab-3" role="tab" data-toggle="tab">Reviews (3)</a>
            </li> -->
        </ul>
    </div>
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade in active" id="tab-1"> 
            <div class="c-product-desc c-center">
                <div class="container">
                    <!-- chỉnh sửa căn lại -->
                    <img src="{{ asset('images/' .$product->image) }}"/>
                    <br>
                    <br>
                    <p>{{$product->note}}</p>
                </div>
            </div>
            <div class="c-product-desc c-bg-dark">
                <div class="container">
                    <!-- <div class"row">
                        <div class="col-md-6">
                            <img src="{{ asset('main/base/img/content/shop5/32.png') }}"/>
                        </div>
                        <div class="col-md-6">
                            <div class="c-content-title-1">
                                <h3 class="c-font-uppercase c-font-white c-font-bold">Incredibly Versatile</h3>
                                <div class="c-line-left"></div>
                            </div>
                            <p class="c-font-grey">
                                xnxx
                            </p>
                            <br>
                            <button class="btn c-btn btn-lg c-theme-btn c-font-uppercase c-font-bold c-btn-square">Add to Cart</button>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
</div><!-- END: CONTENT/SHOPS/SHOP-PRODUCT-TAB-1 -->

<!-- BEGIN: CONTENT/SHOPS/SHOP-2-2 -->
<!-- END: CONTENT/SHOPS/SHOP-2-2 -->

    <!-- END: PAGE CONTENT -->
</div>
<!-- END: PAGE CONTAINER -->

<!-- BEGIN: LAYOUT/FOOTERS/FOOTER-6 -->

@endsection

@section('buy_script')
    <script>
        $(document).ready(function(){
            $('.increment-btn-1').click(function(e){
                e.preventDefault();

                var inc_value = $(this).closest('.product_data').find('.qty-input').val();
                var value = parseInt(inc_value, 10)
                value = isNaN(value) ? 0 : value;
                if(value < 10){
                    value++;
                    $(this).closest('.product_data').find('.qty-input').val(value);
                }
            });

            $('.decrement-btn-1').click(function(e){
                e.preventDefault();

                var dec_value = $(this).closest('.product_data').find('.qty-input').val();
                var value = parseInt(dec_value, 10)
                value = isNaN(value) ? 0 : value;
                if(value < 10 & value > 0){
                    value--;
                    $(this).closest('.product_data').find('.qty-input').val(value);
                }
            });
        });

        $('select').change(function(){
            
            $(this).find(':selected').data('id');
        });
    </script>
@endsection