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
    <script src="{{ asset('user/js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<body>
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
                            <div class="single-icon search">
                                <a href="javascript:void(0)" id="search-icon">
                                    <i class="ion-ios-search-strong"></i>
                                </a>
                            </div>
                            <div class="single-icon user-login">
                                @if (Auth::check())
                                    <span
                                        style="font-weight: 450; font-size: 16px; color: #333; display: inline-block; max-width: 150px; ; white-space: nowrap; text-overflow: ellipsis;">
                                        <i class="ion-android-person" style="margin-right: 5px;"></i><a
                                            href="{{ route('profile') }}">{{ Auth()->user()->name }}</a>
                                    </span>
                                @else
                                    <a href="{{ route('login') }}">
                                        <i class="ion-android-person"></i>
                                    </a>
                                @endif


                            </div>
                            {{-- <div class="single-icon wishlist">
                                <a href="javascript:void(0)" id="offcanvas-wishlist-icon">
                                    <i class="ion-android-favorite-outline"></i>
                                    <span class="count">2</span>
                                </a>
                            </div> --}}
                            <div class="single-icon cart">
                                <a href="#" id="offcanvas-cart-icon">
                                    <i class="ion-ios-cart"></i>
                                    <span class="count">3</span>
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
                                    <li class="menu-item-has-children"><a href="#">Danh
                                            mục</a>
                                        <ul class="sub-menu single-column-menu">
                                            @foreach($categories as $item)
                                            <li><a href="#">{{ $item->title }}</a></li>
                                        @endforeach
                                        </ul>
                                    </li>
                                    <li class="menu-item"><a href="javascript:void(0)">Mới phát hành</a></li>
                                    <li class="menu-item"><a href="javascript:void(0)">Khuyến mãi</a></li>
                                    <li class="menu-item"><a href="{{ route('cart.index') }}">Giỏ hàng</a></li>
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
                                    <li class=""> <a href="{{ route('category') }}">Thể loại</a>
                                        <ul class="dl-submenu">
                                            <li><a href="#">Shop No Sidebar</a></li>
                                            <li><a href="#">Shop Left Sidebar</a></li>
                                        </ul>
                                    </li>
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

        <!--=======  wishlist overlay  =======-->
        <div class="wishlist-overlay" id="wishlist-overlay">
            <div class="wishlist-overlay-close inactive"></div>
            <div class="wishlist-overlay-content">
                <span class="close-icon" id="wishlist-close-icon">
                    <a href="javascript:void(0)">
                        <i class="ion-android-close"></i>
                    </a>
                </span>
                <div class="offcanvas-cart-content-container">
                    <h3 class="cart-title">Yêu thích</h3>
                    <div class="cart-product-wrapper">
                        <div class="cart-product-container  ps-scroll">

                            <div class="single-cart-product">
                                <span class="cart-close-icon">
                                    <a href="#"><i class="ti-close"></i></a>
                                </span>
                                <div class="image">
                                    <a href="shop-product-basic.html">
                                        <img src="{{ asset('user/images/cart-product-image/01.jpg') }}"
                                            class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="content">
                                    <h5><a href="shop-product-basic.html">Dark Brown Leather Watch</a></h5>
                                    <p><span class="main-price discounted">$200.00</span> <span
                                            class="discounted-price">$180.00</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="cart-buttons">
                            <a href="shop-wishlist.html">Xem danh sách</a>
                        </div>
                    </div>
                </div>
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
                            <div class="single-cart-product">
                                <span class="cart-close-icon">
                                    <a href="#"><i class="ti-close"></i></a>
                                </span>
                                <div class="image">
                                    <a href="shop-product-basic.html">
                                        <img src="{{ asset('user/images/cart-product-image/01.jpg') }}"
                                            class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="content">
                                    <h5><a href="shop-product-basic.html">Dark Brown Leather Watch</a></h5>
                                    <p><span class="cart-count">2 x </span> <span
                                            class="discounted-price">$180.00</span></p>

                                </div>
                            </div>
                        </div>
                        <p class="cart-subtotal">
                            <span class="subtotal-title">Tổng tiền:</span>
                            <span class="subtotal-amount">$200.00</span>
                        </p>
                        <div class="cart-buttons">
                            <a href="shop-cart.html">Xem danh sách</a>
                            <a href="shop-checkout.html">Thanh toán</a>
                        </div>
                        <p class="free-shipping-text">
                            Miến phí ship với đơn hàng từ 499.000đ!
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
                        <input type="search" placeholder="Tìm kiếm sản phẩm...">
                    </form>
                </div>
                <div class="search-hint">
                    <span>Bấm # để tìm kiếm hoặc ESC để thoát</span>
                </div>
            </div>
        </div>
        <!--=============================================
            =            quick view         =
            =============================================-->

        <div id="qv-1" class="cd-quick-view">
            <div class="cd-slider-wrapper">
                <ul class="cd-slider">
                    <li class="selected"><img src="assets/images/products/cloth-1-2-600x800.jpg" alt="Product 2">
                    </li>
                    <li><img src="assets/images/products/cloth-1-1-600x800.jpg" alt="Product 1"></li>
                </ul> <!-- cd-slider -->

                <ul class="cd-slider-pagination">
                    <li class="active"><a href="#0">1</a></li>
                    <li><a href="#1">2</a></li>
                </ul> <!-- cd-slider-pagination -->

                <ul class="cd-slider-navigation">
                    <li><a class="cd-prev" href="#0">Prev</a></li>
                    <li><a class="cd-next" href="#0">Next</a></li>
                </ul> <!-- cd-slider-navigation -->
            </div> <!-- cd-slider-wrapper -->

            <div class="lezada-item-info cd-item-info ps-scroll">

                <h2 class="item-title">High Waist Trousers</h2>
                <p class="price">
                    <span class="main-price discounted">$360.00</span>
                    <span class="discounted-price">$300.00</span>
                </p>

                <p class="description">Hurley Dry-Fit Chino Short. Men's chino short. Outseam Length: 19 Dri-FIT
                    Technology helps
                    keep you dry and comfortable. Made with sweat-wicking fabric. Fitted waist with belt loops.
                    Button waist with
                    zip fly provides a classic look and feel .</p>

                <span class="quickview-title">Quantity:</span>
                <div class="pro-qty d-inline-block mb-40">
                    <input type="text" value="1">
                </div>

                <div class="add-to-cart-btn mb-25">

                    <button class="lezada-button lezada-button--medium">add to cart</button>
                </div>

                <div class="quick-view-other-info">
                    <table>
                        <tr class="single-info">
                            <td class="quickview-title">SKU: </td>
                            <td class="quickview-value">12345</td>
                        </tr>
                        <tr class="single-info">
                            <td class="quickview-title">Categories: </td>
                            <td class="quickview-value">
                                <a href="#">Fashion</a>,
                                <a href="#">Men</a>,
                                <a href="#">Sunglasses</a>
                            </td>
                        </tr>
                        <tr class="single-info">
                            <td class="quickview-title">Tags: </td>
                            <td class="quickview-value">
                                <a href="#">Fashion</a>,
                                <a href="#">Men</a>
                            </td>
                        </tr>
                        <tr class="single-info">
                            <td class="quickview-title">Share on: </td>
                            <td class="quickview-value">
                                <ul class="quickview-social-icons">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </td>
                        </tr>
                    </table>
                </div>


            </div> <!-- cd-item-info -->
            <a href="#0" class="cd-close">Close</a>
        </div>
    </header>

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
                                <li><a href="#">Hướng dẫn mua hàng</a></li>
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
                                <li><a href="http://facebook.com/"> <i class="fa fa-facebook"></i> Facebook</a>
                                </li>
                                <li><a href="http://instagram.com/"><i class="fa fa-instagram"></i> Instagram</a>
                                </li>
                                <li><a href="http://youtube.com/"> <i class="fa fa-youtube"></i> Youtube</a></li>
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

    <a href="#" class="scroll-top"></a>
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

    @if (Session::has('success'))
        <script>
            $.toast({
                heading: 'Thành công!',
                text: '{{ session('success') }}',
                showHideTransition: 'slide',
                icon: 'success'
            });
        </script>
    @elseif(Session::has('error'))
        <script>
            $.toast({
                heading: 'Lỗi!',
                text: '{{ session('error') }}',
                showHideTransition: 'slide',
                icon: 'error',
            });
        </script>
    @elseif(Session::has('Success_Regis'))
        <script>
            $.toast({
                heading: 'Thành công!',
                text: '{{ session('Success_Regis') }}',
                showHideTransition: 'slide',
                icon: 'success',
            });
        </script>
    @elseif(Session::has('logout_success'))
        <script>
            $.toast({
                heading: 'Thành công!',
                text: '{{ session('logout_success') }}',
                showHideTransition: 'slide',
                icon: 'success',
            });
        </script>
    @endif
</body>

</html>
