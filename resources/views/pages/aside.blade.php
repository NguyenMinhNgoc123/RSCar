<aside class="wow slideInLeft col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9 wow bounceInUp animated">
    <!-- BEGIN SIDE-NAV-CATEGORY -->
    <div class="side-nav-categories">
        <div class="block-title"> DANH MỤC</div>
        <!--block-title-->
        <!-- BEGIN BOX-CATEGORY -->
        <form>

            <div class="box-content box-category">
                <ul>
                    <li><a class="active" href="">HÌNH THỨC</a> <span
                            class="subDropdown minus"></span>
                        <ul class="level0_415" style="display:block">

                            <li>
                                <div class="list-group">
                                    @foreach($post_types as $valuePT)
                                        <div class="list-group-item">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input product_check type" id="type" name="type" value="{{$valuePT->type_id}}"><span> &nbsp;&nbsp;ALL</span>
                                                </label>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <!--level1-->
                            </li>
                            <!--level1-->
                        </ul>
                        <!--level0-->

                    </li>
                    <!--level 0-->
                    <li><a href="">THƯƠNG HIỆU</a> <span class="subDropdown plus"></span>
                        <ul class="level0_455" style="display:block">
                            <li>
                                <div class="list-group">
                                    @foreach($brand_products as $valueBP)
                                        <div class="list-group-item">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input product_check" id="brand"
                                                           value="{{$valueBP->brand_id}}"><span> &nbsp;&nbsp;{{$valueBP->brand_name}}</span>
                                                </label>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                                <!--level1-->
                            </li>
                        </ul>
                        <!--level0-->
                    </li>
                    <!--level 0-->
                    <li><a href="#.html">LOẠI GIÀY</a> <span class="subDropdown plus"></span>
                        <ul class="level0_482" style="display:block">
                                <li>
                                    <div class="list-group">
                                        @foreach($type_shoes as $valueTV)
                                        <div class="list-group-item">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input product_check" id="tv_name"
                                                           value="{{$valueTV->type_shoes_id}}"><span> &nbsp;&nbsp;{{$valueTV->tv_name}}</span>
                                                </label>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    <!--level1-->
                                </li>
                        </ul>
                        <!--level0-->
                    </li>
                </ul>
            </div>
        </form>
        <!--box-content box-category-->
    </div>
    <!--side-nav-categories-->

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
                    <div class="item active"><img style="width: 315px;height: 375px;"
                                                  src="{{asset('backend/images/nike-joyride.jpeg')}}"
                                                  alt="slide3">
                        <div class="carousel-caption">
                            <h3><a title=" Sample Product" href="">10% OFF</a>
                            </h3>
                            <p>Uy tín tạo nên thương hiệu.</p>
                            <a class="link" href="#">Xem ngay</a></div>
                    </div>
                    <div class="item"><img style="width: 315px;height: 375px;"
                                           src="{{asset('backend/images/nike-running-shoes-315x375.jpeg')}}"
                                           alt="slide1">
                        <div class="carousel-caption">
                            <h3><a title=" Sample Product" href="">Luôn cập nhật mới</a></h3>
                            <p></p>
                        </div>
                    </div>
                    <div class="item"><img style="width: 315px;height: 375px;"
                                           src="{{asset('backend/images/nike-joyride.jpeg')}}" alt="slide2">
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
