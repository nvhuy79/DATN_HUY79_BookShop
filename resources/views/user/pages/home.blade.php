@extends('user/layouts/page')
@section('content')

    <div id="new_products" class="section-title-container mt-80 mb-30">
        <div class="container">
            <div class="col-lg-12">
                <div class="section-title section-title--one text-center">
                    <h1>Sản phẩm mới phát hành</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="product-carousel-container mb-70">
        <div class="container">
            <div class="row">
                {{-- Sp mới phát hành --}}
                @foreach ($newProducts as $item)
                    <div class="col-12 col-lg-3 col-md-6 col-sm-6 mb-45">
                        <div class="single-product">
                            <div class="single-product__image">
                                <a class="image-wrap" href="{{ route('detail_product', $item->slug) }}">
                                    <img src="{{ asset('storage/admin/images') }}/{{ $item->image }}"
                                        class="img-fluid product-image" alt="">
                                </a>
                                <div class="single-product__floating-badges">
                                    @if ($item->stock <= 0)
                                        <span class="out-of-stock" data-tippy="Tạm hết hàng" data-tippy-inertia="true"
                                            data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-theme="sharpborder" data-tippy-placement="right"><i
                                                class="ion-android-sad"></i></span>
                                    @endif
                                    @if ($item->sale_price && $item->sale_price < $item->price)
                                        <span
                                            class="onsale">-{{ calculateDiscountPercentage($item->price, $item->sale_price) }}%</span>
                                    @endif
                                    @if ($item->featured == 1)
                                        <span class="hot">hot</span>
                                    @endif
                                </div>
                                <form action="{{ route('cart.add', ['product' => $item->id]) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                    <div class="single-product__floating-icons">
                                        <span class="wishlist"><a href="#" data-tippy="Thêm vào yêu thích"
                                                data-tippy-inertia="true" data-tippy-animation="shift-away"
                                                data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder"
                                                data-tippy-placement="left"><i
                                                    class="ion-android-favorite-outline"></i></a></span>
                                        @if (Auth::check())
                                            <span class="wishlist"><a href=""><button
                                                        style="background-color: rgba(0, 0, 0, 0.0); border: none;"
                                                        data-tippy="Thêm vào giỏ hàng" data-tippy-inertia="true"
                                                        data-tippy-animation="shift-away" data-tippy-delay="50"
                                                        data-tippy-arrow="true" data-tippy-theme="sharpborder"
                                                        data-tippy-placement="left"><i
                                                            class="ion-ios-cart"></i></button></a></span>
                                        @else
                                            <span class="wishlist"><a href="#" data-tippy="Thêm vào giỏ hàng"
                                                    onclick="showLoginAlert()" class="ion-ios-cart"></i></a></span>
                                        @endif
                                    </div>
                                </form>
                            </div>

                            <!--=======  single product content  =======-->

                            <div class="single-product__content">
                                <div class="title">
                                    <h3 style="font-weight: bold;"> <a
                                            href="shop-product-basic.html">{{ $item->title }}</a></h3>
                                    <h5> <a href="shop-product-basic.html">{{ $item->category->title }}</a></h5>
                                    <a href="#">{{ $item->title }}</a>
                                </div>
                                <div class="price">
                                    @if ($item->sale_price && $item->sale_price < $item->price)
                                        <span class="main-price discounted">{{ number_format($item->price) }}₫</span>
                                        <span class="discounted-price"
                                            style="color: red">{{ number_format($item->sale_price) }}₫</span>
                                    @else
                                        <span class="main-price">{{ number_format($item->price) }}₫</span>
                                    @endif
                                </div>
                            </div>
                            </form>
                        </div>

                    </div>
                @endforeach
            </div>



            <div class="row">
                <div class="col-lg-12 text-center mb-25 mt-30">
                    <a class="lezada-loadmore-button" href="#"><i class="ion-ios-plus-empty"></i> LOAD MORE ...</a>
                </div>
            </div>
        </div>

        <div class="lezada-testimonial single-item-testimonial-area testimonial-bg testimonial-bg-1 mb-100 pt-135 pb-135">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!--=======  testmonial slider container  =======-->

                        <div class="lezada-slick-slider multi-testimonial-slider-container"
                            data-slick-setting='{
                            "slidesToShow": 1,
                            "arrows": true,
                            "autoplay": true,
                            "autoplaySpeed": 5000,
                            "speed": 1000,
                            "prevArrow": {"buttonClass": "slick-prev", "iconClass": "ti-angle-left" },
                            "nextArrow": {"buttonClass": "slick-next", "iconClass": "ti-angle-right" }
                        }'
                            data-slick-responsive='[
                            {"breakpoint":1501, "settings": {"slidesToShow": 1} },
                            {"breakpoint":1199, "settings": {"slidesToShow": 1} },
                            {"breakpoint":991, "settings": {"slidesToShow": 1, "arrows": false} },
                            {"breakpoint":767, "settings": {"slidesToShow": 1, "arrows": false} },
                            {"breakpoint":575, "settings": {"slidesToShow": 1, "arrows": false} },
                            {"breakpoint":479, "settings": {"slidesToShow": 1, "arrows": false} }
                        ]'>

                            <!--=======  single testimonial  =======-->
                            @foreach ($slides as $slide)
                                <div class="col">
                                    <div class="testimonial-item single-testimonial-single-item">

                                        <div class="single-testimonial-single-item__image mb-sm-50">
                                            <img src="{{ asset('admin/images/slides/' . $slide->slide_image) }}"
                                                class="img-fluid" alt="{{ $slide->title }}">
                                        </div>

                                        <div class="single-testimonial-single-item__content text-center">

                                            <div class="quote-icon d-inline-block mb-30">
                                                <img src="assets/images/icons/quote.png" class="img-fluid" alt="">
                                            </div>

                                            <div class="text mb-40">
                                                {{ $slide->description }}
                                            </div>

                                            <div class="client-info">
                                                <p class="name">{{ $slide->title }}</p>
                                                <span class="designation">/ Người đăng</span>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-title-container mt-80 mb-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title section-title--one text-center">
                            <h1>Sản phẩm nổi bật</h1>
                            <p>Khám phá những sản phẩm được ưa chuộng nhất của chúng tôi!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="product-carousel-container mb-70">
            <div class="container">
                {{-- Sản phẩm nổi bật --}}
                <div class="row">
                    @foreach ($featureProducts as $item)
                        <div class="col-12 col-lg-3 col-md-6 col-sm-6 mb-45">

                            <div class="single-product">
                                <div class="single-product__image">
                                    <a class="image-wrap" href="{{ route('detail_product', $item->slug) }}">
                                        <img src="{{ asset('storage/admin/images') }}/{{ $item->image }}"
                                            class="img-fluid product-image" alt="">
                                    </a>

                                    <div class="single-product__floating-badges">
                                        @if ($item->stock <= 0)
                                            <span class="out-of-stock" data-tippy="Tạm hết hàng"
                                                data-tippy-inertia="true" data-tippy-animation="shift-away"
                                                data-tippy-delay="50" data-tippy-arrow="true"
                                                data-tippy-theme="sharpborder" data-tippy-placement="right"><i
                                                    class="ion-android-sad"></i></span>
                                        @endif
                                        @if ($item->sale_price && $item->sale_price < $item->price)
                                            <span
                                                class="onsale">-{{ calculateDiscountPercentage($item->price, $item->sale_price) }}%</span>
                                        @endif
                                        @if ($item->featured == 1)
                                            <span class="hot">hot</span>
                                        @endif
                                    </div>

                                    <form action="{{ route('cart.add', ['product' => $item->id]) }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $item->id }}">
                                        <div class="single-product__floating-icons">
                                            <span class="wishlist"><a href="#" data-tippy="Thêm vào yêu thích"
                                                    data-tippy-inertia="true" data-tippy-animation="shift-away"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-theme="sharpborder" data-tippy-placement="left"><i
                                                        class="ion-android-favorite-outline"></i></a></span>
                                            @if (Auth::check())
                                                <span class="wishlist"><a href=""><button
                                                            style="background-color: rgba(0, 0, 0, 0.0); border: none;"
                                                            data-tippy="Thêm vào giỏ hàng" data-tippy-inertia="true"
                                                            data-tippy-animation="shift-away" data-tippy-delay="50"
                                                            data-tippy-arrow="true" data-tippy-theme="sharpborder"
                                                            data-tippy-placement="left"><i
                                                                class="ion-ios-cart"></i></button></a></span>
                                            @else
                                                <span class="wishlist"><a href="#" data-tippy="Thêm vào giỏ hàng"
                                                        onclick="showLoginAlert()" class="ion-ios-cart"></i></a></span>
                                            @endif
                                        </div>
                                    </form>


                                </div>

                                <!--=======  single product content  =======-->
                                <div class="single-product__content">
                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                    <div class="title">
                                        <h4 style="font-weight: bold;"> <a
                                                href="shop-product-basic.html">{{ $item->title }}</a></h4>
                                        <h5> <a href="shop-product-basic.html">{{ $item->category->title }}</a></h5>
                                        {{-- <button href="#">Thêm vào giỏ hàng</button> --}}
                                    </div>
                                    <div class="price">
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



                <div class="row">
                    <div class="col-lg-12 text-center mb-25 mt-30">
                        <a class="lezada-loadmore-button" href="#"><i class="ion-ios-plus-empty"></i> LOAD MORE
                            ...</a>
                    </div>
                </div>
            </div>

        </div>
    @endsection
