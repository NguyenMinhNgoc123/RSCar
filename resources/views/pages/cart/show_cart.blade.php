@extends('pages.frontend.welcome')
@section('title', 'GIỎ HÀNG CỦA BẠN')
@section('content')
    @include('pages.banner')
    <div class="main-container col1-layout wow bounceInUp animated">

        <div class="main">
            <div class="cart wow bounceInUp animated">

                <div class="table-responsive shopping-cart-tbl  container">
                    <form action="{{route('user.update-cart-quantity')}}" method="post">
                        @csrf
                        <input name="form_key" type="hidden" value="EPYwQxF6xoWcjLUr">
                        <?php
                        $content = Cart::content();
                        ?>
                        <fieldset>
                            </span></th>
                            <table id="shopping-cart-table" class="data-table cart-table table-striped">
                                <colgroup>
                                    <col width="1">
                                    <col>
                                    <col width="1">
                                    <col width="1">
                                    <col width="1">
                                    <col width="1">
                                    <col width="1">
                                </colgroup>
                                <thead>
                                <tr class="first last">
                                    <th rowspan=""></th>
                                    <th rowspan="1"><span class="nobr">
                                    <th rowspan="1"><span class="nobr">HÌNH THỨC</span></th>
                                    <th class="a-center" colspan="1"><span class="nobr">TIỀN CỌC</span></th>
                                    <th rowspan="1" class="a-center"><span class="nobr">SỐ LƯỢNG</span></th>
                                    <th class="a-center" style="padding-right: 20px" colspan="1"><span class="nobr">TỔNG TIỀN SẢN PHẨM</span>
                                    </th>
                                    <th rowspan="1" class="a-center">&nbsp;</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr class="first last">
                                    <td colspan="50" class="a-right last">
                                        <button type="button" title="Continue Shopping" class="button btn-continue"
                                                onClick=""><span><span>TIẾP TỤC MUA SẮM</span></span></button>
                                        <button type="submit" name="update_cart_action" value="update_qty"
                                                title="Update Cart" class="button btn-update">
                                            <span><span>CẬP NHẬT GIỎ</span></span></button>
                                        {{--                                        <button type="submit" name="update_cart_action" value="empty_cart"--}}
                                        {{--                                                title="Clear Cart" class="button btn-empty" id="empty_cart_button">--}}
                                        {{--                                            <span><span>XÓA GIỎ</span></span></button>--}}

                                    </td>
                                </tr>
                                </tfoot>
                                <tbody>
                                @foreach($content as $valueCT)
                                    <tr class="first last odd">
                                        <td class="image hidden-table"><a href="product-detail.html"
                                                                          title="Women&#39;s Georgette Animal Print"
                                                                          class="product-image"><img
                                                    src="{{asset("/product-images/{$valueCT->options->image}")}}"
                                                    width="75"
                                                    alt="Women&#39;s Georgette Animal Print"></a></td>
                                        <td>
                                            <h2 class="product-name">
                                                <a href="{{route('detail',$valueCT->id)}}">{{$valueCT->name}}</a>
                                            </h2>
                                        </td>
                                        <td class="a-center hidden-table">
                                         <span class="cart-price">
                                                <span class="">{{$valueCT->options->type}}</span>
                                </span>
                                        </td>


                                        <td class="a-right hidden-table">
                                    <span class="cart-price">
                                        @if($valueCT->options->type_id =='2')
                                            <span class="price">{{number_format($valueCT->price)}} vnđ/ngày</span>
                                        @else
                                            <span class="price">{{number_format($valueCT->price)}} vnđ</span>
                                        @endif
                                    </span>

                                        </td>
                                        <td class="a-center movewishlist">
                                            <input name="cart_quantity" value="{{$valueCT->qty}}" size="2" title="Qty"
                                                   class="input-text qty">
                                            <input type="hidden" value="{{$valueCT->rowId}}" name="rowId_cart"
                                                   class="form-control">

                                        </td>
                                        <td class="a-right movewishlist">
                    <span class="cart-price">

                                                <span class="price">
                                                    <?php
                                                    $total = $valueCT->price * $valueCT->qty;
                                                    echo number_format($total) . ' ' . 'vnđ';
                                                    ?>
                                                </span>
        </span>
                                        </td>

                                        <td class="a-center last">

                                            <a href="{{route('user.delete-cart',$valueCT->rowId)}}" title="Remove item"
                                               class="button remove-item"><span><span>Remove item</span></span></a>
                                        </td>


                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </fieldset>
                    </form>
                </div>

                <!-- BEGIN CART COLLATERALS -->


                <div class="cart-collaterals container">
                    <!-- BEGIN COL2 SEL COL 1 -->

                    <!-- BEGIN TOTALS COL 2 -->
                    <div class="col-sm-4">


                    </div>

                    <div class="col-sm-4">

                        <div class="discount">
                            <h3>NHẬP MÃ GIẢM GIÁ</h3>
                            <form id="discount-coupon-form" action="#" method="post">
                                <label for="coupon_code">Nhập mẫ giảm giá nếu bạn có</label>
                                <input type="hidden" name="remove" id="remove-coupone" value="0">
                                <input class="input-text fullwidth" type="text" id="coupon_code" name="coupon_code"
                                       value="">
                                <button type="button" title="Apply Coupon" class="button coupon "
                                        onClick="discountForm.submit(false)" value="Apply Coupon">
                                    <span>XÁC NHẬN</span></button>

                            </form>

                        </div> <!--discount-->
                    </div> <!--col-sm-4-->

                    <div class="col-sm-4">
                        <div class="totals">
                            <h3>TỔNG TIỀN GIỎ HÀNG</h3>
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
                                            <strong><span class="price">{{Cart::subtotal().' '.'vnđ'}}</span></strong>
                                        </td>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    <tr>
                                        <td style="" class="a-left" colspan="1">
                                            Tổng Tiền
                                        </td>
                                        <td style="" class="a-right">
                                            <span class="price"></span></td>
                                    </tr>
                                    <tr>
                                        <td style="" class="a-left" colspan="1">
                                            Thuế
                                        </td>
                                        <td style="" class="a-right">
                                            <span class="price">{{'0.00'.' '.'vnđ'}}</span></td>
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

                                <ul class="checkout">
                                    <li>
                                        <a type="submit" style="width: 100%;text-decoration: none"
                                           href="{{route('user.checkout')}}"
                                           class="button btn btn-danger" onClick="">
                                            <span>THANH TOÁN</span></a>
                                    </li>
                                    <br>
                                    <li><a href="multiple-addresses.html" title="Checkout with Multiple Addresses">Checkout
                                            with Multiple Addresses</a>
                                    </li>
                                    <br>
                                </ul>
                            </div><!--inner-->
                        </div><!--totals-->
                    </div> <!--col-sm-4-->


                </div> <!--cart-collaterals-->


            </div>  <!--cart-->

        </div><!--main-container-->

    </div> <!--col1-layout-->
@endsection