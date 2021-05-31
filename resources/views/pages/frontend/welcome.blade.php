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
<!-- JavaScript -->
@include('pages.frontend.js')
</body>

</html>
