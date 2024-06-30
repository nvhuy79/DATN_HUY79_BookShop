@extends('user/layouts/page')
@section('content')
    <div class="shop-page-wrapper">
        <div class="shop-advance-filter-area" id="shop-advance-filter-area">
            <div class="shop-advance-filter-wrapper pt-50">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-md-4 col-sm-6 mb-50">
                            <!--=======  single advance filte  =======-->



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
                                            data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-theme="sharpborder"><span class="color-picker oak"></span></a></li>
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
                    <div class="col-lg-3 order-2 order-lg-1" style="margin-top: 3%; border: 1px solid #C0C0C0; padding: 10px; border-radius: 10px;">
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
                                    <a id="show-more" href="#"> Tải thêm ...</a>
                                @endif
                            </div>
            
                            <div class="single-sidebar-widget mb-40">
                                <h2 class="single-sidebar-widget--title">Bán chạy</h2>
                                <div class="widget-product-wrapper">
                                    <div class="single-widget-product-wrapper">
                                        @foreach ($sellingProducts as $item)
                                            <div class="single-widget-product">
                                                <div class="single-widget-product__image">
                                                    <a href="{{ route('detail_product', $item->slug) }}">
                                                        <img src="{{ asset('storage/admin/images') }}/{{ $item->image }}" class="img-fluid" alt="">
                                                    </a>
                                                </div>
                                                <div class="single-widget-product__content">
                                                    <div class="single-widget-product__content__top">
                                                        <h3 class="product-title"><a href="{{ route('detail_product', $item->slug) }}">{{ $item->title }}</a></h3>
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
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            
                    <div class="col-lg-9 order-1 mb-md-80 mb-sm-80">
                        <div class="tab-content" id="myaccountContent">
                            <div class="tab-pane fade show active" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                                <div class="myaccount-content">
                                    <h3 style="text-align:center">{{ $blogs->title }}</h3>
                                    <div class="product-carousel-container">
                                        <div class="container">
                                            {!! $blogs->content !!}
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
