<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Haven BookStore</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('user/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('user/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('user/css/ionicons.css') }}" rel="stylesheet">
    <link href="{{ asset('user/css/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('user/css/plugins.css') }}" rel="stylesheet">
    <link href="{{ asset('user/css/helper.css') }}" rel="stylesheet">
    <link href="{{ asset('user/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('user/revolution/css/settings.css') }}" rel="stylesheet">
    <link href="{{ asset('user/revolution/css/navigation.css') }}" rel="stylesheet">
    <link href="{{ asset('user/revolution/custom-setting.css') }}" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.css" />

    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .section-title.section-title--one.text-center h1 {
            font-family: 'Lora', serif;
        }

        .category-item.hidden {
            display: none;
        }

        .product-item.hidden {
            display: none;
        }

        .truncate {
            display: block;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 230px;
            /* Adjust this value to fit your layout */
        }
    </style>
</head>

<body>
    {{-- Modall  --}}
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLongTitle">Thông báo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Bạn cần đăng nhập để sử dụng chức năng.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <a href="{{ route('login') }}" class="btn btn-secondary">Đăng
                        nhập</a>
                </div>
            </div>
        </div>
    </div>
    <header class="header header-box-topbar header-sticky">
        <div class="header-bottom pt-40   pb-md-40  pb-sm-40">
            <div class="container">
                <div class="header-bottom-container">
                    <div class="language-currency-change-container">
                        <div class="language-change change-dropdown d-none d-lg-block">
                            <a>Tài khoản</a>
                            <ul>
                                @if (Auth::check())
                                    <li><a href="{{ route('profile') }}">Tài khoản</a></li>
                                    <li><a href="{{ route('logout') }}">Đăng xuất</a></li>
                                @else
                                    <li><a href="{{ route('login') }}">Đăng nhập</a></li>
                                    <li><a href="{{ route('register') }}">Đăng ký</a></li>
                                @endif
                            </ul>
                        </div>

                    </div>
                    <div class="logo-with-offcanvas">
                        <div class="logo">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('user/images/logo1.png') }}" class="img-fluid" alt="">
                            </a>
                        </div>

                    </div>
                    <div class="header-right-container">
                        <div class="header-right-icons d-flex justify-content-end align-items-center h-100">
                            {{-- <div class="single-icon search">
                                <a href="javascript:void(0)" id="search-icon">
                                    <i class="ion-ios-search-strong"></i>
                                </a>
                            </div> --}}
                            <div class="single-icon user-login" style="padding-right:10%">
                                @if (Auth::check())
                                    <span
                                        style="font-weight: 450; font-size: 16px; color: #333; display: inline-block; max-width: 150px; ; white-space: nowrap; text-overflow: ellipsis;">
                                        <i class="ion-android-person"
                                            style="margin-right: 5px; font-size: 1.5em;"></i><a
                                            href="{{ route('profile') }}"
                                            style="font-size: 18px;">{{ Auth()->user()->name }}</a>
                                    </span>
                                @else
                                    <a href="{{ route('login') }}">
                                        <i class="ion-android-person"></i>
                                    </a>
                                @endif


                            </div>

                            <div class="single-icon cart">
                                <a href="#" id="offcanvas-cart-icon">
                                    <i class="ion-ios-cart" style="font-size: 1.5em; margin-left:15%"></i>
                                    @foreach ($carts as $cart)
                                        <span class="count">{{ $carts->count() }}</span>
                                    @endforeach
                                </a>
                            </div>
                        </div>
                    </div>

                    <!--=======  End of headeer right container  =======-->

                    <!--=======  header bottom navigation  =======-->

                    <div class="header-bottom-navigation">
                        <div class="site-main-nav d-none d-lg-block">
                            <nav class="site-nav center-menu">
                                <ul>
                                    <li class="menu-item"><a href="{{ route('home') }}">Trang chủ</a></li>
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0)">Danh mục</a>
                                        <ul class="sub-menu single-column-menu single-column-has-children">
                                            @foreach ($categories as $category)
                                                @if ($category->parent_id == null)
                                                    <!-- Chỉ hiển thị danh mục cấp cao nhất -->
                                                    <li class="menu-item-has-children">
                                                        <a
                                                            href="{{ route('view_category', ['id' => $category->id]) }}">{{ $category->title }}</a>
                                                        @if ($category->children->count())
                                                            <ul class="multilevel-submenu">
                                                                @foreach ($category->children as $child)
                                                                    <li><a
                                                                            href="{{ route('view_category', ['id' => $child->id]) }}">{{ $child->title }}</a>
                                                                    </li>
                                                                    @if ($child->children->count())
                                                                        <ul class="multilevel-submenu">
                                                                            @foreach ($child->children as $subChild)
                                                                                <li><a
                                                                                        href="{{ route('view_category', ['id' => $child->id]) }}">{{ $subChild->title }}</a>
                                                                                </li>
                                                                            @endforeach
                                                                        </ul>
                                                                    @endif
                                                                @endforeach
                                                            </ul>
                                                        @endif
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </li>

                                    <li class="menu-item"><a href="{{ route('featured_product') }}">Sản phẩm nổi
                                            bật</a></li>
                                    @if (Auth::check())
                                        <li class="menu-item"><a href="{{ route('cart.index') }}">Giỏ hàng</a></li>
                                    @else
                                        <li class="menu-item">
                                            <!-- Button trigger modal -->
                                            <a href="#" data-toggle="modal" data-target="#loginModal">Giỏ
                                                hàng</a>
                                        </li>
                                    @endif


                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>

                <!--=======  End of header bottom container  =======-->

                <!-- Mobile Navigation -->
                <div class="site-mobile-navigation d-block d-lg-none">
                    <div id="dl-menu" class="dl-menuwrapper site-mobile-nav">
                        <button class="dl-trigger hamburger hamburger--spin">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                        <!--Site Mobile Menu Toggle End-->
                        <ul class="dl-menu dl-menu-toggle">
                            <li class=""><a href="{{ route('home') }}">Trang chủ</a></li>
                            <li><a href="#">Danh mục</a>
                                <ul class="dl-submenu">
                                    @foreach ($categories as $category)
                                        @if ($category->parent_id == null)
                                            <li class=""> <a
                                                    href="{{ route('view_category', ['id' => $category->id]) }}">{{ $category->title }}</a>
                                                @if ($category->children->count())
                                                    <ul class="dl-submenu">
                                                        @foreach ($category->children as $child)
                                                            <li><a
                                                                    href="{{ route('view_category', ['id' => $child->id]) }}">{{ $child->title }}</a>
                                                            </li>
                                                            {{-- <li><a href="#">Shop Left Sidebar</a></li> --}}
                                                        @endforeach
                                                    </ul>
                                                @endif
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </li>
                            <li><a href="#">Mới phát hành</a></li>
                            <li><a href="#">Khuyến mãi</a></li>
                            <li><a href="#">Giỏ hàng</a></li>

                            @if (Auth::check())
                                <li><a href="{{ route('logout') }}">Đăng xuất</a></li>
                            @else
                                <li><a href="{{ route('register') }}">Đăng ký</a></li>
                                <li><a href="{{ route('login') }}">Đăng nhập</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
                <!-- Mobile Navigation End  -->
            </div>
        </div>


        <!--=======  about overlay  =======-->
        <div class="header-offcanvas about-overlay" id="about-overlay">
            <div class="overlay-close inactive"></div>
            <div class="overlay-content">
                <span class="close-icon" id="about-close-icon">
                    <a href="javascript:void(0)">
                        <i class="ti-close"></i>
                    </a>
                </span>
            </div>
        </div>

        <!--=======  cart overlay  =======-->
        <div class="cart-overlay" id="cart-overlay">
            <div class="cart-overlay-close inactive"></div>
            <div class="cart-overlay-content">
                <span class="close-icon" id="cart-close-icon">
                    <a href="javascript:void(0)">
                        <i class="ion-android-close"></i>
                    </a>
                </span>
                <div class="offcanvas-cart-content-container">
                    <h3 class="cart-title">Giỏ hàng</h3>
                    <div class="cart-product-wrapper">

                        <div class="cart-product-container  ps-scroll">
                            @foreach ($carts as $cart)
                                <div class="single-cart-product">
                                    <span class="cart-close-icon">
                                        <a href="{{ route('cart.delete', $cart->product_id) }}"
                                            onclick="return confirm('Bạn muốn xóa sản phẩm khỏi giỏ hàng?')">
                                            <i class="ti-close"></i>
                                        </a>
                                    </span>

                                    <div class="image">
                                        <a href="{{ route('detail_product', $cart->prod->slug) }}">
                                            <img src="{{ asset('storage/admin/images') }}/{{ $cart->prod->image }}"
                                                class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5><a
                                                href="{{ route('detail_product', $cart->prod->slug) }}">{{ $cart->prod->title }}</a>
                                        </h5>
                                        <p><span class="cart-count">{{ $cart->quantity }}x </span> <span
                                                class="discounted-price">{{ number_format($cart->price, 0, ',', '.') }}
                                                ₫</span></p>
                                    </div>

                                </div>
                            @endforeach
                        </div>

                        @php
                            $totalPrice = 0;
                            foreach ($carts as $cart) {
                                $totalPrice += $cart->price * $cart->quantity;
                            }
                        @endphp
                        <p class="cart-subtotal">
                            <span class="subtotal-title">Tổng tiền:</span>
                            <span class="subtotal-amount">{{ number_format($totalPrice, 0, ',', '.') }} ₫</span>
                        </p>

                        <div class="cart-buttons">
                            <a href="{{ route('cart.index') }}">Xem danh sách</a>
                            <a href="{{ route('checkout') }}">Thanh toán</a>
                        </div>

                        <p class="free-shipping-text">
                            *Miễn phí vận chuyển với đơn hàng từ 999.000đ!
                        </p>
                    </div>
                </div>
            </div>
        </div>


        <!--=======  search overlay  =======-->
        <div class="search-overlay" id="search-overlay">
            <span class="close-icon search-close-icon">
                <a href="javascript:void(0)" id="search-close-icon">
                    <i class="ti-close"></i>
                </a>
            </span>
            <div class="search-overlay-content">
                <div class="input-box">
                    <form action="#">
                        <input type="search" style="font-size: 17px" placeholder="Tìm kiếm sản phẩm...">
                    </form>
                </div>
                <div class="search-hint">
                    <span>Bấm # để tìm kiếm hoặc ESC để thoát</span>
                </div>
            </div>
        </div>

    </header>
    {{-- <div class="container" style="text-align: right">
        <input type="text" id="search" class="autocomplete-input" placeholder="Tìm kiếm sản phẩm...">
        <a href=""><i class="ion-ios-search-strong" id="search-icon"></i></a>
    </div> --}}
    <main class="py-4">
        @yield('content')
    </main>

    <div class="footer-container footer-one pt-100 pb-50">
        <div class="container wide">
            <div class="row">
                <div class="col footer-single-widget">
                    <div class="footer-top-single-widget">
                        <h4 class="footer-top-widget-title">BẢO MẬT THANH TOÁN</h4>
                        <div class="content">
                            <img src="{{ asset('user/images/icons/pay.png') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
                <div class="col footer-single-widget">
                    <h5 class="widget-title">Liên hệ</h5>
                    <div class="footer-nav-container">
                        <nav>
                            <ul>
                                <li><a href="#">Mua sắm online - Đơn giản và tiết kiệm</a></li>
                                <li><a href="#">Địa chỉ: 175 P. Tây Sơn, Trung Liệt, Đống Đa, Hà Nội
                                        116705</a>
                                </li>
                                <li><a href="#">SDT: 0902231050</a></li>
                                <li><a href="#">Email: 2051063588@e.tlu.edu.vn</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col footer-single-widget">
                    <h5 class="widget-title">Giới thiệu</h5>
                    <div class="footer-nav-container">
                        <nav>
                            <ul>
                                <li><a href="{{ route('blogs_view') }}">Hướng dẫn mua hàng</a></li>
                                <li><a href="#">Điều khoản dịch vụ</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col footer-single-widget">
                    <h5 class="widget-title">Kết nối với chúng tôi</h5>
                    <div class="footer-nav-container footer-social-links">
                        <nav>
                            <ul>
                                <li><a href="http://facebook.com/"> <i class="fa-brands fa-facebook"></i>Facebook</a>
                                </li>
                                <li><a href="http://instagram.com/"><i class="fa-brands fa-instagram"></i>
                                        Instagram</a>
                                </li>
                                <li><a href="http://youtube.com/"> <i class="fa-brands fa-youtube"></i> Youtube</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col footer-single-widget">
                    <div class="footer-subscription-widget">
                        <h2 class="footer-subscription-title">Khám phá.</h2>
                        {{-- <div class="img">
                                    <img src="{{ asset('{{asset('user/images/logo1.png') }}" alt="">
                                </div> --}}
                        <p class="subscription-subtitle">Tận hưởng thế giới đang chờ đợi trong từng trang sách.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <a href="#" class="scroll-top"></a> --}}
    <script src="{{ asset('user/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    <script src="{{ asset('user/js/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('user/js/popper.min.js') }}"></script>
    <script src="{{ asset('user/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('user/js/plugins.js') }}"></script>
    <script src="{{ asset('user/js/main.js') }}"></script>
    <script src="{{ asset('user/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('user/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('user/revolution/revolution-active.js') }}"></script>
    <script type="text/javascript" src="{{ asset('user/revolution/js/extensions/revolution.extension.kenburn.min.js') }}">
    </script>
    <script type="text/javascript"
        src="{{ asset('user/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('user/revolution/js/extensions/revolution.extension.actions.min.js') }}">
    </script>
    <script type="text/javascript"
        src="{{ asset('user/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('user/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('user/revolution/js/extensions/revolution.extension.parallax.min.js') }}">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
    <df-messenger intent="WELCOME" chat-title="HavenBookStore" agent-id="46690aea-c5e0-49a4-9b68-057c2c899ee9"
        language-code="vi"></df-messenger>
    <script>
        @if (Session::has('success'))
            $.toast({
                heading: 'Thành công!',
                text: '{{ session('success') }}',
                showHideTransition: 'slide',
                icon: 'success'
            });
        @elseif (Session::has('error'))
            $.toast({
                heading: 'Lỗi!',
                text: '{{ session('error') }}',
                showHideTransition: 'slide',
                icon: 'error',
            });
        @elseif (Session::has('Success_Regis'))
            $.toast({
                heading: 'Thành công!',
                text: '{{ session('Success_Regis') }}',
                showHideTransition: 'slide',
                icon: 'success',
            });
        @elseif (Session::has('logout_success'))
            $.toast({
                heading: 'Thành công!',
                text: '{{ session('logout_success') }}',
                showHideTransition: 'slide',
                icon: 'success',
            });
        @endif
    </script>

    {{-- Ẩn danh mục khi quá 5 --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const showMoreButton = document.getElementById('show-more');
            const hiddenItems = document.querySelectorAll('.category-item.hidden');

            showMoreButton.addEventListener('click', function() {
                hiddenItems.forEach(item => item.classList.remove('hidden'));
                showMoreButton.style.display = 'none';
            });
        });
    </script>

</body>

</html>
