@extends('admin/layouts/page')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 mx-auto">
                <div class="white_card card_height_100 mb_30">
                    <div class="modal-content cs_modal">
                        <div class="modal-header justify-content-center theme_bg_1">
                            <h5 class="modal-title text_white">Thêm Slide</h5>
                            @if (session('error'))
                                <span style="color: red">{{ session('error') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="white_card_body mt-4">
                        <form action="{{ route('slide.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label class="form-floating" for="exampleInputTitle">Tiêu đề</label>
                                <input type="text" name="title"
                                    class="form-control @error('title') is-invalid @enderror" id="title"
                                    placeholder="Nhập tên tiêu đề..." value="{{ old('title') }}">
                                @error('title')
                                    <span style="color: red">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="description">Chi tiết</label>
                                <textarea style ="width: 100%" id="description" name="description" cols="90" rows="5"
                                    placeholder="Nhập dữ liệu...">{{ old('description') }}</textarea>
                                @error('description')
                                    <span style="color: red">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="image">Hình ảnh</label>
                                <input type="file" name="image" class="form-control" id="image" required>
                            </div>
                           

                            <div class="col-lg-6">
                                <label class="form-label">Trạng thái</label><br>
                                <div class="form-group">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="status" id="status_fixed"
                                            value="1" {{ old('status') == '1' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="status_fixed">Hiển thị</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="status"
                                            id="status_percentage" value="2"
                                            {{ old('status') == '2' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="status_percentage">Ẩn</label>
                                    </div>
                                </div>
                            </div> 
                            <button type="submit" class="btn btn-primary" style="margin-top: 3%;">Thêm mới</button>
                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
