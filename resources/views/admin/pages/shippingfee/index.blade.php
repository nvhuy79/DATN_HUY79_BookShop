@extends('admin/layouts/page')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="white_card card_height_100 mb_30 pt-4">
                <div class="white_card_body">
                    <div class="QA_section">
                        <div class="white_box_tittle list_header">
                            <a href="{{ route('shippingfee.create') }}" class="btn_1"
                                style="background-color: rgb(50, 165, 50)">+ Thêm phí vận chuyển</a>
                            {{-- <form action="{{ route('shippingfee.search') }}" method="GET">
                                <div class="box_right d-flex lms_block">
                                    <div class="serach_field_2">
                                        <div class="search_inner">
                                            <div class="search_field">
                                                <input type="text" name="query" placeholder="Tìm kiếm..."
                                                    value="{{ request()->input('query') }}">
                                            </div>
                                            <button type="submit"> <i class="ti-search"></i> </button>
                                        </div>
                                    </div>
                                    <div class="add_button ms-2">
                                        <button type="submit" data-bs-toggle="modal" data-bs-target="#addcategory"
                                            class="btn_1">Tìm kiếm</button>
                                    </div>
                                </div>
                            </form> --}}
                        </div>
                        <div class="QA_table mb_30">
                            <table class="table">
                                <thead>
                                    <tr style="max-width: 100%; text-align: center;">
                                        <th scope="col" style="width: 20%;">Phường/Xã</th>
                                        <th scope="col" style="width: 20%;">Quận/Huyện</th>
                                        <th scope="col" style="width: 20%;">Thành phố/Tỉnh</th>
                                        <th scope="col" style="width: 20%;">Phí vận chuyển</th>
                                        <th scope="col" style="width: 10%;">Tùy chọn</th>
                                    </tr>
                                </thead>
                                <tbody class="table-group-divider" style="max-width: 100%; text-align: center;">
                                    @forelse ($shipping_fee as $key=> $fee)
                                        <tr>
                                            <td>{{ $fee->ward->name_ward }}</td>
                                            <td>{{ $fee->district->name_district }}</td>
                                            <td>{{ $fee->city->name_city }}</td>
                                            <td>
                                                <input style="max-width: 100%; text-align: center;" type="text"
                                                    class="form-control fee-input" id="fee-{{ $fee->id }}"
                                                    value="{{ number_format($fee->fee, 0, ',', '.') }} ₫"
                                                    onblur="updateFee({{ $fee->id }})" oninput="formatCurrency(this)">
                                            </td>
                                            <td>
                                                <div class="action_btns d-flex">
                                                    <a href="#" class="action_btn mr_10"></i>
                                                    </a>
                                                    <form action="{{ route('shippingfee.destroy', $fee) }}" method="POST"
                                                        onsubmit="return confirm('Bạn có chắc chắn muốn xóa danh mục này không?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="action_btn"><i
                                                                class="fas fa-trash"></i></button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <td colspan="5" class="text-center">Chưa có dữ liệu</td>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Pagination -->
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            @if ($shipping_fee->onFirstPage())
                                <li class="page-item disabled"><span class="page-link">&laquo;</span></li>
                            @else
                                <li class="page-item">
                                    <a class="page-link" href="{{ $shipping_fee->previousPageUrl() }}"
                                        aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                            @endif

                            @foreach ($shipping_fee->links() as $fee)
                                @if (is_string($fee))
                                    <li class="page-item disabled"><span class="page-link">{{ $fee }}</span></li>
                                @endif

                                @if (is_array($fee))
                                    @foreach ($fee as $page => $url)
                                        @if ($page == $shipping_fee->currentPage())
                                            <li class="page-item active"><span class="page-link">{{ $page }}</span>
                                            </li>
                                        @else
                                            <li class="page-item"><a class="page-link"
                                                    href="{{ $url }}">{{ $page }}</a></li>
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach

                            @if ($shipping_fee->hasMorePages())
                                <li class="page-item">
                                    <a class="page-link" href="{{ $shipping_fee->nextPageUrl() }}" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
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

    <script>
        function formatCurrency(input) {
            let value = input.value.replace(/[^0-9]/g, '');
            if (value === '') {
                input.value = '';
                return;
            }

            let formattedValue = new Intl.NumberFormat('vi-VN').format(value) + ' ₫';
            input.value = formattedValue;
        }

        function updateFee(id) {
            let input = document.getElementById(`fee-${id}`);
            let value = input.value.replace(/[^0-9]/g, '');

            fetch(`{{ url('/admin/shippingfee') }}/${id}`, {
                    method: 'PUT',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    },
                    body: JSON.stringify({
                        fee: value
                    })
                })
                .then(response => {
                    if (response.ok) {
                        alert('Phí vận chuyển đã được cập nhật thành công!');
                    } else {
                        alert('Có lỗi xảy ra khi cập nhật phí vận chuyển.');
                    }
                }).catch(error => {
                    console.error('Error:', error);
                    alert('Có lỗi xảy ra khi cập nhật phí vận chuyển.');
                });
        }
    </script>
@endsection
