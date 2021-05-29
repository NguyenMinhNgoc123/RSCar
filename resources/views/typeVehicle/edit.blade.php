@extends('admin.layout')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Cập nhật loại xe</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Cập nhật loại xe</li>
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
                    <form action="{{ route('admin.typeVehicle.update', $typeVehicle->type_vehicles_id) }}" method="POST">
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
                                    <label for="inputName">Loại xe</label>
                                    <input type="text" id="inputName" name="tv_name" class="form-control"
                                           value="{{$typeVehicle->tv_name}}">
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="update" value="Cập nhật loại xe"
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
