@extends('admin.layouts.page')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="white_card card_height_100 mb_30 pt-4">
                <div class="white_card_body">
                    <div class="QA_section">
                        <h2 style="text-align:center; font-family:merriweather sans,sans-serif">THỐNG KÊ DOANH THU</h2>

                        <form method="POST" action="{{ route('post_revenue') }}">
                            @csrf
                            <div class="row mb-3">
                                <label class="form-label col-sm-3 col-form-label text-end f_w_500 f_s_15">Ngày bắt đầu - Kết
                                    thúc</label>
                                <div class="col-xl-5 col-sm-9 common_date_picker">
                                    <input style="width:40% " name="date_range" class="datepicker-here digits"
                                        type="text" data-range="true" data-multiple-dates-separator=" - "
                                        data-language="vn">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-xl-8 offset-xl-3">
                                    <button type="submit" class="btn btn-primary">Thống kê</button>
                                </div>
                            </div>
                        </form>
                        <p style="font-weight: 400; color:black; margin-top:5%">Số sản phẩm đã bán:</p>
                        <p style="font-weight: 400; color:black">Số đơn hàng: {{ $orderCount }}</p>
                        <p style="font-weight: 400; color:black">Tổng số doanh thu: {{ $total }}</p>
                        @if (!empty($startDate) && !empty($endDate))
                            <p style="font-weight: 400; color:black">Thời gian: {{ $startDate }} - {{ $endDate }}</p>
                        @endif

                        <div class="row">
                            <div class="col-lg-6">
                                {{-- <h4>Tổng doanh thu: {{ number_format($totalRevenue, 0, ',', '.') }} ₫</h4> --}}

                                <div class="QA_table mb_30">
                                    <table class="table" style="margin-top:3%">
                                        <thead>
                                            <tr style="text-align:center">
                                                <th scope="col" style="width: 10%;">Mã đơn hàng:</th>
                                                <th scope="col" style="width: 30%;">Ngày tạo</th>
                                                <th scope="col" style="width: 20%;">Tổng tiền</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-group-divider">
                                            @forelse ($orders as $order)
                                                <tr style="text-align:center">
                                                    <td>{{ $order->order_code }}</td>
                                                    <td>{{ $order->created_at }}</td>
                                                    <td>{{ $order->finalTotal }}</td>
                                                    {{-- <td>{{ number_format($order->finalTotal, 0, ',', '.') }} ₫</td> --}}
                                                </tr>
                                            @empty
                                                <td colspan="3" class="text-center">Không có dữ liệu</td>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
