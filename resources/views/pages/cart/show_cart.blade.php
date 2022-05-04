@extends('pages.frontend.welcome')
@section('title', 'GIỎ HÀNG CỦA BẠN')
@section('content')
    @include('pages.banner')
    <div class="main-container col1-layout wow bounceInUp animated">
        <div style="margin: 20px">
            <div>
                <?php
                $message = Session()->get('message');
                if ($message){ ?>
                <div class="alert bg-primary">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon"></i> Thông báo!</h5>
                    <?php echo $message ?>
                </div>
                <?php  Session()->put('message', null);
                }
                ?>
            </div>
            <div>
                <?php
                $message = Session()->get('error');
                if ($message){ ?>
                <div class="alert bg-danger" >
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon"></i> Thông báo!</h5>
                    <?php echo $message ?>
                </div>
                <?php  Session()->put('error', null);
                }
                ?>
            </div>
        </div>
        <div class="main">
            <div class="cart wow bounceInUp animated" id="change-item-cart">

                <div class="table-responsive shopping-cart-tbl  container">
                    <form action="{{route('user.update-cart-quantity')}}" method="post">
                        @csrf

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
                                    <th rowspan="1" class="a-center"><span class="nobr">SỐ LƯỢNG</span></th>
                                    <th rowspan="1" class="a-center"><span class="nobr">size</span></th>
                                    <th class="a-center" style="padding-right: 20px" colspan="1"><span class="nobr">TỔNG TIỀN SẢN PHẨM</span>
                                    </th>
                                    <th rowspan="1" class="a-center">&nbsp;</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr class="first last">
                                    <td colspan="50" class="a-right last">
                                        <input type="hidden" name="type" value="update_cart">
                                        <a type="button" title="Continue Shopping" class="button btn-continue"
                                           href="{{route('list')}}"
                                           onClick=""><span><span>TIẾP TỤC MUA SẮM</span></span></a>
                                        <button type="submit" name="update_cart_action" value="update_qty"
                                                title="Update Cart" class="button btn-update">
                                            <span><span>CẬP NHẬT GIỎ</span></span></button>
                                        <a href="{{route('user.delete-all-cart')}}"
                                           title="Clear Cart" class="button btn-empty" id="empty_cart_button">
                                            <span><span>XÓA TẤT CẢ</span></span></a>

                                    </td>
                                </tr>
                                </tfoot>
                                <tbody>
                                @php
                                    $total = 0;
                                    $number_quantity = 0;
                                @endphp
                                @if($carts)

                                    @foreach($carts as $key => $value)
                                        <?php $subtotal = 0;
                                        ?>
                                        <tr class="first last odd" id="sid">
                                            <td class="image hidden-table">
                                                <a href=""
                                                   title="Women&#39;s Georgette Animal Print"
                                                   class="product-image"><img
                                                        src="{{asset("/product-images/{$value->thumbnails}")}}"
                                                        width="75"
                                                        alt="Women&#39;s Georgette Animal Print"></a></td>
                                            <td>
                                                <h2 class="product-name">
                                                    <a href="{{route('detail',$value->product_id)}}">{{$value->caption}}</a>
                                                </h2>
                                            </td>
                                            <td class="a-center movewishlist">
                                                <input id="testInput" name="cart_qty[{{$value->product_id}}]"
                                                       value="{{$value->cart_quantity}}" size="2" title="Qty"
                                                       class="input-text">

                                            </td>
                                            <td class="a-right movewishlist">

                                                <span class="cart-price">
                                                    {{$value->size}}
                                                </span>
                                            </td>
                                            <td class="a-right movewishlist">
                                                <span class="cart-price">

                                                <span class="price">
                                                   {{number_format($value->sum_product)}}
                                                </span>
                                                </span>
                                            </td>

                                            <td class="a-center last remove-pr">
                                                {{--                                            {{route('user.delete-cart',$valueCT->rowId)}}--}}
                                                <a title="Remove item"
                                                   class="button remove-item"
                                                   href="{{route('user.delete-cart', $value->id_cart)}}"></a>
                                            </td>


                                        </tr>
                                    @endforeach
                                @endif
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
                        <div class="discount">
                        <h3>LƯU Ý</h3>
                        <ul class="shipping-pro">
                            <h3><p>Nhấn cập nhật giỏ trước khi thanh toán</p></h3>
                            <h3><p>Nếu không cập nhật sẽ lấy số lượng cũ thanh toán</p></h3>
                        </ul>
                        </div>
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
                                        <col width="1">
                                        <col width="1">
                                    </colgroup>
                                    <tfoot>
                                    <tr>
                                        <td style="" class="a-left" colspan="1">
                                            <strong>Thành Tiền</strong>
                                        </td>
                                        <td style="" class="a-right">
                                            <strong><span
                                                    class="price"></span>{{number_format($sum_cart)}}
                                            </strong>
                                        </td>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    <tr>
                                        <td style="" class="a-left" colspan="1">
                                            Tổng số lượng
                                        </td>
                                        <td style="" class="a-right">
                                            <span class="price" id="total-quantity-cart">{{$count_product}}</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="" class="a-left" colspan="1">
                                            Thuế
                                        </td>
                                        <td style="" class="a-right">
                                            <span class="price">{{'0,00'.' '.'vnđ'}}</span></td>
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

                                <ul class="checkout">
                                    <li>
                                        <a type="submit" style="width: 100%;text-decoration: none" id="reg_btn"
                                           href="{{route('user.checkout')}}" @if($sold == 1) disabled @endif
                                           class="button btn btn-danger" onClick="" >
                                            <span>THANH TOÁN</span></a>

                                    </li>
                                    <br>
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

