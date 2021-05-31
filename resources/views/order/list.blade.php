@extends('admin.layout')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>DataTables</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Danh mục sản phẩm xe</li>
                        </ol>
                    </div>
                </div>
                <div>
                    <?php
                    $message = Session()->get('message');
                    if ($message){ ?>
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-check"></i> Thành công!</h5>
                        <?php echo $message ?>
                    </div>
                    <?php  Session()->put('message', null);
                    }
                    ?>

                </div>
                <div>
                    <?php
                    $message = Session()->get('error');
                    if ($message){ ?>
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-check"></i> Lỗi!</h5>
                        <?php echo $message ?>
                    </div>
                    <?php  Session()->put('error', null);
                    }
                    ?>

                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">List Sản phẩm</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>id sản phẩm</th>
                                        <th style="width: 1000px"></th>
                                        <th>Loại xe</th>
                                        <th>Hình thức</th>
                                        <th>Giá tiền</th>
                                        <th>Giảm giá (%)</th>
                                        <th>Tiền cọc</th>
                                        <th>Nhà sản xuất xe</th>
                                        <th>Dòng xe</th>
                                        <th>Dung tích xe</th>
                                        <th>Đăng ký tháng /năm</th>
                                        <th>Tình trạng</th>
                                        <th>Model</th>
                                        <th>Số km đã đi</th>
                                        <th>Địa chỉ</th>
                                        <th>Tiêu đề</th>
                                        <th>Mô tả</th>
                                        <th>Ngày tạo</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($productCar as $key =>$value)
                                        <tr>
                                            <td>{{$key}}</td>
                                            <td>{{ $value->product_id}}</td>
                                            <td>
                                                <a class="btn btn-primary btn-sm" href="{{route('admin.product.show',$value->product_id)}}">
                                                    <i class="fas fa-folder">
                                                    </i>
                                                    Ảnh
                                                </a>
                                                <a class="btn btn-info btn-sm"
                                                   href="{{route('admin.product.edit',$value->product_id)}}">
                                                    <i class="fas fa-pencil-alt">
                                                    </i>
                                                    Edit
                                                </a>
                                                <a class="btn btn-danger btn-sm"
                                                   href="{{route('admin.product.delete',$value->product_id)}}" onclick="return confirm('Bạn có muốn xóa?')">
                                                    <i class="fas fa-trash">
                                                    </i>
                                                    Delete
                                                </a>
                                            </td>
                                            <td>{{$value->tv_name}}</td>
                                            <td>{{$value->type_name}}</td>
                                            <td> {{$value->price}}</td>
                                            <td>{{ $value->discount }} %</td>
                                            <td>{{$value->deposit}}</td>
                                            <td>{{$value->brand_name}}</td>
                                            <td>{{$value->name_car}}</td>
                                            <td>{{$value->capacity}}</td>
                                            <td>{{$value->Year_of_registration}}</td>
                                            <td>{{$value->status_car}}</td>
                                            <td>{{$value->model}}</td>
                                            <td>{{$value->number_kilometers}}</td>
                                            <td>{{$value->address}}</td>
                                            <td>{{$value->caption}}</td>
                                            <td>{{$value->description}}</td>
                                            <td>{{ $value->created_at }}</td>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                    {{--                                    <tfoot>--}}
                                    {{--                                    <tr>--}}
                                    {{--                                        <th>Rendering engine</th>--}}
                                    {{--                                        <th>Browser</th>--}}
                                    {{--                                        <th>Platform(s)</th>--}}
                                    {{--                                        <th>Engine version</th>--}}
                                    {{--                                        <th>CSS grade</th>--}}
                                    {{--                                    </tr>--}}
                                    {{--                                    </tfoot>--}}
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
