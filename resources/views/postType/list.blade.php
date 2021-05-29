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
                            <li class="breadcrumb-item active">Danh mục hình thức</li>
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
                                <h3 class="card-title">Danh sách Hình thức</h3>
                            </div>

                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>id</th>
                                        <th></th>
                                        <th>Tên hình thức</th>
                                        <th>Ngày tạo</th>
                                        <th>ngày cập nhật</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(!empty($postType))
                                        @foreach($postType as $key => $value)
                                            <tr>
                                                <td>{{ $value->type_id }}</td>
                                                <td><a class="btn btn-info btn-sm" href="{{ route('admin.postType.edit',$value->type_id) }}">
                                                        <i class="fas fa-pencil-alt">
                                                        </i>
                                                        Edit
                                                    </a>
                                                    <a class="btn btn-danger btn-sm" href="{{ route('admin.postType.delete',$value->type_id) }}" onclick="return confirm('Bạn có muốn xóa?')">
                                                        <i class="fas fa-trash">
                                                        </i>
                                                        Delete
                                                    </a>
                                                </td>
                                                <td>{{ $value->type_name }}</td>
                                                <td>{{ $value->created }}</td>
                                                <td>{{ $value->updated }}</td>

                                            </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
                                    {{--                                    <tfoot>--}}
                                    {{--                                    <tr>--}}
                                    {{--                                        <th>Rendering engine</th>--}}
                                    {{--                                        <th>Browser</th>--}}
                                    {{--                                        <th>Platform(s)</th>--}}
                                    {{--                                        <th>Engine version</th>--}}
                                    {{--                                        <th>CSS grade</th>--}}
                                    {{--                                    </tr>--}}
                                    {{--                                    </tfoot>--}}
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
