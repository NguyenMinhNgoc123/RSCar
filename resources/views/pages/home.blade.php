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
                                    <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='images/slide-img1.jpg'><img src='{{('/backend/images/slide-img1.jpg')}}'  data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner"/>
                                        <div class="container">
                                            <div class="content_slideshow">
                                                <div class="row">
                                                    <div>
                                                        <div class="info">
                                                            <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'><span>Top thương hiệu 2019</span> </div>
                                                            <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'><span style="font-weight:normal; display:block">Modern-classic</span> incredible </div>
                                                            <div class='tp-caption Title sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1450' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'>GIẢM GIÁ LÊN ĐẾN 20 % CHO CÁC KHÁCH HÀNG NHANH TAY</div>
                                                            <div class='tp-caption sfb  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><a href='#' class="buy-btn">Xem ngay</a> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='images/slide-img2.jpg'><img src='{{('/backend/images/slide-img2.jpg')}}'  data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner"/>
                                        <div class="container">
                                            <div class="content_slideshow">
                                                <div class="row">
                                                    <div>
                                                        <div class="info">
                                                            <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'><span>Top Sản phẩm bán chạy</span> </div>
                                                            <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'><span style="font-weight:normal; display:block">Modern-classic</span> Decorative </div>
                                                            <div class='tp-caption Title sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1450' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'>GIẢM 15% KHI MUA PHỤ TÙNG CHÍNH HÃNG</div>
                                                            <div class='tp-caption sfb  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><a href='#' class="buy-btn">Xem Ngay</a> </div>
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
                <h2>Tìm kiếm chiếc xe phù hợp</h2>
                <form class="b-filter">
                    <div class="btn-group bootstrap-select">
                        <select class="selectpicker" data-width="100%" tabindex="-98">
                            <option value="">Hãng xe</option>
                            <option>Status 1</option>
                            <option>Status 2</option>
                            <option>Status 3</option>
                        </select>
                    </div>
                    <div class="btn-group bootstrap-select">
                        <select class="selectpicker" data-width="100%" tabindex="-98">
                            <option value="">tình trạng xe</option>
                            <option>Status 1</option>
                            <option>Status 2</option>
                            <option>Status 3</option>
                        </select>
                    </div>
                    <div class="btn-group bootstrap-select">
                        <select class="selectpicker" data-width="100%" tabindex="-98">
                            <option>Model</option>
                            <option>Model 1</option>
                            <option>Model 2</option>
                            <option>Model 3</option>
                        </select>
                    </div>
                    <div class="btn-group bootstrap-select">
                        <select class="selectpicker" data-width="100%" tabindex="-98">
                            <option>Địa điểm</option>
                            <option>Location 1</option>
                            <option>Location 2</option>
                            <option>Location 3</option>
                        </select>
                    </div>
                    <div class="btn-group bootstrap-select">
                        <select class="selectpicker" data-width="100%" tabindex="-98">
                            <option>Năm đăng ký</option>
                            <option>2017</option>
                            <option>2016</option>
                            <option>2015</option>
                        </select>
                    </div>
                    <div class="btn-group bootstrap-select">
                        <select class="selectpicker" data-width="100%" tabindex="-98">
                            <option>Giá xe</option>
                            <option>2017</option>
                            <option>2016</option>
                            <option>2015</option>
                        </select>
                    </div>
                    <div>
                        <div class="b-filter__btns">
                            <button class="btn btn-lg btn-primary">Tìm kiếm ngay</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


        <!--Category silder End-->

        <div id="top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> <a href="#" data-scroll-goto="1"> <img src="{{('/backend/images/speakers.jpg')}}" alt="promotion-banner1"> </a> </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> <a href="#" data-scroll-goto="2"> <img src="{{('/backend/images/schedule.jpg')}}" alt="promotion-banner2"> </a> </div>
                </div>
            </div>
        </div>

        <!-- best Pro Slider -->
        <section class=" wow bounceInUp animated">
            <div class="hot_deals slider-items-products container">
                <div class="new_title">
                    <h2>GIẢM GIÁ TRONG TUẦN</h2>
                    <div class="box-timer">
                        <div class="countbox_1 timer-grid"></div>
                    </div>
                </div>
                <div id="hot_deals" class="product-flexslider hidden-buttons">
                    <div class="slider-items slider-width-col4 products-grid">
                        @foreach($saleWeek as $keySW => $valueSW)
                            <div class="item">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="item-img-info"><a href="accessories-detail.html" title="Retis lapen casen" class="product-image"><img src="{{asset("/product-images/{$valueSW->thumbnails}")}}" alt="Retis lapen casen"></a>
                                            @if($valueSW->updated > now())
                                                <div class="new-label new-top-left">Hot</div>
                                            @endif
                                            @if($valueSW->discount != '0')
                                                <div class="sale-label sale-top-left">{{$valueSW->discount}}%</div>
                                            @endif
                                            <div class="item-box-hover">
                                                <div class="box-inner">
                                                    <div class="add_cart">
                                                        <button class="button btn-cart" type="button"></button>
                                                    </div>
                                                    <div class="product-detail-bnt"><a href="{{route('detail',$valueSW->product_id)}}" class="button detail-bnt"><span>Quick View</span></a></div>
                                                    <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> </span> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title"><a href="accessories-detail.html" title="Retis lapen casen">{{$valueSW->caption}}</a> </div>
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
                                                        <div class="price-box"><span class="regular-price"><span class="price">{{$valueSW->price}} vnđ</span></span> </div>
                                                    @else
                                                        <div class="price-box"><span class="regular-price"><span class="price">{{$valueSW->deposit}} vnđ/ngày</span></span> </div>
                                                    @endif
                                                </div>
                                                <div class="other-info">
                                                    <div class="col-km"><i class="fa fa-tachometer"></i> {{$valueSW->number_kilometers}} km</div>
                                                    <div class="col-engine"><i class="fa fa-gear"></i> {{$valueSW->type_name}}</div>
                                                    <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i> {{$valueSW->model}}</div>
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
        <section class=" wow bounceInUp animated">
            <div class="best-pro slider-items-products container">
                <div class="new_title">
                    <h2>Top XE ĐANG BÁN</h2>
                </div>
                <div id="best-seller" class="product-flexslider hidden-buttons">
                    <div class="slider-items slider-width-col4 products-grid">
                        @foreach($Sell as $keyS =>$valueS)
                            <div class="item">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="item-img-info" ><a href="" title="Retis lapen casen" class="product-image"><img  src="{{asset("/product-images/{$valueS->thumbnails}")}}"  alt="Retis lapen casen"></a>
                                            @if($valueS->updated > now())
                                                <div class="new-label new-top-left">Hot</div>
                                            @endif
                                            @if($valueS->discount != '0')
                                                <div class="sale-label sale-top-left">{{$valueS->discount}}%</div>
                                            @endif
                                            <div class="item-box-hover">
                                                <div class="box-inner">
                                                    <div class="add_cart">
                                                        <button class="button btn-cart" type="button"></button>
                                                    </div>
                                                    <div class="product-detail-bnt"><a href="{{route('detail',$valueS->product_id)}}" class="button detail-bnt"><span>Quick View</span></a></div>
                                                    <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> </span> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title"><a href="accessories-detail.html" title="Retis lapen casen">{{$valueS->caption}}</a> </div>
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
                                                    <div class="price-box"><span class="regular-price"><span class="price">{{$valueS->price}} vnđ</span></span> </div>
                                                </div>
                                                <div class="other-info">
                                                    <div class="col-km"><i class="fa fa-tachometer"></i> {{$valueS->number_kilometers}} km</div>
                                                    <div class="col-engine"><i class="fa fa-gear"></i> {{$valueS->type_name}}</div>
                                                    <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i> {{$valueS->model}}</div>
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
        <!-- Logo Brand Block -->
        <div class="brand-logo wow bounceInUp animated">
            <div class="container">
                <div class="row">
                    <div class="home-banner col-lg-2 hidden-md col-xs-12 hidden-sm"> </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                        <div class="testimonials-section">
                            <div class="offer-slider parallax parallax-2">
                                <ul class="bxslider">
                                    <li>
                                        <div class="avatar"><img src="{{('/backend/images/member1.png')}}" alt="Image"></div>
                                        <div class="testimonials">Perfect Themes and the best of all that you have many options to choose! Very fast responding! I highly recommend this theme and these people!</div>
                                        <div class="clients_author">Smith John <span>Happy Customer</span> </div>
                                    </li>
                                    <li>
                                        <div class="avatar"><img src="{{('/backend/images/member2.png')}}" alt="Image"></div>
                                        <div class="testimonials">Code, template and others are very good. The support has served me immediately and solved my problems when I need help. Are to be congratulated.</div>
                                        <div class="clients_author">Sahara Anderson <span>Happy Customer</span> </div>
                                    </li>
                                    <li>
                                        <div class="avatar"><img src="{{('/backend/images/member3.png')}}" alt="Image"></div>
                                        <div class="testimonials">Our support and response has been amazing, helping me with several issues I came across and got them solved almost the same day. A pleasure to work with them! </div>
                                        <div class="clients_author">Stephen Smith <span>Happy Customer</span> </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- best Pro Slider -->
    <section class=" wow bounceInUp animated">
        <div class="best-pro slider-items-products container">
            <div class="new_title">
                <h2>TOP XE ĐANG CHO THUÊ</h2>
            </div>
            <div id="best-seller" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col4 products-grid">
                    @foreach($Rent as $keyR =>$valueR)
                        <div class="item">
                            <div class="item-inner">
                                <div class="item-img">
                                    <div class="item-img-info"><a href="accessories-detail.html" title="Retis lapen casen" class="product-image"><img src="{{asset("/product-images/{$valueR->thumbnails}")}}" alt="Retis lapen casen"></a>
                                        @if($valueR->updated > now() && $valueR->status == '0')
                                            <div class="new-label new-top-left">Hot</div>
                                        @else
                                            <div class="new-label new-top-left">Đã bán</div>
                                        @endif
                                        @if($valueR->discount != '0')
                                            <div class="sale-label sale-top-left">{{$valueR->discount}}%</div>
                                        @endif
                                        <div class="item-box-hover">
                                            <div class="box-inner">
                                                <div class="add_cart">
                                                    <button class="button btn-cart" type="button"></button>
                                                </div>
                                                <div class="product-detail-bnt"><a href="{{route('detail',$valueR->product_id)}}" class="button detail-bnt"><span>Quick View</span></a></div>
                                                <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> </span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-info">
                                    <div class="info-inner">
                                        <div class="item-title"><a href="accessories-detail.html" title="Retis lapen casen">{{$valueR->caption}}</a> </div>
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
                                                <div class="price-box"><span class="regular-price"><span class="price">{{$valueR->deposit}} vnđ/ngày</span> </span> </div>
                                            </div>
                                            <div class="other-info">
                                                <div class="col-km"><i class="fa fa-tachometer"></i> {{$valueR->number_kilometers}}</div>
                                                <div class="col-engine"><i class="fa fa-gear"></i> {{$valueR->type_name}}</div>
                                                <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i> {{$valueR->model}}</div>
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
    <div class="latest-blog wow bounceInUp animated animated container">
        <!--exclude For version 6 -->
        <div class="blog-home-inner">
            <div class="blog-title">
                <h2>BLOG VỀ XE</h2>
            </div>
            <!--For version 1,2,3,4,5,6,8 -->
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12 col-sm-4 blog-post">
                    <div class="blog_inner">
                        <div class="blog-img"> <a href="blog-detail.html"> <img src="{{('/backend/images/blog-img1.jpg')}}" alt="blog image"> </a> </div>
                        <!--blog-img-->
                        <div class="blog-info">
                            <div class="post-date"> <span class="entry-date">14  Jan, 2019</span> </div>
                            <ul class="post-meta">
                                <li><i class="fa fa-user"></i>Posted by <a href="#">admin</a> </li>
                                <li><i class="fa fa-comments"></i><a href="#">4 comments</a> </li>
                            </ul>
                            <h3><a href="blog-detail.html">Powerful and flexible premium Ecommerce themes</a></h3>
                            <p>Fusce ac pharetra urna. Duis non lacus sit amet lacus interdum facilisis sed non est. Ut mi metus, semper eu dictum nec...</p>
                        </div>
                    </div>
                    <!--blog_inner-->
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12 col-sm-4 blog-post">
                    <div class="blog_inner">
                        <div class="blog-img"> <a href="blog-detail.html"> <img src="{{('/backend/images/blog-img2.jpg')}}" alt="blog image"> </a> </div>
                        <!--blog-img-->
                        <div class="blog-info">
                            <div class="post-date"> <span class="entry-date">23  Dec, 2018</span> </div>
                            <ul class="post-meta">
                                <li><i class="fa fa-user"></i>Posted by <a href="#">admin</a> </li>
                                <li><i class="fa fa-comments"></i><a href="#">8 comments</a> </li>
                            </ul>
                            <h3><a href="blog-detail.html">Awesome template with lot's of features on the board!</a></h3>
                            <p>Aliquam laoreet consequat malesuada. Integer vitae diam sed dolor euismod laoreet eget ac felis erat sed elit bibendum ...</p>
                        </div>
                    </div>
                    <!--blog_inner-->
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12 col-sm-4 blog-post">
                    <div class="blog_inner">
                        <div class="blog-img"> <a href="blog-detail.html"> <img src="{{('/backend/images/blog-img3.jpg')}}" alt="blog image"> </a> </div>
                        <!--blog-img-->
                        <div class="blog-info">
                            <div class="post-date"> <span class="entry-date">23  Dec, 2018</span> </div>
                            <ul class="post-meta">
                                <li><i class="fa fa-user"></i>Posted by <a href="#">admin</a> </li>
                                <li><i class="fa fa-comments"></i><a href="#">8 comments</a> </li>
                            </ul>
                            <h3><a href="blog-detail.html">Awesome template with lot's of features on the board!</a></h3>
                            <p>Aliquam laoreet consequat malesuada. Integer vitae diam sed dolor euismod laoreet eget ac felis erat sed elit bibendum ...</p>
                        </div>
                    </div>
                    <!--blog_inner-->
                </div>
            </div>
        </div>
        <!--END For version 1,2,3,4,5,6,8 -->
        <!--exclude For version 6 -->
        <!--container-->
    </div>
    <div class="logo-brand container">
        <div class="brand-title">
            <h2>Popular Brands</h2>
        </div>
        <div class="slider-items-products">
            <div id="brand-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col6">
                    <!-- Item -->
                    <div class="item">
                        <div class="logo-item"><a href="#"><img src="{{('/backend/images/brand1.png')}}" alt="Image"></a></div>
                    </div>
                    <div class="item">
                        <div class="logo-item"><a href="#"><img src="{{('/backend/images/brand2.png')}}" alt="Image"></a></div>
                    </div>
                    <!-- End Item -->
                    <!-- Item -->
                    <div class="item">
                        <div class="logo-item"><a href="#"><img src="{{('/backend/images/brand3.png')}}" alt="Image"></a></div>
                    </div>
                    <div class="item">
                        <div class="logo-item"><a href="#"><img src="{{('/backend/images/brand4.png')}}" alt="Image"></a></div>
                    </div>
                    <!-- End Item -->
                    <!-- Item -->
                    <div class="item">
                        <div class="logo-item"><a href="#"><img src="{{('/backend/images/brand5.png')}}" alt="Image"></a></div>
                    </div>
                    <div class="item">
                        <div class="logo-item"><a href="#"><img src="{{('/backend/images/brand6.png')}}" alt="Image"></a></div>
                    </div>
                    <!-- End Item -->
                    <!-- Item -->
                    <div class="item">
                        <div class="logo-item"><a href="#"><img src="{{('/backend/images/brand1.png')}}" alt="Image"></a></div>
                    </div>
                    <div class="item">
                        <div class="logo-item"><a href="#"><img src="{{('/backend/images/brand2.png')}}" alt="Image"></a></div>
                    </div>
                    <!-- End Item -->
                    <!-- Item -->
                    <div class="item">
                        <div class="logo-item"><a href="#"><img src="{{('/backend/images/brand3.png')}}" alt="Image"></a></div>
                    </div>
                    <div class="item">
                        <div class="logo-item"><a href="#"><img src="{{('/backend/images/brand4.png')}}" alt="Image"></a></div>
                    </div>
                    <!-- End Item -->
                    <!-- Item -->
                    <div class="item">
                        <div class="logo-item"><a href="#"><img src="{{('/backend/images/brand5.png')}}" alt="Image"></a></div>
                    </div>
                    <div class="item">
                        <div class="logo-item"><a href="#"><img src="{{('/backend/images/brand6.png')}}" alt="Image"></a></div>
                    </div>
                    <!-- End Item -->

                </div>
            </div>
        </div>
    </div>

    <!-- For version 1,2,3,4,6 -->
@endsection
