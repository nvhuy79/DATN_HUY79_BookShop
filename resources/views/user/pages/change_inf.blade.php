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

      <div class="container" style=" max-width: 700px;margin: 0 auto;">
      <div class="myaccount-content">
        <h3>Chi tiết</h3>
        <div class="account-details-form">
          <form action="" method="POST">
            @csrf
            <div class="row">
              <div class="col-lg-6">
                <div class="single-input-item">
                  <label for="name" class="required">Họ và tên</label>
                  <input type="text" name="name" value="{{ Auth::user()->name }}"/>
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
                  <input type="text" name="email" value="{{ Auth::user()->email }}" />
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
                @error('current-pwd')
                <span style="color: red">
                    {{ $message }}
                </span>
                @enderror
              </div>

                <div class="col-lg-6">
                  <div class="single-input-item">
                    <label for="new-pwd" class="required">Mật khẩu mới</label>
                    <input type="password" name="new_pwd" />
                    @error('new-pwd')
                    <span style="color: red">
                        {{ $message }}
                    </span>
                    @enderror
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="single-input-item">
                    <label for="confirm-pwd" class="required">Xác nhận mật khẩu mới</label>
                    <input type="password" name ="confirm_pwd" />
                    @error('confirm-pwd')
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
    
 @endsection
