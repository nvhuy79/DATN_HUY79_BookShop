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
    <div class="register"  style="margin-top: 10%">
        <div class="container">
            {{-- style="background-image: url('assets/images/backgrounds/login-bg.jpg')" --}}
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
                                <input type="password" id="regis_password" placeholder="Mật khẩu" name="password"
                                    required>
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
                            <div class="col-lg-12">
                                <a href="{{ route('admin_login') }}" class="reset-pass-link">Bạn đã có tài khoản? Đăng
                                    nhập.</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
