@extends('user/layouts/page')

@section('content')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <div class="breadcrumb-area pt-20 pb-20">
        <div class="container">
            <div class="col-lg-12">
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-list__item"><a href="{{ route('home') }}">Trang chủ</a></li>
                    <li class="breadcrumb-list__item breadcrumb-list__item--active">Giỏ hàng</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="shopping-cart-area mb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-30">
                    <div class="cart-table-container">
                        <table class="cart-table">
                            <thead>
                                <tr>
                                    <th class="product-name" colspan="2">Sản phẩm</th>
                                    <th class="product-price">Giá</th>
                                    <th class="product-quantity">Số lượng</th>
                                    <th class="product-subtotal">Tổng tiền</th>
                                    <th class="product-remove">&nbsp;</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($carts as $cart)
                                    <tr>
                                        <td class="product-thumbnail">
                                            <a href="shop-product-basic.html">
                                                <img src="{{ asset('storage/admin/images') }}/{{ $cart->prod->image }}"
                                                    alt="" width="100px">
                                            </a>
                                        </td>
                                        <td class="product-name">
                                            <a href="shop-product-basic.html">{{ $cart->prod->title }}</a>
                                            <span class="product-variation">Danh mục: {{ $cart->prod->title }}</span>
                                        </td>
                                        <td class="product-price">
                                            <span class="price">{{ number_format($cart->price, 0, ',', '.') }} ₫</span>
                                        </td>
                                        <td class="product-quantity">
                                            <form class="update-cart-form"
                                                action="{{ route('cart.add', $cart->product_id) }}" method="post">
                                                @method('PUT')
                                                @csrf
                                                <div class="pro-qty d-inline-block mx-0">

                                                    <input type="number" value="{{ $cart->quantity }}" name="quantity"
                                                        class="quantity-input"
                                                        data-url="{{ route('cart.add', $cart->product_id) }}"
                                                        data-price="{{ $cart->price }}" readonly>

                                                </div>
                                            </form>
                                        </td>
                                        <td class="total-price">
                                            <span
                                                class="price total-price-span">{{ number_format($cart->price * $cart->quantity, 0, ',', '.') }}
                                                ₫</span>
                                        </td>
                                        <td class="product-remove">
                                            <a href="{{ route('cart.delete', $cart->product_id) }}"
                                                onclick="return confirm('Bạn muốn xóa sản phẩm khỏi giỏ hàng?')">
                                                <i class="ion-android-close"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            @if ($carts->isEmpty())
                                <tr>
                                    <td colspan="6" class="text-center" style="color: black">Giỏ hàng của bạn trống.
                                        Hãy khám phá thêm sản phẩm và mua sắm ngay!</td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-12 mb-80">
                    <div class="cart-coupon-area pb-30">
                        <div class="row align-items-center">
                            <div class="col-lg-6 mb-md-30 mb-sm-30">
                                <div class="lezada-form coupon-form">

                                    <div class="row">
                                        <form action="{{ route('check_discount') }}" method="post">
                                            @csrf
                                            <div class="col-md-7 mb-sm-10">
                                                <input type="text" name="discount_code" placeholder="Nhập mã giảm giá">
                                            </div>
                                            <button type="submit" id="button" class="lezada-button">Cập
                                                nhật</button>
                                        </form>

                                        <div class="col-md-5">
                                            @if (!$carts->isEmpty())
                                                <button id="refresh-button" class="lezada-button lezada-button--medium">Cập
                                                    nhật</button>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 text-start text-lg-end">
                                <a href="{{ route('home') }}" class="lezada-button lezada-button--medium">Tiếp tục mua
                                    sắm</a>
                            </div>
                        </div>
                    </div>
                </div>
                @php
                    $totalPrice = 0;
                    foreach ($carts as $cart) {
                        $totalPrice += $cart->price * $cart->quantity;
                    }
                @endphp
                <div class="col-xl-4 offset-xl-8 col-lg-5 offset-lg-7">
                    <div class="cart-calculation-area" style="border: 1px solid #cccccc; border-radius: 12px;">
                        <h2 class="mb-40">Tổng tiền</h2>

                        <table class="cart-calculation-table mb-30">
                            <tr>
                                <th>Sản phẩm</th>
                                <td class="subtotal">{{ $carts->count() }}</td>
                            </tr>
                            <tr>
                                <th>Số lượng</th>
                                <td class="subtotal">{{ $totalQuantity }}</td>
                            </tr>
                            <tr>
                                <th>Tổng tiền hàng</th>
                                <td class="subtotal">{{ number_format($totalPrice, 0, ',', '.') }} ₫</td>
                            </tr>

                            <tr>
                                @if (Session::get('discount_code'))
                                    @foreach (Session::get('discount_code') as $key => $count)
                                        @if ($count['method'] == 1)
                                            <tr>
                                                <th>Mã giảm</th>
                                                <td class="subtotal">{{ number_format($count['discount_value'], 0, ',', '.') }}đ</td>
                                            </tr>

                                            @php
                                                $total_discount = ($totalPrice * $count['discount_value']) / 100;
                                            @endphp
                                            <tr>
                                                <th>Tổng tiền giảm:</th>
                                                <td class="subtotal">{{ number_format($total_discount, 0, ',', '.') }} đ</td>
                                            </tr>
                                            <tr>
                                                <th>Tổng tiền sau giảm:</th>
                                                <td class="subtotal">{{ number_format($totalPrice - $total_discount, 0, ',', '.') }}</td>
                                            </tr>
                                        @elseif ($count['method'] == 2)
                                            <tr>
                                                <th>Mã giảm:</th>
                                                <td class="subtotal">{{ number_format($count['discount_value'], 0, ',', '.') }} %</td>
                                            </tr>
                                            
                                                @php
                                                    $total_discount = ($totalPrice * $count['discount_value']) / 100;
                                                @endphp
                                            <tr>
                                                <th>Tổng giảm:</th>
                                                <td class="subtotal">{{ number_format($total_discount, 0, ',', '.') }} %</td>
                                            </tr>

                                            <tr>
                                                <th>Tổng tiền sau giảm:</th>
                                                <td class="subtotal">{{ number_format($totalPrice - $total_discount, 0, ',', '.') }}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif
                            </tr>



                        </table>


                        <div class="cart-calculation-button text-center">
                            <a href="{{ route('checkout.index') }}" class="lezada-button lezada-button--medium">Thanh
                                toán</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function() {
            $('.qty-btn').on('click', function(e) {
                e.preventDefault();
                var button = $(this);
                var input = button.siblings('.quantity-input');
                var currentQuantity = parseInt(input.val());
                var unitPrice = parseFloat(input.data('price'));
                var action = button.data('action');
                var newQuantity = currentQuantity;

                if (action === 'increment') {
                    newQuantity = currentQuantity + 1;
                } else if (action === 'decrement' && currentQuantity > 1) {
                    newQuantity = currentQuantity - 1;
                }

                input.val(newQuantity);

                var totalPriceElement = input.closest('tr').find('.total-price-span');
                var newTotalPrice = unitPrice * newQuantity;

                totalPriceElement.text(new Intl.NumberFormat('vi-VN', {
                    style: 'currency',
                    currency: 'VND'
                }).format(newTotalPrice));
            });

            $('#refresh-button').on('click', function(e) {
                e.preventDefault();

                var forms = $('.update-cart-form');
                var totalForms = forms.length;
                var completedRequests = 0;

                forms.each(function() {
                    var form = $(this);
                    var input = form.find('.quantity-input');
                    var formData = form.serialize();
                    var url = input.data('url');

                    $.ajax({
                        type: 'PUT',
                        url: url,
                        data: formData,
                        success: function(response) {
                            completedRequests++;
                            if (completedRequests === totalForms) {
                                location
                                    .reload(); // To refresh the page after all requests are completed
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error(xhr.responseText);
                            completedRequests++;
                            if (completedRequests === totalForms) {
                                location
                                    .reload(); // To refresh the page even if some requests fail
                            }
                        }
                    });
                });
            });
        });
    </script>
@endsection
