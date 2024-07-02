@extends('admin.layouts.page')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="white_card card_height_100 mb_30 pt-4">
                <div class="white_card_body">
                    <div class="QA_section">
                        <div class="back">
                            <a href="{{ route('manage_order') }}">
                                <i class="ti-angle-double-left" style="font-size: 2em; color:darkblue"></i>
                            </a>
                        </div>
                        <h2 style="text-align:center;   font-family:merriweather sans,sans-serif">THỐNG KÊ DOANH THU</h2>
                        <div class="container" style="text-align:center">
                            <canvas id="revenueChart" style="max-width: 100%; max-height: 400px;"></canvas>
                        </div>
                        <form method="POST" action="{{ route('revenue') }}">
                            @csrf
                            <div class="row mb-3" style="margin-top:20px">
                                <div class="col-xl-5 col-sm-9 common_date_picker">
                                    <input name="date_range" style="max-width: 200px; border: 1px solid #000; margin-right:20px"
                                        class="datepicker-here digits" type="text" placeholder="Ngày bắt đầu-Kết thúc" data-range="true"
                                        data-multiple-dates-separator=" - " data-language="vn"><button type="submit" class="btn btn-primary">Chọn</button>
                                </div>

                                    {{-- <button type="submit" class="btn btn-primary">Thống kê</button> --}}
                            </div>
                        

                        <p style="font-weight: 400; color:black">Tổng số đơn hàng: {{ $orderCount }}</p>
                        <p style="font-weight: 400; color:black">Tổng số doanh thu: {{ number_format($total, 0, ',', '.') }}
                            ₫</p>
                        </form>
                        @if (!empty($startDateFormatted) && !empty($endDateFormatted))
                            @if ($startDateFormatted == $endDateFormatted)
                                <p style="font-weight: 400; color:black">Thời gian: Hôm nay</p>
                            @else
                                <p style="font-weight: 400; color:black">Thời gian: {{ $startDateFormatted }} -
                                    {{ $endDateFormatted }}</p>
                            @endif
                        @endif
                        <div class="QA_table mb_30">
                            <table class="table" style="margin-top:10px">
                                <thead>
                                    <tr style="text-align:center">
                                        <th scope="col" style="width: 10%;">Mã đơn hàng</th>
                                        <th scope="col" style="width: 40%;">Tên Sản Phẩm</th>
                                        <th scope="col" style="width: 20%;">Số lượng bán</th>
                                        <th scope="col" style="width: 30%;">Doanh thu</th>
                                        <th>Tùy chọn</th>
                                    </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                    @forelse ($orders as $order)
                                        <tr style="text-align:center">
                                            <td>{{ $order->order_code }}</td>
                                            <td>
                                                @foreach ($order->orderDetails as $orderDetail)
                                                    {{ $orderDetail->product_name }}<br>
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach ($order->orderDetails as $orderDetail)
                                                    {{ $orderDetail->product_sale_quantity }}<br>
                                                @endforeach
                                            </td>
                                            <td>{{ number_format($order->finalTotal, 0, ',', '.') }} ₫</td>
                                            <td><a href="{{ route('detail_order', $order->order_code) }}"
                                                class="action_btn mr_10"><i class="ti-eye"></i></a></td>
                                        </tr>
                                        
                                    @empty
                                        <td colspan="4" class="text-center">Chưa có dữ liệu</td>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <nav aria-label="Page navigation examplee">
                            <ul class="pagination">
                                @if ($orders->onFirstPage())
                                    <li class="page-item disabled"><span class="page-link">&laquo;</span></li>
                                @else
                                    <li class="page-item"><a class="page-link" href="{{ $orders->previousPageUrl() }}"
                                            aria-label="Previous"><span aria-hidden="true">&laquo;</span><span
                                                class="sr-only">Previous</span></a></li>
                                @endif
                                @foreach ($orders as $item)
                                    @if (is_string($item))
                                        <li class="page-item disabled"><span class="page-link">{{ $item }}</span></li>
                                    @endif
                                    @if (is_array($item))
                                        @foreach ($item as $page => $url)
                                            @if ($page == $orders->currentPage())
                                                <li class="page-item active"><span class="page-link">{{ $page }}</span>
                                                </li>
                                            @else
                                                <li class="page-item"><a class="page-link"
                                                        href="{{ $url }}">{{ $page }}</a></li>
                                            @endif
                                        @endforeach
                                    @endif
                                @endforeach
                                @if ($orders->hasMorePages())
                                    <li class="page-item"><a class="page-link" href="{{ $orders->nextPageUrl() }}"
                                            aria-label="Next"><span aria-hidden="true">&raquo;</span><span
                                                class="sr-only">Next</span></a></li>
                                @else
                                    <li class="page-item disabled"><span class="page-link">&raquo;</span></li>
                                @endif
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Dữ liệu từ PHP được truyền vào biến JavaScript
        var revenueData = @json($revenueData);

        // Lấy các ngày và doanh thu từ dữ liệu PHP
        var labels = Object.keys(revenueData);
        var data = Object.values(revenueData);

        // Vẽ biểu đồ
        var ctx = document.getElementById('revenueChart').getContext('2d');
        var revenueChart = new Chart(ctx, {
            type: 'bar', // Loại biểu đồ cột
            data: {
                labels: labels,
                datasets: [{
                    label: 'Doanh thu',
                    data: data,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true, // Vô hiệu hóa tỷ lệ giữa chiều rộng và chiều cao
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            callback: function(value, index, values) {
                                return value.toLocaleString() + ' ₫';
                            }
                        }
                    }
                }
            }
        });
    </script>
@endsection
