@extends('admin/layouts/page')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="white_card card_height_100 mb_30 pt-4">
                <div class="white_card_body">
                    <div class="QA_section">
                        <div class="white_box_tittle list_header">
                            <a href="{{ route('category.create') }}" class="btn btn-success mb-3">+ Thêm danh mục</a>
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
                                    <th scope="col">ID</th>
                                    <th scope="col">Tiêu đề</th>
                                    <th scope="col">Chi tiết</th>
                                    <th scope="col">Danh mục cha</th>
                                    <th scope="col">Trạng thái</th>
                                    <th scope="col">Ngày tạo</th>
                                    <th scope="col">Tùy chọn</th>
                                  </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                    @forelse ($categories as $item)
                                    <tr>

                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td>{{ $item->parent_id }}</td>
                                        <td>{!! $item->status ? '<span class="status_btn">Hiển thị</span>' : '<span class="status_btn red_btn" >Ẩn</span>' !!}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>
                                            <div class="action_btns d-flex">
                                                <a href="{{ route('category.edit',$item) }}" class="action_btn mr_10"> <i class="far fa-edit"></i>
                                                </a>
                                                <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
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
    @endsection
