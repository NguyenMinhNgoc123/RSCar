@extends('admin.layout')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Thêm tài khoản</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Thêm tài khoản</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <form action="{{route('admin.save-admin')}}" method="post">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div>
                            @if ($errors->any())
                                <div class="alert alert-success alert-danger">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <h5><i class="icon fas fa-check"></i> Lỗi!</h5>
                                    @foreach ($errors->all() as $error)
                                        {{ $error }}
                                    @endforeach
                                </div>
                            @endif
                        </div>
                        <div>
                            <?php
                            $message = Session()->get('message');
                            if ($message){ ?>
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h5><i class="icon fas fa-check"></i> Thành Công!</h5>
                                <?php echo $message ?>
                            </div>
                            <?php  Session()->put('message', null);
                            }
                            ?>

                        </div>
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
                                    <label for="inputName">Họ và tên</label>
                                    <input type="text" id="inputName" name="name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">email</label>
                                    <input type="text" id="inputName" name="email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Mật khẩu</label>
                                    <input type="password" id="inputName" name="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Nhập lại mật khẩu</label>
                                    <input type="password" id="inputName" name="confirm_password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Số điện thoại</label>
                                    <input type="text" id="inputName" name="phone_no" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelectRounded0">Vai trò</label>
                                    <select class="custom-select rounded-0" name="status_admin" id="exampleSelectRounded0">
                                        <option value="0" selected disabled>chọn một</option>
                                        <option value="0">shipper</option>
                                        <option value="1">Admin chính</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="submit" value="Thêm tài khoản" class="btn btn-success float-right">
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="row">
                    <div class="col-12">
                    </div>
                </div>
            </form>
        </section>
        <!-- /.content -->
    </div>
@endsection
