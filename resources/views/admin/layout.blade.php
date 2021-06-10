<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin || dashboard</title>
@include('admin.css')
<!-- DataTables -->

</head>
<body class="preloading hold-transition sidebar-mini layout-fixed">
<div id="loader">
    <div class="circle">
        <div class="circle1"></div>
        <div class="circle2"></div>
    </div>
</div>
<div class="wrapper ">

    <!-- Navbar -->
@include('admin.navbar')
<!-- /.navbar -->

    <!-- Main Sidebar Container -->
@include('admin.aside')

<!-- Content Wrapper. Contains page content -->
@yield('content')
<!-- /.content-wrapper -->


<!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
@include('admin.footer')

@include('admin.js')
</body>
</html>
