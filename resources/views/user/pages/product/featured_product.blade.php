
@extends('user/layouts/page')
@section('content')
    <div class="shop-page-wrapper">
        <div class="shop-advance-filter-area" id="shop-advance-filter-area">
            <div class="shop-advance-filter-wrapper pt-50">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-md-4 col-sm-6 mb-50">
                            <!--=======  single advance filte  =======-->

                            <div class="single-filter-widget">
                                <h2 class="single-filter-widget--title">Sort by</h2>
                                <ul class="single-filter-widget--list">
                                    <li><a href="#">Default</a></li>
                                    <li><a href="#">Popularity</a></li>
                                    <li><a href="#">Average rating</a></li>
                                    <li><a href="#">Newness</a></li>
                                    <li><a href="#">Price: low to high</a></li>
                                    <li><a href="#">Price: high to low</a></li>
                                </ul>
                            </div>

                            <!--=======  End of single advance filte  =======-->
                        </div>

                        <div class="col-lg-2 col-md-4 col-sm-6 mb-50">
                            <!--=======  single advance filte  =======-->

                            <div class="single-filter-widget">
                                <h2 class="single-filter-widget--title">Categories</h2>
                                <ul class="single-filter-widget--list single-filter-widget--list--category">
                                    <li class="has-children">
                                        <a href="shop-left-sidebar.html">Cosmetic </a> <span class="quantity">5</span>
                                        <ul>
                                            <li><a href="shop-left-sidebar.html">For body</a></li>
                                            <li><a href="shop-left-sidebar.html">Make up</a></li>
                                            <li><a href="shop-left-sidebar.html">New</a></li>
                                            <li><a href="shop-left-sidebar.html">Perfumes</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="shop-left-sidebar.html">Furniture </a> <span class="quantity">23</span>
                                        <ul>
                                            <li><a href="shop-left-sidebar.html">Sofas</a></li>
                                            <li><a href="shop-left-sidebar.html">Armchairs</a></li>
                                            <li><a href="shop-left-sidebar.html">Desk Chairs</a></li>
                                            <li><a href="shop-left-sidebar.html">Dining Chairs</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shop-left-sidebar.html">Watches </a> <span class="quantity">12</span></li>
                                </ul>
                            </div>

                            <!--=======  End of single advance filte  =======-->
                        </div>

                        <div class="col-lg-2 col-md-4 col-sm-6 mb-50">
                            <!--=======  single advance filte  =======-->

                            <div class="single-filter-widget">
                                <h2 class="single-filter-widget--title">Price filter</h2>
                                <ul class="single-filter-widget--list">
                                    <li><a href="#">All</a></li>
                                    <li><a href="#">$0.00 - $70.00</a></li>
                                    <li><a href="#">$70.00 - $140.00</a></li>
                                    <li><a href="#">$140.00 - $210.00</a></li>
                                    <li><a href="#">$210.00 - $280.00</a></li>
                                    <li><a href="#">$280.00 - $350.00</a></li>
                                </ul>
                            </div>

                            <!--=======  End of single advance filte  =======-->
                        </div>

                        <div class="col-lg-2 col-md-4 col-sm-6 mb-50">
                            <!--=======  single advance filte  =======-->

                            <div class="single-filter-widget">
                                <h2 class="single-filter-widget--title">Color</h2>
                                <ul class="single-filter-widget--list single-filter-widget--list--color">
                                    <li><a class="active" href="#" data-tippy="Black" data-tippy-inertia="true"
                                            data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-theme="sharpborder"><span class="color-picker black"></span></a></li>
                                    <li><a href="#" data-tippy="Blue" data-tippy-inertia="true"
                                            data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-theme="sharpborder"><span class="color-picker blue"></span></a></li>
                                    <li><a href="#" data-tippy="Brown" data-tippy-inertia="true"
                                            data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-theme="sharpborder"><span class="color-picker brown"></span></a></li>
                                    <li><a href="#" data-tippy="Gold" data-tippy-inertia="true"
                                            data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-theme="sharpborder"><span class="color-picker gold"></span></a></li>
                                    <li><a href="#" data-tippy="Green Coral" data-tippy-inertia="true"
                                            data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-theme="sharpborder"><span
                                                class="color-picker green-coral"></span></a></li>
                                    <li><a href="#" data-tippy="Grey" data-tippy-inertia="true"
                                            data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-theme="sharpborder"><span class="color-picker grey"></span></a></li>
                                    <li><a href="#" data-tippy="Oak" data-tippy-inertia="true"
                                            data-tippy-animation="shift-away" data-tippy-delay="50"
                                            data-tippy-arrow="true" data-tippy-theme="sharpborder"><span
                                                class="color-picker oak"></span></a></li>
                                    <li><a href="#" data-tippy="Pink" data-tippy-inertia="true"
                                            data-tippy-animation="shift-away" data-tippy-delay="50"
                                            data-tippy-arrow="true" data-tippy-theme="sharpborder"><span
                                                class="color-picker pink"></span></a></li>
                                    <li><a href="#" data-tippy="Silver" data-tippy-inertia="true"
                                            data-tippy-animation="shift-away" data-tippy-delay="50"
                                            data-tippy-arrow="true" data-tippy-theme="sharpborder"><span
                                                class="color-picker silver"></span></a></li>
                                    <li><a href="#" data-tippy="White" data-tippy-inertia="true"
                                            data-tippy-animation="shift-away" data-tippy-delay="50"
                                            data-tippy-arrow="true" data-tippy-theme="sharpborder"><span
                                                class="color-picker white"></span></a></li>
                                </ul>
                            </div>

                            <!--=======  End of single advance filte  =======-->
                        </div>

                        <div class="col-lg-2 col-md-4 col-sm-6 mb-50">
                            <!--=======  single advance filte  =======-->

                            <div class="single-filter-widget">
                                <h2 class="single-filter-widget--title">Size</h2>
                                <ul class="single-filter-widget--list single-filter-widget--list--size">
                                    <li><a href="#">L</a> <span class="quantity">5</span></li>
                                    <li><a href="#">M</a> <span class="quantity">5</span></li>
                                    <li><a href="#">S</a> <span class="quantity">5</span></li>
                                    <li><a href="#">XS</a> <span class="quantity">5</span></li>
                                </ul>
                            </div>

                            <!--=======  End of single advance filte  =======-->
                        </div>

                        <div class="col-lg-2 col-md-4 col-sm-6 mb-50">
                            <!--=======  single advance filte  =======-->

                            <div class="single-filter-widget">
                                <h2 class="single-filter-widget--title">Brands</h2>
                                <ul class="single-filter-widget--list single-filter-widget--list--brand">
                                    <li><a href="#">Alliop</a> <span class="quantity">(12)</span></li>
                                    <li><a href="#">Burberry</a> <span class="quantity">(15)</span></li>
                                    <li><a href="#">Catmen</a> <span class="quantity">(13)</span></li>
                                    <li><a href="#">Houdini</a> <span class="quantity">(10)</span></li>
                                    <li><a href="#">Love</a> <span class="quantity">(70)</span></li>
                                    <li><a href="#">Made</a> <span class="quantity">(15)</span></li>
                                </ul>
                            </div>

                            <!--=======  End of single advance filte  =======-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shop-page-content mt-50 mb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 order-2 order-lg-1" style="margin-top:3%;  border: 1px solid #C0C0C0; padding: 10px; border-radius: 10px;">
                        <!--=======  page sidebar  =======-->

                        <div class="page-sidebar">
                            <div class="single-sidebar-widget mb-40">
                                <h2 class="single-sidebar-widget--title">Danh mục</h2>
                                <ul id="category-list" class="single-sidebar-widget--list single-sidebar-widget--list--category">
                                    @foreach ($categories as $index => $category)
                                        <li class="has-children category-item {{ $index >= 5 ? 'hidden' : '' }}">
                                            <a href="{{ route('view_category', ['id' => $category->id]) }}">{{ $category->title }}</a>
                                            @if ($category->children->count())
                                                <ul>
                                                    @foreach ($category->children as $child)
                                                        <li><a href="{{ route('view_category', ['id' => $child->id]) }}">{{ $child->title }}</a></li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </li>
                                    @endforeach
                                </ul>
                                @if (count($categories) > 5)
                                    <a class="lezada-loadmore-button" id="show-more" href="#"> Tải thêm ...</a>
                                @endif
                            </div>
                            
                            <div class="single-sidebar-widget mb-40">
                                <h2 class="single-sidebar-widget--title">Bán chạy</h2>

                                <!--=======  widget product wrapper  =======-->

                                <div class="widget-product-wrapper">
                                    <div class="single-widget-product-wrapper">
                                        @foreach ($sellingProducts as $item)
                                            <div class="single-widget-product">
                                                <!--=======  image  =======-->

                                                <div class="single-widget-product__image">
                                                    <a href="{{ route('detail_product', $item->slug) }}">
                                                        <img src="{{ asset('storage/admin/images') }}/{{ $item->image }}"
                                                            class="img-fluid" alt="">
                                                    </a>
                                                </div>
                                                <div class="single-widget-product__content">

                                                    <div class="single-widget-product__content__top">
                                                        
                                                        <h3 class="product-title"><a
                                                            href="{{ route('detail_product', $item->slug) }}">{{ $item->title }}</a></h3>
                                                        <div class="price">
                                                            @if ($item->sale_price && $item->sale_price < $item->price)
                                                            <span class="main-price discounted">{{ number_format($item->price) }}đ</span>
                                                            <span class="discounted-price">{{ number_format($item->sale_price) }}đ</span>
                                                            @else
                                                            <span class="discounted-price">{{ number_format($item->price) }}đ</span>
                                                            @endif
                                                        </div>
                                                        <div class="rating">
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star-outline"></i>
                                                            <i class="ion-android-star-outline"></i>
                                                            <i class="ion-android-star-outline"></i>
                                                        </div>
                                                    </div>

                                                </div>

                                                <!--=======  End of content  =======-->
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--=======  End of page sidebar  =======-->
                    </div>

                    <div class="col-lg-9 order-1 mb-md-80 mb-sm-80">
                        <div class="col-12">
                            <!--=======  fitler titles  =======-->
                            <div class="myaccount-tab-menu nav" role="tablist">
                                <a class="nav-link active" id="dashboard-tab" data-bs-toggle="tab" href="#dashboard"
                                    role="tab" aria-controls="dashboard" aria-selected="true">Sản phẩm nổi bật</a>
                                <a class="nav-link" id="allProduct-tab" data-bs-toggle="tab" href="#allProduct"
                                    role="tab" aria-controls="allProduct" aria-selected="false">Tất cả sản phẩm</a>
                                <a class="nav-link" id="orders-tab" data-bs-toggle="tab" href="#orders" role="tab"
                                    aria-controls="orders" aria-selected="false">Sản phẩm mới phát hành</a>
                                <a class="nav-link" id="download-tab" data-bs-toggle="tab" href="#download"
                                    role="tab" aria-controls="download" aria-selected="false">Khuyến mãi</a>
                            </div>
                            <!--=======  End of fitler titles  =======-->
                        </div>
                        <div class="tab-content" id="myaccountContent">
                            <div class="tab-pane fade show active" id="dashboard" role="tabpanel"
                                aria-labelledby="dashboard-tab">
                                <div class="myaccount-content">
                                    <h3>Sản phẩm nổi bật</h3>
                                    <div class="product-carousel-container">
                                        <div class="container">
                                            <div class="row">
                                                @foreach ($featureProducts as $item)
                                                    <div class="col-12 col-md-6 col-sm-6 mb-45 hot sale col-lg-4">

                                                        <div class="single-product">
                                                            <div class="single-product__image">
                                                                <a class="image-wrap"
                                                                    href="{{ route('detail_product', $item->slug) }}">
                                                                    <img src="{{ asset('storage/admin/images') }}/{{ $item->image }}"
                                                                        class="img-fluid product-image" alt="">
                                                                </a>

                                                                <div class="single-product__floating-badges">
                                                                    @if ($item->stock <= 0)
                                                                        <span class="out-of-stock"
                                                                            data-tippy="Tạm hết hàng"
                                                                            data-tippy-inertia="true"
                                                                            data-tippy-animation="shift-away"
                                                                            data-tippy-delay="50" data-tippy-arrow="true"
                                                                            data-tippy-theme="sharpborder"
                                                                            data-tippy-placement="right"><i
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

                                                                <form
                                                                    action="{{ route('cart.add', ['product' => $item->id]) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    <input type="hidden" name="id"
                                                                        value="{{ $item->id }}">
                                                                    <div class="single-product__floating-icons">
                                                                        @if (Auth::check())
                                                                            <span class="cart"><a href=""><button
                                                                                        style="background-color: rgba(0, 0, 0, 0.0); border: none;"
                                                                                        data-tippy="Thêm vào giỏ hàng"
                                                                                        data-tippy-inertia="true"
                                                                                        data-tippy-animation="shift-away"
                                                                                        data-tippy-delay="50"
                                                                                        data-tippy-arrow="true"
                                                                                        data-tippy-theme="sharpborder"
                                                                                        data-tippy-placement="left"><i
                                                                                            class="ion-ios-cart"></i></button></a></span>
                                                                        @else
                                                                            <span class="cart"><a href="#"
                                                                                    data-tippy="Thêm vào giỏ hàng"
                                                                                    data-toggle="modal" data-target="#loginModal"
                                                                                    class="ion-ios-cart"></i></a></span>
                                                                        @endif
                                                                    </div>
                                                                </form>


                                                            </div>

                                                            <!--=======  single product content  =======-->
                                                            <div class="single-product__content">
                                                                <div class="title">
                                                                    <h3 style="font-weight: bold;">
                                                                        <a href="{{ route('detail_product', $item->slug) }}"
                                                                            class="truncate">{{ $item->title }}</a>
                                                                    </h3>
                                                                    <h5> <a href="#">{{ $item->category->title }}</a>
                                                                    </h5>
                                                                    <a
                                                                        href="{{ route('detail_product', $item->slug) }}">{{ $item->title }}</a>
                                                                </div>
                                                                <div class="price">
                                                                    @if ($item->sale_price && $item->sale_price < $item->price)
                                                                        <span
                                                                            class="main-price discounted">{{ number_format($item->price) }}₫</span>
                                                                        <span class="discounted-price"
                                                                            style="color: red">{{ number_format($item->sale_price) }}₫</span>
                                                                    @else
                                                                        <span
                                                                            class="main-price">{{ number_format($item->price) }}₫</span>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                @endforeach
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-12 text-center mb-25 mt-30">
                                                    <a class="lezada-loadmore-button" href="#"><i
                                                            class="ion-ios-plus-empty"></i> Tải thêm ...</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="allProduct" role="tabpanel" aria-labelledby="allProduct-tab">
                                <div class="myaccount-content">
                                    <h3>Tất cả sản phẩm</h3>
                                    <div class="product-carousel-container mb-70">
                                        <div class="container">
                                            <div class="row">
                                                @foreach ($allProducts as $item)
                                                    <div class="col-12 col-md-6 col-sm-6 mb-45 hot sale col-lg-4">
                                                        <div class="single-product">
                                                            <div class="single-product__image">
                                                                <a class="image-wrap"
                                                                    href="{{ route('detail_product', $item->slug) }}">
                                                                    <img src="{{ asset('storage/admin/images') }}/{{ $item->image }}"
                                                                        class="img-fluid product-image" alt="">
                                                                </a>
                                                                <div class="single-product__floating-badges">
                                                                    @if ($item->stock <= 0)
                                                                        <span class="out-of-stock"
                                                                            data-tippy="Tạm hết hàng"
                                                                            data-tippy-inertia="true"
                                                                            data-tippy-animation="shift-away"
                                                                            data-tippy-delay="50" data-tippy-arrow="true"
                                                                            data-tippy-theme="sharpborder"
                                                                            data-tippy-placement="right"><i
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
                                                                <form
                                                                    action="{{ route('cart.add', ['product' => $item->id]) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    <input type="hidden" name="id"
                                                                        value="{{ $item->id }}">
                                                                    <div class="single-product__floating-icons">
                                                                        @if (Auth::check())
                                                                            <span class="wishlist"><a
                                                                                    href=""><button
                                                                                        style="background-color: rgba(0, 0, 0, 0.0); border: none;"
                                                                                        data-tippy="Thêm vào giỏ hàng"
                                                                                        data-tippy-inertia="true"
                                                                                        data-tippy-animation="shift-away"
                                                                                        data-tippy-delay="50"
                                                                                        data-tippy-arrow="true"
                                                                                        data-tippy-theme="sharpborder"
                                                                                        data-tippy-placement="left"><i
                                                                                            class="ion-ios-cart"></i></button></a></span>
                                                                        @else
                                                                            <span class="wishlist"><a href="#"
                                                                                    data-tippy="Thêm vào giỏ hàng"
                                                                                    data-toggle="modal" data-target="#loginModal"
                                                                                    class="ion-ios-cart"></i></a></span>
                                                                        @endif
                                                                    </div>
                                                                </form>
                                                            </div>

                                                            <!--=======  single product content  =======-->

                                                            <div class="single-product__content">
                                                                <div class="title">
                                                                    <h3 style="font-weight: bold;">
                                                                        <a href="{{ route('detail_product', $item->slug) }}"
                                                                            class="truncate">{{ $item->title }}</a>
                                                                    </h3>
                                                                    </h3>
                                                                    <h5> <a
                                                                            href="#">{{ $item->category->title }}</a>
                                                                    </h5>
                                                                    <a
                                                                        href="{{ route('detail_product', $item->slug) }}">{{ $item->title }}</a>
                                                                </div>
                                                                <div class="price">
                                                                    @if ($item->sale_price && $item->sale_price < $item->price)
                                                                        <span
                                                                            class="main-price discounted">{{ number_format($item->price) }}₫</span>
                                                                        <span class="discounted-price"
                                                                            style="color: red">{{ number_format($item->sale_price) }}₫</span>
                                                                    @else
                                                                        <span
                                                                            class="main-price">{{ number_format($item->price) }}₫</span>
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
                                                    <a class="lezada-loadmore-button" href="#"><i
                                                            class="ion-ios-plus-empty"></i> LOAD MORE ...</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                                <div class="myaccount-content">
                                    <h3>Sản phẩm mới phát hành</h3>
                                    <div class="product-carousel-container mb-70">
                                        <div class="container">
                                            <div class="row">
                                                @foreach ($newProducts as $item)
                                                    <div class="col-12 col-md-6 col-sm-6 mb-45 hot sale col-lg-4">
                                                        <div class="single-product">
                                                            <div class="single-product__image">
                                                                <a class="image-wrap"
                                                                    href="{{ route('detail_product', $item->slug) }}">
                                                                    <img src="{{ asset('storage/admin/images') }}/{{ $item->image }}"
                                                                        class="img-fluid product-image" alt="">
                                                                </a>
                                                                <div class="single-product__floating-badges">
                                                                    @if ($item->stock <= 0)
                                                                        <span class="out-of-stock"
                                                                            data-tippy="Tạm hết hàng"
                                                                            data-tippy-inertia="true"
                                                                            data-tippy-animation="shift-away"
                                                                            data-tippy-delay="50" data-tippy-arrow="true"
                                                                            data-tippy-theme="sharpborder"
                                                                            data-tippy-placement="right"><i
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
                                                                <form
                                                                    action="{{ route('cart.add', ['product' => $item->id]) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    <input type="hidden" name="id"
                                                                        value="{{ $item->id }}">
                                                                    <div class="single-product__floating-icons">
                                                                        @if (Auth::check())
                                                                            <span class="wishlist"><a
                                                                                    href=""><button
                                                                                        style="background-color: rgba(0, 0, 0, 0.0); border: none;"
                                                                                        data-tippy="Thêm vào giỏ hàng"
                                                                                        data-tippy-inertia="true"
                                                                                        data-tippy-animation="shift-away"
                                                                                        data-tippy-delay="50"
                                                                                        data-tippy-arrow="true"
                                                                                        data-tippy-theme="sharpborder"
                                                                                        data-tippy-placement="left"><i
                                                                                            class="ion-ios-cart"></i></button></a></span>
                                                                        @else
                                                                            <span class="wishlist"><a href="#"
                                                                                    data-tippy="Thêm vào giỏ hàng"
                                                                                    data-toggle="modal" data-target="#loginModal"
                                                                                    class="ion-ios-cart"></i></a></span>
                                                                        @endif
                                                                    </div>
                                                                </form>
                                                            </div>

                                                            <!--=======  single product content  =======-->

                                                            <div class="single-product__content">
                                                                <div class="title">
                                                                    <h3 style="font-weight: bold;">
                                                                        <a href="{{ route('detail_product', $item->slug) }}"
                                                                            class="truncate">{{ $item->title }}</a>
                                                                    </h3>
                                                                    </h3>
                                                                    <h5> <a
                                                                            href="#">{{ $item->category->title }}</a>
                                                                    </h5>
                                                                    <a
                                                                        href="{{ route('detail_product', $item->slug) }}">{{ $item->title }}</a>
                                                                </div>
                                                                <div class="price">
                                                                    @if ($item->sale_price && $item->sale_price < $item->price)
                                                                        <span
                                                                            class="main-price discounted">{{ number_format($item->price) }}₫</span>
                                                                        <span class="discounted-price"
                                                                            style="color: red">{{ number_format($item->sale_price) }}₫</span>
                                                                    @else
                                                                        <span
                                                                            class="main-price">{{ number_format($item->price) }}₫</span>
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
                                                    <a class="lezada-loadmore-button" href="#"><i
                                                            class="ion-ios-plus-empty"></i> LOAD MORE ...</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="download" role="tabpanel" aria-labelledby="download-tab">
                                <div class="myaccount-content">
                                    <h3>Sản phẩm khuyến mãi</h3>
                                    <div class="product-carousel-container mb-70">
                                        <div class="container">
                                            <div class="row">
                                                @foreach ($discountedProducts as $item)
                                                    <div class="col-12 col-md-6 col-sm-6 mb-45 hot sale col-lg-4">
                                                        <div class="single-product">
                                                            <div class="single-product__image">
                                                                <a class="image-wrap"
                                                                    href="{{ route('detail_product', $item->slug) }}">
                                                                    <img src="{{ asset('storage/admin/images') }}/{{ $item->image }}"
                                                                        class="img-fluid product-image" alt="">
                                                                </a>
                                                                <div class="single-product__floating-badges">
                                                                    @if ($item->stock <= 0)
                                                                        <span class="out-of-stock"
                                                                            data-tippy="Tạm hết hàng"
                                                                            data-tippy-inertia="true"
                                                                            data-tippy-animation="shift-away"
                                                                            data-tippy-delay="50" data-tippy-arrow="true"
                                                                            data-tippy-theme="sharpborder"
                                                                            data-tippy-placement="right"><i
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
                                                                <form
                                                                    action="{{ route('cart.add', ['product' => $item->id]) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    <input type="hidden" name="id"
                                                                        value="{{ $item->id }}">
                                                                    <div class="single-product__floating-icons">
                                                                        @if (Auth::check())
                                                                            <span class="wishlist"><a
                                                                                    href=""><button
                                                                                        style="background-color: rgba(0, 0, 0, 0.0); border: none;"
                                                                                        data-tippy="Thêm vào giỏ hàng"
                                                                                        data-tippy-inertia="true"
                                                                                        data-tippy-animation="shift-away"
                                                                                        data-tippy-delay="50"
                                                                                        data-tippy-arrow="true"
                                                                                        data-tippy-theme="sharpborder"
                                                                                        data-tippy-placement="left"><i
                                                                                            class="ion-ios-cart"></i></button></a></span>
                                                                        @else
                                                                            <span class="wishlist"><a href="#"
                                                                                    data-tippy="Thêm vào giỏ hàng"
                                                                                   data-toggle="modal" data-target="#loginModal"
                                                                                    class="ion-ios-cart"></i></a></span>
                                                                        @endif
                                                                    </div>
                                                                </form>
                                                            </div>

                                                            <!--=======  single product content  =======-->

                                                            <div class="single-product__content">
                                                                <div class="title">
                                                                    <h3 style="font-weight: bold;">
                                                                        <a href="{{ route('detail_product', $item->slug) }}"
                                                                            class="truncate">{{ $item->title }}</a>
                                                                    </h3>
                                                                    </h3>
                                                                    <h5> <a
                                                                            href="#">{{ $item->category->title }}</a>
                                                                    </h5>
                                                                    <a
                                                                        href="{{ route('detail_product', $item->slug) }}">{{ $item->title }}</a>
                                                                </div>
                                                                <div class="price">
                                                                    @if ($item->sale_price && $item->sale_price < $item->price)
                                                                        <span
                                                                            class="main-price discounted">{{ number_format($item->price) }}₫</span>
                                                                        <span class="discounted-price"
                                                                            style="color: red">{{ number_format($item->sale_price) }}₫</span>
                                                                    @else
                                                                        <span
                                                                            class="main-price">{{ number_format($item->price) }}₫</span>
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
                                                    <a class="lezada-loadmore-button" href="#"><i
                                                            class="ion-ios-plus-empty"></i> LOAD MORE ...</a>
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
        </div>

        <!--=====  End of shop page content  ======-->
    </div>
@endsection
