@extends('user.profile.layout')
@section('content_profile')

    <section class="col-main col-sm-9 wow bounceInUp animated animated" style="visibility: visible;">
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
        <ol class="one-page-checkout" id="checkoutSteps">
            <li id="opc-billing" class="section allow active">
                <div class="step-title"><span class="number">1</span>
                    <h3 class="one_page_heading">ĐỔI MẬT KHẨU</h3>
                </div>
                <div id="checkout-step-billing" class="step a-item">
                    <form id="co-billing-form" action="{{route('user.save-password')}}" method="post">
                        @csrf
                        <fieldset class="group-select">
                            <ul class="">
                                <li id="billing-new-address-form">
                                    <fieldset>
                                        <ul>
                                            <li class="fields">
                                                <div class="input-box">
                                                    <label for="billing:city">Mật khẩu mới<em
                                                            class="required">*</em></label>
                                                    <input type="password" title="City" name="password_old"
                                                           value="" class="input-text  required-entry"
                                                           id="billing:city">
                                                </div>
                                            </li>
                                            <li class="fields">
                                                <div class="input-box">
                                                    <label for="billing:city">Mật khẩu mới<em
                                                            class="required">*</em></label>
                                                    <input type="password" title="City" name="new_password"
                                                           value="" class="input-text  required-entry"
                                                           id="billing:city">
                                                </div>
                                            </li>
                                            <li class="fields">
                                                <div class="input-box">
                                                    <label for="billing:telephone">Nhập lại mật khẩu<em
                                                            class="required">*</em></label>
                                                    <input type="password" name="confirm_password"
                                                           value="" title="Telephone"
                                                           class="input-text  required-entry"
                                                           id="billing:telephone">
                                                </div>
                                            </li>
                                        </ul>
                                    </fieldset>
                                </li>
                            </ul>
                            <div class="buttons-set" id="billing-buttons-container">
                                <p class="required">* Bắt Buộc</p>
                                <button type="submit" title="Continue" class="button continue"><span>Continue</span>
                                </button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </li>
        </ol>
        <br>
    </section>

@endsection
