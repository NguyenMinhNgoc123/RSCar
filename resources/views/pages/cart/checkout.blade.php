@extends('pages.frontend.welcome')
@section('title', 'THANH TOÁN')
@section('content')
    @include('pages.banner')
    <!-- BEGIN Main Container col2-right -->
    <div class="main-container col2-right-layout">
        <div class="main container">

            <div class="row">
                <section class="col-main col-sm-9 wow bounceInUp animated animated" style="visibility: visible;">

                    <ol class="one-page-checkout" id="checkoutSteps">
                        <li id="opc-billing" class="section allow active">
                            <div class="step-title"><span class="number">1</span>
                                <h3 class="one_page_heading"> THÔNG TIN THANH TOÁN</h3>
                            </div>
                            <div id="checkout-step-billing" class="step a-item">
                                <form id="co-billing-form" action="{{route('user.save-checkout')}}" method="post">
                                    @csrf
                                    <fieldset class="group-select">
                                        <ul class="">
                                            <li class="wide">
                                                <label for="billing-address-select">Nhập địa chỉ giao tận nơi nếu bạn muốn thuê xe </label>
                                                <br>
                                            </li>
                                            <li id="billing-new-address-form" >
                                                <fieldset>
                                                    <ul>
                                                        <li class="fields">
                                                            <div class="customer-name">
                                                                <div class="input-box name-firstname">
                                                                    <label for="billing:firstname">email<span
                                                                            class="required">*</span></label>
                                                                    <div class="input-box1">
                                                                        <input type="email" id="billing:firstname"
                                                                               name="email_ship" value="{{$info->email}}"
                                                                               class="input-text required-entry">
                                                                    </div>
                                                                </div>
                                                                <div class="input-box name-lastname">
                                                                    <label for="billing:lastname">Họ và Tên<span
                                                                            class="required">*</span></label>
                                                                    <div class="input-box1">
                                                                        <input type="text" id="billing:lastname"
                                                                               name="full_name_ship" value="{{$info->full_name}}"
                                                                               title="Last Name" maxlength="255"
                                                                               class="input-text required-entry">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="wide">
                                                            <label for="billing:street1">Địa chỉ (Số nhà,đường,huyện,phường,xã,quận,huyện,...)<em
                                                                    class="required">*</em></label>
                                                            <br>
                                                            <input type="text" title="Street Address"
                                                                   name="address" id="billing:street1"
                                                                   value=""
                                                                   class="input-text  required-entry">
                                                        </li>
                                                        <li class="fields">
                                                            <div class="input-box">
                                                                <label for="billing:city">Thành Phố<em
                                                                        class="required">*</em></label>
                                                                <input type="text" title="City" name="city"
                                                                       value="" class="input-text  required-entry"
                                                                       id="billing:city">
                                                            </div>
                                                        </li>
                                                        <li class="fields">
                                                            <div class="input-box">
                                                                <label for="billing:telephone">Số điện thoại<em
                                                                        class="required">*</em></label>
                                                                <input type="text" name="phone_no_ship"
                                                                       value="" title="Telephone"
                                                                       class="input-text  required-entry"
                                                                       id="billing:telephone">
                                                            </div>
                                                        </li>
                                                        <li class="wide">
                                                            <label for="billing:telephone">Yêu cầu của bạn<em
                                                                    class="required">*</em></label>
                                                            <textarea type="text" title="Street Address 2"
                                                                   name="description_ship" id="billing:street2"
                                                                       class="input-text "></textarea>
                                                        </li>
                                                        <li class="">

                                                        </li>
                                                    </ul>
                                                </fieldset>
                                            </li>
                                        </ul>
                                        <div class="buttons-set" id="billing-buttons-container">
                                            <p class="required">* Bắt Buộc</p>
                                            <button type="submit" title="Continue" class="button continue"><span>Continue</span></button>
                                        </div>
                                    </fieldset>

                                </form>
                            </div>
                        </li>
                    </ol>
                    <br>
                </section>
                <aside class="col-right sidebar col-sm-3 wow bounceInUp animated animated" style="visibility: visible;">

                </aside>
                <!--col-right sidebar-->
            </div>
            <!--row-->
        </div>
        <!--main-container-inner-->
    </div>

@endsection
