@extends('admin.layout')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>CẬP NHẬT</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Cập nhật</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
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
                    <form action="{{ route('admin.order.update', $order->order_id) }}" method="POST">
                        {{ csrf_field() }}
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Sản phẩm</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                            title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleSelectRounded0">Cập nhật tình trạng đơn</label>
                                    <select class="custom-select rounded-0" name="order_status" id="exampleSelectRounded0">
                                        <option value="{{$order->order_status}}" selected >chọn một</option>
                                        <option value="0">Chưa giao xe</option>
                                        @if($order->payment_status == 1)
                                        <option value="1">Đã giao xe</option>
                                        <option value="2">Đã nhận cọc chưa giao xe</option>
                                        <option value="3">Đang trong quá trình giao xe</option>
                                        <option value="5">Đã Khứ hồi xe và hoàn tất đơn</option>
                                        @endif
                                    </select>
                                </div>
                                @if(session()->get('status_admin') == '1')
                                <div class="form-group">
                                    <label for="exampleSelectRounded0">Tình trạng thanh toán</label>
                                    <select class="custom-select rounded-0" name="payment_status" id="exampleSelectRounded0">
                                        <option value="{{$order->payment_status}}" selected >chọn một</option>
                                        <option value="0">Chưa thanh toán</option>
                                        <option value="1">Đã Thanh toán</option>
                                    </select>
                                </div>
                                @else
                                    <input type="hidden" name="payment_status" value="{{$order->payment_status}}">
                                @endif
                                <div class="form-group">
                                    <a class="btn btn-primary float-left" href="{{route('admin.order.list')}}">Quay lại</a>
                                    <input type="submit" name="update" value="Cập nhật"
                                           class="btn btn-success float-right">
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </form>
                    <!-- /.card -->
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="row">
                <div class="col-12">
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
