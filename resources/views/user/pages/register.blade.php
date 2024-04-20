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
                    <div class="lezada-form login-form">
                        <form action="" method="POST">
                            @csrf
                            <div class="col-lg-12" style="margin-top: -30px">
                                <div class="section-title text-center">
                                    <h2 class="mb-20">Đăng ký</h2>
                                    <p>Hãy đăng ký để được sử dụng dịch vụ tốt nhất!</p>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-60 mb-40">
                                <input type="text" id="regisname" placeholder="Tên" name="name"
                                    value="{{ old('name') }}">
                                @error('name')
                                    <div class="alert alert-danger mt-2" style="padding: 5px">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-lg-12  mb-40">
                                <input type="email" id="regisEmail" placeholder="Email" name="email"
                                    value="{{ old('email') }}" required>
                                @error('error_email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-12  mb-40">
                                <input type="password" id="regisPass" placeholder="Mật khẩu" name="password" required>
                            </div>
                            <div class="col-lg-12  mb-40">
                                <input type="password" id="regisConfPass" placeholder="Xác nhận mật khẩu"
                                    name="confpassword" required>
                                @error('error_confpassword')
                                    <div class="alert alert-danger">{{ $message }}</div>
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
