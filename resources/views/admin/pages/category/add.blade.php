@extends('admin/layouts/page')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 mx-auto">
                <div class="white_card card_height_100 mb_30">
                    <div class="white_card_header text-center">
                        <div class="box_header m-0">
                            <div class="main-title">
                                <h3 class="m-0 ">Thêm danh mục</h3>
                                @if (session('error'))
                                <span style="color: red">
                                    {{ session('error') }}
                                </span>
                            @endif
                            </div>
                        </div>
                    </div>
                    <div class="white_card_body">
                        <form action="{{ route('category.store') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label class="form-floating" for="exampleInputTitle">Tiêu đề</label>
                                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="exampleInputTitle"
                                placeholder="Nhập tên tiêu đề...">
                                @error('title')
                                <span style="color: red">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label" for="description">Chi tiết</label>
                                <textarea style ="width: 100%" id="description" name="description" cols="90" rows="5"
                                    placeholder="Nhập dữ liệu..."></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="parent_id" class="form-label">Danh mục cha:</label>
                                <select class="form-select" aria-label="Default select example" name="parent_id">
                                    <option value="" selected>--- Chọn danh mục cha ---</option>
                                    @foreach ($categories as $item)
                                        <option value="{{ $item->id }}">{{ $item->title }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="cs_check_box mt-3">
                                <input type="checkbox" id="check_box" class="common_checkbox" name="status"
                                    value="0" id="flexCheckChecked" checked>
                                <label class="form-label" for="check_box">
                                    Ẩn danh mục
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary" style="margin-top: 3%;">Thêm mới</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
