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
<body class="preloading">
<div id="loader">
    <div class="circle">
        <div class="circle1"></div>
        <div class="circle2"></div>
    </div>
</div>
@include('pages.frontend.header')

@yield('content')

@include('pages.frontend.footer')
<!-- JavaScript -->
@include('pages.frontend.js')
</body>

</html>
