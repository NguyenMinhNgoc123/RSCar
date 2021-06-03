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
                            <li class="breadcrumb-item active">Danh mục Đơn Hàng</li>
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
                                <h3 class="card-title">Danh Sách Đơn</h3>
                                <a class="btn btn-primary float-right"  href="{{route('admin.order.list')}}">Quay lại</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>id sản phẩm</th>
                                        <th>Số lượng</th>
                                        <th>Tiền cọc </th>
                                        <th>Tên xe</th>
                                        <th>Hình thức</th>
                                        <th>Loại xe</th>
                                        <th>model</th>
                                        <th>năm đăng ký</th>
                                        <th>Tình trạng xe</th>
                                        <th>Ngày tạo</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($orderDetail as $key =>$value)
                                        <tr>
                                            <td>{{ $value->product_id}}</td>
                                            <td>{{ $value->product_quantity}}</td>
                                            <td>
                                                @if($value->type_id =='1')
                                                    {{number_format($value->product_price).' '.'vnđ'}}
                                                @else
                                                    {{number_format($value->product_price).' '.'vnđ/ngày'}}
                                                @endif
                                            </td>
                                            <td> {{$value->name_car}}</td>
                                            <td>{{$value->type_name}}</td>
                                            <td>{{$value->tv_name}}</td>
                                            <td>{{$value->model}}</td>
                                            <td>{{$value->Year_of_registration}}</td>
                                            <td>{{$value->status_car}}</td>
                                            <td>{{$value->order_detail_create}}</td>
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
