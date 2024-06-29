<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Order</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .total {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <h2>HavenBook Store</h2>
    <h1 style="text-align: center; font-size:26px">ĐƠN ĐẶT HÀNG</h1>
    <p><strong>Tên tài khoản:</strong> {{ $user->name }}</p>
    <p><strong>Mã đơn hàng:</strong> {{ $order->order_code }}</p>
    <p><strong>Ngày đặt hàng:</strong> {{ $shipping->created_at }}</p>

    <h3 style="text-align: center">Thông tin người nhận</h3>
    <table>
        <thead>
            <tr>
                <th>Họ và tên</th>
                <th>Số điện thoại</th>
                <th>Email</th>
                <th>Địa chỉ</th>
                <th>Ghi chú</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $shipping->shipping_name }}</td>
                <td>{{ $shipping->shipping_phone }}</td>
                <td>{{ $shipping->shipping_email }}</td>
                <td>{{ $shipping->shipping_address }},
                    {{ $shipping->ward->name_ward }},
                    {{ $shipping->district->name_district }},
                    {{ $shipping->city->name_city }} </td>
                <td>{{ $shipping->shipping_notes ?? 'Không' }}</td>
            </tr>
        </tbody>
    </table>
    <h3 style="text-align: center;margin-top:5%">Thông tin đơn hàng</h3>
    <table>
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên sản phẩm</th>
                <th>Mã giảm giá</th>
                <th>Số lượng</th>
                <th>Giá</th>
                <th>Tổng tiền</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($order_details as $index => $details)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $details->product_name }}</td>
                    <td>{{ $details->product_discount ?? 'Không áp dụng' }}</td>
                    <td>{{ $details->product_sale_quantity }}</td>
                    <td>{{ number_format($details->product_price, 0, ',', '.') }}₫</td>
                    <td>{{ number_format($details->product_price * $details->product_sale_quantity, 0, ',', '.') }}₫
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="5" class="total" style="text-align: center">Tổng đơn hàng:</td>
                <td colspan="1" class="total">{{ number_format($total_price, 0, ',', '.') }} ₫</td>
            </tr>
            <tr>
                <td colspan="5" class="total" style="text-align: center">Phí vận chuyển:</td>
                <td colspan="1" class="total">{{ number_format($product_fee, 0, ',', '.') }} ₫</td>
            </tr>
            @if ($discount > 0)
                <tr>
                    <td colspan="5" class="total" style="text-align: center">Mã giảm giá:</td>
                    <td colspan="1" class="total">-{{ number_format($discount, 0, ',', '.') }} ₫</td>
                </tr>
            @endif
            <tr>
                <td colspan="5" class="total" style="text-align: center">Thanh toán:</td>
                <td colspan="1" class="total">{{ number_format($total_price_after_discount, 0, ',', '.') }} ₫</td>
            </tr>
        </tfoot>
    </table>

    <table style="margin-top: 5%; border-collapse: collapse;">
        <tr>
            <td colspan="1" class="total" style="text-align: center; border: none;">Người lập biểu:</td>
            <td colspan="4" class="total" style="text-align: center; border: none;"></td>
            <td colspan="1" class="total" style="text-align: center; border: none;">Người nhận:</td>
        </tr>
        <tr>
            <td colspan="5" class="total" style="border: none;"></td>
            <td colspan="1" class="total" style="text-align: center; border: none;">{{ $shipping->shipping_name }}</td>
        </tr>
    </table>
    
</body>

</html>
