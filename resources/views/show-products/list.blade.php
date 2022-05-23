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
                            <li class="breadcrumb-item active">Danh mục hãng</li>
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
                        <div>
                            <?php
                            $message = Session()->get('message');
                            if ($message){ ?>
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;
                                </button>
                                <h5><i class="icon fas fa-check"></i> Thành công!</h5>
                                <?php echo $message ?>
                            </div>
                            <?php  Session()->put('message', null);
                            } else {

                            }
                            ?>

                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Danh sách</h3>
                            </div>

                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>Mã sản phẩm</th>
                                        <th> Logo Hot</th>
                                        <th> Logo giá tốt</th>
                                        <th> Giảm giá tuần</th>
                                        <th>ngày cập nhật</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(!empty($show))
                                        @foreach($show as $key => $value)
                                            <?php
                                            date_default_timezone_set('Asia/Ho_Chi_Minh');
                                            $date1 = date('Y/m/d H:i:s');

                                            ?>
                                            <tr>
                                                <td style="width: 100px">{{ $value->product_id }}</td>
                                                <td style="width: 100px">
                                                    @if($value->hot_car == 1)
                                                        <a href="{{route('admin.manage-show.un-active-hot',$value->product_id)}}" class="btn btn-block btn-secondary btn-lg">Tắt</a>
                                                    @else
                                                        <a href="{{route('admin.manage-show.active-hot',$value->product_id)}}" class="btn btn-block btn-primary btn-lg">Bật</a>
                                                    @endif
                                                </td>
                                                <td style="width: 150px">
                                                @if($value->best_seller == 1)
                                                        <a href="{{route('admin.manage-show.un-active-bestseller',$value->product_id)}}" class="btn btn-block btn-secondary btn-lg">Tắt</a>
                                                    @else
                                                        <a href="{{route('admin.manage-show.active-bestseller',$value->product_id)}}" class="btn btn-block btn-primary btn-lg">Bật</a>
                                                    @endif
                                                </td>
                                                <td style="width: 150px">
                                                @if($value->sale_week == 1)
                                                        <a href="{{route('admin.manage-show.un-active-sale',$value->product_id)}}" class="btn btn-block btn-secondary btn-lg">Tắt</a>
                                                    @else
                                                        <a href="{{route('admin.manage-show.active-sale',$value->product_id)}}" class="btn btn-block btn-primary btn-lg">Bật</a>
                                                    @endif
                                                </td>
                                                <td>{{ $value->updated_at }}</td>

                                            </tr>
                                        @endforeach
                                    @endif
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
