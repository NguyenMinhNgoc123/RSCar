@extends('pages.layout')
@section('content1')
    <div class="col-main col-sm-9 col-sm-push-3 product-grid">
        <div class="pro-coloumn">
            <article class="col-main">
                <div class="toolbar">
                    <div class="sorter">
                        <div class="view-mode"><span title="Grid"
                                                     class="button button-active button-grid">&nbsp;</span><a
                                href="list.html" title="List" class="button-list">&nbsp;</a></div>
                    </div>
                    <div id="sort-by">
                        <label class="left">Sort By: </label>
                        <ul>
                            <li><a href="#">Position<span class="right-arrow"></span></a>
                                <ul>
                                    <li><a href="#">Name</a></li>
                                    <li><a href="#">Price</a></li>
                                    <li><a href="#">Position</a></li>
                                </ul>
                            </li>
                        </ul>
                        <a class="button-asc left" href="#" title="Set Descending Direction"><span
                                class="top_arrow"></span></a></div>
                    <div class="pager">
                        <div id="limiter">
                            <label>View: </label>
                            <ul>
                                <li><a href="#">15<span class="right-arrow"></span></a>
                                    <ul>
                                        <li><a href="#">20</a></li>
                                        <li><a href="#">30</a></li>
                                        <li><a href="#">35</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="pages">
                            <label>Page:</label>
                            <ul class="pagination">
                                <li><a href="#">&laquo;</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">&raquo;</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="category-products">
                    <ul class="products-grid">
                        @foreach($product_type as $keyP =>$valueP)
                            <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="item-img-info"><a href="product-detail.html"
                                                                      title="Retis lapen casen"
                                                                      class="product-image"><img
                                                    src="{{asset("/product-images/{$valueP->thumbnails}")}}"
                                                    alt="Retis lapen casen"></a>
                                            @if($valueP->hot_car != '0' && $valueP->updated_hot_car > now() && $valueP->status == '0')
                                                <div class="new-label new-top-left">Hot</div>
                                            @elseif($valueP->status == '1')
                                                <div class="new-label new-top-left">Bán Chạy</div>
                                            @else
                                            @endif
                                            @if($valueP->discount != '0')
                                                <div class="sale-label sale-top-left">{{$valueP->discount}}%</div>
                                            @endif
                                            <div class="item-box-hover">
                                                <div class="box-inner">
                                                    <div class="add_cart">
                                                        <button class="button btn-cart"
                                                                type="button"></button>
                                                    </div>
                                                    <div class="product-detail-bnt"><a
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
                                            <div class="item-title"><a href="product-detail.html"
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
                </div>
                <div class="toolbar bottom">

                    <div id="sort-by">
                        <label class="left">Sort By: </label>
                        <ul>
                            <li><a href="#">Position<span class="right-arrow"></span></a>
                                <ul>
                                    <li><a href="#">Name</a></li>
                                    <li><a href="#">Price</a></li>
                                    <li><a href="#">Position</a></li>
                                </ul>
                            </li>
                        </ul>
                        <a class="button-asc left" href="#" title="Set Descending Direction"><span
                                class="top_arrow"></span></a></div>
                    <div class="pager">
                        <div id="limiter">
                            <label>View: </label>
                            <ul>
                                <li><a href="#">15<span class="right-arrow"></span></a>
                                    <ul>
                                        <li><a href="#">20</a></li>
                                        <li><a href="#">30</a></li>
                                        <li><a href="#">35</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="pages">
                            <label>Page:</label>
                            <ul class="pagination">
                                <li><a href="#">&laquo;</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">&raquo;</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </article>
        </div>
        <!--	///*///======    End article  ========= //*/// -->
    </div>
@endsection
