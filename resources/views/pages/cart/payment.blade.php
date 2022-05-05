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
                                <h3 class="one_page_heading"> CHỌN HÌNH THỨC THANH TOÁN<span
                                        class="required">*</span></h3>
                            </div>
                            <div id="checkout-step-billing" class="step a-item">
                                <form id="co-billing-form" action="{{route('user.save-payment')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="full_name_ship" value="{{ $_GET['full_name_ship']}}">
                                    <input type="hidden" name="email_ship" value="{{ $_GET['email_ship']}}">
                                    <input type="hidden" name="address_ship" value="{{$_GET['address_ship']}}">
                                    <input type="hidden" name="phone_no_ship" value="{{ $_GET['phone_no_ship']}}">
                                    <input type="hidden" name="description_ship" value="{{ $_GET['description_ship']}}">
                                    <fieldset class="group-select">
                                        <ul class="">
                                            <li id="billing-new-address-form" >
                                                <fieldset>
                                                    <ul>
                                                        <li class="fields">
                                                            <div class="customer-name">
                                                                <div class="input-box name-firstname payment-option">
                                                                    <span>
                                                                        <label for=""><input type="radio" id="payment1" checked name="payment_method" disabled value="2"> TRẢ BẰNG THẺ ATM</label>
                                                                    </span><br>
                                                                    <span>
                                                                        <label for=""><input type="radio" id="payment2" name="payment_method" checked value="1"> NHẬN TIỀN MẶT</label>
                                                                    </span><br>
                                                                    <span>
                                                                        <label for=""><input type="radio" id="payment3" name="payment_method" disabled value="0"> GHI NỢ</label>
                                                                    </span>
                                                                </div>
                                                            </div>
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
                        <div id="checkout-progress-wrapper">
                            <div class="block block-progress">
                                <div class="block-title"> TỔNG TIỀN GIỎ HÀNG </div>
                                <div class="block-content">
                                    <dl>
                                        <div class="inner">

                                            <table id="shopping-cart-totals-table" class="table shopping-cart-table-total">
                                                <colgroup>
                                                    <col>
                                                    <col width="1">
                                                </colgroup>
                                                <tfoot>
                                                <tr>
                                                    <td style="" class="a-left" colspan="1">
                                                        <strong>Thành Tiền</strong>
                                                    </td>
                                                    <td style="" class="a-right">
                                                        <strong><span class="price">{{number_format($sum_cart).'đ'}}</span></strong>
                                                    </td>
                                                </tr>
                                                </tfoot>
                                                <tbody>
                                                <tr>
                                                    <td style="" class="a-left" colspan="1">
                                                        Thuế
                                                    </td>
                                                    <td style="" class="a-right">
                                                        <span class="price">{{'2.00'.' '.'vnđ'}}</span></td>
                                                </tr>
                                                <tr>
                                                    <td style="" class="a-left" colspan="1">
                                                        Giảm giá
                                                    </td>
                                                    <td style="" class="a-right"><span
                                                            class="price"></span></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div><!--inner-->
                                    </dl>
                                </div>
                            </div>
                        </div>
                </aside>
                <!--col-right sidebar-->
            </div>
            <!--row-->
        </div>
        <!--main-container-inner-->
    </div>

@endsection
