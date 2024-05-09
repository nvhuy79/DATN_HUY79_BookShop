@extends('admin/layouts/page')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="white_card card_height_100 mb_30 pt-4">
            <div class="white_card_body">
                <div class="QA_section">
                    <div class="white_box_tittle list_header">
                        {{-- <h4>Module Setting</h4> --}}
                        <a href="{{ route('category.create') }}" class="btn btn-success">+ Thêm mới danh mục</a>
                        <div class="box_right d-flex lms_block">
                            <div class="serach_field_2">
                                <div class="search_inner">
                                    <form Active="#">
                                        <div class="search_field">
                                            <input type="text"
                                                placeholder="Tìm kiếm...">
                                        </div>
                                        <button type="submit"> <i class="ti-search"></i> </button>
                                    </form>
                                </div>
                            </div>
                            <div class="add_button ms-2">
                                <a href="#" data-bs-toggle="modal"
                                    data-bs-target="#addcategory" class="btn_1">Tìm kiếm</a>
                            </div>
                        </div>
                    </div>
                    <div class="QA_table mb_30">

                        <table class="table lms_table_active ">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Tiêu đề</th>
                                    <th scope="col">Chi tiết</th>
                                    <th scope="col">Danh mục cha</th>
                                    <th scope="col">Trạng thái</th>
                                    <th scope="col">Ngày tạo</th>     
                                    <th scope="col">Tùy chọn</th>     
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($categories as $item)
                                <tr>
                                    
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td>{{ $item->id_parent }}</td>
                                    <td>{!! $item->status ? '<span class="status_btn">Hiển thị</span>' : '<span class="status_btn">Ẩn</span>' !!}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>
                                        <div class="action_btns d-flex">
                                            <a href="#" class="action_btn mr_10"> <i
                                                    class="far fa-edit"></i> </a>
                                            <a href="#" class="action_btn"> <i
                                                    class="fas fa-trash"></i> </a>
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
            </div>
        </div>
    </div>
</div>
@endsection
