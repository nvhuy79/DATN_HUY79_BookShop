@extends('user/layouts/page')
@section('content')
    <div class="breadcrumb-area pt-30 pb-30 mb-130">
        <div class="container">
            <div class="col-lg-12">
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-list__item"><a href="{{ route('home') }}">Trang chủ</a></li>
                    <li class="breadcrumb-list__item breadcrumb-list__item--active">Đăng ký</li>
                </ul>
            </div>
        </div>
    </div>


    <div class="register" style="margin-top: -100px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 mb-md-50 mb-sm-50">
                    <div class="lezada-form login-form">
                        <form action="#">
                            <div class="col-lg-12">
                                <div class="section-title text-center">
                                    <h2 class="mb-20">Đăng ký</h2>
                                    <p>Mếu bạn chưa có tài khoản, hãy đăng ký ngay nào!</p>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-60 mb-60">
                                <label for="regEmail">Email <span class="required">*</span> </label>
                                <input type="text" id="regEmail" required>
                            </div>
                            <div class="col-lg-12 mb-60">
                                <label for="regPassword">Mật khẩu <span class="required">*</span> </label>
                                <input type="password" id="regPassword" required>
                            </div>
                            <div class="col-lg-12 text-center mb-30">
                                <button class="lezada-button lezada-button--medium">Đăng ký</button>
                            </div>
                            <div class="col-lg-12">
                                {{-- <input type="checkbox"> <span class="remember-text">Ghi nhớ đăng nhập</span> --}}
                                <a href="{{ route('login') }}" class="reset-pass-link">Bạn đã có tài khoản? Đăng nhập</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
