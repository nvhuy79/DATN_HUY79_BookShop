@extends('admin/layouts/page')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 mx-auto">
                <div class="white_card card_height_100 mb_30">
                    <div class="white_card_header text-center">
                        <div class="box_header m-0">
                            <div class="main-title">
                                <h3 class="m-0 ">Cập nhật sản phẩm</h3>
                                @if (session('error'))
                                    <span style="color: red">
                                        {{ session('error') }}
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="white_card_body">
                        <form action="{{ route('category.update', $category) }}" method="POST">
                            @method('PUT')
                            @csrf
                            <input type="hidden" name="id" value="{{ $category->id }}">
                            <div class="mb-3">
                                <label class="form-floating" for="exampleInputTitle">Tiêu đề</label>
                                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="exampleInputTitle"
                                       value="{{ old('title', $category->title) }}">
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
                                        <option
                                            value="{{ $item->id }}"{{ $category->parent_id == $item->id ? 'selected' : '' }}>
                                            {{ $item->title }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Trạng thái</label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id="status1"
                                        value="1" {{ $category->status == 1 ? 'checked' : '' }}>
                                    <label class="form-check-label" for="status1">Hiển thị</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id="status0"
                                        value="0" {{ $category->status == 0 ? 'checked' : '' }}>
                                    <label class="form-check-label" for="status0">Ẩn</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" style="margin-top: 3%;">Cập nhật</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
