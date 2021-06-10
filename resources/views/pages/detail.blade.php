@extends('pages.frontend.welcome')
@section('title', 'CHI TIẾT SẢN PHẨM')
@section('content')
    <div class="page-heading">
        <div class="breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <ul>
                            <li class="home"> <a href="index-2.html" title="Go to Home Page">Home</a> <span>&rsaquo; </span> </li>
                            <li class="category1599"> <a href="grid.html" title="">New Car</a> <span>&rsaquo; </span> </li>
                            <li class="category1600"> <a href="grid.html" title="">Audi</a> <span>&rsaquo; </span> </li>
                            <li class="category1601"> <strong>Sedans</strong> </li>
                        </ul>
                    </div>
                    <!--col-xs-12-->
                </div>
                <!--row-->
            </div>
            <!--container-->
        </div>
        <div class="page-title">
            <h2>CHI TIẾT SẢN PHẨM</h2>
        </div>
    </div>
    <!-- BEGIN Main Container -->
    <div class="main-container col1-layout wow bounceInUp animated">
        <div class="main">
            <div class="col-main">
                <!-- Endif Next Previous Product -->
                <div class="product-view wow bounceInUp animated" itemscope="" itemtype="http://schema.org/Product" itemid="#product_base">
                    <div id="messages_product_view"></div>
                    <!--product-next-prev-->
                    <div class="product-essential container">
                        <div class="row">
                            @foreach($detailProduct as $valueP)

{{--                                <form action="{{ route('user.save-cart') }}" method="POST" id="product_addtocart_form">--}}
                                @csrf
                                <!--End For version 1, 2, 6 -->
                                    <!-- For version 3 -->
                                    <div class="product-img-box col-lg-5 col-sm-5 col-xs-12">
                                        <div class="new-label new-top-left">Hot</div>
                                        <div class="sale-label sale-top-left">-15%</div>
                                        <div class="product-image">
                                            <div class="product-full"> <img id="product-zoom1" src="{{asset("product-images/{$valueP->thumbnails}")}}" data-zoom-image="{{asset("product-images/{$valueP->thumbnails}")}}" alt="product-image"/> </div>
                                            <div class="more-views" style="padding-top: 10px">
                                                <div class="slider-items-products" >
                                                    <div id="gallery_02" class="product-flexslider hidden-buttons product-img-thumb">
                                                        <div class="slider-items slider-width-col4 block-content">
                                                            @foreach($photo as $keyPhoto =>$valuePhoto)
                                                                <div class="more-views-items" style="padding:10px"> <a href="#" data-image="{{asset("/product-images/{$valuePhoto->p_photo}")}}" data-zoom-image="{{asset("/product-images/{$valuePhoto->p_photo}")}}"> <img id="product-zoom0"  src="{{asset("/product-images/{$valuePhoto->p_photo}")}}" alt="product-image"/> </a></div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end: more-images -->
                                    </div>
                                    <!--End For version 1,2,6-->
                                    <!-- For version 3 -->
                                    <div class="product-shop col-lg- col-sm-7 col-xs-12">
                                        <div class="brand">Giảm giá {{$valueP->discount}} %</div>
                                        <div class="product-name">
                                            <h1>{{$valueP->caption}}</h1>
                                        </div>
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <div style="width:60%" class="rating"></div>
                                            </div>
                                            <p class="rating-links"> <a href="#">1 Review</a> <span class="separator">|</span> </p>
                                        </div>
                                        <div class="price-block">
                                            <div class="price-box">

                                                <p class="special-price"> <span class="price-label">Special Price</span> <span id="product-price-48" class="price">
                                                    @if($valueP->type_id == '1')
                                                            {{number_format($valueP->price)}} vnđ - {{number_format($valueP->deposit)}}vnđ
                                                        @else
                                                            {{number_format($valueP->deposit)}}vnđ
                                                        @endif
                                                </span> </p>
                                            </div>
                                        </div>

                                        <div class="spec-row" id="summarySpecs">
                                            <h2>Thông Tin</h2>
                                            <table width="100%">
                                                <tbody>
                                                <tr>
                                                    <td class="label-spec"> Hình thức <span class="coln">:</span></td>
                                                    <td class="value-spec"> {{$valueP->type_name}} </td>
                                                </tr>
                                                <tr>
                                                    <td class="label-spec"> Thương hiệu <span class="coln">:</span></td>
                                                    <td class="value-spec"> {{$valueP->brand_name}} </td>
                                                </tr>
                                                <tr class="odd">
                                                    <td class="label-spec"> loại xe <span class="coln">:</span></td>
                                                    <td class="value-spec"> {{$valueP->tv_name}} </td>
                                                </tr>
                                                <tr class="odd">
                                                    <td class="label-spec"> Số km đã đi <span class="coln">:</span></td>
                                                    <td class="value-spec"> {{$valueP->number_kilometers}} km </td>
                                                </tr>
                                                <tr>
                                                    <td class="label-spec"> Model <span class="coln">:</span></td>
                                                    <td class="value-spec"> {{$valueP->model}} </td>
                                                </tr>
                                                <tr>
                                                    <td class="label-spec"> Tên xe <span class="coln">:</span></td>
                                                    <td class="value-spec"> {{$valueP->name_car}} </td>
                                                </tr>
                                                <tr class="odd">
                                                    <td class="label-spec"> Dung tích <span class="coln">:</span></td>
                                                    <td class="value-spec"> {{$valueP->capacity}} </td>
                                                </tr>
                                                <tr class="odd">
                                                    <td class="label-spec"> Năm đăng ký <span class="coln">:</span></td>
                                                    <td class="value-spec"> {{$valueP->Year_of_registration}} </td>
                                                </tr>
                                                <tr>
                                                    <td class="label-spec"> Tình trạng xe <span class="coln">:</span></td>
                                                    <td class="value-spec"> {{$valueP->status_car}} </td>
                                                </tr>
                                                <tr>
                                                    <td class="label-spec"> Tình trạng bài <span class="coln">:</span></td>
                                                    <td class="value-spec">
                                                        @if($valueP->status == '0')
                                                            Đang bán
                                                        @else
                                                            Đã bán
                                                        @endif
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="email-addto-box">
                                            <ul class="add-to-links">
                                                <li> <button class="button btn-app link-wishlist" style="width: 200px;height: 41px;border-bottom: 25px;" href=""><span>Thêm vào yêu thích</span></button></li>
                                                <li>
                                                    <button class="button btn-cart link-cart" style="width: 200px;height: 41px;border-bottom: 25px;" type="submit" data-login="{{Session()->get('user_id')}}" data-id="{{$valueP->product_id}}" ><span>Thêm vào giỏ</span></button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="social">
                                        </div>
                                        <ul class="shipping-pro">
                                            <li>Tư vấn miễn phí</li>
                                            <li>ship xe toàn quốc</li>
                                            <li>Bảo hành xe dài hạn</li>
                                        </ul>
                                    </div>
                                    <!--product-shop-->
                                    <!--Detail page static block for version 3-->
{{--                                </form>--}}
                        </div>
                    </div>
                    <!--product-essential-->
                    <div class="product-collateral container">
                        <ul id="product-detail-tab" class="nav nav-tabs product-tabs">
                            <li class="active"> <a href="#product_tabs_description" data-toggle="tab">Google map</a> </li>
                            <li><a href="#product_tabs_tags" data-toggle="tab">Thông số kĩ thuật</a></li>
                            <li> <a href="#reviews_tabs" data-toggle="tab">Đánh giá</a> </li>
                            <li> <a href="#product_tabs_custom1" data-toggle="tab">Mô tả</a> </li>
                        </ul>
                        <div id="productTabContent" class="tab-content">
                            <div class="tab-pane fade in active" id="product_tabs_description">
                                <div class="std">
                                    <iframe width="100%" height="500" src="http://maps.google.com/maps?q={{$valueP->address}}&output=embed" ></iframe>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="product_tabs_tags">
                                <div class="spec-row" id="summarySpecs">
                                    <table width="100%">
                                        <tbody>
                                        <tr>
                                            <td class="label-spec"> Hình thức <span class="coln">:</span></td>
                                            <td class="value-spec"> {{$valueP->type_name}} </td>
                                        </tr>
                                        <tr>
                                            <td class="label-spec"> Thương hiệu <span class="coln">:</span></td>
                                            <td class="value-spec"> {{$valueP->brand_name}} </td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="label-spec"> loại xe <span class="coln">:</span></td>
                                            <td class="value-spec"> {{$valueP->tv_name}} </td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="label-spec"> Số km đã đi <span class="coln">:</span></td>
                                            <td class="value-spec"> {{$valueP->number_kilometers}} km </td>
                                        </tr>
                                        <tr>
                                            <td class="label-spec"> Model <span class="coln">:</span></td>
                                            <td class="value-spec"> {{$valueP->model}} </td>
                                        </tr>
                                        <tr>
                                            <td class="label-spec"> Tên xe <span class="coln">:</span></td>
                                            <td class="value-spec"> {{$valueP->name_car}} </td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="label-spec"> Dung tích <span class="coln">:</span></td>
                                            <td class="value-spec"> {{$valueP->capacity}} </td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="label-spec"> Năm đăng ký <span class="coln">:</span></td>
                                            <td class="value-spec"> {{$valueP->Year_of_registration}} </td>
                                        </tr>
                                        <tr>
                                            <td class="label-spec"> Tình trạng xe <span class="coln">:</span></td>
                                            <td class="value-spec"> {{$valueP->status_car}} </td>
                                        </tr>
                                        <tr>
                                            <td class="label-spec"> Tình trạng bài <span class="coln">:</span></td>
                                            <td class="value-spec">
                                                @if($valueP->hot_car != '0' && $valueP->status == '0')
                                                    <div class="new-label new-top-left">Hot</div>
                                                @elseif($valueP->status == '1')
                                                    <div class="new-label new-top-left">Đã bán</div>
                                                @elseif($valueP->status == '2')
                                                    <div class="new-label new-top-left">Đã Cọc</div>
                                                @elseif($valueP->status == '3')
                                                    <div class="new-label new-top-left">Đã thuê</div>
                                                @else
                                                @endif
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="reviews_tabs">
                                <div class="woocommerce-Reviews">
                                    <div>
                                        <h2 class="woocommerce-Reviews-title">2 Bài đánh giá cho sản phẩm</h2>
                                        <ol class="commentlist">
                                            <li class="comment">
                                                <div> <img alt="" src="images/member1.png" class="avatar avatar-60 photo">
                                                    <div class="comment-text">
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div style="width:100%" class="rating"></div>
                                                            </div>
                                                        </div>
                                                        <p class="meta"> <strong>John Doe</strong> <span>–</span> April 19, 2018 </p>
                                                        <div class="description">
                                                            <p>Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Nulla quis lorem ut libero malesuada feugiat. Proin eget tortor risus. Donec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                            <p>Donec sollicitudin molestie malesuada. Vivamus suscipit tortor eget felis porttitor volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis lorem ut libero malesuada feugiat. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <!-- #comment-## -->
                                            <li class="comment">
                                                <div> <img alt="" src="images/member2.png" class="avatar avatar-60 photo">
                                                    <div class="comment-text">
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div style="width:100%" class="rating"></div>
                                                            </div>
                                                        </div>
                                                        <p class="meta"> <strong>Stephen Smith</strong> <span>–</span> June 02, 2018 </p>
                                                        <div class="description">
                                                            <p>Donec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <!-- #comment-## -->
                                        </ol>
                                    </div>
                                    <div>
                                        <div>
                                            <div class="comment-respond"> <span class="comment-reply-title">Add a review </span>
                                                <form action="#" method="post" class="comment-form" novalidate>
                                                    <p class="comment-notes"><span id="email-notes">Địa chỉ email của bạn sẽ không được công bố..</span> Các trường bắt buộc được đánh dấu * <span class="required">*</span></p>
                                                    <div class="comment-form-rating">
                                                        <label id="rating">Your rating</label>
                                                        <p class="stars"> <span> <a class="star-1" href="#">1</a> <a class="star-2" href="#">2</a> <a class="star-3" href="#">3</a> <a class="star-4" href="#">4</a> <a class="star-5" href="#">5</a> </span> </p>
                                                    </div>
                                                    <p class="comment-form-comment">
                                                        <label>Đánh giá <span class="required">*</span></label>
                                                        <textarea id="comment" name="comment" cols="45" rows="8" required></textarea>
                                                    </p>
                                                    <p class="form-submit">
                                                        <input name="submit" type="submit" id="submit" class="submit" value="Submit">
                                                    </p>
                                                </form>
                                            </div>
                                            <!-- #respond -->
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="product_tabs_custom1">
                                <div class="product-tabs-content-inner clearfix">
                                    <p>{{$valueP->description}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!--product-collateral-->
                    <div class="box-additional">
                        <!-- BEGIN RELATED PRODUCTS -->
                        <div class="related-pro container">
                            <div class="slider-items-products">
                                <div class="wow backInRight new_title center">
                                    <h2>SẢN PHẨM LIÊN QUAN</h2>
                                </div>
                                <div id="related-slider" class="product-flexslider hidden-buttons">
                                    <div class="slider-items slider-width-col4 products-grid">
                                        @foreach($relatedProduct as $valueRP)
                                            <div class="item">
                                                <div class="item-inner">
                                                    <div class="item-img">
                                                        <div class="item-img-info"><a href="product-detail.html" title="Retis lapen casen" class="product-image"><img src="{{asset("product-images/{$valueRP->thumbnails}")}}" alt="Retis lapen casen"></a>
                                                            <div class="new-label new-top-left">HOT</div>
                                                            <div class="sale-label sale-top-left">-15%</div>
                                                            <div class="item-box-hover">
                                                                <div class="box-inner">
                                                                    <div class="add_cart">
                                                                        <button class="button btn-cart" type="button"></button>
                                                                    </div>
                                                                    <div class="product-detail-bnt"><a href="{{route('detail',$valueRP->product_id)}}" class="button detail-bnt"><span>Quick View</span></a></div>
                                                                    <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> </span> </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"><a href="product-detail.html" title="Retis lapen casen">{{$valueRP->caption}}</a> </div>
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
                                                                    @if($valueRP->type_id == '1')
                                                                        <div class="price-box"><span class="regular-price"><span class="price">{{number_format($valueRP->price)}} vnđ</span> </span> </div>
                                                                    @else
                                                                        <div class="price-box"><span class="regular-price"><span class="price">{{number_format($valueRP->deposit)}} vnđ/ngày</span> </span> </div>
                                                                    @endif
                                                                </div>
                                                                <div class="other-info">
                                                                    <div class="col-km"><i class="fa fa-tachometer"></i> {{$valueRP->number_kilometers}} km</div>
                                                                    <div class="col-engine"><i class="fa fa-gear"></i> {{$valueRP->type_name}}</div>
                                                                    <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i> {{$valueRP->model}}</div>
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
                        </div>
                        <!-- end related product -->

                    </div>
                    <!-- end related product -->
                </div>
                <!--box-additional-->
                <!--product-view-->
            </div>
        </div>
        <!--col-main-->
    </div>
    <!--main-container-->
    </div>
@endsection
