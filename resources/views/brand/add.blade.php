@extends('admin.layout')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Thêm hãng</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Thêm hãng Xe</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <form action="{{route('admin.brandProduct.save')}}" method="post">
                {{ csrf_field() }}
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
                                    <label for="inputName">Hãng</label>
                                    <input type="text" id="inputName" name="brand_name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="submit" value="Thêm Hãng" class="btn btn-success float-right">
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
