@extends('pages.frontend.welcome')
@section('content')
    <!--container-->
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <!-- Slider -->
                <div class="home-slider5">
                    <div id="thmg-slideshow" class="thmg-slideshow">
                        <div id='rev_slider_4_wrapper' class='rev_slider_wrapper fullwidthbanner-container' >
                            <div id='rev_slider_4' class='rev_slider fullwidthabanner'>
                                <ul>
                                    <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='images/slide-img1.jpg'><img src='{{('/backend/images/nike-air-max.jpg')}}'  data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner"/>
                                        <div class="container">
                                            <div class="content_slideshow">
                                                <div class="row">
                                                    <div>
                                                        <div class="info">
                                                            <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'><span>Top thương hiệu 2019</span> </div>
                                                            <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'><span style="font-weight:normal; display:block">LUÔN CẬP NHẬT</span> incredible </div>
                                                            <div class='tp-caption Title sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1450' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'>GIẢM GIÁ LÊN ĐẾN 30 % CHO CÁC KHÁCH HÀNG NHANH TAY</div>
                                                            <div class='tp-caption sfb  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><a href='{{route('list')}}' class="buy-btn">Xem ngay</a> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='images/slide-img2.jpg'><img src='{{('/backend/images/cover-img-1.jpg')}}'  data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner"/>
                                        <div class="container">
                                            <div class="content_slideshow">
                                                <div class="row">
                                                    <div>
                                                        <div class="info">
                                                            <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'><span>Top Sản phẩm bán chạy</span> </div>
                                                            <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'><span style="font-weight:normal; display:block">GIÁ CẢ HỢP LÝ</span> Decorative </div>
                                                            <div class='tp-caption Title sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1450' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'>GIẢM 15% KHI MUA GIÀY MỚI 100%</div>
                                                            <div class='tp-caption sfb  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><a href='{{route('list')}}' class="buy-btn">Xem Ngay</a> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="tp-bannertimer"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Category slider Start-->

        <div class="section-filter">
            <div class="b-filter__inner bg-grey container">

            </div>
        </div>


        <!--Category silder End-->

        <div id="top">
            <div class="container">
                <div class="row">
                    <div class="wow bounceInLeft col-lg-6 col-md-6 col-sm-6 col-xs-12"> <a href="#" data-scroll-goto="1"> <img src="{{('/backend/images/e.jpeg')}}" alt="promotion-banner1"> </a> </div>
                    <div class="wow bounceInRight col-lg-6 col-md-6 col-sm-6 col-xs-12"> <a href="#" data-scroll-goto="2"> <img src="{{('/backend/images/w.jpg')}}" alt="promotion-banner2"> </a> </div>
                </div>
            </div>
        </div>

        <!-- best Pro Slider -->
        <section class="wow bounceInUp animated">
            <div class="hot_deals slider-items-products container">
                <div class="wow bounceInLeft new_title">
                    <h2>GIẢM GIÁ TRONG TUẦN ĐẦU</h2>
                    <div class="box-timer">
                        <div class=" timer-grid"></div>
                    </div>
                </div>
                <div id="hot_deals" class="product-flexslider hidden-buttons">
                    <div class="slider-items slider-width-col4 products-grid">
                        @foreach($saleWeek as $keySW => $valueSW)
                            @if(strtotime(date('Y/m/d H:i:s')) < strtotime($valueSW->created_at.'+ 7 days'))
                            @if($keySW < 11)
                            <div class="item">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="item-img-info"><a href="{{route('detail',$valueSW->product_id)}}" title="Retis lapen casen" class="product-image"><img src="{{asset("/product-images/{$valueSW->thumbnails}")}}" alt="Retis lapen casen"></a>
                                            @if($valueSW->hot_car != '0' && $valueSW->status == '0')
                                                <div class="new-label new-top-left">Hot</div>
                                            @elseif($valueSW->status == '1')
                                                <div class="new-label new-top-left">Bán chạy</div>
                                            @elseif($valueSW->status == '2')
                                                <div class="new-label new-top-left">Đã Cọc</div>
                                            @elseif($valueSW->status == '3')
                                                <div class="new-label new-top-left">Đã thuê</div>
                                            @else
                                            @endif
                                            @if($valueSW->discount != '0')
                                                <div class="sale-label sale-top-left">{{$valueSW->discount}}%</div>
                                            @elseif($valueSW->best_seller =='1')
                                                <div class="sale-label sale-top-left">Giá cực tốt</div>
                                            @else
                                            @endif
                                            <div class="item-box-hover">
                                                <div class="box-inner">
                                                    @if($valueSW->quantity != 0)
                                                    <div class="add_cart">
                                                        <button class="button btn-cart" type="submit" data-login="{{Session()->get('user_id')}}" data-id="{{$valueSW->product_id}}" ></button>

                                                    </div>
                                                    @endif
                                                    <div class="product-detail-bnt"><a href="{{route('detail', $valueSW->product_id)}}" class="button detail-bnt"><span>Quick View</span></a></div>
                                                    <div class="actions"><span class="add-to-links"><a id="addcart" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> </span> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title"><a style="width:100%;
    white-space: pre-wrap;
    overflow: hidden;
    text-overflow: ellipsis;
    -webkit-line-clamp: 1;
    -webkit-box-orient: vertical;
     display: -webkit-box;" href="{{route('detail',$valueSW->product_id)}}" title="Retis lapen casen">{{$valueSW->caption}}</a> </div>
                                            <div class="item-content">
                                                <div class="rating">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div class="rating" style="width:80%"></div>
                                                        </div>
                                                        <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                    </div>
                                                </div>
                                                <div class="item-price">
                                                    @if($valueSW->type_id == '1')
                                                        <div class="price-box"><span class="regular-price"><span class="price">{{number_format($valueSW->price)}} vnđ</span></span> </div>
                                                    @endif
                                                </div>
                                                <div class="other-info">
                                                    <div class="col-engine"><i class="fa fa-tachometer"></i> size: {{$valueSW->size}}</div>
                                                    <div class="col-engine"><i class="fa fa-tachometer"></i> số lượng: {{$valueSW->quantity}}</div>
                                                    <div class="col-engine"><i class="fa fa-tachometer"></i> {{$valueSW->brand_name}}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <section class="wow bounceInUp animated">
            <div class="best-pro slider-items-products container">
                <div class="wow bounceInLeft new_title">
                    <h2>Top ĐANG BÁN</h2>
                </div>
                <div id="best-seller" class="product-flexslider hidden-buttons">
                    <div class="slider-items slider-width-col4 products-grid">
                        @foreach($Sell as $keyS =>$valueS)
                            <div class="item">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="item-img-info" ><a href="{{route('detail',$valueS->product_id)}}" title="Retis lapen casen" class="product-image"><img  src="{{asset("/product-images/{$valueS->thumbnails}")}}"  alt="Retis lapen casen"></a>
                                            @if($valueS->hot_car != '0' && $valueS->status == '0')
                                                <div class="new-label new-top-left">Hot</div>
                                            @elseif($valueS->status == '1')
                                                <div class="new-label new-top-left">Bán chạy</div>
                                            @elseif($valueS->status == '2')
                                                <div class="new-label new-top-left">Đã Cọc</div>
                                            @elseif($valueS->status == '3')
                                                <div class="new-label new-top-left">Đã thuê</div>
                                            @else
                                            @endif
                                            @if($valueS->discount != '0')
                                                <div class="sale-label sale-top-left">{{$valueS->discount}}%</div>
                                            @elseif($valueS->best_seller =='1')
                                                <div class="sale-label sale-top-left">Giá cực tốt</div>
                                            @else
                                            @endif
                                            <div class="item-box-hover">
                                                <div class="box-inner">
                                                    @if($valueSW->quantity != 0)
                                                    <div class="add_cart">
                                                        <button class="button btn-cart" type="submit" data-login="{{Session()->get('user_id')}}" data-id="{{$valueS->product_id}}" ></button>
                                                    </div>@endif
                                                    <div class="product-detail-bnt"><a href="{{route('detail',$valueS->product_id)}}" class="button detail-bnt"><span>Quick View</span></a></div>
                                                    <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> </span> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title"><a style="width:100%;
    white-space: pre-wrap;
    overflow: hidden;
    text-overflow: ellipsis;
    -webkit-line-clamp: 1;
    -webkit-box-orient: vertical;
     display: -webkit-box;" href="{{route('detail',$valueS->product_id)}}" title="Retis lapen casen">{{$valueS->caption}}</a> </div>
                                            <div class="item-content">
                                                <div class="rating">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div class="rating" style="width:80%"></div>
                                                        </div>
                                                        <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                    </div>
                                                </div>
                                                <div class="item-price">
                                                    <div class="price-box"><span class="regular-price"><span class="price">{{number_format($valueS->price)}} vnđ</span></span> </div>
                                                </div>
                                                <div class="other-info">
                                                    <div class="col-engine"><i class="fa fa-tachometer"></i> size: {{$valueSW->size}}</div>
                                                    <div class="col-engine"><i class="fa fa-tachometer"></i> số lượng: {{$valueSW->quantity}}</div>
                                                    <div class="col-engine"><i class="fa fa-tachometer"></i> {{$valueSW->brand_name}}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    @endforeach
                    <!-- End Item -->
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- best Pro Slider -->
    <section class=" wow bounceInUp animated">
        <div class="best-pro slider-items-products container">
            <div class="wow bounceInLeft new_title">
                <h2>TOP GIÁ SIÊU TỐT</h2>
            </div>
            <div id="best-seller" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col4 products-grid">
                    @foreach($newPost as $key =>$value)
                        <div class="item">
                            <div class="item-inner">
                                <div class="item-img">
                                    <div class="item-img-info"><a href="{{route('detail',$value->product_id)}}" title="Retis lapen casen" class="product-image"><img src="{{asset("/product-images/{$value->thumbnails}")}}" alt="Retis lapen casen"></a>
                                        @if($value->hot_car != '0' && $value->status == '0')
                                            <div class="new-label new-top-left">Hot</div>
                                        @elseif($value->status == '1')
                                            <div class="new-label new-top-left">Bán Chạy</div>
                                        @elseif($value->status == '2')
                                            <div class="new-label new-top-left">Đã Cọc</div>
                                        @elseif($value->status == '3')
                                            <div class="new-label new-top-left">Đã thuê</div>
                                        @else
                                        @endif
                                        @if($value->discount != '0')
                                            <div class="sale-label sale-top-left">{{$value->discount}}%</div>
                                        @elseif($value->best_seller =='1')
                                            <div class="sale-label sale-top-left">Giá cực tốt</div>
                                        @else
                                        @endif
                                        <div class="item-box-hover">
                                            <div class="box-inner">
                                                @if($valueSW->quantity != 0)
                                                <div class="add_cart">
                                                    <button class="button btn-cart" type="submit" data-login="{{Session()->get('user_id')}}" data-id="{{$value->product_id}}" ></button>
                                                </div>@endif
                                                <div class="product-detail-bnt"><a href="{{route('detail',$value->product_id)}}" class="button detail-bnt"><span>Quick View</span></a></div>
                                                <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> </span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-info">
                                    <div class="info-inner">
                                        <div class="item-title"><a style="width:100%;
    white-space: pre-wrap;
    overflow: hidden;
    text-overflow: ellipsis;
    -webkit-line-clamp: 1;
    -webkit-box-orient: vertical;
     display: -webkit-box;" href="{{route('detail',$value->product_id)}}" title="Retis lapen casen">{{$value->caption}}</a> </div>
                                        <div class="item-content">
                                            <div class="rating">
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:80%"></div>
                                                    </div>
                                                    <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                </div>
                                            </div>
                                            <div class="item-price">
                                            </div>
                                            <div class="other-info">
                                                <div class="col-engine"><i class="fa fa-tachometer"></i> size: {{$value->size}}</div>
                                                <div class="col-engine"><i class="fa fa-tachometer"></i> số lượng: {{$value->quantity}}</div>
                                                <div class="col-engine"><i class="fa fa-tachometer"></i> {{$value->brand_name}}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Home Lastest Blog Block -->
    <div class="wow bounceInUp logo-brand container">
        <div class="wow bounceInLeft brand-title">
            <h2>THƯƠNG HIỆU</h2>
        </div>
        <div class="slider-items-products">
            <div id="brand-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col6">
                    <!-- Item -->
                    <div class="item">
                        <div class="logo-item"><a href="#"><img style="width: 190px;height: 125px" src="{{asset('/backend/images/brand-3.jpg')}}" alt="Image"></a></div>
                    </div>
                    <div class="item">
                        <div class="logo-item"><a href="#"><img style="width: 190px;height: 125px" src="{{asset('/backend/images/brand-1.jpg')}}" alt="Image"></a></div>
                    </div>
                    <!-- End Item -->
                    <!-- Item -->
                    <div class="item">
                        <div class="logo-item"><a href="#"><img style="width: 190px;height: 125px" src="{{asset('/backend/images/brand-4.jpg')}}" alt="Image"></a></div>
                    </div>
                    <div class="item">
                        <div class="logo-item"><a href="#"><img style="width: 190px;height: 125px" src="{{asset('/backend/images/brand-5.jpg')}}" alt="Image"></a></div>
                    </div>
                    <!-- End Item -->
                    <!-- Item -->
                    <div class="item">
                        <div class="logo-item"><a href="#"><img style="width: 190px;height: 125px" src="{{asset('/backend/images/brand-2.jpg')}}" alt="Image"></a></div>
                    </div>
                    <div class="item">
                        <div class="logo-item"><a href="#"><img style="width: 190px;height: 125px" src="{{asset('/backend/images/brand-1.jpg')}}" alt="Image"></a></div>
                    </div>
                    <!-- End Item -->
                    <!-- Item -->
                    <div class="item">
                        <div class="logo-item"><a href="#"><img style="width: 190px;height: 125px" src="{{asset('/backend/images/brand-5.jpg')}}" alt="Image"></a></div>
                    </div>
                    <div class="item">
                        <div class="logo-item"><a href="#"><img style="width: 190px;height: 125px" src="{{asset('/backend/images/brand-4.png')}}" alt="Image"></a></div>
                    </div>
                    <!-- End Item -->
                    <!-- Item -->
                    <div class="item">
                        <div class="logo-item"><a href="#"><img style="width: 190px;height: 125px" src="{{asset('/backend/images/brand-3.jpg')}}" alt="Image"></a></div>
                    </div>
                    <div class="item">
                        <div class="logo-item"><a href="#"><img style="width: 190px;height: 125px" src="{{asset('/backend/images/brand-2.jpg')}}" alt="Image"></a></div>
                    </div>
                    <!-- End Item -->
                </div>
            </div>
        </div>
    </div>

    <!-- For version 1,2,3,4,6 -->
@endsection
