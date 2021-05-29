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

    <div id="page">
        <div class="page-heading">
            <div class="breadcrumbs">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <ul>
                                <li class="home"><a href="index-2.html" title="Go to Home Page">Home</a>
                                    <span>&rsaquo; </span></li>
                                <li class="category1599"><a href="grid.html" title="">list all</a> <span>&rsaquo; </span>
                                </li>
                            </ul>
                        </div>
                        <!--col-xs-12-->
                    </div>
                    <!--row-->
                </div>
                <!--container-->
            </div>
            <div class="page-title">
                <h2>@yield('title', 'TÂT CẢ SẢN PHẨM')</h2>
            </div>
        </div>
        <!--breadcrumbs-->
        <!-- BEGIN Main Container col2-left -->
        <section class="main-container col2-left-layout bounceInUp animated">
            <!-- For version 1, 2, 3, 8 -->
            <!-- For version 1, 2, 3 -->
            <div class="container">

            @yield('content1')

            @include('pages.aside')

            {{--@stack('aside')--}}

            <!--col-right sidebar-->

                <!--row-->
            </div>
            <!--container-->
        </section>
        <!--main-container col2-left-layout-->

    </div>

</div>

@include('pages.frontend.footer')

@include('pages.frontend.js')
</body>

</html>

