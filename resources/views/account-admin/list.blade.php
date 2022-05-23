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
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h5><i class="icon fas fa-check"></i> Thành công!</h5>
                                <?php echo $message ?>
                            </div>
                            <?php  Session()->put('message',null);
                            }
                            ?>

                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Danh sách tài khoản admin</h3>
                            </div>

                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>admin_id</th>
                                        <th></th>
                                        <th>Tên</th>
                                        <th>email</th>
                                        <th>số điện thoại</th>
                                        <th>vai trò</th>
                                        <th>ngày tạo</th>
                                        <th>ngày cập nhật</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(!empty($admin))
                                        @foreach($admin as $key => $value)
                                            <tr>
                                                <td>{{ $value->admin_id }}</td>
                                                <td><a class="btn btn-info btn-sm" title="Sửa" href="{{ route('admin.edit-admin', $value->admin_id) }}">
                                                        <i class="fas fa-pencil-alt">
                                                        </i>
                                                    </a>
                                                    @if(session()->get('status_admin') == '1')
                                                    <a class="btn btn-danger btn-sm" title="Xóa" href="{{ route('admin.delete-admin', $value->admin_id) }}" onclick="return confirm('Bạn có muốn xóa?')">
                                                        <i class="fas fa-trash">
                                                        </i>
                                                    </a>
                                                    @endif
                                                </td>
                                                <td>{{ $value->name }}</td>
                                                <td>{{ $value->email }}</td>
                                                <td>{{ $value->phone_no }}</td>
                                                <td>
                                                    @if($value->status_admin =='0')
                                                        Shipper
                                                    @else
                                                        Admin
                                                    @endif
                                                </td>
                                                <td>{{ $value->created_at }}</td>
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
