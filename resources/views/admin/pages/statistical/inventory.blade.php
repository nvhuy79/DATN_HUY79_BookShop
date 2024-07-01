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
                        <h2 style="text-align:center;   font-family:merriweather sans,sans-serif">THỐNG KÊ HÀNG TỒN</h2>
                        <canvas id="pieChart" width="700" height="150"></canvas>
                        <h6 style="text-align:center; ">4 Sản phẩm có số lượng tồn kho lớn nhất</h6>
                        <p style="font-weight: 400; color:black; margin-top:5%">Tổng số sản phẩm: {{ $productCount }}</p>
                        <p style="font-weight: 400; color:black">Tổng số hàng tồn kho: {{ $totalQuantity }}</p>
                        <div class="QA_table mb_30">
                            <table class="table" style="margin-top:3%">
                                <thead>
                                    <tr style="text-align:center">
                                        <th scope="col" style="width: 10%;">Mã sản phẩm</th>
                                        <th scope="col" style="width: 40%;">Tên Sản Phẩm</th>
                                        <th scope="col" style="width: 20%;">Số lượng tồn</th>
                                        <th scope="col" style="width: 30%;">Giá Bán</th>
                                    </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                    @forelse ($products as $item)
                                        <tr style="text-align:center">
                                            <td>{{ $item->order_code }}</td>
                                            <td>{{ $item->title }}</td>
                                            <td>{{ $item->stock }}</td>
                                            <td>{{ number_format($item->price, 0, ',', '.') }} ₫</td>
                                        </tr>
                                    @empty
                                        <td colspan="11" class="text-center">Chưa có dữ liệu</td>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <nav aria-label="Page navigation examplee">
                        <ul class="pagination">
                            @if ($products->onFirstPage())
                                <li class="page-item disabled"><span class="page-link">&laquo;</span></li>
                            @else
                                <li class="page-item"><a class="page-link" href="{{ $products->previousPageUrl() }}"
                                        aria-label="Previous"><span aria-hidden="true">&laquo;</span><span
                                            class="sr-only">Previous</span></a></li>
                            @endif
                            @foreach ($products as $item)
                                @if (is_string($item))
                                    <li class="page-item disabled"><span class="page-link">{{ $item }}</span></li>
                                @endif
                                @if (is_array($item))
                                    @foreach ($item as $page => $url)
                                        @if ($page == $products->currentPage())
                                            <li class="page-item active"><span class="page-link">{{ $page }}</span>
                                            </li>
                                        @else
                                            <li class="page-item"><a class="page-link"
                                                    href="{{ $url }}">{{ $page }}</a></li>
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                            @if ($products->hasMorePages())
                                <li class="page-item"><a class="page-link" href="{{ $products->nextPageUrl() }}"
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

    <script src="{{ asset('admin/js/vi.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var ctx = document.getElementById('pieChart').getContext('2d');
            var chart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: @json($productNames),
                    datasets: [{
                        data: @json($productStocks),
                        backgroundColor: [
                            'rgba(54, 162, 235, 0.8)', // Xanh dương
                            'rgba(255, 159, 64, 0.8)', // Cam
                            'rgba(75, 192, 192, 0.8)', // Xanh lá
                            'rgba(255, 99, 132, 0.8)', // Đỏ
                            'rgba(169, 169, 169, 0.8)' // Xám
                        ],
                        borderColor: [
                            '#1E90FF', // Xanh dương
                            '#FF8C00', // Cam
                            '#00CED1', // Xanh lá
                            '#FF6347', // Đỏ
                            '#A9A9A9' // Xám
                        ],
                        borderWidth: 2
                    }]
                },
                options: {
                    responsive: true,
                    legend: {
                        position: 'bottom' // Chỉnh vị trí của chú thích
                    }
                }
            });
        });
    </script>
@endsection
