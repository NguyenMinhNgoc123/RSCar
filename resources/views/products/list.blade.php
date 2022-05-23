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
                                        <th>Mã sản phẩm</th>
                                        <th></th>
                                        <th>Thương hiệu</th>
                                        <th>Trạng thái</th>
                                        <th>Giá tiền</th>
                                        <th>số lượng</th>
                                        <th>size</th>
                                        <th>Ngày tạo</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($productCar as $key =>$value)
                                        <tr>
                                            <td>{{$key}}</td>
                                            <td>{{ $value->product_id}}</td>
                                            <td>
                                                <a class="btn btn-primary btn-sm" title="Chi tiết"
                                                   href="{{route('admin.product.show',$value->product_id)}}">
                                                    <i class="fas fa-folder">
                                                    </i>
                                                </a>
                                                <a class="btn btn-info btn-sm" title="sửa"
                                                   href="{{route('admin.product.edit',$value->product_id)}}">
                                                    <i class="fas fa-pencil-alt">
                                                    </i>
                                                </a>
                                                <a class="btn btn-danger btn-sm" title="Xóa"
                                                   href="{{route('admin.product.delete',$value->product_id)}}"
                                                   onclick="return confirm('Bạn có muốn xóa?')">
                                                    <i class="fas fa-trash">
                                                    </i>
                                                </a>
                                                @if($value->status == 4)
                                                <a class="btn btn-secondary btn-sm" title="Hiện"
                                                   href="{{route('admin.product.active',$value->product_id)}}">
                                                    <i class="fas fa-eye">
                                                    </i>
                                                </a>
                                                @else
                                                    <a class="btn btn-secondary btn-sm" title="Ẩn"
                                                       href="{{route('admin.product.un-active',$value->product_id)}}">
                                                        <i class="fas fa-eye-slash">
                                                        </i>
                                                    </a>
                                                @endif
                                            </td>
                                            <td>{{$value->brand_name}}</td>
                                            <td>
                                                @if($value->status == '0')
                                                    <button class="btn btn-success" >Đang bán</button>
                                                @elseif($value->status == '1')
                                                    <button class="btn btn-danger" >Hàng bán chạy</button>
                                                @endif
                                            </td>
                                            <td> {{number_format($value->price).'đ'}}</td>
                                            <td>{{ $value->quantity }}</td>
                                            <td>{{ $value->size }}</td>
                                            <td>{{ $value->created_at }}</td>
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
