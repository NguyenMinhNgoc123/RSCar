@extends('admin.layout')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Cập nhật giày </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Cập nhật sản phẩm</li>
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
            <form action="{{route('admin.product.update',$productCar->product_id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Sản phẩm : {{$productCar->product_id}}</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                            title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="inputStatus">Loại giày</label>
                                    <select id="inputStatus" name="type_shoes_id" class="form-control custom-select">
                                        @if(!empty($type_shoes))
                                            @foreach($type_shoes as $key3 => $value3)
                                                <option value="{{$key3}}" {{ old('type_shoes_id', $key3) == $productCar->type_shoes_id ? 'selected' : ''  }} >{{$value3}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputStatus">Hình thức</label>
                                    <select id="inputStatus" name="type_id" class="form-control custom-select">
                                        @if(!empty($post_types))
                                            @foreach($post_types as $key => $value)
                                                <option value="{{ $key }}" {{ old('type_id', $key) == $productCar->type_id ? 'selected' : ''  }} >{{$value}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Thương hiệu</label>
                                    <select id="inputStatus" name="brand_id" class="form-control custom-select">

                                        @if(!empty($brands))
                                            @foreach($brands as $key1 => $value1)
                                                <option value="{{$key1}}" {{ old('brand_id', $key1) == $productCar->brand_id ? 'selected' : ''  }}>{{$value1}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputName">size</label>
                                    <input type="number" id="inputName" name="size" class="form-control" value="{{$productCar->size}}">
                                </div>
                                <div class="form-group">
                                    <label for="inputClientCompany">Giá</label>
                                    <input type="text" id="inputClientCompany money" name="price" class="form-control money" value="{{$productCar->price}}">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Tiêu đề (caption)</label>
                                    <input type="text" id="inputName" name="caption" class="form-control" value="{{$productCar->caption}}">
                                </div>
                                <div class="form-group">
                                    <label for="inputDescription">Mô tả chi tiết</label>
                                    <textarea id="inputDescription" class="form-control" name="description" rows="4" >{{$productCar->description}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Số lượng</label>
                                    <input type="text" id="inputName" name="quantity" class="form-control" value="{{$productCar->quantity}}">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Giảm giá (%)</label>
                                    <input type="text" id="inputName" name="discount" class="form-control" value="{{$productCar->discount}}">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Địa chỉ (nếu có)</label>
                                    <input type="text" id="inputName" name="address" class="form-control" value="{{$productCar->address}}">
                                </div>
                                <div class="form-group" style="">
                                    <label for="exampleInputFile">Hình ảnh</label>
                                    <div class="control-group input-group" style="margin-top:10px">
                                        @foreach($productPhoto as $value2)
                                            <i>{{$value2->id_photo}} : </i>&nbsp;
                                            <img src="{{asset("/product-images/{$value2->p_photo}")}}" height="100" width="125" style="margin: 10px" alt="">
                                        @endforeach
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName">chọn ảnh cần thay đổi</label>
                                    <select id="inputStatus" name="id_photo" class="form-control custom-select">
                                        <option selected>chọn một</option>
                                        @foreach($productPhoto as $value2)
                                            <option value="{{$value2->id_photo}}">{{$value2->id_photo}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="file" name="images" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <a href="{{route('admin.product.list')}}"
                                       class="btn btn-primary float-left">Quay lại</a>
                                    <input type="submit" name="submit" value="Cập nhật sản phẩm"
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
            $('.nbk').simpleMoneyFormat();
        </script>
    </div>
@endsection
