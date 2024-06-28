@extends('user/layouts/page')
@section('content')
    <div class="breadcrumb-area pt-20 pb-20">
        <div class="container">
            <div class="col-lg-12">
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-list__item"><a href="{{ route('home') }}">Trang chủ</a></li>
                    <li class="breadcrumb-list__item breadcrumb-list__item--active">Đặt lại mật khẩu</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="login" style="margin-top: 2%;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 mb-md-50 mb-sm-50">
                    <div class="havenbook-form login-form">
                        <form action="{{ route('password_update') }}" method="POST">
                            @csrf
                            <input type="hidden" name="token" id="token" value="{{ $token }}">
                            <div class="col-lg-12">
                                <div class="section-title text-center">
                                    <h2 class="mb-10" style="font-weight: 450">Đặt lại mật khẩu</h2>
                                    @if (session('error'))
                                        <span style="color: red">
                                            {{ session('error') }}
                                        </span>
                                    @endif

                                </div>
                            </div>
                            <div class="col-lg-12 mb-40">
                                <input type="email" id="email" placeholder="Email" name="email">
                                @error('email')
                                    <span style="color: red">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="col-lg-12 mb-40">
                                <input type="password" id="reset_password" placeholder="Mật khẩu" name="password">
                                @error('password')
                                    <span style="color: red">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="col-lg-12 mb-40">
                                <input type="password" id="reset_password_confirmation" placeholder="Xác nhận mật khẩu"
                                    name="password_confirmation">
                                @error('password_confirmation')
                                    <span style="color: red">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="col-lg-12 text-center mb-30">
                                <button  type="submit" class="lezada-button lezada-button--medium" style="border-radius: 15px">Cập nhật</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
