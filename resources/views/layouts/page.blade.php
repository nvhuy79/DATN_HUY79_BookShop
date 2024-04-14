<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Haven BookStore</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="assets/images/favicon.ico">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/ionicons.min.css" rel="stylesheet">
    <link href="assets/css/themify-icons.css" rel="stylesheet">
    <link href="assets/css/plugins.css" rel="stylesheet">
    <link href="assets/css/helper.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/revolution/css/settings.css" rel="stylesheet">
    <link href="assets/revolution/css/navigation.css" rel="stylesheet">
    <link href="assets/revolution/custom-setting.css" rel="stylesheet">
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--===== Header wide topbar =============-->
    <header class="header header-box-topbar header-sticky">
        <div class="header-bottom pt-40   pb-md-40  pb-sm-40">
            <div class="container">
                <div class="header-bottom-container">
                    <div class="language-currency-change-container">
                        <!--=======  acount options =======-->
                        <div class="account change-dropdown">
                            <a href="javascript:void(0)">Tài khoản</a>
                            <ul>
                                <li><a href="{{ route('register') }}">Đăng ký</a></li>
                                <li><a href="{{ route('login') }}">Đăng nhập</a></li>
                                <li><a href="{{ route('login') }}">Đăng xuất</a></li>
                            </ul>
                        </div>
                        <!--=======  End acount options =======-->
                        <span class="header-separator d-none d-lg-block">|</span>
                        <!--=======  Phone number change =======-->
                        <div class="phone d-none d-lg-block">
                            <a href="#">+84902231050</a>
                        </div>
                        <!--=======  End of Phone number change =======-->
                    </div>
    
                    <div class="logo-with-offcanvas">  
                        <div class="logo">
                            <a href="#">
                                <a href="#"><strong><h4>H A V E N B O O K</h4></strong></a>
                                {{-- <img src="assets/images/logo.png" class="img-fluid" alt=""> --}}
                            </a>
                        </div>
                    </div>
    
                    <div class="header-right-container">
                        <!--=======  header right icons  =======-->
                        <div class="header-right-icons d-flex justify-content-end align-items-center h-100">
                            <!--=======  single-icon  =======-->
                            <div class="single-icon search">
                                <a href="javascript:void(0)" id="search-icon">
                                    <i class="ion-ios-search-strong"></i>
                                </a>
                            </div>
                            <div class="single-icon user-login">
                                <a href="{{ asset('login') }}">
                                    <i class="ion-android-person"></i>
                                </a>
                            </div>
                            <div class="single-icon wishlist">
                                <a href="javascript:void(0)" id="offcanvas-wishlist-icon">
                                    <i class="ion-android-favorite-outline"></i>
                                    <span class="count">2</span>
                                </a>
                            </div>
                            <div class="single-icon cart">
                                <a href="javascript:void(0)" id="offcanvas-cart-icon">
                                    <i class="ion-ios-cart"></i>
                                    <span class="count">3</span>
                                </a>
                            </div>
                        </div>
    
                    </div>
                    <div class="header-bottom-navigation">
                        <div class="site-main-nav d-none d-lg-block">
                            <nav class="site-nav center-menu">
                                <ul>
                                    <li class="menu-item"><a href="{{ route('home') }}">Trang chủ</a>
                                    </li>
                                    <li class="menu-item"><a href="javascript:void(0)">Khuyến mãi</a>
                                    </li>
                                    <li class="menu-item"><a href="javascript:void(0)">Mới phát hành</a>
                                    <li class="menu-item-has-children"><a href="{{ route('category') }}">Danh mục</a>
                                        <ul class="sub-menu single-column-menu">
                                            <li><a href="#">About Us</a></li>
                                            <li><a href="#">About Us 2</a></li>
                                            <li><a href="#">Contact Us</a></li>
                                        </ul>
                                    </li>
                                    </li>
                                    <li class="menu-item"><a href="javascript:void(0)">Blog</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!--=======  End of header bottom container  =======-->

                <!-- Mobile Navigation Start Here -->
                <div class="site-mobile-navigation d-block d-lg-none">
                    <div id="dl-menu" class="dl-menuwrapper site-mobile-nav">
                        <button class="dl-trigger hamburger hamburger--spin">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                        <ul class="dl-menu dl-menu-toggle">
                            <li><a href="#">Trang chủ</a></li>
                            <li><a href="#">Danh mục sản phẩm</a></li>
                            <li><a href="#">Sản phẩm mới phát hành</a></li>
                            <li><a href="#">Khuyến mãi</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Đăng nhập / Đăng ký</a></li>
                            <li><a href="#">Đăng xuất</a></li>
                        </ul>
                    </div>
                </div>
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
                                    <a href="#">
                                        <img src="assets/images/cart-product-image/01.jpg" class="img-fluid"
                                            alt="">
                                    </a>
                                </div>
                                <div class="content">
                                    <h5><a href="#">Dark Brown Leather Watch</a></h5>
                                    <p><span class="#">$200.00</span> <span
                                            class="discounted-price">$180.00</span></p>

                                </div>
                            </div>
                        </div>
                        <!--=======  cart buttons  =======-->
                        <div class="cart-buttons">
                            <a href="#">Xem danh sách</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--=======  End of wishlist overlay  =======-->

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
                                    <a href="#">
                                        <img src="assets/images/cart-product-image/01.jpg" class="img-fluid"
                                            alt="">
                                    </a>
                                </div>

                                <div class="content">
                                    <h5><a href="#">Dark Brown Leather Watch</a></h5>
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
                            <a href="#">Thanh toán</a>
                        </div>
                        <p class="free-shipping-text">
                            Miễn phí vận chuyển cho đơn hàng trên 499.000Vnđ
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!--=======  End of cart overlay  =======-->

        <!--=======  search overlay  =======-->
        <div class="search-overlay" id="search-overlay">
            <span class="close-icon search-close-icon">
                <a href="javascript:void(0)" id="search-close-icon">
                    <i class="ti-close"></i>
                </a>
            </span>
            <div class="search-overlay-content">
                <div class="input-box">
                    <form action="https://htmldemo.net/lezada/lezada/index.html">
                        <input type="search" placeholder="Tìm kiếm sản phẩm...">
                    </form>
                </div>
                <div class="search-hint">
                    <span>Bấm ESC để thoát</span>
                </div>
            </div>
        </div>

        <!--=======  End of search overlay  =======-->
    </header>
    <!--===== End of Header wide topbar ======-->


    @yield('content');


    <!--=============== footer ==================-->
    <div class="footer-container footer-one pt-100 pb-50">
        <div class="container wide">
            <div class="row">
                <div class="col footer-single-widget">
                    <div class="footer-top-single-widget">
                        <h4 class="footer-top-widget-title">BẢO MẬT THANH TOÁN</h4>
                        <div class="content">
                            <img src="{{ asset('assets/images/icons/pay.png') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
                <div class="col footer-single-widget">
                    <h5 class="widget-title">Liên hệ</h5>
                    <div class="footer-nav-container">
                        <nav>
                            <ul>
                                <li><a href="#">Mua sắm online - Đơn giản và tiết kiệm</a></li>
                                <li><a href="#">Địa chỉ: 175 P. Tây Sơn, Trung Liệt, Đống Đa, Hà Nội 116705</a>
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
                                <li><a href="http://facebook.com/"> <i class="fa fa-facebook"></i> Facebook</a></li>
                                <li><a href="http://instagram.com/"><i class="fa fa-instagram"></i> Instagram</a></li>
                                <li><a href="http://youtube.com/"> <i class="fa fa-youtube"></i> Youtube</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col footer-single-widget">
                    <div class="footer-subscription-widget">
                        <h2 class="footer-subscription-title">Khám phá.</h2>
                        <p class="subscription-subtitle">Tận hưởng thế giới đang chờ đợi trong từng trang sách.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=================  End of footer ==================-->


    <a href="#" class="scroll-top"></a>
    <script src="assets/js/vendor/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="assets/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="assets/revolution/revolution-active.js"></script>
    <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.layeranimation.min.js">
    </script>
    <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>

</body>

</html>
