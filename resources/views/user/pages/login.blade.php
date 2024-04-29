@extends('user/layouts/page')
@section('content')
    <div class="breadcrumb-area pt-20 pb-20 mb-130">
        <div class="container">
            <div class="col-lg-12">
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-list__item"><a href="{{ route('home') }}">Trang chủ</a></li>
                    <li class="breadcrumb-list__item breadcrumb-list__item--active">Đăng nhập</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="login" style="margin-top: -100px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 mb-md-50 mb-sm-50">
                    <div class="havenbook-form login-form">
                        <form action="" method="POST">
                            @csrf
                            <div class="col-lg-12">
                                <div class="section-title text-center">
                                    <h2 class="mb-10">Đăng nhập</h2>
                                    <p>Tận hưởng thế giới đang chờ đợi trong từng trang sách!</p>
                                    @if (session('error'))
                                        <div class="alert alert-danger">
                                            {{ session('error') }}
                                        </div>
                                    @endif

                                </div>
                            </div>
                            <div class="col-lg-12 mt-60 mb-60">
                                <input type="text" placeholder="Email" id="login_email" value="{{ old('email') }}" name="email">
                                @error('email')
                                <span style="color: red">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                            <div class="col-lg-12 mb-60">
                                <input type="password" placeholder="Mật khẩu" id="login_password"  name="password">
                                @error('password')
                                    <span style="color: red">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="col-lg-12 text-center mb-30">
                                <button class="lezada-button lezada-button--medium" style="border-radius: 15px">Đăng
                                    nhập</button>
                            </div>
                            <div class="col-lg-12">
                                <input type="checkbox"> <span class="remember-text">Ghi nhớ đăng nhập</span>
                            </div>
                            <div class="col-lg-12">
                                {{-- <input type="checkbox"> <span class="remember-text">Ghi nhớ đăng nhập</span> --}}
                                <a href="{{ route('register') }}" class="reset-pass-link">Bạn chưa có tài khoản? Đăng kí</a>
                                <a href="{{ route('register') }}" class="reset-pass-link">Quên mật khẩu?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
