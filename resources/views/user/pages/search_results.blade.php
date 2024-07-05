@extends('user/layouts/page')
@section('content')
    <div class="container">
        <h3>Kết quả cho: "{{ $query }}"</h3>
        @if($products->count() > 0)
            <div class="row">
                @foreach ($products as $item)
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
                                                data-toggle="modal" data-target="#loginModal" class="ion-ios-cart"></i></a></span>
                                        @endif
                                    </div>
                                </form>
                            </div>

                            <!--=======  single product content  =======-->

                            <div class="single-product__content">
                                <div class="title">
                                    <h3 style="font-weight: bold;">
                                        <a href="{{ route('detail_product', $item->slug) }}" class="truncate">{{ $item->title }}</a>
                                    </h3>
                                    <h5><a href="#">{{ $item->category->title }}</a></h5>
                                    <a href="{{ route('detail_product', $item->slug) }}" class="truncatee">{{ $item->title }}</a>
                                </div>
                                <div class="price">
                                    @if ($item->sale_price && $item->sale_price < $item->price)
                                        <span class="main-price discounted">{{ number_format($item->price) }}₫</span>
                                        <span class="discounted-price" style="color: red">{{ number_format($item->sale_price) }}₫</span>
                                    @else
                                        <span class="main-price" style="color: red">{{ number_format($item->price) }}₫</span>
                                    @endif
                                </div>
                            </div>
                            
                            
                            
                            </form>
                        </div>

                    </div>
                @endforeach
            </div>
            {{ $products->links() }} <!-- Phân trang -->
        @else
            <p>Không tìm thấy sản phẩm nào phù hợp với từ khóa tìm kiếm.</p>
        @endif
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                document.querySelector('.search-form input[name="query"]').value = '';
            });
        </script>
    </div>
@endsection
