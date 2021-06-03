@extends('user.profile.layout')
@section('content_profile')
    <section class="col-main col-sm-9 col-xs-12 wow bounceInUp animated animated"
             style="visibility: visible;">
        <div>
            <?php
            $message = Session()->get('message');
            if ($message){ ?>
            <div class="alert alert-primary alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i> Lỗi!</h5>
                <?php echo $message ?>
            </div>
            <?php  Session()->put('message', null);
            }
            ?>
        </div>
        <div class="my-account">
        @foreach($profile as $value)
            <!--page-title-->
                <!-- BEGIN DASHBOARD-->
                <div class="dashboard">
                    <div class="welcome-msg">
                        <p class="hello"><strong>Hello, {{Session()->get('full_name')}}! ----- <a href="{{route('list')}}" >Quay lại</a></strong></p>
                        <br>
                        <p><strong>TRANG CÁ NHÂN</strong></p>
                    </div>
                </div>
                <div class="col2-set">
                    <div class="col-1">
                        <div class="box">
                            <div class="box-title">
                                <a href="#"></a></div>
                            <!--box-title-->
                            <div class="box-content">
                                <p><strong>Tên của bạn : </strong>
                                    {{$value->full_name}}
                                    <br><br>
                                    <strong>Email của bạn :</strong> {{$value->email}}<br><br>
                                </p>
                            </div>
                            <!--box-content-->
                            <div class="box-content">
                                <p><strong>Mật khẩu : </strong><a href="" >Đổi mật khẩu</a><br><br>
                                    <strong>Số điện thoại : </strong> {{$value->phone_no}}<br><br>
                                </p>
                            </div>
                        </div>
                        <!--box-->
                    </div>
                    <div class="col-2">
                        <div class="box">
                            <div class="box-title">
                                <!--box-title-->
                                <div class="box-content">
                                    <div class="box-content">
                                        <p><strong>Giới tính :</strong> {{$value->sex}}<br><br>
                                            <strong>Ngày tạo :</strong> {{$value->created_at}}<br><br>
                                        </p>
                                    </div>
                                </div>
                                <!--box-content-->
                                <div class="box-content">
                                    <p><strong>Ngày cập nhật :</strong> {{$value->updated_at}}<br>
                                    </p>
                                </div>
                            </div>
                            <!--box-->
                        </div>
                    </div>
                </div>
            @endforeach
            <br>
            <br>
        </div>
    </section>
@endsection
