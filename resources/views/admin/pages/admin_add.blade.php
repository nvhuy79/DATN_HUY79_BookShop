@extends('admin/layouts/page')
@section('content')
<div class="register" style="margin-top: 10%;">
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
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                            </div>                            
                        </div>
                        <div class="col-lg-12 mt-40 mb-40">
                            <input type="text" id="regis_name" placeholder="Họ và tên" name="name"
                                value="{{ old('name') }}">
                            @error('name')
                                <div class="alert alert-danger mt-2" style="padding: 3px">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-lg-12  mb-40">
                            <input type="text" id="regis_Email" placeholder="Email" name="email"
                                value="{{ old('email') }}" required>
                            @error('email')
                            <div class="alert alert-danger mt-2" style="padding: 3px">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-lg-12  mb-40">
                            <input type="password" id="regis_password" placeholder="Mật khẩu" name="password" required>
                            @error('password')
                            <div class="alert alert-danger mt-2" style="padding: 3px">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>
                        <div class="col-lg-12 mb-40">
                            <input type="password" id="regis_password_confirmation" placeholder="Xác nhận mật khẩu"
                                   name="password_confirmation" required>
                            @error('password')
                                <div class="alert alert-danger mt-2" style="padding: 3px">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-lg-12 text-center mb-30">
                            <button class="lezada-button lezada-button--medium" style="border-radius: 15px ">Đăng
                                ký</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection