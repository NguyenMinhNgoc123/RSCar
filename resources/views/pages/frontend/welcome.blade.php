<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Harrier Home Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Default Description">
    <meta name="keywords" content="fashion, store, E-commerce">
    <meta name="robots" content="*">
    @include('pages.frontend.css')
</head>
<body>
<div id="page">
    @include('pages.frontend.header')

    @yield('content')

    @include('pages.frontend.footer')
</div>
<!--page-->
<!-- Mobile Menu-->

{{--<div class="popup1" style="display: block;">--}}
{{--    <div class="newsletter-sign-box">--}}
{{--        <h3>ĐĂNG KÝ NHẬN TIN NGAY</h3>--}}
{{--        <img src="{{('/backend/images/close-icon.png')}}" alt="close" class="x" onClick="HideMe();">--}}
{{--        <div class="newsletter">--}}
{{--            <div class="newsletter_img"> <img alt="newsletter" src="{{('/backend/images/newsletter_img.png')}}"></div>--}}
{{--            <form method="post" id="popup-newsletter" name="popup-newsletter" class="email-form">--}}
{{--                <h4>đăng ký danh sách email độc quyền của chúng tôi và là người đầu tiên nghe thấy các ưu đãi đặc biệt.</h4>--}}
{{--                <div class="newsletter-form">--}}
{{--                    <div class="input-box">--}}
{{--                        <input type="text" name="email" id="newsletter2" title="Sign up for our newsletter" placeholder="Enter your email address" class="input-text required-entry validate-email">--}}
{{--                        <button type="submit" title="Subscribe" class="button subscribe"><span>Đăng ký</span></button>--}}
{{--                    </div>--}}
{{--                    <!--input-box-->--}}
{{--                </div>--}}
{{--                <!--newsletter-form-->--}}
{{--                <label class="subscribe-bottom">--}}
{{--                    <input type="checkbox" name="notshowpopup" id="notshowpopup">--}}
{{--                    Don’t show this popup again</label>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--        <!--newsletter-->--}}

{{--    </div>--}}
{{--    <!--newsletter-sign-box-->--}}
{{--</div>--}}
{{--<div id="fade" style="display: block;"></div>--}}

<!-- JavaScript -->
@include('pages.frontend.js')
</body>

</html>
