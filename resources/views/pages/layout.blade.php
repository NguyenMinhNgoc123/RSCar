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
        @include('pages.banner')
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

