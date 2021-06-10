@extends('user.profile.layout')
@section('title', 'HÓA ĐƠN')
@section('content_profile')
    <section class="col-main col-sm-9 col-xs-12 wow bounceInUp animated animated"
             style="visibility: visible;">
        <div class="my-account">

            <!--page-title-->
            <!-- BEGIN DASHBOARD-->
            <div class="dashboard">
                <div class="welcome-msg">
                    <p class="hello"><strong>Hello, {{Session()->get('full_name')}}!</strong></p>
                    <p>Hãy Thanh toán đơn hàng trước khi chúng biến mất</p>
                </div>
                <div class="recent-orders">
                    <div class="title-buttons"><strong></strong> ĐƠN HÀNG CỦA BẠN
                    </div>
                    <div class="table-responsive">
                        <table class="data-table table-striped" id="my-orders-table">
                            <colgroup>
                                <col width="1">
                                <col width="">
                                <col>
                                <col width="">
                                <col width="">
                                <col width="">
                            </colgroup>
                            <thead>
                            <tr class="first last">
                                <th>ID</th>
                                <th>Id đơn hàng</th>
                                <th>Tình trạng đơn</th>
                                <th>Tổng giá tiền</th>
                                <th>Loại hình thanh toán</th>
                                <th>Tình trạng thanh toán</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($order as $key =>$value)
                                <tr class="first odd">
                                    <td>{{$key+1}}</td>
                                    <td>{{ $value->order_id}}</td>
                                    <td>
                                        @if($value->order_status =='0')
                                            Chưa giao xe
                                        @elseif ($value->order_status =='1')
                                            Đã giao xe
                                        @elseif ($value->order_status =='2')
                                            Đã nhận cọc chưa giao xe
                                        @elseif($value->order_status =='3')
                                            Đang trong quá trình giao xe
                                        @else
                                            Đang giao xe đang ghi nợ
                                        @endif
                                    </td>
                                    <td> {{number_format($value->total)}}</td>
                                    <td>
                                        @if($value->payment_method == '0')
                                            Ghi nợ
                                        @elseif($value->payment_method == '1')
                                            Nhận Tiền Mặt
                                        @else
                                            Thanh toán bằng ATM
                                        @endif
                                    </td>
                                    <td>
                                        @if($value->payment_status=='0')
                                            Chưa thanh toán
                                        @else
                                            Đã thanh toán
                                        @endif
                                    </td>
                                    <td class="a-center last"><span class="nobr"> <a href="{{route('user.order.detail',$value->order_id)}}"><strong>Xem chi tiết</strong></a> / <a href="{{route('user.order.delete',$value->order_id)}}"><strong>Xóa</strong></a></span>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!--table-responsive-->
                </div>
                <!--recent-orders-->
                <div class="box-account">
                    <div class="page-title">

                    </div>
                    <div class="col2-set">
                        <div class="col-1">
                            <div class="box">
                                <div class="box-title">
                                    <a href="#"></a></div>
                                <!--box-title-->
                                <div class="box-content">

                                </div>
                                <!--box-content-->
                            </div>
                            <!--box-->
                        </div>
                        <div class="col-2">
                            <div class="box">
                                <div class="box-title">
                                    <!--box-title-->
                                    <div class="box-content">
                                    </div>
                                    <!--box-content-->
                                </div>
                                <!--box-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
