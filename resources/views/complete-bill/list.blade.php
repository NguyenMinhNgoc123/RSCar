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
                                        <th></th>
                                        <th >Tình trạng đơn</th>
                                        <th >Loại hình thanh toán</th>
                                        <th >Tình trạng thanh toán</th>
                                        <th>Tổng giá tiền</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($order as $key =>$value)
                                        <tr>
                                            <td>{{$key}}</td>
                                            <td>{{ $value->order_id}}</td>
                                            <td>
                                                <a class="btn btn-primary btn-sm" title="Xem chi tiết" href="{{route('admin.order.detail-completed',$value->order_id)}}">
                                                    <i class="fas fa-folder">
                                                    </i>

                                                </a>
{{--                                                <a class="btn btn-info btn-sm" title="Sửa"--}}
{{--                                                   href="{{route('admin.order.edit',$value->order_id)}}">--}}
{{--                                                    <i class="fas fa-pencil-alt">--}}
{{--                                                    </i>--}}
{{--                                                </a>--}}
{{--                                                <a class="btn btn-danger btn-sm" title="Xóa đơn"--}}
{{--                                                   href="{{route('admin.order.delete',$value->order_id)}}" onclick="return confirm('Bạn có muốn xóa?')">--}}
{{--                                                    <i class="fas fa-trash">--}}
{{--                                                    </i>--}}
{{--                                                </a>--}}
                                            </td>
                                            <td>
                                                @if($value->order_status =='0')
                                                    <strong>Chưa giao </strong>
                                                @elseif ($value->order_status =='1')
                                                    <strong>Đã giao </strong>
                                                @elseif ($value->order_status =='2')
                                                    <strong>Đã nhận cọc chưa giao </strong>
                                                @elseif($value->order_status =='3')
                                                    <strong>Đang giao xe</strong>
                                                @elseif($value->order_status =='4')
                                                    <strong>Đã giao đang ghi nợ</strong>
                                                @else
                                                    <strong>Hoàn Thành</strong>
                                                @endif
                                            </td>
                                            <td>
                                                @if($value->payment_method == '0')
                                                    <strong>Ghi nợ</strong>
                                                @elseif($value->payment_method == '1')
                                                    <strong>Nhận Tiền Mặt</strong>
                                                @else
                                                    <strong>Thanh toán bằng ATM</strong>
                                                @endif
                                            </td>
                                            <td>
                                                @if($value->payment_status == '0')
                                                    <strong>Chưa thanh toán</strong>
                                                @else
                                                    <strong>Đã thanh toán</strong>
                                                @endif
                                            </td>
                                            <td> {{number_format($value->total)}}đ</td>
                                        </tr>
                                    @endforeach
                                    </tbody>

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
