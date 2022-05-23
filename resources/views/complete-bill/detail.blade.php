@extends('admin.layout')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Bảng</h1>
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
                    @foreach($order as $key1 => $value1)
                        @foreach($admin as $key => $value)
                            <div class="col-12">
                                <div class="invoice p-3 mb-3">
                                    <!-- title row -->
                                    <div class="row">
                                        <div class="col-12">
                                            <h4>
                                                <i class="fas fa-globe"></i> Chi tiết
                                                <small class="float-right">Ngày lập : {{$value1->order_create}}</small>
                                            </h4>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- info row -->
                                    <div class="row invoice-info">
                                        <div class="col-sm-4 invoice-col">
                                            From
                                            <address>
                                                <strong>{{$value->name}}</strong><br>
                                                Số điện thoại: {{$value->phone_no}}<br>
                                                Email: {{$value->email}}
                                            </address>
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-4 invoice-col">
                                            To
                                            <address>
                                                <strong>{{$value1->full_name_ship}}</strong><br>
                                                {{$value1->address_ship}}<br>
                                                Số điện thoại: {{$value1->phone_no_ship}}<br>
                                                Email: {{$value1->email_ship}}
                                            </address>
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-4 invoice-col">
                                            <b>Invoice #007612</b><br>
                                            <br>
                                            <b>Mã đơn :</b> {{$value1->order_id}}<br>
                                            <b>Tình trạng:</b>
                                            @if($value1->payment_status == '0')
                                                <strong>Chưa thanh toán</strong>
                                            @else
                                                <strong>Chưa thanh toán</strong>
                                            @endif
                                            <br>
                                            <b>Liên hệ:</b> {{$value->email}}
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->

                                    <!-- Table row -->
                                    <div class="row">
                                        <div class="col-12 table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                <tr>
                                                    <th>Mã sản phẩm</th>
                                                    <th>Tên sản phẩm</th>
                                                    <th>hình thức</th>
                                                    <th>Số lượng</th>
                                                    <th>Giá tiền</th>
                                                    <th>ngày mượn</th>
                                                    <th>ngày trả</th>
                                                    <th>Chi tiết</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($orderDetails as $key2 =>$value2)
                                                    <tr>
                                                        <td>{{$value2->product_id}}</td>
                                                        <td>{{$value2->name_car}}</td>
                                                        <td>{{$value2->type_name}}</td>
                                                        <td>{{$value2->product_quantity}}</td>
                                                        <td>{{number_format($value2->product_price)}}đ</td>
                                                        <td>{{$value2->order_detail_create}}</td>
                                                        <td>{{$value2->order_detail_end}}</td>
                                                        <td><a href="{{route('admin.product.show',$value2->product_id)}}"><i class="fas fa-eye"></i></a></td>
                                                    </tr>'
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->

                                    <div class="row">
                                        <!-- accepted payments column -->
                                        <div class="col-6">

                                        </div>
                                        <!-- /.col -->
                                        <div class="col-6">
                                            <p class="lead">Ngày lập : {{$value1->order_create}}</p>

                                            <div class="table-responsive">
                                                <table class="table">
                                                    <tr>
                                                        <th style="width:50%">tiền sản phẩm:</th>
                                                        <td>{{$value1->total}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Shipping:</th>
                                                        <td>0đ</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Tổng tiền :</th>
                                                        <td>{{number_format($value1->total)}}đ</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->

                                    <!-- this row will not appear when printing -->
                                    <div class="row no-print">
                                        <div class="col-12">
                                            <a type="button" href="{{route('admin.order.list')}}" class="btn btn-success float-right"><i class="far fa-credit-card"></i>
                                                Quay lại
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card -->
                            </div>
                    @endforeach
                @endforeach
                <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
