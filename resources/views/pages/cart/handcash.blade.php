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

                            <div id="checkout-step-billing" class="step a-item">

                                    <fieldset class="group-select">
                                        <ul class="">
                                            <li id="billing-new-address-form" >
                                                <fieldset>
                                                    <ul>
                                                        <li class="fields">
                                                            <div class="customer-name">
                                                                <h3 class="one_page_heading"> CÁM ƠN BẠN ĐÃ ĐẶT HÀNG CHÚNG TÔI SẼ SỚM LIÊN LẠC LẠI VỚI BẠN<span
                                                                        class="required">*</span></h3>
                                                            </div>
                                                            <div class="col2-set">
                                                                <div class="col-1">
                                                                    <div class="box">
                                                                        <div class="box-title">
                                                                            <h5>NGÔ NGUYỄN THIẾU HUY</h5>
                                                                            <a href="#"></a></div>
                                                                        <!--box-title-->
                                                                        <div class="box-content">
                                                                            <p> NGÂN HÀNG : TP BANK<br>
                                                                                SỐ TÀI KHOẢN : 123456789<br>
                                                                            </p>
                                                                        </div>
                                                                        <!--box-content-->
                                                                        <div class="buttons-set" id="billing-buttons-container">
                                                                            <a type="button" href="{{route('user.order.list')}}" class="button continue"><span>XEM ĐƠN HÀNG</span></a>
                                                                        </div>
                                                                    </div>
                                                                    <!--box-->
                                                                </div>
                                                                <div class="col-2">

                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </fieldset>
                                            </li>
                                        </ul>
                                    </fieldset>
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
                                                    <strong><span class="price">{{$total.' '.'vnđ'}}</span></strong>
                                                </td>
                                            </tr>
                                            </tfoot>
                                            <tbody>
                                            <tr>
                                                <td style="" class="a-left" colspan="1">
                                                    Thuế
                                                </td>
                                                <td style="" class="a-right">
                                                    <span class="price">{{'2.00'.' '.'%'}}</span></td>
                                            </tr>
                                            <tr>
                                                <td style="" class="a-left" colspan="1">
                                                    Giảm giá
                                                </td>
                                                <td style="" class="a-right"><span
                                                        class="price">{{Cart::discount().' '.'vnđ'}}</span></td>
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
