@extends('layouts/page')
@section('content')

<div class="breadcrumb-area breadcrumb-bg-1 pt-50 pb-70 mb-130">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="breadcrumb-title">Đăng Ký</h1>

				<!--=======  breadcrumb list  =======-->

				<ul class="breadcrumb-list">
					<li class="breadcrumb-list__item"><a href="index.html">Trang chủ</a></li>
					<li class="breadcrumb-list__item breadcrumb-list__item--active">Đăng ký</li>
				</ul>

				<!--=======  End of breadcrumb list  =======-->

			</div>
		</div>
	</div>
</div>
{{-- <div class="register"  style="margin-top: -150px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="lezada-form login-form--register">
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-12">
                                <!--=======  login title  =======-->
                                <div class="section-title section-title--login text-center mb-50">
                                    <h2 class="mb-20">Đăng ký</h2>
                                    <p>Mếu bạn chưa có tài khoản, hãy đăng ký ngay nào!</p>
                                </div>
                                <!--=======  End of login title  =======-->
                            </div>
                            <div class="col-lg-12 mb-30">
                                <label for="regEmail">Email <span class="required">*</span> </label>
                                <input type="text" id="regEmail" required>
                            </div>
                            <div class="col-lg-12 mb-50">
                                <label for="regPassword">Mật khẩu <span class="required">*</span> </label>
                                <input type="password" id="regPassword" required>
                            </div>
                            <div class="col-lg-12 text-center">
                                <button class="lezada-button lezada-button--medium">Đăng ký</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

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