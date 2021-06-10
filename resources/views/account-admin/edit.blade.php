@extends('admin.layout')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Cập nhật Tài khoản</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Cập nhật tài khoản</li>
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
                    <form action="{{ route('admin.update-admin', $admin->admin_id) }}" method="POST">
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
                                    @if(session()->get('status_admin') == '1')
                                    <label for="exampleSelectRounded0">Vai trò</label>
                                    <select class="custom-select rounded-0" name="status_admin" id="exampleSelectRounded0">
                                        <option value="{{$admin->status_admin}}" selected >chọn một</option>
                                        <option value="0">shipper</option>
                                        <option value="1">Admin Chính</option>
                                    </select>
                                    @else
                                        <input type="hidden" name="status_admin" value="{{$admin->status_admin}}">
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Tên</label>
                                    <input type="text" id="inputName" name="name" class="form-control"
                                           value="{{$admin->name}}">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Số Điện thoại</label>
                                    <input type="text" id="inputName" name="phone_no" class="form-control"
                                           value="{{$admin->phone_no}}">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Mật khẩu cũ</label>
                                    <input type="password" id="inputName" name="old_password" class="form-control"
                                           value="">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Mật khẩu mới</label>
                                    <input type="password" id="inputName" name="password" class="form-control"
                                           value="">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Nhập lại mật khẩu</label>
                                    <input type="password" id="inputName" name="confirm_password" class="form-control"
                                           value="">
                                </div>
                                <div class="form-group">
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
