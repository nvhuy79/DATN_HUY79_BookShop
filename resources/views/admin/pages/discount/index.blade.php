@extends('admin/layouts/page')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="white_card card_height_100 mb_30 pt-4">
                <div class="white_card_body">
                    <div class="QA_section">
                        <div class="white_box_tittle list_header">
                            <a href="{{ route('discount.create') }}" class="btn_1"
                                style="background-color: rgb(50, 165, 50)">+ Thêm mã giảm giá</a>
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
                                        <th scope="col">ID</th>
                                        <th scope="col">Tên mã</th>
                                        <th scope="col">Mã giảm giá</th>
                                        <th scope="col">Số lượng</th>
                                        <th scope="col">Hình thức giảm</th>
                                        <th scope="col">Mức giảm</th>
                                        <th scope="col">Tùy chọn</th>
                                    </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                    @forelse ($discounts as $discount)
                                        <tr>

                                            <td>{{ $discount->id }}</td>
                                            <td>{{ $discount->title }}</td>
                                            <td>{{ $discount->code }}</td>
                                            <td>{{ $discount->usage_count }}</td>
                                            <td>{{ $discount->method_description }}</td>
                                            <td>
                                                @if ($discount->method == 1)
                                                    {{ number_format($discount->discount_value, 0, ',', '.') }} đ
                                                @elseif ($discount->method == 2)
                                                    {{ number_format($discount->discount_value, 0, ',', '.') }} %
                                                @endif
                                            </td>
                                           
                                            <td>
                                                <div class="action_btns d-flex">
                                                    {{-- <a href="{{ route('category.edit', $item) }}"
                                                        class="action_btn mr_10"><i class="far fa-edit"></i>
                                                    </a> --}}
                                                    <form action="{{ route('discount.destroy', $discount) }}" method="POST"
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
                            {{-- Previous Page Link --}}
                            @if ($discounts->onFirstPage())
                                <li class="page-item disabled"><span class="page-link">&laquo;</span></li>
                            @else
                                <li class="page-item"><a class="page-link" href="{{ $discounts->previousPageUrl() }}"
                                        aria-label="Previous"><span aria-hidden="true">&laquo;</span><span
                                            class="sr-only">Previous</span></a></li>
                            @endif

                            {{-- Pagination Elements --}}
                            @foreach ($discounts as $item)
                                {{-- "Three Dots" Separator --}}
                                @if (is_string($item))
                                    <li class="page-item disabled"><span class="page-link">{{ $item }}</span></li>
                                @endif

                                {{-- Array Of Links --}}
                                @if (is_array($item))
                                    @foreach ($item as $page => $url)
                                        @if ($page == $discounts->currentPage())
                                            <li class="page-item active"><span class="page-link">{{ $page }}</span>
                                            </li>
                                        @else
                                            <li class="page-item"><a class="page-link"
                                                    href="{{ $url }}">{{ $page }}</a></li>
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach

                            {{-- Next Page Link --}}
                            @if ($discounts->hasMorePages())
                                <li class="page-item"><a class="page-link" href="{{ $discounts->nextPageUrl() }}"
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
