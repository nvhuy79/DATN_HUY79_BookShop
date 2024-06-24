@extends('admin/layouts/page')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 mx-auto">
                <div class="white_card card_height_100 mb_30">
                    <div class="modal-content cs_modal">
                        <div class="modal-header justify-content-center theme_bg_1">
                            <h5 class="modal-title text_white">Thêm danh mục</h5>
                            @if (session('error'))
                                <span style="color: red">{{ session('error') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="white_card_body mt-4">
                        <form action="{{ route('category.store') }}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <label class="form-label col-xl-3 col-lg-3 col-form-label">Tiêu đề</label>
                                <div class="col-lg-9 col-xl-8"><input class="form-control" type="text" name="title"
                                        id="title" placeholder="Nhập tên tiêu đề..." value="{{ old('title') }}" />
                                    @error('title')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="form-label col-xl-3 col-lg-3 col-form-label" for="description">Chi
                                    tiết</label>
                                <div class="col-lg-9 col-xl-8">
                                    <textarea class="form-control" rows="3" name="description">{{ old('description') }}</textarea>
                                    @error('description')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="form-label col-xl-3 col-lg-3 col-form-label">Danh mục cha:</label>
                                <div class="col-lg-9 col-xl-8">
                                    <select class="form-select" name="parent_id">
                                        <option value="" selected>--- Chọn danh mục cha ---</option>
                                        @foreach ($categories as $item)
                                            <option value="{{ $item->id }}">{{ $item->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="cs_check_box mt-3">
                                <input type="checkbox" id="check_box" class="common_checkbox" name="status" value="0"
                                    id="flexCheckChecked" checked>
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
