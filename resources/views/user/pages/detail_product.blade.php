@extends('user/layouts/page')
@section('content')
    <div class="breadcrumb-area pt-20 pb-20 mb-20">
        <div class="container">
            <div class="col-lg-12">
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-list__item"><a href="{{ route('home') }}">Trang chủ</a></li>
                    <li class="breadcrumb-list__item breadcrumb-list__item--active">Chi tiết sản phầm</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="shop-page-wrapper mt-100 mb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shop-product">
                        <div class="row pb-100">
                            <div class="col-lg-6 mb-md-70 mb-sm-70">
                                <div class="shop-product__big-image-gallery-wrapper mb-30">
                                    <div class="single-product__floating-badges">
                                        @if ($product->stock <= 0)
                                            <span class="out-of-stock" data-tippy="Hết hàng" data-tippy-inertia="true"
                                                data-tippy-animation="shift-away" data-tippy-delay="50"
                                                data-tippy-arrow="true" data-tippy-theme="sharpborder"
                                                data-tippy-placement="right"><i class="ion-android-sad"></i></span>
                                        @endif
                                        @if ($product->sale_price && $product->sale_price < $product->price)
                                            <span
                                                class="onsale">-{{ calculateDiscountPercentage($product->price, $product->sale_price) }}%</span>
                                        @endif
                                        @if ($product->featured == 1)
                                            <span class="hot">hot</span>
                                        @endif
                                    </div>


                                    <div class="shop-product-rightside-icons">
                                        <span class="wishlist-icon">
                                            <a href="#" data-tippy="Thêm vào yêu thích" data-tippy-placement="left"
                                                data-tippy-inertia="true" data-tippy-animation="shift-away"
                                                data-tippy-delay="50" data-tippy-arrow="true"
                                                data-tippy-theme="sharpborder"><i
                                                    class="ion-android-favorite-outline"></i></a>
                                        </span>
                                        <span class="enlarge-icon">
                                            <a class="btn-zoom-popup" href="#" data-tippy="Click to enlarge"
                                                data-tippy-placement="left" data-tippy-inertia="true"
                                                data-tippy-animation="shift-away" data-tippy-delay="50"
                                                data-tippy-arrow="true" data-tippy-theme="sharpborder"><i
                                                    class="ion-android-expand"></i></a>
                                        </span>
                                    </div>

                                    <div class="shop-product__big-image-gallery-slider">
                                        <div class="single-image">
                                            <img src="{{ asset('storage/admin/images') }}/{{ $product->image }}"
                                                class="img-fluid" alt="">
                                        </div>
                                        @foreach ($product->images as $item)
                                            <div class="single-image">
                                                <img src="{{ asset('storage/admin/images') }}/{{ $item->image }}"
                                                    class="img-fluid" alt="">
                                            </div>
                                        @endforeach

                                    </div>
                                </div>

                                <!--=======  shop product small image gallery  =======-->
                                <div class="shop-product__small-image-gallery-wrapper">

                                    <div class="shop-product__small-image-gallery-slider">
                                        <div class="single-image">
                                            <img src="{{ asset('storage/admin/images') }}/{{ $product->image }}"
                                                class="img-fluid" alt="">
                                        </div>

                                        @foreach ($product->images as $item)
                                            <div class="single-image">
                                                <img src="{{ asset('storage/admin/images') }}/{{ $item->image }}"
                                                    class="img-fluid" alt="">
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="shop-product__description">
                                    <div class="shop-product__rating mb-15">
                                        <span class="product-rating">
                                            <i class="active ion-android-star"></i>
                                            <i class="active ion-android-star"></i>
                                            <i class="active ion-android-star"></i>
                                            <i class="active ion-android-star"></i>
                                            <i class="ion-android-star-outline"></i>
                                        </span>
                                    </div>
                                    <div class="shop-product__title mb-15">
                                        <h2>{{ $product->title }}</h2>
                                    </div>
                                    <div class="shop-product__price mb-30">
                                        <div class="price">
                                            @if ($product->sale_price && $product->sale_price < $product->price)
                                                <span
                                                    class="main-price discounted">{{ number_format($product->price) }}₫</span>
                                                <span class="discounted-price"
                                                    style="color: red">{{ number_format($product->sale_price) }}₫</span>
                                            @else
                                                <span class="main-price">{{ number_format($product->price) }}₫</span>
                                            @endif
                                        </div>
                                    </div>


                                    <div class="shop-product__short-desc mb-50">
                                        {!! $product->description !!}
                                    </div>


                                    <div class="shop-product__block shop-product__block--size mb-20">
                                        <div class="shop-product__block__title">Size: </div>
                                        <div class="shop-product__block__value">
                                            <div class="shop-product-size-list">
                                                <span class="single-size">L</span>
                                                <span class="single-size">M</span>
                                                <span class="single-size">S</span>
                                                <span class="single-size">XS</span>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <form action="{{ route('cart.add', ['product' => $product->id]) }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $product->id }}">
                                        <div class="shop-product__block shop-product__block--quantity mb-40">
                                            <div class="shop-product__block__title">Số lượng: </div>
                                            <div class="shop-product__block__value">
                                                <div class="pro-qty d-inline-block mx-0 pt-0">
                                                    <input type="number" name="quantity" value="1" min="1">
                                                </div>
                                            </div>
                                        </div>
                                        @if (Auth::check())
                                        <div class="shop-product__buttons mb-40">
                                            <button type="submit" class="lezada-button lezada-button--medium">Thêm vào
                                                giỏ hàng</button>
                                        </div>
                                        @else
                                        <div class="shop-product__buttons mb-40">
                                            <a href="javascript:void(0)" class="lezada-button lezada-button--medium" onclick="alert('Vui lòng đăng nhập trước khi thêm giỏ hàng!')">
                                                Thêm vào giỏ hàng
                                            </a>
                                        </div>
                                        @endif
                                    </form>
                                    <div class="quick-view-other-info pb-0">
                                        <table>
                                            <tr class="single-info">
                                                <td class="quickview-title">Đường dẫn sản phẩm: </td>
                                                <td class="quickview-value">{{ $product->slug }}</td>
                                            </tr>
                                            <tr class="single-info">
                                                <td class="quickview-title">Danh mục: </td>
                                                <td class="quickview-value">
                                                    <a href="#">{{ $product->category->title }}</a>
                                                </td>
                                            </tr>
                                            <tr class="single-info">
                                                <td class="quickview-title">Tags: </td>
                                                <td class="quickview-value">
                                                    <a href="#">...</a>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>

                                <!--=======  End of shop product description  =======-->
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <!--=======  shop product description tab  =======-->
                                <div class="shop-product__description-tab pt-100">
                                    <div class="tab-product tab-product-navigation--product-desc mb-50">
                                        <div class="nav nav-tabs justify-content-center">
                                            <h1>Bình luận</h1>
                                        </div>
                                    </div>

                                    <!--=======  tab content  =======-->
                                    <div class="tab-content" id="nav-tabContent2">
                                        <div class="tab-pane fade show active" id="product-series-3" role="tabpanel"
                                            aria-labelledby="product-tab-3">
                                            <div class="shop-product__review">
                                                <div class="single-review">
                                                    <div class="single-review__image">
                                                        <img src="{{ asset('user/images/user/user1.jpg') }}"
                                                            class="img-fluid" alt="">
                                                    </div>
                                                    <div class="single-review__content">
                                                        <div class="shop-product__rating">
                                                            <span class="product-rating">
                                                                <i class="active ion-android-star"></i>
                                                                <i class="active ion-android-star"></i>
                                                                <i class="active ion-android-star"></i>
                                                                <i class="active ion-android-star"></i>
                                                                <i class="ion-android-star-outline"></i>
                                                            </span>
                                                        </div>
                                                        <p class="username">Scott James <span class="date">/ April 5,
                                                                2022</span></p>
                                                        <p class="message">
                                                            Thanks for always keeping your HTML themes up to date. Your
                                                            level of support and
                                                            dedication is second to none.
                                                        </p>
                                                    </div>
                                                </div>
                                                <h2 class="review-title mb-20">Thêm bình luận</h2>
                                                <p class="text-center">Email của bạn sẽ không được không khai. Các trường
                                                    bắt buộc sẽ đánh dấu *</p>
                                                <!--=======  review form  =======-->
                                                <div class="havenbook-form lezada-form--review">
                                                    <form action="#">
                                                        <div class="row">
                                                            <div class="col-lg-6 mb-20">
                                                                <input type="text" placeholder="Họ và tên *" required>
                                                            </div>
                                                            <div class="col-lg-6 mb-20">
                                                                <input type="email" placeholder="Email *" required>
                                                            </div>
                                                            <div class="col-lg-12 mb-20">
                                                                <span class="rating-title mr-30">Đánh giá của bạn</span>
                                                                <span class="product-rating">
                                                                    <i class="active ion-android-star-outline"></i>
                                                                    <i class="active ion-android-star-outline"></i>
                                                                    <i class="active ion-android-star-outline"></i>
                                                                    <i class="active ion-android-star-outline"></i>
                                                                    <i class="active ion-android-star-outline"></i>
                                                                </span>
                                                            </div>
                                                            <div class="col-lg-12 mb-20">
                                                                <textarea cols="30" rows="10" placeholder="Your review *"></textarea>
                                                            </div>
                                                            <div class="col-lg-12 text-center">
                                                                <button type="submit"
                                                                    class="lezada-button lezada-button--medium">Đăng</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <h2 class="mb-30" style="margin-top: 10%">Sản phẩm liên quan</h2>
                <div class="row">
                    @foreach ($related as $item)
                        <div class="col-12 col-md-6 col-sm-6 mb-45 hot sale col-lg-is-5">
                            <div class="single-product">
                                <div class="single-product__image">
                                    <a href="{{ route('detail_product', $item->slug) }}">
                                        <img src="{{ asset('storage/admin/images') }}/{{ $item->image }}"
                                            class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="single-product__content">
                                    <h3 class="single-product__title"><a
                                            href="{{ route('detail_product', $item->slug) }}">{{ $item->title }}</a>
                                    </h3>
                                    <div class="single-product__price">
                                        @if ($item->sale_price && $item->sale_price < $item->price)
                                            <span class="main-price discounted">{{ number_format($item->price) }}đ</span>
                                            <span class="discounted-price"
                                                style="color: red">{{ number_format($item->sale_price) }}đ</span>
                                        @else
                                            <span class="main-price">{{ number_format($item->price) }}đ</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
@endsection
