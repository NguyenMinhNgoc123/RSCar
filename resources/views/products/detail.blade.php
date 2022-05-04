@extends('admin.layout')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>ẢNH SẢN PHẨM</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Gallery</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4 class="card-title">Ảnh sản phẩm id : {{$id}}</h4>
                                <a href="{{route('admin.product.list')}}" class="btn btn-danger" style="float: right">quay lại</a>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    @foreach($productPhoto as $value)
                                        <div class="col-sm-2">
                                            <a href="{{asset("/product-images/{$value->p_photo}")}}" data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery">
                                                <img src="{{asset("/product-images/{$value->p_photo}")}}" class="img-fluid mb-2" alt="white sample"/>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-default">
                    @foreach($productCar as $key =>$value)
                    <div class="card-header">
                        <h2>chi tiết</h2>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Loại hình : </label><i>  {{$value->type_name}}</i>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label>Thương hiệu : </label><i> {{$value->brand_name}}</i>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tiêu đề : </label><i> {{$value->caption}}</i>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label>size : </label><i> {{$value->size}}</i>
                                </div>

                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Giá : </label><i>  {{number_format($value->price)}}đ</i>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Số lượng : </label><i>  {{$value->quantity}}</i>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label>Mô tả: </label><i>{{$value->description}}</i>
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    @endforeach
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->

    </div>
    <script>
        $(function () {
            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox({
                    alwaysShowClose: true
                });
            });

            $('.filter-container').filterizr({gutterPixels: 3});
            $('.btn[data-filter]').on('click', function() {
                $('.btn[data-filter]').removeClass('active');
                $(this).addClass('active');
            });
        })
    </script>
@endsection
