@extends('admin.layouts.page')
@section('content')
    <div class="white_card_body">
        <div class="back">
            <a href="{{ route('manage_order') }}">
                <i class="ti-angle-double-left" style="font-size: 2em; color:darkblue"></i>
            </a>
        </div>

        <div class="QA_section">
            <div class="title" style="text-align: center; margin-top:2%">
                <h4>Thông tin tài khoản</h4>
            </div>
            <div class="QA_table mb_50" style="border: 1px solid gray;">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Tên đăng nhập</th>
                            <th scope="col">Địa chỉ Email</th>
                            <th scope="col">Ngày tạo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="QA_section">
            <div class="title" style="text-align: center; margin-top:5%">
                <h4>Thông tin người nhận</h4>
            </div>
            <div class="QA_table mb_50" style="border: 1px solid gray;">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Tên khách hàng</th>
                            <th scope="col">Số điện thoại</th>
                            <th scope="col">Email</th>
                            <th scope="col">Địa chỉ</th>
                            <th scope="col">Phương thức thanh toán</th>
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
            <div class="title" style="text-align: center; margin-top:5%">
                <h4>Chi tiết đơn hàng</h4>
            </div>
            <div class="QA_table mb_50" style="border: 1px solid gray;">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Tên sản phẩm</th>
                            <th scope="col">Mã giảm giá</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Giá</th>
                            <th scope="col">Tổng tiền</th>
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
                                <td>{{ $details->product_discount }}</td>
                                <td>{{ $details->product_sale_quantity }}</td>
                                <td>{{ number_format($details->product_price, 0, ',', '.') }} ₫</td>
                                <td>{{ number_format($subtotal_price, 0, ',', '.') }} ₫</td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tr>
                        <td colspan="6" style="color: #EE0000">
                            <div>
                                Tổng đơn hàng: {{ number_format($total_price, 0, ',', '.') }} ₫<br>
                                @if ($discount > 0)
                                Giảm giá: {{ number_format($discount, 0, ',', '.') }} ₫<br>
                            @endif
                                Thành tiền: {{ number_format($total_price_after_discount, 0, ',', '.') }} ₫
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
