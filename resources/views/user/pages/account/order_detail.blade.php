@extends('user/layouts/page')
@section('content')
    <div class="white_card_body">

        <div class="container">
            <div class="back">
                <a href="{{ route('view_order') }}">
                    <i class="ti-angle-double-left" style="font-size: 2em; color:#000"></i>
                </a>
            </div>
            <div class="QA_section">
                <div class="title" style="text-align: center; margin-top:5%">
                    <h4>Thông tin người nhận</h4>
                </div>
                <div class="myaccount-table table-responsive text-center">
                    <table class="table table-bordered">
                        <thead class="thead-light">
                            <tr>
                                <th>ID</th>
                                <th>Tên khách hàng</th>
                                <th>Số điện thoại</th>
                                <th>Email</th>
                                <th>Địa chỉ</th>
                                <th>Phương thức thanh toán</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $shipping->id }}</td>
                                <td>{{ $shipping->shipping_name }}</td>
                                <td>{{ $shipping->shipping_phone }}</td>
                                <td>{{ $shipping->shipping_email }}</td>
                                <td>{{ $shipping->shipping_address }},
                                    {{ $shipping->ward->name_ward }},
                                    {{ $shipping->district->name_district }},
                                    {{ $shipping->city->name_city }} </td>
                                <td>
                                    @if ($shipping->shipping_method == 'check')
                                        Thanh toán khi nhận hàng
                                    @else
                                        Thanh toán trực tuyến
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="QA_section">
                <div class="title" style="text-align: center; margin-top:5%; color: #000">
                    <h4>Chi tiết đơn hàng</h4>
                </div>
                <div class="myaccount-table table-responsive text-center">
                    <table class="table table-bordered">
                        <thead class="thead-light">
                            <tr>
                                <th>STT</th>
                                <th>Tên sản phẩm</th>
                                <th>Mã giảm giá</th>
                                <th>Số lượng</th>
                                <th>Giá</th>
                                <th>Tổng tiền</th>
                            </tr>
                        </thead>
                        @php
                            $i = 0;
                        @endphp
                        <tbody>
                            @foreach ($order_details as $details)
                                @php
                                    $i++;
                                    $subtotal_price = $details->product_price * $details->product_sale_quantity;
                                @endphp
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $details->product_name }}</td>
                                    <td>
                                        @if ($details->product_discount)
                                            {{ $details->product_discount }}
                                        @else
                                            Không áp dụng
                                        @endif
                                    </td>
                                    <td>{{ $details->product_sale_quantity }}</td>
                                    <td>{{ number_format($details->product_price, 0, ',', '.') }} ₫</td>
                                    <td>{{ number_format($subtotal_price, 0, ',', '.') }} ₫</td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tr>
                            <td colspan="7" style="color: #EE0000; text-align:left">
                                <div>
                                    Tổng đơn hàng: {{ number_format($total_price, 0, ',', '.') }} ₫<br>
                                    @if ($product_fee > 0)
                                        Phí giao hàng: {{ number_format($product_fee, 0, ',', '.') }} ₫<br>
                                    @endif
                                    @if ($discount > 0)
                                        Giảm giá: -{{ number_format($discount, 0, ',', '.') }} ₫<br>
                                    @endif
                                    Thành tiền: {{ number_format($total_price_after_discount, 0, ',', '.') }} ₫
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
