@extends('admin.layouts.page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 mx-auto">
                <div class="white_card card_height_100 mb_30">
                    <div class="modal-content cs_modal">
                        <div class="modal-header justify-content-center theme_bg_1">
                            <h5 class="modal-title text_white">Chỉnh sửa bài viết</h5>
                            @if (session('error'))
                                <span style="color: red">{{ session('error') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="white_card_body mt-4">
                        <form action="{{ route('blogs.update', ['blog' => $blogs->id]) }}" method="POST">
                            @csrf
                            @method('PUT') <!-- Sử dụng method PUT cho phương thức update -->
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-floating" for="title_blog">Tiêu đề bài viết</label>
                                    <input type="text" name="title"
                                           class="form-control @error('title') is-invalid @enderror" id="title_blog"
                                           placeholder="Nhập tên tiêu đề..." value="{{ old('title', $blogs->title) }}">
                                    @error('title')
                                    <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="form-floating" for="author_blog">Tác giả</label>
                                    <input type="text" name="author"
                                           class="form-control @error('author') is-invalid @enderror" id="author_blog"
                                           placeholder="Nhập tên tác giả..." value="{{ old('author', $blogs->author) }}">
                                    @error('author')
                                    <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-floating" for="content">Nội dung</label>
                                <textarea name="content" id="editor1" rows="10" cols="80" >{{ old('content', $blogs->content) }}</textarea>
                                @error('content')
                                <span style="color: red">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary" style="margin-top: 3%;">Cập nhật</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom-js')
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('editor1');
    </script>
@endsection
