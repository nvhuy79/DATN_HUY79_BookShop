<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Haven BookStore</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="assets/images/favicon.ico">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <link href="assets/css/ionicons.css" rel="stylesheet">
    <link href="assets/css/themify-icons.css" rel="stylesheet">
    <link href="assets/css/plugins.css" rel="stylesheet">
    <link href="assets/css/helper.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/revolution/css/settings.css" rel="stylesheet">
    <link href="assets/revolution/css/navigation.css" rel="stylesheet">
    <link href="assets/revolution/custom-setting.css" rel="stylesheet">
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<style>
    body {
        background-image: url('assets/images/backgrounds/login-bg.jpg');
        background-size: cover;
        background-position: center;
        width: 100%;
        height: auto;
    }
</style>

<body>
    <div class="login" style="margin-top: 10%;">
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
                                <input type="text" placeholder="Email" id="login_email" name="email">
                                @error('email')
                                    <div class="alert alert-danger mt-2" style="padding: 3px">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-lg-12 mb-60">
                                <input type="password" placeholder="Mật khẩu" id="login_password" name="password">
                                @error('password')
                                    <div class="alert alert-danger mt-2" style="padding: 3px">
                                        {{ $message }}
                                    </div>
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
                                <a href="{{ route('admin_register') }}" class="reset-pass-link">Bạn chưa có tài khoản? Đăng
                                    kí</a>
                                <a href="#" class="reset-pass-link">Quên mật khẩu?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
