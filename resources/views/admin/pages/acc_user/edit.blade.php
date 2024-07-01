@extends('admin.layouts.page')
@section('content')
    <div class="white_box mb_30">
        <div class="row justify-content-center">
            <div class="col-lg-6">

                <div class="modal-content cs_modal">
                    <div class="modal-header theme_bg_1 justify-content-center">
                        <h5 class="modal-title text_white">Cập nhật tài khoản người dùng</h5>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('user_acc.update', $users->id) }}" method="POST">
                            @method('PUT')
                            @csrf
                            
                            <div class="form-group">
                                <label class="form-floating" for="name">Họ và tên</label>
                                <input type="text" name="name"
                                    class="form-control @error('name') is-invalid @enderror" id="name"
                                    placeholder="Nhập họ và tên..." value="{{ old('name', $users->name) }}">
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
                                    placeholder="Nhập email của bạn..." value="{{ old('email', $users->email) }}">
                                @error('email')
                                    <span style="color: red">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div><div class="form-group">
                                <label class="form-floating" for="status">Trạng thái</label>
                                <input type="text" name="status"
                                    class="form-control @error('status') is-invalid @enderror" id="status"
                                    placeholder="Nhập email của bạn..." value="{{ old('status', $users->status) }}">
                                @error('status')
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
                                    class="form-control @error('password_confirmation') is-invalid @enderror"
                                    id="password_confirmation" placeholder="Nhập mật khẩu của bạn...">
                            </div>
                            <button class="btn_1 full_width text-center">Cập nhật tài khoản</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
