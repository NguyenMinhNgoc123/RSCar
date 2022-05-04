<header>
    <div class="container">
        <div class="row">
            <div id="header">
                <div class="header-container">
                    <div class="wow bounceInLeft header-logo"><a href="{{route('index')}}" title="Car HTML" class="logo">
                            <div><img src="{{('/backend/images/logo.png')}}" alt="Car Store"></div>
                        </a>
                    </div>
                    <div class="header__nav">
                        <div class=" header-banner">
                            <div class="col-lg-6 col-xs-12 col-sm-6 col-md-6">
                                <div class="assetBlock">
                                    <div style="height: 20px; overflow: hidden;" id="slideshow">
                                        <p style="display: block;">Hot days! - <span>50%</span> Hãy sẵn sàng cho mùa hè!!
                                        </p>
                                        <p style="display: none;">Save up to <span>40%</span> Nhanh tay ưu đãi có hạn!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-lg-6 col-xs-12 col-sm-6 col-md-6 call-us"><i
                                    class="fa fa-clock-o"></i> Mon - Fri : 09am to 06pm <i class="fa fa-phone"></i>
                                0815115415
                            </div>
                        </div>
                        <div class="fl-header-right">
                            <div class="fl-links">
                                <div class="no-js"><a title="" class="clicker"></a>
                                    <div class="fl-nav-links">
                                        <div class="language-currency">
{{--                                            <div class="fl-language">--}}
{{--                                                <h3>Ngôn ngữ</h3>--}}
{{--                                                <ul class="lang">--}}
{{--                                                    <li><a href="#"> <img src="{{('/backend/images/english.png')}}"--}}
{{--                                                                          alt="English"> <span>English</span> </a></li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
                                            <!--fl-language-->
                                            <!-- END For version 1,2,3,4,6 -->
                                            <!-- For version 1,2,3,4,6 -->
                                            <div class="fl-currency">
                                                <?php $name = Session()->get('email');$user_id_login = Session()->get('user_id');Session()->get('full_name');
                                                if ($name){ ?>
                                                <h3>THÔNG TIN CỦA BẠN</h3>
                                                <ul class="currencies_list">
                                                    <li><a href="{{route('user.profile')}}" title=""> <strong>+</strong>
                                                            Trang cá nhân</a></li>
                                                    <li><a href="{{route('user.change-password')}}" title="Đổi mật khẩu">
                                                            <strong>+</strong> Đổi mật khẩu</a></li>
                                                    <li><a href="{{route('user.order.list')}}" title="Đơn hàng">
                                                            <strong>+</strong> Đơn Hàng</a></li>
                                                    <li><a href="{{route('user.order.history-order')}}" title="Lịch sử mua hàng">
                                                            <strong>+</strong> Lịch sử mua hàng</a></li>
                                                </ul>
                                                <?php }
                                                ?>
                                            </div>
                                            <!--fl-currency-->
                                            <!-- END For version 1,2,3,4,6 -->
                                        </div>
                                        <h3>TÀI KHOẢN</h3>
                                        <ul class="links">
                                            <?php $name = Session()->get('email');$user_id_login = Session()->get('user_id');
                                            if ($name){ ?>
                                            <li><a href="{{route('user.profile')}}" class="d-block"><?php echo $name ?></a></li>
                                            <li><a href="{{route('user.logout')}}" title="Đăng xuất"> Đăng xuất</a></li>
                                            <?php
                                            }else{?>
                                            <li><a href="{{route('user.login-user')}}" title="My Account"> Đăng nhập</a></li>
                                            <li><a href="{{route('register')}}" title="Wishlist"> Đăng ký ngay</a></li>
                                            <?php }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="fl-cart-contain">
                                <div class="mini-cart">
                                    <div class="basket"><a href="{{route('user.show-cart')}}"><span style="background-color: #D8EA3D;color: black"> New </span></a></div>
                                </div>
                            </div>
                            <!--mini-cart-->
                            <div class="collapse navbar-collapse">
                            </div>
                            <!--links-->
                        </div>
                        <div class="fl-nav-menu">
                            <nav>
                                <div class="mm-toggle-wrap">
                                    <div class="mm-toggle"><i class="fa fa-bars"></i><span class="mm-label">Menu</span>
                                    </div>
                                </div>
                                <div class="nav-inner">
                                    <!-- BEGIN NAV -->
                                    <ul id="nav" class="hidden-xs">
                                        <li class="active"><a class="level-top" href="{{route('index')}}"><span>Trang chủ</span></a>
                                        </li>
                                        <li class="level0 parent drop-menu"><a class="level-top"
                                                                               href="{{route('list')}}"><span>Sản phẩm</span></a>
                                        </li>
                                        <li class="level0 parent drop-menu"><a class="level-top"
                                                                               href="#"><span>Blog</span></a>
                                        </li>
                                        <li class="level0 parent drop-menu"><a href="#"><span>Giới thiệu</span> </a>
                                            <!--sub sub category-->
                                            <ul class="level1">
                                                <li class="level1"><a href="about-us.html"> <span>Về chúng tôi</span> </a>
                                                </li>
                                                <li class="level1 nav-10-4"><a href="shopping-cart.html"> <span>Giỏ Hàng</span>
                                                    </a></li>
                                                <li class="level1 first parent"><a
                                                        href="checkout.html"><span>Checkout</span></a>
                                                    <!--sub sub category-->
{{--                                                    <ul class="level2 right-sub">--}}
{{--                                                        <li class="level2 nav-2-1-1 first"><a--}}
{{--                                                                href="checkout-method.html"><span>Method</span></a></li>--}}
{{--                                                        <li class="level2 nav-2-1-5 last"><a--}}
{{--                                                                href="checkout-billing-info.html"><span>Billing Info</span></a>--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
                                                    <!--sub sub category-->
                                                </li>
                                                <li class="level1 nav-10-4"><a href="wishlist.html">
                                                        <span>Danh Sách yêu Thích</span> </a></li>
                                                <li class="level1"><a href="multiple-addresses.html"> <span>Các Chi Nhánh</span>
                                                    </a></li>
                                                <li class="level1"><a href="contact-us.html"><span>Liên hệ Chúng tôi</span></a>
                                                </li>
                                                <li class="level1"><a
                                                        href="404error.html"><span>404 Error Page</span></a></li>
                                            </ul>
                                        </li>
                                        @if($name == null)
                                        <li class="mega-menu"><a class="level-top"
                                                                 href="{{route('user.login-user')}}"><span>ĐĂNG NHẬP</span></a>
                                        </li>
                                        @endif
                                    </ul>
                                    <!--nav-->
                                </div>
                            </nav>
                        </div>
                    </div>

                    <!--row-->

                </div>
            </div>
        </div>
    </div>
</header>
