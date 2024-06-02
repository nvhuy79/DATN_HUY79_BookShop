@extends('admin/layouts/page')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="white_card card_height_100 mb_30 pt-4">
                <div class="white_card_body">
                    <div class="QA_section">
                        <div class="white_box_tittle list_header">
                            <a href="{{ route('product.create') }}" class="btn btn-success mb-3">+ Thêm sản phẩm</a>
                            <div class="box_right d-flex lms_block">
                                <div class="serach_field_2">
                                    <div class="search_inner">
                                        <form Active="#">
                                            <div class="search_field">
                                                <input type="text" placeholder="Tìm kiếm...">
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
                                        <th scope="col" style="width: 5%;">ID</th>
                                        <th scope="col" style="width: 13%;">Sản phẩm</th>
                                        <th scope="col" style="width: 10%;">Tác giả</th>
                                        <th scope="col" style="width: 15%;">Danh mục</th>
                                        <th scope="col" style="width: 10%;">Giá bán</th>
                                        <th scope="col" style="width: 10%;">Giá giảm</th>
                                        <th scope="col" style="width: 10%; text-align: center;">Ảnh</th>
                                        <th scope="col" style="width: 5%;">Nổi bật</th>
                                        <th scope="col" style="width: 7%;">Số lượng</th>
                                        <th scope="col" style="width: 10%;">Tùy chọn</th>
                                    </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                    @forelse ($products as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td style="max-width: 200px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">{{ $item->title }}</td>
                                            <td style="max-width: 200px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">{{ $item->author }}</td>
                                            <td style="max-width: 200px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">{{ $item->category->title }}</td>
                                            <td>{{ $item->price }}</td>
                                            <td>{{ $item->sale_price }}</td>
                                            <td>
                                                <img src="{{ asset('storage/admin/images') }}/{{ $item->image }}" alt="" width="100px">
                                            </td>
                                            <td>{{ $item->featured ? 'Có' : 'Không' }}</td>
                                            <td>{{ $item->stock}}</td>
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
                                        <span>Chưa có dữ liệu</span>
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
                                <li class="page-item"><a class="page-link" href="{{ $products->previousPageUrl() }}" aria-label="Previous"><span aria-hidden="true">&laquo;</span><span class="sr-only">Previous</span></a></li>
                            @endif
                            @foreach ($products as $item)

                                @if (is_string($item))
                                    <li class="page-item disabled"><span class="page-link">{{ $item }}</span></li>
                                @endif


                                @if (is_array($item))
                                    @foreach ($item as $page => $url)
                                        @if ($page == $products->currentPage())
                                            <li class="page-item active"><span class="page-link">{{ $page }}</span></li>
                                        @else
                                            <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach


                            @if ($products->hasMorePages())
                                <li class="page-item"><a class="page-link" href="{{ $products->nextPageUrl() }}" aria-label="Next"><span aria-hidden="true">&raquo;</span><span class="sr-only">Next</span></a></li>
                            @else
                                <li class="page-item disabled"><span class="page-link">&raquo;</span></li>
                            @endif
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    @endsection
