<aside class="wow slideInLeft col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9 wow bounceInUp animated">
    <!-- BEGIN SIDE-NAV-CATEGORY -->
    <div class="side-nav-categories">
        <div class="block-title"> DANH MỤC</div>
        <!--block-title-->
        <!-- BEGIN BOX-CATEGORY -->
        <form action="{{route('list')}}" method="post">
            <div class="box-content box-category">
                <ul>
                    <li><a class="active" href="grid.html">HÌNH THỨC</a> <span
                            class="subDropdown minus"></span>
                        <ul class="level0_415" style="display:block">
                            @foreach($post_types as $valuePT)
                                <li>
                                    <a href="{{route('category-type',$valuePT->type_id)}}"> {{$valuePT->type_name}} </a>
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
                                <li>
                                    <a href="{{route('category-brand',$valueBP->brand_id)}}"> {{$valueBP->brand_name}} </a>
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
                </ul>
            </div>
        </form>
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
                            <h3><a title=" Sample Product" href="product-detail.html">10% OFF</a>
                            </h3>
                            <p>Truy cập ngay để có những ưu đãi nhất.</p>
                            <a class="link" href="#">Xem ngay</a></div>
                    </div>
                    <div class="item"><img src="{{asset('backend/images/slide1.jpg')}}" alt="slide1">
                        <div class="carousel-caption">
                            <h3><a title=" Sample Product" href="product-detail.html">Giá siêu tốt</a></h3>
                            <p>Truy cập ngay để có những tìm xe mong muốn.</p>
                        </div>
                    </div>
                    <div class="item"><img src="{{asset('backend/images/slide2.jpg')}}" alt="slide2">
                        <div class="carousel-caption">
                            <h3><a title=" Sample Product" href="product-detail.html">Mùa hè sôi động</a></h3>
                            <p>Truy cập ngay để có những ưu đãi nhất.</p>
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
    <!--block block-list block-compare-->
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
                    <div class="item active"><img style="width: 315px;height: 375px;" src="{{asset('backend/images/WLC-jun-vu-mercedes-benz-c300-amg-2019-6.jpg')}}" alt="slide3">
                        <div class="carousel-caption">
                            <h3><a title=" Sample Product" href="">10% OFF</a>
                            </h3>
                            <p>Uy tín tạo nên thương hiệu.</p>
                            <a class="link" href="#">Xem ngay</a></div>
                    </div>
                    <div class="item"><img style="width: 315px;height: 375px;" src="{{asset('backend/images/gan-200-chiec-hyundai-grand-i10-bi-trieu-hoi-tai-viet-nam1527815593.jpg')}}" alt="slide1">
                        <div class="carousel-caption">
                            <h3><a title=" Sample Product" href="">Luôn cập nhật xe mới</a></h3>
                            <p></p>
                        </div>
                    </div>
                    <div class="item"><img style="width: 315px;height: 375px;" src="{{asset('backend/images/1sz_OHNz_400x400.jpg')}}" alt="slide2">
                        <div class="carousel-caption">
                            <h3><a title=" Sample Product" href=""></a></h3>
                            <p>.</p>
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
</aside>
