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
                        <form action="{{ route('calculate_shippingfee') }}" method="POST" class="checkout-form">
                            @csrf
                            <div class="row row-40">
                                <div class="col-lg-7 mb-20">
                                    <!-- Billing Address -->
                                    <div id="billing-form" class="mb-40">
                                        <h4 class="checkout-title">Thông tin nhận hàng</h4>
                                        <div class="row">
                                            <div class="col-md-6 col-12 mb-20">
                                                <label>Họ và Tên*</label>
                                                <input type="text" placeholder="Họ và tên" name="name" value="{{ old('name') }}">
                                            </div>
                                            <div class="col-md-6 col-12 mb-20">
                                                <label>Email*</label>
                                                <input type="email" placeholder="Địa chỉ email" name="email" value="{{ old('email') }}">
                                            </div>
                                            <div class="col-md-6 col-12 mb-20">
                                                <label>Số điện thoại*</label>
                                                <input type="text" placeholder="Số điện thoại" name="phone" value="{{ old('phone') }}">
                                            </div>
                                            <div class="col-md-6 col-12 mb-20">
                                                <label>Địa chỉ*</label>
                                                <input type="text" placeholder="Tên đường, Tòa nhà, Số nhà..." name="address" value="{{ old('address') }}">
                                            </div>
                                            <div class="col-md-6 col-12 mb-20">
                                                <label>Tỉnh/Thành Phố*</label>
                                                <select class="form-select form-select-sm mb-3" id="city" name="city_id" aria-label=".form-select-sm" style="height: 50px;">
                                                    <option value="" selected>---Chọn Tỉnh/Thành phố---</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 col-12 mb-20">
                                                <label>Quận/Huyện*</label>
                                                <select class="form-select form-select-sm mb-3" id="district" name="district_id" aria-label=".form-select-sm" style="height: 50px;">
                                                    <option value="" selected>---Chọn Quận/Huyện---</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 col-12 mb-20">
                                                <label>Phường/Xã*</label>
                                                <select class="form-select form-select-sm" id="ward" name="ward_id" aria-label=".form-select-sm" style="height: 45px;">
                                                    <option value="" selected>---Chọn Phường/Xã---</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 col-12 mb-20">
                                                <label>Ghi chú</label>
                                                <input type="text" placeholder="Ghi chú" name="note" value="{{ old('note') }}">
                                            </div>
                                            <div class="col-md-6 col-12 mb-20">
                                                <button type="submit" id="calculate-shipping-fee" class="lezada-button lezada-button--medium mt-30">Xác nhận</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="row">
                                        <div class="col-12 mb-60">
                                            <h4 class="checkout-title">Giỏ hàng</h4>
                                            <div class="checkout-cart-total">
                                                <h4>Sản phẩm <span>Tổng</span></h4>
                                                @foreach ($carts as $cart)
                                                    <ul>
                                                        <li>{{ $cart->prod->title }} X {{ $cart->quantity }}
                                                            <span>{{ number_format($cart->price, 0, ',', '.') }} ₫</span>
                                                        </li>
                                                    </ul>
                                                @endforeach
                                                @php
                                                    $totalPrice = 0;
                                                    foreach ($carts as $cart) {
                                                        $totalPrice += $cart->price * $cart->quantity;
                                                    }

                                                    $totalDiscount = 0;
                                                    if (Session::has('discount')) {
                                                        foreach (Session::get('discount') as $count) {
                                                            if ($count['method'] == 1) {
                                                                $totalDiscount += $count['discount_value'];
                                                            } elseif ($count['method'] == 2) {
                                                                $totalDiscount += ($totalPrice * $count['discount_value']) / 100;
                                                            }
                                                        }
                                                    }

                                                    $shippingFee = session('shipping_fee', 0);
                                                    $finalTotal = $totalPrice - $totalDiscount + $shippingFee;
                                                @endphp
                                                <p style="margin-top:5px">Tổng tiền hàng
                                                    <span>{{ number_format($totalPrice, 0, ',', '.') }} ₫</span>
                                                </p>
                                                @if ($totalDiscount > 0)
                                                    <p>Mã giảm giá:<span class="subtotal">-{{ number_format($totalDiscount, 0, ',', '.') }} ₫</span></p>
                                                @endif

                                                @if ($shippingFee > 0)
                                                    <p>Phí vận chuyển <span>{{ number_format($shippingFee, 0, ',', '.') }} ₫</span></p>
                                                @else
                                                    <p>Phí vận chuyển <span>...</span></p>
                                                @endif

                                                <h4>Thành tiền <span>{{ number_format($finalTotal, 0, ',', '.') }} ₫</span></h4>
                                            </div>
                                        </div>

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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <script>
        var citySelect = document.getElementById("city");
        var districtSelect = document.getElementById("district");
        var wardSelect = document.getElementById("ward");

        var url = "/DiaGioiHanhChinhVN.json"; // Điều chỉnh URL này theo cấu hình của bạn

        axios.get(url)
            .then(function(response) {
                renderCity(response.data);
                setSelectedOptions();
            })
            .catch(function(error) {
                console.error('Lỗi khi lấy dữ liệu:', error);
            });

        function renderCity(data) {
            citySelect.innerHTML = '<option value="" selected>---Chọn Tỉnh/Thành phố---</option>';
            data.forEach(function(city) {
                var option = new Option(city.Name, city.Id);
                citySelect.appendChild(option);
            });
        }

        function setSelectedOptions() {
            // Set selected city, district, and ward based on old input values
            var oldCity = "{{ old('city_id') }}";
            var oldDistrict = "{{ old('district_id') }}";
            var oldWard = "{{ old('ward_id') }}";

            if (oldCity) {
                citySelect.value = oldCity;
                citySelect.dispatchEvent(new Event('change'));

                setTimeout(function() {
                    districtSelect.value = oldDistrict;
                    districtSelect.dispatchEvent(new Event('change'));
                }, 500);

                setTimeout(function() {
                    wardSelect.value = oldWard;
                }, 1000);
            }
        }

        citySelect.addEventListener('change', function() {
            var cityId = this.value;
            districtSelect.innerHTML = '<option value="" selected>---Chọn Quận/Huyện---</option>';
            wardSelect.innerHTML = '<option value="" selected>---Chọn Phường/Xã---</option>';

            if (cityId) {
                axios.get(url)
                    .then(function(response) {
                        var districts = response.data.find(city => city.Id == cityId).Districts;
                        districts.forEach(function(district) {
                            var option = new Option(district.Name, district.Id);
                            districtSelect.appendChild(option);
                        });
                    })
                    .catch(function(error) {
                        console.error('Lỗi khi lấy dữ liệu quận/huyện:', error);
                    });
            }
        });

        districtSelect.addEventListener('change', function() {
            var cityId = citySelect.value;
            var districtId = this.value;
            wardSelect.innerHTML = '<option value="" selected>---Chọn Phường/Xã---</option>';

            if (cityId && districtId) {
                axios.get(url)
                    .then(function(response) {
                        var wards = response.data.find(city => city.Id == cityId).Districts.find(district => district.Id == districtId).Wards;
                        wards.forEach(function(ward) {
                            var option = new Option(ward.Name, ward.Id);
                            wardSelect.appendChild(option);
                        });
                    })
                    .catch(function(error) {
                        console.error('Lỗi khi lấy dữ liệu phường/xã:', error);
                    });
            }
        });
    </script>
@endsection
