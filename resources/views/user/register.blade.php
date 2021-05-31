@extends('pages.frontend.welcome')
@section('title', 'ĐĂNG KÝ TÀI KHOẢN')
@section('content')
    @include('pages.banner')
    <div class="main-container col1-layout wow bounceInUp animated animated" style="visibility: visible;">

        <div class="main">
            <div class="account-login container">
                <!--page-title-->
                <div>
                    <?php
                    $message = Session()->get('error');
                    if ($message){ ?>
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-check"></i> lỗi!</h5>
                        <?php echo $message ?>
                    </div>
                    <?php  Session()->put('error',null);
                    }
                    ?>

                </div>
                <form action="{{route('add-user')}}" method="post" id="login-form">
                    @csrf
                    <input name="form_key" type="hidden" value="EPYwQxF6xoWcjLUr">
                    <fieldset class="col2-set">
                        <div class="col-1 new-users">
                            <strong>ĐĂNG KÝ TRẢI NGHIỆM</strong>
                            <div class="content">
                                <ul class="form-list">
                                    <li>
                                        <label for="email">Email<em class="required">*</em></label>
                                        <div class="input-box">
                                            <input type="text" name="email_regis" value="" id="email"
                                                   class="input-text required-entry validate-email">
                                        </div>
                                    </li>
                                    <li>
                                        <label for="name">Tên khách hàng<em class="required">*</em></label>
                                        <div class="input-box">
                                            <input type="text" name="full_name" value="" id="email"
                                                   class="input-text required-entry validate-email">
                                        </div>
                                    </li>
                                    <li>
                                        <label for="name">Số điện thoại<em class="required">*</em></label>
                                        <div class="input-box">
                                            <input type="text" name="phone_no" value="" id="email"
                                                   class="input-text required-entry validate-email">
                                        </div>
                                    </li>
                                    <li>
                                        <label for="name">Giới tính<em class="required">*</em></label>
                                        <div class="input-box">
                                            <input type="text" name="sex" value="" id="email"
                                                   class="input-text required-entry validate-email">
                                        </div>
                                    </li>
                                    <li>
                                        <label for="pass">Mật khẩu<em class="required">*</em></label>
                                        <div class="input-box">
                                            <input type="password" name="password"
                                                   class="input-text required-entry validate-password" id="pass"
                                                   title="Password">
                                        </div>
                                    </li>
                                    <li>
                                        <label for="pass">Nhập lại mật khẩu <em class="required">*</em></label>
                                        <div class="input-box">
                                            <input type="password" name="confirm_password"
                                                   class="input-text required-entry validate-password" id="pass"
                                                   title="confirm Password">
                                        </div>
                                    </li>
                                </ul>

                                <p class="required">* Bắt buộc</p>

                                <div class="buttons-set">

                                    <button type="submit" class="button register" title="Login" name="send" id="send2">
                                        <span>ĐĂNG KÝ NGAY</span></button>

                                </div> <!--buttons-set-->
                            </div> <!--content-->
                        </div>
                        <div class="col-2 registered-users">

                        </div> <!--col-2 registered-users-->
                    </fieldset> <!--col2-set-->
                </form>

            </div> <!--account-login-->

        </div><!--main-container-->

    </div> <!--col1-layout-->





    <!-- For version 1,2,3,4,6 -->
@endsection
