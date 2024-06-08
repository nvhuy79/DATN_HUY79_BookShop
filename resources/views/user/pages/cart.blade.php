@extends('user/layouts/page')

@section('content')
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
                @if ($carts->isEmpty())
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
                                    <tr>
                                        <div class="col-lg-12">
                                            <p>Giỏ hàng của bạn đang trống.</p>
                                        </div>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                @else
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
                                    @foreach ($carts as $item)
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href="shop-product-basic.html">
                                                    <img src="{{ asset('storage/admin/images') }}/{{ $item->prod->image }}" alt="" width="100px">
                                                </a>
                                            </td>
                                            <td class="product-name">
                                                <a href="shop-product-basic.html">{{ $item->prod->title }}</a>
                                                <span class="product-variation">Danh mục: {{ $item->prod->title }}</span>
                                            </td>

                                            <td class="product-price"><span class="price">{{ number_format($item->price, 0, ',', '.') }} ₫</span></td>

                                            <td class="product-quantity">
                                                <div class="pro-qty d-inline-block mx-0">
                                                    <input type="text" value="{{ $item->quantity }}">
                                                </div>
                                            </td>

                                            <td class="total-price"><span class="price">$100.00</span></td>

                                            <td class="product-remove">
                                                <form action="{{ route('product.destroy', $item) }}" method="POST" onsubmit="return confirm('Bạn có chắc chắn muốn xóa danh mục này không?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="action_btn"><a href="#">
                                                        <i class="ion-android-close"></i>
                                                    </a></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-80">
                        <div class="cart-coupon-area pb-30">
                            <div class="row align-items-center">
                                <div class="col-lg-6 mb-md-30 mb-sm-30">
                                    <div class="lezada-form coupon-form">
                                        <form action="#">
                                            <div class="row">
                                                <div class="col-md-7 mb-sm-10">
                                                    <input type="text" placeholder="Enter your coupon code">
                                                </div>
                                                <div class="col-md-5">
                                                    <button class="lezada-button lezada-button--medium">Cập nhật</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-6 text-start text-lg-end">
                                    <button class="lezada-button lezada-button--medium">Tiếp tục mua sắm</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 offset-xl-8 col-lg-5 offset-lg-7">
                        <div class="cart-calculation-area">
                            <h2 class="mb-40">Tổng tiền</h2>

                            <table class="cart-calculation-table mb-30">
                                <tr>
                                    <th>Sản phẩm</th>
                                    <td class="subtotal">23</td>
                                </tr>
                                <tr>
                                    <th>Tổng</th>
                                    <td class="total">$100.00</td>
                                </tr>
                            </table>

                            <div class="cart-calculation-button text-center">
                                <button class="lezada-button lezada-button--medium">Thanh toán</button>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
