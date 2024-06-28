@extends('user/layouts/page')
@section('content')
    <div class="mailchimp-newsletter-area border-top-bottom mb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--=======  newsletter content  =======-->

                    <div class="mc-newsletter-content-container no-bg text-center">
                        <div class="mc-newsletter-content mc-newsletter-content--big-icon pt-70 pb-70">
                            <div class="icon mb-30">
                                <i class="fa fa-envelope-open-o"></i>
                            </div>
                            <div class="title mb-30">
                                <h3 class="mb-20">Quên mật khẩu ?</h3>
                                <p>Nhập địa chỉ email của bạn để nhận liên kết đặt lại mật khẩu.</p>
                            </div>
                            <div class="mc-newsletter-form mb-50">
                                <form action="{{ route('password_email') }}" method="POST">
									@csrf
                                    <input name="email" id="email" type="text" placeholder="Email..." required>
									@error('email')
                                    <span style="color: red">
                                        {{ $message }}
                                    </span>
                                @enderror
                                    <button type="submit">Gửi</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!--=======  End of newsletter content  =======-->
                </div>
            </div>
        </div>
    </div>
@endsection
