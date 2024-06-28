@extends('user/layouts/page')

@section('content')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <div class="breadcrumb-area pt-20 pb-20">
        <div class="container">
            <div class="col-lg-12">
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-list__item"><a href="{{ route('home') }}">Trang chủ</a></li>
                    <li class="breadcrumb-list__item breadcrumb-list__item--active">Xác nhận</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="shopping-cart-area mb-10 mt-4">
        <div class="container">

                <div class="col-lg-12 mb-30">

                        <table class="cart-table">
                            <tbody>
                                <tr>
                                    <td colspan="6" class="text-center" style="color: black">Cảm ơn đã đặt hàng. Đơn hàng của bạn đã được xác nhận và đang trong quá trình xử lý. Chúng tôi sẽ sớm gửi hàng đến bạn!</td>
                                </tr>
                            </tbody>
                        </table>
                    
                </div>

        </div>
    </div>
    </div>
    </div>

@endsection
