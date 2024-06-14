@extends('admin/layouts/page')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="white_card card_height_100 mb_30 pt-4">
                <div class="white_card_body">
                    <div class="QA_section">
                        <div class="white_box_tittle list_header">
                            <a href="{{ route('product.create') }}" class="btn_1" style="background-color: rgb(50, 165, 50)">+ Thêm tài khoản</a>
                            <div class="box_right d-flex lms_block">
                                <div class="serach_field_2">
                                    <div class="search_inner">
                                        <form action="{{ route('list_acc.search') }}" method="GET">
                                            <div class="search_field">
                                                <input type="text" name="query" placeholder="Tìm kiếm..." value="{{ request()->input('query') }}">
                                            </div>
                                            <button type="submit"> <i class="ti-search"></i> </button>
                                        </form>
                                    </div>
                                </div>
                                <div class="add_button ms-2">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#addcategory"
                                        class="btn_1">Tìm kiếm</a>
                                </div>
                            </div>
                        </div>
                        <div class="QA_table mb_30">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col" style="width: 10%;">ID</th>
                                        <th scope="col" style="width: 40%;">Tên</th>
                                        <th scope="col" style="width: 40%;">Email</th>
                                        <th scope="col" style="width: 10%;">Tùy chọn</th>
                                    
                                    </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                    @forelse ($admins as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td style="max-width: 200px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">{{ $item->name }}</td>
                                            <td style="max-width: 200px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">{{ $item->email }}</td>
                                            <td>
                                                <div class="action_btns d-flex">
                                                    <a href="{{ route('product.edit', $item) }}" class="action_btn mr_10"><i class="far fa-edit"></i>
                                                    </a>
                                                    <form action="{{ route('product.destroy', $item) }}" method="POST" onsubmit="return confirm('Bạn có chắc chắn muốn xóa danh mục này không?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="action_btn"><i class="fas fa-trash"></i></button>
                                                    </form>
                                                </div>
                                            </td>
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
                            @if ($admins->onFirstPage())
                                <li class="page-item disabled"><span class="page-link">&laquo;</span></li>
                            @else
                                <li class="page-item"><a class="page-link" href="{{ $admins->previousPageUrl() }}" aria-label="Previous"><span aria-hidden="true">&laquo;</span><span class="sr-only">Trước</span></a></li>
                            @endif
                            @foreach ($admins as $item)
                                @if (is_string($item))
                                    <li class="page-item disabled"><span class="page-link">{{ $item }}</span></li>
                                @endif
                                @if (is_array($item))
                                    @foreach ($item as $page => $url)
                                        @if ($page == $admins->currentPage())
                                            <li class="page-item active"><span class="page-link">{{ $page }}</span></li>
                                        @else
                                            <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                            @if ($admins->hasMorePages())
                                <li class="page-item"><a class="page-link" href="{{ $admins->nextPageUrl() }}" aria-label="Next"><span aria-hidden="true">&raquo;</span><span class="sr-only">Tiếp</span></a></li>
                            @else
                                <li class="page-item disabled"><span class="page-link">&raquo;</span></li>
                            @endif
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    @endsection
