<!--col-main col-sm-9 wow bounceInUp animated-->
<aside class="col-right sidebar col-sm-3 col-xs-12 wow bounceInUp animated animated"
       style="visibility: visible;">
    <div class="block block-account">
        <div class="block-title">TÀI KHOẢN TÔI</div>
        <div class="block-content">
            <ul>
                <li class="current"><a href="{{route('user.profile')}}">Thông tin cá nhân</a></li>
                <li><a href="{{route('user.change-password')}}"><span>Đổi mật khẩu </span></a></li>
                <li><a href="{{route('user.order.list')}}"><span>Đơn Hàng</span></a></li>
                <li><a href="{{route('user.show-cart')}}"><span>Giỏ Hàng</span></a></li>
                <li><a href="{{route('user.order.history-order')}}"><span>Lịch sử mua hàng</span></a></li>
            </ul>
        </div>
        <!--block-content-->
    </div>
    <!--block block-account-->

    <div class="custom-slider">
        <div>
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li class="active" data-target="#carousel-example-generic" data-slide-to="0"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active"><img src="{{asset('backend/images/nike-running-shoes-315x375.jpeg')}}" alt="slide3">
                        <div class="carousel-caption">
                            <h3><a title=" Sample Product" href="#">50% OFF</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <a class="link" href="#">Buy Now</a></div>
                    </div>
                    <div class="item"><img src="{{asset('backend/images/nike-joyride.jpeg')}}" alt="slide1">
                        <div class="carousel-caption">
                            <h3><a title=" Sample Product" href="#">Hot collection</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="item"><img src="{{asset('backend/images/nike-running-shoes-315x375.jpeg')}}" alt="slide2">
                        <div class="carousel-caption">
                            <h3><a title=" Sample Product" href="#">Summer collection</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#" data-slide="prev"> <span class="sr-only">Previous</span>
                </a> <a class="right carousel-control" href="#" data-slide="next"> <span
                        class="sr-only">Next</span> </a></div>
        </div>
    </div>
</aside>
