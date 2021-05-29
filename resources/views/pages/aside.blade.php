<aside class="col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9 wow bounceInUp animated">
    <div class="section-filter">
        <div class="b-filter__inner bg-grey">
            <h2>Tim chiếc xe của bạn</h2>
            <form class="b-filter">
                <div class="btn-group bootstrap-select" style="width: 100%;">
                    <select class="selectpicker" data-width="100%" tabindex="-98">
                        <option>Select Make</option>
                        <option>Make 1</option>
                        <option>Make 2</option>
                        <option>Make 3</option>
                    </select>
                </div>
                <div class="btn-group bootstrap-select" style="width: 100%;">
                    <select class="selectpicker" data-width="100%" tabindex="-98">
                        <option>Select Car Status</option>
                        <option>Status 1</option>
                        <option>Status 2</option>
                        <option>Status 3</option>
                    </select>
                </div>
                <div class="btn-group bootstrap-select" style="width: 100%;">
                    <select class="selectpicker" data-width="100%" tabindex="-98">
                        <option>Select Model</option>
                        <option>Model 1</option>
                        <option>Model 2</option>
                        <option>Model 3</option>
                    </select>
                </div>
                <div class="btn-group bootstrap-select" style="width: 100%;">
                    <select class="selectpicker" data-width="100%" tabindex="-98">
                        <option>Select All Locations</option>
                        <option>Location 1</option>
                        <option>Location 2</option>
                        <option>Location 3</option>
                    </select>
                </div>
                <div class="btn-group bootstrap-select" style="width: 100%;">
                    <select class="selectpicker" data-width="100%" tabindex="-98">
                        <option>Select Year</option>
                        <option>2017</option>
                        <option>2016</option>
                        <option>2015</option>
                    </select>
                </div>
                <div class="ui-filter-slider">
                    <div class="sidebar-widget-body m-t-10">
                        <div class="price-range-holder"><span class="min-max"> <span
                                    class="pull-left">$200.00</span> <span class="pull-right">$800.00</span> </span>
                            <input type="text" class="price-slider" value="" style="display:block">
                        </div>
                        <!-- /.price-range-holder -->
                    </div>
                </div>
                <div>
                    <div class="b-filter__btns">
                        <button class="btn btn-lg btn-primary">TÌM KIẾM</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- BEGIN SIDE-NAV-CATEGORY -->
    <div class="side-nav-categories">
        <div class="block-title"> DANH MỤC</div>
        <!--block-title-->
        <!-- BEGIN BOX-CATEGORY -->
        <div class="box-content box-category">
            <ul>
                <li><a class="active" href="grid.html">HÌNH THỨC</a> <span
                        class="subDropdown minus"></span>
                    <ul class="level0_415" style="display:block">
                        @foreach($post_types as $valuePT)
                            <li><a href="{{route('category-type',$valuePT->type_id)}}"> {{$valuePT->type_name}} </a>
                                <span class=""></span>

                                <!--level1-->
                            </li>
                    @endforeach
                    <!--level1-->
                    </ul>
                    <!--level0-->

                </li>
                <!--level 0-->
                <li><a href="grid.html">THƯƠNG HIỆU</a> <span class="subDropdown plus"></span>
                    <ul class="level0_455" style="display:none">
                        @foreach($brand_products as $valueBP)
                            <li><a href="{{route('category-brand',$valueBP->brand_id)}}"> {{$valueBP->brand_name}} </a>
                                <span class=""></span>

                                <!--level1-->
                            </li>
                        @endforeach
                    </ul>
                    <!--level0-->
                </li>
                <!--level 0-->
                <li><a href="#.html">LOẠI XE</a> <span class="subDropdown plus"></span>
                    <ul class="level0_482" style="display:none">
                        @foreach($type_vehicles as $valueTV)
                            <li>
                                <a href="{{route('category-type-vehicles',$valueTV->type_vehicles_id)}}"> {{$valueTV->tv_name}} </a>
                                <span class=""></span>
                                <!--level1-->
                            </li>
                        @endforeach
                    </ul>
                    <!--level0-->
                </li>
                <!--level 0-->
                {{--                <li><a href="grid.html">INTERIOR</a> <span class="subDropdown plus"></span>--}}
                {{--                    <ul class="level0_482" style="display:none">--}}
                {{--                        <li><a href="grid.html"> Custom Gauges </a> <span class=""></span></li>--}}
                {{--                        <li><a href="grid.html"> Dash Kits </a> <span class=""></span></li>--}}
                {{--                        <li><a href="grid.html"> Seat Covers </a> <span class=""></span></li>--}}
                {{--                        <li><a href="grid.html"> Steering Wheels </a> <span class=""></span></li>--}}
                {{--                        <li><a href="grid.html"> Sun Shades</a> <span class=""></span></li>--}}
                {{--                        </li>--}}
                {{--                        <!--level 0-->--}}

                {{--                    </ul>--}}
                {{--                    <!--level 0-->--}}
                {{--                <li><a href="grid.html">LIGHTING</a> <span class="subDropdown plus"></span>--}}
                {{--                    <ul class="level0_482" style="display:none">--}}
                {{--                        <li><a href="grid.html"> Fog Lights </a> <span class=""></span></li>--}}
                {{--                        <li><a href="grid.html"> Headlights </a> <span class=""></span></li>--}}
                {{--                        <li><a href="grid.html"> LED Lights </a> <span class=""></span></li>--}}
                {{--                        <li><a href="grid.html">Off-Road Lights </a> <span class=""></span></li>--}}
                {{--                        <li><a href="grid.html"> Signal Lights</a> <span class=""></span></li>--}}
                {{--                        </li>--}}
                {{--                        <!--level 0-->--}}

                {{--                    </ul>--}}
                {{--                    <!--level 0-->--}}
                {{--                <li><a href="grid.html">PERFORMANCE</a> <span class="subDropdown plus"></span>--}}
                {{--                    <ul class="level0_482" style="display:none">--}}
                {{--                        <li><a href="grid.html"> Air Intake Systems </a> <span class=""></span></li>--}}
                {{--                        <li><a href="grid.html"> Brakes </a> <span class=""></span></li>--}}
                {{--                        <li><a href="grid.html"> Exhaust Systems </a> <span class=""></span></li>--}}
                {{--                        <li><a href="grid.html">Power Adders </a> <span class=""></span></li>--}}
                {{--                        <li><a href="grid.html"> Racing Gear</a> <span class=""></span></li>--}}
                {{--                        </li>--}}
                {{--                        <!--level 0-->--}}

                {{--                    </ul>--}}
                {{--                </li>--}}
            </ul>
        </div>
        <!--box-content box-category-->
    </div>
    <!--side-nav-categories-->

    <div class="custom-slider">
        <div>
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li class="active" data-target="#carousel-example-generic"
                        data-slide-to="0"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active"><img src="{{asset('backend/images/slide3.jpg')}}" alt="slide3">
                        <div class="carousel-caption">
                            <h3><a title=" Sample Product" href="product-detail.html">50% OFF</a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <a class="link" href="#">Buy Now</a></div>
                    </div>
                    <div class="item"><img src="{{asset('backend/images/slide1.jpg')}}" alt="slide1">
                        <div class="carousel-caption">
                            <h3><a title=" Sample Product" href="product-detail.html">Hot
                                    collection</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="item"><img src="{{asset('backend/images/slide2.jpg')}}" alt="slide2">
                        <div class="carousel-caption">
                            <h3><a title=" Sample Product" href="product-detail.html">Summer
                                    collection</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="sr-only">Previous</span> </a> <a class="right carousel-control"
                                                                  href="#carousel-example-generic"
                                                                  data-slide="next"> <span
                        class="sr-only">Next</span> </a></div>
        </div>
    </div>

    <div class="block block-list block-cart">
        <div class="block-title"> My Cart</div>
        <div class="block-content">
            <div class="summary">
                <p class="amount">There is <a href="#">1 item</a> in your cart.</p>
                <p class="subtotal"><span class="label">Cart Subtotal:</span> <span class="price">$299.00</span>
                </p>
            </div>
            <div class="ajax-checkout">
                <button type="button" title="Checkout" class="button button-checkout" onClick="#">
                    <span>Checkout</span></button>
            </div>
            <p class="block-subtitle">Recently added item(s)</p>
            <ul id="cart-sidebar" class="mini-products-list">
                <li class="item">
                    <div class="item-inner"><a href="#" class="product-image"><img
                                src="products-images/p1.jpg" width="80" alt="product"></a>
                        <div class="product-details">
                            <div class="access"><a href="#" class="btn-remove1">Remove</a>
                                <a href="#" title="Edit item" class="btn-edit">
                                    <i class="icon-pencil"></i><span class="hidden">Edit item</span></a>
                            </div>
                            <!--access-->

                            <strong>1</strong> x <span class="price">$299.00</span>
                            <p class="product-name"><a href="#">Gorgeous Mercedes-Benz E-Class
                                    All-Terrain Luxury</a></p>
                        </div>
                        <!--product-details-bottoms-->
                    </div>
                </li>
                <li class="item  last1">
                    <div class="item-inner"><a href="#" class="product-image"><img
                                src="products-images/p2.jpg" width="80" alt="product"></a>
                        <div class="product-details">
                            <div class="access"><a href="#" class="btn-remove1">Remove</a>
                                <a href="#" title="Edit item" class="btn-edit">
                                    <i class="icon-pencil"></i><span class="hidden">Edit item</span></a>
                            </div>
                            <!--access-->

                            <strong>1</strong> x <span class="price">$299.00</span>
                            <p class="product-name"><a href="#">Gorgeous Mercedes-Benz E-Class
                                    All-Terrain Luxury</a></p>
                        </div>
                        <!--product-details-bottoms-->
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="block block-compare">
        <div class="block-title"> Compare Products</div>
        <div class="block-content">
            <ol id="compare-items">
                <li class="item odd">
                    <a href="#" class="btn-remove1" onClick="#"></a>
                    <a class="product-name" href="#">Gorgeous Mercedes-Benz E-Class All-Terrain
                        Luxury</a></li>
                <li class="item odd">
                    <a href="#" class="btn-remove1" onClick="#"></a>
                    <a class="product-name" href="#">Gorgeous Mercedes-Benz E-Class All-Terrain
                        Luxury</a></li>
                <li class="item odd">
                    <a href="#" class="btn-remove1" onClick="#"></a>
                    <a class="product-name" href="#">Gorgeous Mercedes-Benz E-Class All-Terrain
                        Luxury</a></li>

            </ol>

            <div class="ajax-checkout">
                <button type="button" title="Compare" class="button button-compare" onClick="#">
                    <span>Compare</span></button>
                <button class="button button-clear" href="#"><span>Clear</span></button>
            </div><!--ajax-checkout-->
        </div>
        <!--block-content-->
    </div>
    <!--block block-list block-compare-->


</aside>
