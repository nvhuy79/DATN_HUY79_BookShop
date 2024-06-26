@extends('admin/layouts/page')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="white_card card_height_100 mb_30 pt-4">
                <div class="white_card_body">
                    <div class="QA_section">
                        <div class="white_box_tittle list_header">
                            <h4>Danh sách đơn hàng</h4>
                            <form action="{{ route('discount.search') }}" method="GET">
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
                            </form>
                        </div>
                        <div class="QA_table mb_30">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">STT</th>
                                        <th scope="col">Mã đơn hàng</th>
                                        <th scope="col">Trạng thái</th>
                                        <th scope="col">Tùy chọn</th>
                                    </tr>
                                </thead>
                                @php
                                    $i = 0;
                                @endphp
                                <tbody class="table-group-divider">
                                    @forelse ($orders as $key => $ord)
                                        @php
                                            $i++;
                                        @endphp
                                        <tr>

                                            <td>{{ $i }}</td>
                                            <td>{{ $ord->order_code }}</td>
                                            <td>
                                                @if ($ord->order_status == 1)
                                                    Đơn hàng mới
                                                @else
                                                    Đã xử lý
                                                @endif
                                            </td>
                                            <td>
                                                <div class="action_btns d-flex">
                                                    <a href="{{ route('detail_order', $ord->order_code) }}"
                                                        class="action_btn mr_10"><i class="ti-eye"></i>
                                                        
                                                    </a>
                                                    <form action="{{ route('delete_order', $ord->order_code) }}"
                                                        method="POST"
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
                                        <td colspan="7" class="text-center">Chưa có dữ liệu</td>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
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
    @endsection
