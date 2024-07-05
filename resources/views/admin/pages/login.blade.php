<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Haven BookStore</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('user/assets/user/images/favicphp on.ico') }}">
    <link href="{{ asset('/user/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('/user/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('/user/css/ionicons.css') }}" rel="stylesheet">
    <link href="{{ asset('/user/css/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('/user/css/plugins.css') }}" rel="stylesheet">
    <link href="{{ asset('/user/css/helper.css') }}" rel="stylesheet">
    <link href="{{ asset('/user/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('/user/revolution/css/settings.css') }}" rel="stylesheet">
    <link href="{{ asset('/user/revolution/css/navigation.css') }}" rel="stylesheet">
    <link href="{{ asset('/user/revolution/custom-setting.css') }}" rel="stylesheet">
    <script src="{{ asset('/user/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.css" />
</head>

<style>
    body {
        background-image: url('{{ asset('/user/images/backgrounds/bg-login1.jpg') }}');
        background-size: cover;
        background-position: center;
        width: 100%;
        height: auto;
    }

    .havenbook-form {
            background-color: rgba(255, 255, 255, 0.4);
            
        }
</style>

<body>
    <div class="login" style="margin-top: 10%;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 mb-md-50 mb-sm-50">
                    <div class="havenbook-form login-form">
                        <form action="{{ route('admin_login') }}" method="POST">
                            @csrf
                            <div class="col-lg-12">
                                <div class="section-title text-center" style="font-family:'Courier New', Courier, monospace">
                                    <h2 class="mb-10" style="font-weight: 450">HavenBook Store</h2>
                                    <p >Đăng nhập với tư cách quản trị viên!</p>
                                    @if (session('error'))
                                        <span style="color: red">
                                            {{ session('error') }}
                                        </span>
                                    @endif

                                </div>
                            </div>
                            <div class="col-lg-12 mt-60 mb-60">
                                <input type="text" placeholder="Email" id="admin_email" value="{{ old('email') }}"
                                    name="email">
                                @error('email')
                                    <span style="color: red">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="col-lg-12 mb-60">
                                <input type="password" placeholder="Mật khẩu" id="admin_password" name="password">
                                @error('password')
                                    <span style="color: red">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="col-lg-12 text-center mb-30">
                                <button class="lezada-button lezada-button--medium" style="border-radius: 15px">Đăng
                                    nhập</button>
                            </div>
                            <div class="col-lg-12">
                                <input type="checkbox"> <span class="remember-text">Ghi nhớ đăng nhập</span>
                                <a href="#}" class="reset-pass-link">Quên mật khẩu?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@if (Session::has('success'))
    <script>
        $.toast({
            heading: 'Thành công!',
            text: '{{ session('success') }}',
            position: 'top-center',
            stack: false,
            icon: 'success'
        });
    </script>
@elseif(Session::has('error'))
    <script>
        $.toast({
            heading: 'Lỗi!',
            text: '{{ session('error') }}',
            position: 'top-center',
            stack: false,
            icon: 'error'
        });
    </script>
@elseif(Session::has('logout_success'))
    <script>
        $.toast({
            heading: 'Thành công!',
            text: '{{ session('logout_success') }}',
            showHideTransition: 'slide',
            icon: 'success',
        });
    </script>
@elseif(Session::has('login_success'))
    <script>
        $.toast({
            heading: 'Thành công!',
            text: '{{ session('login_success') }}',
            showHideTransition: 'slide',
            icon: 'success',
        });
    </script>
@endif
</html>
