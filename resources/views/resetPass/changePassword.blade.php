@extends('pages.frontend.welcome')
@section('content')
    @include('pages.banner')

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
    <ol  onLoad="noBack();" onpageshow="if (event.persisted) noBack();" onUnload="" class="one-page-checkout" id="checkoutSteps">
        <li id="opc-billing" class="section allow active">
            <div class="step-title"><span class="number">1</span>
                <h3 class="one_page_heading">XÁC NHẬN MẬT KHẨU</h3>
            </div>
            <div id="checkout-step-billing" class="step a-item">
                <form id="co-billing-form" action="{{route('guest.change-password-forgot')}}" method="post">
                    @csrf
                    <fieldset class="group-select">
                        <ul class="">
                            <li id="billing-new-address-form">
                                <fieldset>
                                    <ul>
                                        <li class="fields">
                                            <div class="input-box">
                                                <label for="billing:city">Mật khẩu mới :<em
                                                        class="required">*</em></label>
                                                <input type="password"  name="password_new"
                                                       value="" class="input-text  required-entry"
                                                       id="billing:city">
                                            </div>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li class="fields">
                                            <div class="input-box">
                                                <label for="billing:city">Nhập lại mật khẩu :<em
                                                        class="required">*</em></label>
                                                <input type="password"  name="confirm_password"
                                                       value="" class="input-text  required-entry"
                                                       id="billing:city">
                                            </div>
                                        </li>
                                    </ul>

                                </fieldset>
                            </li>
                        </ul>
                        <div class="buttons-set" id="billing-buttons-container">
                            <p class="required">* Bắt Buộc</p>
                            <button type="submit" title="Continue" class="button continue"><span>ĐỔI MẬT KHẨU</span>
                            </button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </li>
    </ol>
    <script type="text/javascript">
        window.history.forward();
        function noBack()
        {
            window.history.forward();
        }
    </script>
@endsection
