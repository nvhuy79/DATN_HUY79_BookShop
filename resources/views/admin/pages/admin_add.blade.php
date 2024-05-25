@extends('admin/layouts/page')
@section('content')
    <div class="white_box mb_30">
        <div class="row justify-content-center">
            <div class="col-lg-6">

                <div class="modal-content cs_modal">
                    <div class="modal-header theme_bg_1 justify-content-center">
                        <h5 class="modal-title text_white">Tạo tài khoản Admin</h5>
                    </div>
                    <div class="modal-body">
                        <form action="" method="POST">
                            @csrf
                            <div class="form-group">
                                <label class="form-floating" for="name">Họ và tên</label>
                                <input type="text" name="name"
                                    class="form-control @error('name') is-invalid @enderror" id="name"
                                    placeholder="Nhập họ và tên..."value="{{ old('name') }}">
                                @error('name')
                                    <span style="color: red">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-floating" for="email">Email</label>
                                <input type="text" name="email"
                                    class="form-control @error('email') is-invalid @enderror" id="email"
                                    placeholder="Nhập email của bạn..." value="{{ old('email') }}">
                                @error('email')
                                    <span style="color: red">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-floating" for="password">Mật khẩu</label>
                                <input type="password" name="password"
                                    class="form-control @error('password') is-invalid @enderror" id="password"
                                    placeholder="Nhập mật khẩu của bạn...">
                                @error('password')
                                    <span style="color: red">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                    <label class="form-floating" for="password_confirmation">Xác nhận mật khẩu</label>
                                    <input type="password" name="password_confirmation"
                                        class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation"
                                        placeholder="Nhập mật khẩu của bạn...">
                            </div>
                            <div class=" cs_check_box">
                                <input type="checkbox" id="check_box" class="common_checkbox">
                                <label class="form-label" for="check_box">
                                    Keep me up to date
                                </label>
                            </div>
                            <button class="btn_1 full_width text-center">Tạo tài khoản</button>
                            <div class="text-center">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#forgot_password"
                                    data-bs-dismiss="modal" class="pass_forget_btn">Forget Password?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
@endsection
