<ul class="products-grid" id="dynamic-row">
    @foreach($product as $keyP =>$valueP)
        <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
            <div class="item-inner">
                <div class="item-img">
                    <div class="item-img-info"><a href="{{route('detail',$valueP->product_id)}}"
                                                  title="Retis lapen casen"
                                                  class="product-image"><img
                                src="{{asset("/product-images/{$valueP->thumbnails}")}}"
                                alt="Retis lapen casen"></a>
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
                        @if($valueP->discount != '0')
                            <div class="sale-label sale-top-left">{{$valueP->discount}}%</div>
                        @else
                            <div class="sale-label sale-top-left">Giá cực tốt</div>
                        @endif
                        <div class="item-box-hover">
                            <div class="box-inner">
                                <div class="add_cart">
{{--                                    @if($valueP->status != '1' || session()->get('email') == null)--}}
                                        <button class="button btn-cart" type="submit" data-login="{{Session()->get('user_id')}}" data-id="{{$valueP->product_id}}" ></button>
{{--                                    @endif--}}
                                </div>
                                <div class="product-detail-bnt">
                                    <a
                                        href="{{route('detail',$valueP->product_id)}}"
                                        class="button detail-bnt"><span>Quick View</span></a>
                                </div>
                                <div class="actions"><span class="add-to-links"><a
                                            href="#" class="link-wishlist"
                                            title="Add to Wishlist"><span>Add to Wishlist</span></a> </span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="item-info">
                    <div class="info-inner">
                        <div class="item-title"><a href="{{route('detail',$valueP->product_id)}}"
                                                   title="Retis lapen casen">{{$valueP->caption}}</a>
                        </div>
                        <div class="item-content">
                            <div class="rating">
                                <div class="ratings">
                                    <div class="rating-box">
                                        <div class="rating" style="width:80%"></div>
                                    </div>
                                    <p class="rating-links"><a href="#">1
                                            Review(s)</a> <span
                                            class="separator">|</span> <a href="#">Add
                                            Review</a></p>
                                </div>
                            </div>
                            <div class="item-price">
                                <div class="price-box">
                                    @if($valueP->type_id == '1')
                                        <span class="regular-price"><span class="price">{{number_format($valueP->price)}} vnđ</span> </span>
                                    @else
                                        <span class="regular-price"><span class="price">{{number_format($valueP->deposit)}} vnđ/ngày</span> </span>

                                    @endif
                                </div>
                            </div>
                            <div class="other-info">
                                <div class="col-km"><i class="fa fa-tachometer"></i>
                                    {{$valueP->number_kilometers}}
                                </div>
                                <div class="col-engine"><i class="fa fa-gear"></i>
                                    {{$valueP->type_name}}
                                </div>
                                <div class="col-date"><i class="fa fa-calendar"
                                                         aria-hidden="true"></i>
                                    {{$valueP->model}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    @endforeach
</ul>

