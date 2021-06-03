@extends('user.profile.layout')
@section('content_profile')
    <section class="col-main col-sm-9 col-xs-12 wow bounceInUp animated animated"
             style="visibility: visible;">
        <div class="my-account">
        @foreach($order as $valueO)
            <!--page-title-->
                <!-- BEGIN DASHBOARD-->
                <div class="dashboard">
                    <div class="welcome-msg">
                        <p class="hello"><strong>Hello, {{Session()->get('full_name')}}! ----- <a href="{{route('user.order.list')}}" >Quay lại</a></strong></p>
                        <p><strong>Chi tiết đơn :</strong> {{$valueO->order_id}}</p>
                    </div>
                </div>
                <div class="col2-set">
                    <div class="col-1">
                        <div class="box">
                            <div class="box-title">
                                <a href="#"></a></div>
                            <!--box-title-->
                            <div class="box-content">
                                <p><strong>Tình trạng đơn : </strong>
                                    @if($valueO->order_status =='0')
                                        Chưa giao xe
                                    @elseif ($valueO->order_status =='1')
                                        Đã giao xe
                                    @elseif ($valueO->order_status =='2')
                                        Đã nhận cọc chưa giao xe
                                    @else
                                        Đã giao xe đang ghi nợ
                                    @endif
                                    <br><br>
                                    <strong>Tên người đặt :</strong> {{$valueO->full_name_ship}}<br>
                                </p>
                            </div>
                            <!--box-content-->
                            <div class="box-content">
                                <p><strong>Tổng giá tiền :</strong> {{number_format($valueO->total)}} vnđ<br><br>
                                    <strong>email :</strong> {{$valueO->email_ship}}<br><br>
                                </p>
                            </div>
                            <div class="box-content">
                                <p><strong>Địa chỉ ship :</strong> {{$valueO->address_ship}}<br><br>
                                    <strong>Số điện thoại :</strong> {{$valueO->phone_no_ship}}<br><br>
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
                                    <p><strong>Loại hình thanh toán :</strong>
                                        @if($valueO->payment_method == '0')
                                            Ghi nợ
                                        @elseif($valueO->payment_method == '1')
                                            Nhận Tiền Mặt
                                        @else
                                            Thanh toán bằng ATM
                                        @endif<br><br>
                                        <strong>Mô tả :</strong> {{$valueO->description_ship}}<br><br>
                                    </p>
                                </div>
                                <!--box-content-->
                                <div class="box-content">
                                    <p><strong>Ngày tạo :</strong> {{$valueO->order_create}}<br><br>

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
            <div class="recent-orders">
                <div class="title-buttons"><strong></strong> SỐ LƯỢNG SẢN PHẨM CỦA ĐƠN HÀNG
                </div>
                <div class="table-responsive">
                    <table class="data-table table-striped" id="my-orders-table">
                        <colgroup>
                            <col width="">
                            <col width="10%">
                            <col width="">
                            <col width="">
                            <col width="">
                            <col width="">
                            <col>
                            <col width="">
                            <col width="">
                            <col width="">
                        </colgroup>
                        <thead>
                        <tr class="first last">
                            <th>id sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Tiền cọc</th>
                            <th>Tên xe</th>
                            <th>Hình thức</th>
                            <th>chi tiết sản phẩm</th>
                            <th>Ngày tạo</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orderDetail as $key =>$value)
                            <tr>
                                <td>{{ $value->product_id}}</td>
                                <td>{{ $value->product_quantity}}</td>
                                <td>
                                    @if($value->type_id =='1')
                                        {{number_format($value->product_price).' '.'vnđ'}}
                                    @else
                                        {{number_format($value->product_price).' '.'vnđ/ngày'}}
                                    @endif
                                </td>
                                <td> {{$value->name_car}}</td>
                                <td>{{$value->type_name}}</td>
                                <td><a href="{{route('detail',$value->product_id)}}"><strong>chi tiết</strong></a></td>
                                <td>{{$value->order_detail_create}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!--table-responsive-->
            </div>
        </div>
    </section>
@endsection
