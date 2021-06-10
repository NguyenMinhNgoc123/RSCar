@extends('admin.layout')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Thêm xe mới</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Thêm xe mới</li>
                        </ol>
                    </div>
                </div>
                <div>
                    <?php
                    $message = Session()->get('message');
                    if ($message){ ?>
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-ban"></i> Lỗi nhập!</h5>
                        <?php echo $message ?>
                    </div>
                    <?php  Session()->put('message', null);
                    }
                    ?>

                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <form action="{{route('admin.product.save')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
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
                                    <label for="inputStatus">Loại xe</label>
                                    <select id="inputStatus" name="type_vehicles_id" class="form-control custom-select">
                                        <option selected disabled>chọn một</option>
                                        @if(!empty($type_vehicles))
                                            @foreach($type_vehicles as $key3 => $value3)
                                                <option value="{{$key3}}">{{$value3}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputStatus">Hình thức</label>
                                    <select id="inputStatus" name="type_id" class="form-control custom-select">
                                        <option selected disabled>chọn một</option>
                                        @if(!empty($post_types))
                                            @foreach($post_types as $key => $value)
                                                <option value="{{ $key }}">{{$value}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Nhà sản xuất xe (Honda,Yamaha,..)</label>
                                    <select id="inputStatus" name="brand_id" class="form-control custom-select">
                                        <option selected disabled>chọn một</option>
                                        @if(!empty($brands))
                                            @foreach($brands as $key1 => $value1)
                                                <option value="{{$key1}}">{{$value1}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Dòng xe (SH,wave,..)</label>
                                    <input type="text" id="inputName" name="name_car" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Dung tích xe</label>
                                    <input type="text" id="inputName" name="capacity" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Đăng ký tháng/năm</label>
                                    <input type="text" id="inputName" name="Year_of_registration" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputStatus">Tình trạng xe</label>
                                    <input type="text" id="inputName" name="status_car" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputStatus">Model</label>
                                    <input type="text" id="inputName" name="model" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputStatus">Số km đã đi</label>
                                    <input type="text" id="inputName" name="number_kilometers" class="nbk form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputClientCompany">Địa chỉ</label>
                                    <input type="text" id="inputClientCompany" name="address" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Tiêu đề (caption)</label>
                                    <input type="text" id="inputName" name="caption" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputDescription">Mô tả chi tiết</label>
                                    <textarea id="inputDescription" class="form-control" name="description"
                                              rows="4"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Giá tiền (cần bán)</label>
                                    <input type="text" id="inputName" name="price" class="money form-control" >
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Tiền cọc (cần bán,cho thuê)</label>
                                    <input type="text" id="inputName" name="deposit" class="deposit form-control" >
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Số lượng</label>
                                    <input type="text" id="inputName" name="quantity" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Giảm giá (%)</label>
                                    <input type="text" id="inputName" name="discount" class="form-control">
                                </div>
                                <div class="form-group" style="">
                                    <label for="inputStatus">Tùy chọn </label>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" name="sale_week" id="customCheckbox1" value="1">
                                        <label for="customCheckbox1" class="custom-control-label">Giảm giá trong tuần đầu</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" name="best_seller" id="customCheckbox2" value="1">
                                        <label for="customCheckbox2" class="custom-control-label">Hiện thị trong tin bán chạy nhất</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" name="hot_car" id="customCheckbox3" value="1">
                                        <label for="customCheckbox3" class="custom-control-label">Hiển thị logo hot</label>
                                    </div>
                                </div>
                                <div class="form-group" style="">
                                    <label for="exampleInputFile">Hình ảnh (phải có ít nhất 3 ảnh)</label>
                                    <div class="control-group input-group" style="margin-top:10px">
                                        <input type="file" name="images[]" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group" style="">
                                    <div class="control-group input-group" style="margin-top:10px">
                                        <input type="file" name="images[]" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group increment" style="" >
                                    <div class="input-group" >
                                        <div class="custom-file " >
                                            <div class="input-group control-group " >
                                                <input type="file" name="images[]" class="form-control">
                                                <div class="input-group-btn">
                                                    <button class="btn btn-primary add" type="button"><i class="glyphicon glyphicon-plus"></i>Thêm Ảnh</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group hide" style="" >
                                    <div class="clone ">
                                        <div class="control-group input-group" style="margin-top:10px">
                                            <input type="file" name="images[]" class="form-control">
                                            <div class="input-group-btn">
                                                <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="submit" value="Thêm sản phẩm"
                                           class="btn btn-success float-right">
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
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="{{asset('/AdminLTE-master/simple.money.format.js')}}"></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.17/vue.min.js'></script>
        <script src='https://unpkg.com/vue-upload-multiple-image@1.1.6/dist/vue-upload-multiple-image.js'></script>

        <script type="text/javascript">
            $('.money').simpleMoneyFormat();
        </script>
        <script type="text/javascript">
            $('.deposit').simpleMoneyFormat();
        </script>
        <script type="text/javascript">
            $('.nbk').simpleMoneyFormat();
        </script>
    </div>
@endsection
