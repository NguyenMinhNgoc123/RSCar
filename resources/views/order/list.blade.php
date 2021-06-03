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
                                <h3 class="card-title">List Sản phẩm</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Id đơn hàng</th>
                                        <th style="width: 1000px"></th>
                                        <th>Tình trạng đơn</th>
                                        <th>Tên người đặt</th>
                                        <th>Tổng giá tiền</th>
                                        <th>email</th>
                                        <th>Địa chỉ ship</th>
                                        <th>Số điện thoại</th>
                                        <th>Loại hình thanh toán</th>
                                        <th>Tình trạng thanh toán</th>
                                        <th>Mô tả</th>
                                        <th>Ngày tạo</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($order as $key =>$value)
                                        <tr>
                                            <td>{{$key}}</td>
                                            <td>{{ $value->order_id}}</td>
                                            <td>
                                                <a class="btn btn-primary btn-sm" href="{{route('admin.order.detail',$value->order_id)}}">
                                                    <i class="fas fa-folder">
                                                    </i>
                                                    Chi tiết
                                                </a>
                                                <a class="btn btn-info btn-sm"
                                                   href="{{route('admin.order.edit',$value->order_id)}}">
                                                    <i class="fas fa-pencil-alt">
                                                    </i>
                                                    Cập nhật
                                                </a>
                                                <a class="btn btn-danger btn-sm"
                                                   href="{{route('admin.order.delete',$value->order_id)}}" onclick="return confirm('Bạn có muốn xóa?')">
                                                    <i class="fas fa-trash">
                                                    </i>
                                                    Xóa
                                                </a>
                                            </td>
                                            <td>
                                                @if($value->order_status =='0')
                                                    Chưa giao xe
                                                @elseif ($value->order_status =='1')
                                                    Đã giao xe
                                                @elseif ($value->order_status =='2')
                                                    Đã nhận cọc chưa giao xe
                                                @elseif($value->order_status =='3')
                                                    Đang trong quá trình giao xe
                                                @else
                                                    Đã giao xe đang ghi nợ
                                                @endif
                                            </td>
                                            <td>{{$value->full_name_ship}}</td>
                                            <td> {{number_format($value->total)}}</td>
                                            <td>{{$value->email_ship}}</td>
                                            <td>{{$value->address_ship}}</td>
                                            <td>{{$value->phone_no_ship}}</td>
                                            <td>
                                                @if($value->payment_method == '0')
                                                    Ghi nợ
                                                @elseif($value->payment_method == '1')
                                                    Nhận Tiền Mặt
                                                @else
                                                    Thanh toán bằng ATM
                                                @endif
                                            </td>
                                            <td>
                                                @if($value->payment_status == '0')
                                                    Chưa thanh toán
                                                @else
                                                    Đã thanh toán
                                                @endif
                                            </td>
                                            <td>{{$value->description_ship}}</td>
                                            <td>{{$value->order_create}}</td>
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
