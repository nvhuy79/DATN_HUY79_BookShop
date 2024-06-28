@extends('user/layouts/page')
@section('content')
    <div class="breadcrumb-area pt-20 pb-20">
        <div class="container">
            <div class="col-lg-12">
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-list__item"><a href="{{ route('home') }}">Trang chủ</a></li>
                    <li class="breadcrumb-list__item breadcrumb-list__item--active">Tài khoản</li>
                </ul>
            </div>
        </div>
    </div>
<div class="my-account-area mb-130 mt-10 mb-md-70 mb-sm-70 mb-xs-70 mb-xxs-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="myaccount-tab-menu nav" role="tablist">
                            <a class="nav-link active" id="dashboard-tab" data-bs-toggle="tab" href="#dashboard" role="tab" aria-controls="dashboard" aria-selected="true">Thông tin</a>
                            <a class="nav-link" id="orders-tab" data-bs-toggle="tab" href="#orders" role="tab" aria-controls="orders" aria-selected="false">Đổi mật khẩu</a>
                            <a class="nav-link" id="download-tab" data-bs-toggle="tab" href="#download" role="tab" aria-controls="download" aria-selected="false">Đơn  hàng</a>
                            <a href="{{ route('logout') }}">Đăng xuất</a>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="tab-content" id="myaccountContent">
                            <div class="tab-pane fade show active" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                                <div class="myaccount-content">
                                    <h3>Thông tin</h3>
                                    <div class="account-details-form">
                                        <form action="{{ route('post_profile') }}" method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="single-input-item">
                                                        <label for="name" class="required">Họ và tên</label>
                                                        <input type="text" name="name" value="{{ Auth::user()->name }}" />
                                                        @error('email')
                                                        <span style="color: red">
                                                            {{ $message }}
                                                        </span>
                                                    @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="single-input-item">
                                                        <label for="email" class="required">Email</label>
                                                        <input type="text" name="email" value="{{ Auth::user()->email }}" readonly/>
                                                        @error('email')
                                                            <span style="color: red">
                                                                {{ $message }}
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <fieldset>
                                                <div class="single-input-item">
                                                    <label for="password" class="required">Mật khẩu</label>
                                                    <input type="password" name="password" />
                                                    @error('password')
                                                        <span style="color: red">
                                                            {{ $message }}
                                                        </span>
                                                    @enderror
                                                </div>
                                            </fieldset>
                                            <div class="single-input-item">
                                                <button class="check-btn sqr-btn ">Lưu thông tin</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                                <div class="myaccount-content">
                                    <h3>Đổi mật khẩu</h3>
                                    <div class="account-details-form">
                                        <form action="{{ route('post_change_pass') }}" method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="single-input-item">
                                                        <label for="name" class="required">Họ và tên</label>
                                                        <input type="text" name="name" value="{{ Auth::user()->name }}" readonly/>
                                                        @error('name')
                                                            <span style="color: red">
                                                                {{ $message }}
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="single-input-item">
                                                        <label for="email" class="required">Email</label>
                                                        <input type="text" name="email" value="{{ Auth::user()->email }}" readonly />
                                                        @error('email')
                                                            <span style="color: red">
                                                                {{ $message }}
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <fieldset>
                                                {{-- <legend>Password change</legend> --}}
                                                <div class="single-input-item">
                                                    <label for="current-pwd" class="required">Mật khẩu hiện tại</label>
                                                    <input type="password" name="current_pwd" />
                                                    @error('current_pwd')
                                                        <span style="color: red">
                                                            {{ $message }}
                                                        </span>
                                                    @enderror
                                                </div>
                            
                                                <div class="col-lg-6">
                                                    <div class="single-input-item">
                                                        <label for="new-pwd" class="required">Mật khẩu mới</label>
                                                        <input type="password" name="new_pwd" />
                                                        @error('new_pwd')
                                                            <span style="color: red">
                                                                {{ $message }}
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="single-input-item">
                                                        <label for="password_confirmation" class="required">Xác nhận mật khẩu mới</label>
                                                        <input type="password" id="new_pwd_confirmation" name="new_pwd_confirmation" />
                                                        @error('password_confirmation')
                                                            <span style="color: red">
                                                                {{ $message }}
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <div class="single-input-item">
                                                <button class="check-btn sqr-btn ">Lưu</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="download" role="tabpanel" aria-labelledby="download-tab">
                                <div class="myaccount-content">
                                    <!-- Download content -->
                                </div>
                            </div>
                            <div class="tab-pane fade" id="payment-method" role="tabpanel" aria-labelledby="payment-method-tab">
                                <div class="myaccount-content">
                                    <!-- Payment method content -->
                                </div>
                            </div>
                            <div class="tab-pane fade" id="address-edit" role="tabpanel" aria-labelledby="address-edit-tab">
                                <div class="myaccount-content">
                                    <!-- Address content -->
                                </div>
                            </div>
                            <div class="tab-pane fade" id="account-info" role="tabpanel" aria-labelledby="account-info-tab">
                                <div class="myaccount-content">
                                    <!-- Account info content -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
