@extends('user/layouts/page')

@section('content')
	<div class="mailchimp-newsletter-area mb-100">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="mc-newsletter-content-container text-center pt-15 pb-15 pl-15 pr-15">
						<div class="mc-newsletter-content pt-70 pb-70">
							<div class="icon">
								<i class="ion-ios-email-outline"></i>
							</div>
							<div class="title mb-30">
								<h3 class="mb-20">Kích hoạt thành công!</h3>
								<p>Giờ đây, bạn có thể đăng nhập để có được trải nhiệm mua sắm tốt nhất.</p>
							</div>
							<div class="link">
								<a class="lezada-button lezada-button--medium" href="{{ route('login') }}" style="text-decoration: none; background:darkseagreen">Đăng nhập</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection