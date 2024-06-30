@extends('admin.layouts.page')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="white_card card_height_100 mb_30 pt-4">
                <div class="white_card_body">
                    <div class="QA_section">
                        <div class="white_box_tittle list_header">
                            <a href="{{ route('product.create') }}" class="btn_1"
                                style="background-color: rgb(50, 165, 50)">+ Thêm bài viết</a>
                            <form action="{{ route('product.search') }}" method="GET">
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
                        <div class="QA_table mb-30">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col" style="width: 5%;">ID</th>
                                        <th scope="col" style="width: 13%;">Tiêu đề</th>
                                        <th scope="col" style="width: 15%;">Nội dung</th>
                                        <th scope="col" style="width: 10%;">Tác giả</th>
                                        <th scope="col" style="width: 10%;">Tùy chọn</th>
                                    </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                    @forelse ($blogs as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td style="max-width: 200px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                                {{ $item->title }}</td>
                                            <td id="content-{{ $item->id }}">
                                                {!! \Illuminate\Support\Str::limit(strip_tags($item->content), 200) !!} <!-- Giới hạn độ dài và loại bỏ các thẻ HTML -->
                                                @if (strlen(strip_tags($item->content)) > 200)
                                                    <span id="more-{{ $item->id }}" style="display: none;">{!! strip_tags($item->content) !!}</span>
                                                    <a href="#" class="read-more" data-id="{{ $item->id }}">Xem thêm...</a>
                                                @endif
                                            </td>
                                            <td style="max-width: 200px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                                {{ $item->author }}</td>
                                            <td>
                                                <div class="action_btns d-flex">
                                                    <a href="{{ route('blogs.edit', $item->id) }}" class="action_btn mr_10">
                                                        <i class="far fa-edit"></i>
                                                    </a>
                                                    <form action="{{ route('blogs.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Bạn có chắc chắn muốn xóa bài viết này không?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="action_btn">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
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
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            @if ($blogs->onFirstPage())
                                <li class="page-item disabled"><span class="page-link">&laquo;</span></li>
                            @else
                                <li class="page-item"><a class="page-link" href="{{ $blogs->previousPageUrl() }}" aria-label="Previous"><span aria-hidden="true">&laquo;</span><span class="sr-only">Previous</span></a></li>
                            @endif
                            @foreach ($blogs as $item)
                                @if (is_string($item))
                                    <li class="page-item disabled"><span class="page-link">{{ $item }}</span></li>
                                @endif
                                @if (is_array($item))
                                    @foreach ($item as $page => $url)
                                        @if ($page == $blogs->currentPage())
                                            <li class="page-item active"><span class="page-link">{{ $page }}</span></li>
                                        @else
                                            <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                            @if ($blogs->hasMorePages())
                                <li class="page-item"><a class="page-link" href="{{ $blogs->nextPageUrl() }}" aria-label="Next"><span aria-hidden="true">&raquo;</span><span class="sr-only">Next</span></a></li>
                            @else
                                <li class="page-item disabled"><span class="page-link">&raquo;</span></li>
                            @endif
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.read-more').forEach(function(button) {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    var blogId = this.getAttribute('data-id');
                    var moreContent = document.getElementById('more-' + blogId).innerHTML;
                    document.getElementById('content-' + blogId).innerHTML = moreContent;
                    this.style.display = 'none';
                });
            });
        });

    </script>
@endsection
