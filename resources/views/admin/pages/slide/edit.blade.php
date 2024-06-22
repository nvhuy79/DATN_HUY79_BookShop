@extends('admin.layouts.page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 mx-auto">
                <div class="white_card card_height_100 mb_30">
                    <div class="white_card_header text-center">
                        <div class="box_header m-0">
                            <div class="main-title">
                                <h3 class="m-0">Chỉnh sửa Slide</h3>
                                @if (session('error'))
                                    <span style="color: red">{{ session('error') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="white_card_body">
                        <form action="{{ route('slide.update', $slide) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="col-md-12">
                                <label class="form-floating" for="title">Tiêu đề</label>
                                <input type="text" name="title"
                                    class="form-control @error('title') is-invalid @enderror" id="title"
                                    placeholder="Nhập tên tiêu đề..." onkeyup="ChangeToSlug()"
                                    value="{{ old('title', $slide->title) }}">
                                @error('title')
                                    <span style="color: red">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-12 mt-4">
                                <div class="mb-3">
                                    <label class="form-label" for="description">Mô tả</label>
                                    <textarea style ="width: 100%" id="description" name="description" cols="90" rows="5"
                                        placeholder="Nhập dữ liệu...">{{ old('description', $slide->description) }}</textarea>
                                </div>
                                @error('description')
                                    <span style="color: red">{{ $message }}</span>
                                @enderror
                            </div>


                            <div class="mb-3">
                                <label for="image" class="form-label">Ảnh slide</label>
                                <input type="file" class="form-control" id="image" name="image">
                                @if ($slide->slide_image)
                                    <img src="{{ asset('admin/images/slides/' . $slide->slide_image) }}" alt="Slide Image"
                                        class="img-fluid mt-2" style="max-width: 200px;">
                                @endif
                            </div>



                            <button type="submit" class="btn btn-primary" style="margin-top: 3%;">Lưu thay đổi</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
