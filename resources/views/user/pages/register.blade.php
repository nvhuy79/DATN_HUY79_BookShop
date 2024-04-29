@extends('user/layouts/page')
@section('content')
    <div class="breadcrumb-area pt-20 pb-20 mb-130">
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
                    <div class="havenbook-form login-form">
                        <form action="" method="POST">
                            @csrf
                            <div class="col-lg-12" style="margin-top: -30px">
                                <div class="section-title text-center">
                                    <h2 class="mb-10">Đăng ký</h2>
                                    <p>Hãy đăng ký để được sử dụng dịch vụ tốt nhất!</p>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-40 mb-40">
                                <input type="text" id="regis_name" placeholder="Họ và tên" name="name"
                                    value="{{ old('name') }}">
                                @error('name')
                                    <span style="color: red">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="col-lg-12  mb-40">
                                <input type="text" id="regis_Email" placeholder="Email" name="email"
                                    value="{{ old('email') }}">
                                @error('email')
                                    <span style="color: red">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="col-lg-12  mb-40">
                                <input type="password" id="regis_password" placeholder="Mật khẩu" name="password">
                                @error('password')
                                    <span style="color: red">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="col-lg-12 mb-40">
                                <input type="password" id="regis_password_confirmation" placeholder="Xác nhận mật khẩu"
                                    name="password_confirmation">
                                @error('password')
                                    <span style="color: red">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="col-lg-12 text-center mb-30">
                                <button class="lezada-button lezada-button--medium" style="border-radius: 15px ">Đăng
                                    ký</button>
                            </div>
                            <div class="col-lg-12">
                                {{-- <input type="checkbox"> <span class="remember-text">Ghi nhớ đăng nhập</span> --}}
                                <a href="{{ route('login') }}" class="reset-pass-link">Bạn đã có tài khoản? Đăng nhập.</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
