@extends('pages.frontend.welcome')
@section('title', 'ĐĂNG NHẬP HOẶC ĐĂNG KÝ')
@section('content')
    @include('pages.banner')
    <div class="main-container col1-layout wow bounceInUp animated animated" style="visibility: visible;">

        <div class="main">
            <div class="account-login container">
                <!--page-title-->

                <form action="{{route('user.user-dashboard')}}" method="post" id="login-form">
                    @csrf
                    <input name="form_key" type="hidden" value="EPYwQxF6xoWcjLUr">
                    <fieldset class="col2-set">
                        <div class="col-1 new-users">
                            <strong></strong>
                            <div class="content">

                                <p>Bằng cách tạo tài khoản với cửa hàng của chúng tôi, bạn sẽ có thể thực hiện quy trình
                                    thanh toán nhanh hơn, lưu trữ nhiều địa chỉ giao hàng, xem và theo dõi các đơn đặt
                                    hàng trong tài khoản của bạn và hơn thế nữa.</p>
                                <div class="buttons-set">
                                    <a type="button" href="{{route('register')}}" title="Create an Account" class="button create-account"
                                            onClick=""><span><span>ĐĂNG KÝ NGAY</span></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-2 registered-users">
                            <strong>Đăng Nhập</strong>
                            <div class="content">
                                <p>Nếu bạn có tài khoản với chúng tôi, vui lòng đăng nhập</p>
                                <ul class="form-list">
                                    <li>
                                        <label for="email">Email<em class="required">*</em></label>
                                        <div class="input-box">
                                            <input type="text" name="email" value="" id="email"
                                                   class="input-text required-entry validate-email"
                                                   title="Email Address">
                                        </div>
                                    </li>
                                    <li>
                                        <label for="pass">Mật khẩu<em class="required">*</em></label>
                                        <div class="input-box">
                                            <input type="password" name="password"
                                                   class="input-text required-entry validate-password" id="pass"
                                                   title="Password">
                                        </div>
                                    </li>
                                </ul>
                                <div class="remember-me-popup">
                                    <div class="remember-me-popup-head" style="display:none">
                                        <h3 id="text2">What's this?</h3>
                                        <a href="#" class="remember-me-popup-close" onClick="showDiv()" title="Close">Close</a>
                                    </div>
                                    <div class="remember-me-popup-body" style="display:none">
                                        <p id="text1">Checking "Remember Me" will let you access your shopping cart on
                                            this computer when you are logged out</p>
                                        <div class="remember-me-popup-close-button a-right">
                                            <a href="#" class="remember-me-popup-close button" title="Close" onClick="showDiv()"><span>Close</span></a>
                                        </div>
                                    </div>
                                </div>

                                <p class="required">* Bắt buộc</p>


                                <div class="buttons-set">

                                    <button type="submit" class="button login" title="Login" name="send" id="send2">
                                        <span>ĐĂNG NHẬP</span></button>

                                    <a href="#" class="forgot-word">Forgot Your Password?</a>
                                </div> <!--buttons-set-->
                            </div> <!--content-->

                        </div> <!--col-2 registered-users-->
                    </fieldset> <!--col2-set-->
                </form>

            </div> <!--account-login-->

        </div><!--main-container-->

    </div> <!--col1-layout-->





    <!-- For version 1,2,3,4,6 -->
@endsection
