@extends('user.layouts.page')

@section('content')
    <div class="breadcrumb-area pt-20 pb-20 mb-20">
        <div class="container">
            <div class="col-lg-12">
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-list__item"><a href="{{ route('home') }}">Trang chủ</a></li>
                    <li class="breadcrumb-list__item breadcrumb-list__item--active">Thanh toán</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="checkout-page-area mb-130">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="lezada-form">
                        <!-- Checkout Form s-->
                        <form action="#" class="checkout-form">
                            <div class="row row-40">
                                <div class="col-lg-7 mb-20">
                                    <!-- Billing Address -->
                                    <div id="billing-form" class="mb-40">
                                        <h4 class="checkout-title">Thông tin nhận hàng</h4>
                                        <div class="row">
                                            <div class="col-md-6 col-12 mb-20">
                                                <label>Họ và Tên*</label>
                                                <input type="text" placeholder="Họ và tên">
                                            </div>
                                            <div class="col-md-6 col-12 mb-20">
                                                <label>Email*</label>
                                                <input type="email" placeholder="Địa chỉ email">
                                            </div>
                                            <div class="col-md-6 col-12 mb-20">
                                                <label>Số điện thoại*</label>
                                                <input type="text" placeholder="Số điện thoại">
                                            </div>
                                            <div class="col-md-6 col-12 mb-20">
                                                <label>Địa chỉ*</label>
                                                <input type="text" placeholder="Tên đường, Tòa nhà, Số nhà...">
                                            </div>
                                            <div class="col-md-6 col-12 mb-20">
                                                <label for="province">Tỉnh/Thành phố*</label>
                                                <select id="province" name="province" class="nice-select">
                                                    <option value="" selected disabled>Chọn 1 Tỉnh/Thành phố</option>
                                                    @foreach ($provinces as $province)
                                                        <option value="{{ $province->id }}">{{ $province->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <!-- Các field khác -->
                                            <div class="col-md-6 col-12 mb-20">
                                                <label for="district">Quận/Huyện*</label>
                                                <select  id="district" name="district"  class="nice-select">
                                                    <option value="" selected disabled>Chọn 1 Quận/Huyện</option>
                                                    <option>China</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 col-12 mb-20">
                                                <label for="wards">Phường/Xã*</label>
                                                <select id="wards" name="wards" class="nice-select">
                                                    <option value="" selected disabled>Chọn 1 Phường/Xã</option>
                                                    <option>China</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 col-12 mb-20">
                                                <label>Ghi chú</label>
                                                <input type="text" placeholder="Ghi chú">
                                            </div>
                                            <div class="col-md-6 col-12 mb-20">
                                                <label>Mã giảm giá</label>
                                                <input type="text" placeholder="Mã giảm giá">
                                            </div>
                                            <div class="col-12 mb-20">
                                                <div class="check-box">
                                                    <input type="checkbox" id="create_account">
                                                    <label for="create_account">Tạo tài khoản?</label>
                                                </div>
                                                <div class="check-box">
                                                    <input type="checkbox" id="shiping_address" data-shipping>
                                                    <label for="shiping_address">Gửi đến địa chỉ khác?</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="row">
                                        <!-- Cart Total -->
                                        @foreach ($carts as $cart)
                                            <div class="col-12 mb-60">
                                                <h4 class="checkout-title">Giỏ hàng</h4>
                                                <div class="checkout-cart-total">
                                                    <h4>Sản phẩm <span>Tổng</span></h4>
                                                    <ul>
                                                        <li>{{ $cart->prod->title }} X {{ $cart->quantity }} <span>{{ number_format($cart->price, 0, ',', '.') }} ₫</span></li>
                                                    </ul>
                                                    <p>Tổng tiền <span>$104.00</span></p>
                                                    <p>Phí vận chuyển <span>$00.00</span></p>
                                                    <h4>Tổng thanh toán <span>$104.00</span></h4>
                                                </div>
                                            </div>
                                        @endforeach
                                        <!-- Payment Method -->
                                        <div class="col-12">
                                            <h4 class="checkout-title">Phương thức thanh toán</h4>
                                            <div class="checkout-payment-method">
                                                <div class="single-method">
                                                    <input type="radio" id="payment_check" name="payment-method" value="check">
                                                    <label for="payment_check">Thanh toán khi nhận hàng</label>
                                                    <p data-method="check">Vui lòng thanh toán khi nhận hàng.</p>
                                                </div>
                                                <div class="single-method">
                                                    <input type="radio" id="payment_bank" name="payment-method" value="bank">
                                                    <label for="payment_bank">Thanh toán trực tuyến</label>
                                                    <p data-method="bank">Vui lòng thanh toán trực tuyến.</p>
                                                </div>
                                                <div class="single-method">
                                                    <input type="checkbox" id="accept_terms">
                                                    <label for="accept_terms">Tôi đã đọc và đồng ý với các điều khoản.</label>
                                                </div>
                                            </div>
                                            <button class="lezada-button lezada-button--medium mt-30">Đặt hàng</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#province').change(function() {
                var provinceId = $(this).val();
                if (provinceId) {
                    $.ajax({
                        type: "GET",
                        url: "/get-districts/" + provinceId,
                        success: function(res) {
                            if (res) {
                                $("#district").empty();
                                $("#district").removeAttr('disabled');
                                $("#district").append('<option value="" selected disabled>Chọn 1 Quận/Huyện</option>');
                                $.each(res, function(key, value) {
                                    $("#district").append('<option value="' + value.id + '">' + value.name + '</option>');
                                });
                            } else {
                                $("#district").empty();
                                $("#district").attr('disabled', true);
                            }
                        }
                    });
                } else {
                    $("#district").empty();
                    $("#district").attr('disabled', true);
                }
            });
        });
    </script>
    
    
@endsection
