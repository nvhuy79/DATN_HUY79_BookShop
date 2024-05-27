@extends('admin.layouts.page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 mx-auto">
                <div class="white_card card_height_100 mb_30">
                    <div class="white_card_header text-center">
                        <div class="box_header m-0">
                            <div class="main-title">
                                <h3 class="m-0">Chỉnh sửa sản phẩm</h3>
                                @if (session('error'))
                                    <span style="color: red">{{ session('error') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="white_card_body">
                        <form action="{{ route('product.update', $product->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-floating" for="exampleInputTitle">Tên sản phẩm</label>
                                    <input type="text" name="title"
                                        class="form-control @error('title') is-invalid @enderror" id="title_product"
                                        placeholder="Nhập tên tiêu đề..." onkeyup="ChangeToSlug()"
                                        value="{{ old('title', $product->title) }}">
                                    @error('title')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="form-floating" for="exampleInputSlug">Tác giả</label>
                                    <input type="text" name="author"
                                        class="form-control @error('author') is-invalid @enderror" id="author" placeholder="Nhập tên tác giả..." value="{{ old('slug', $product->author) }}">
                                    @error('author')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-floating" for="exampleInputSlug">Đường dẫn</label>
                                    <input type="text" name="slug"
                                        class="form-control @error('slug') is-invalid @enderror" id="slug"
                                        value="{{ old('slug', $product->slug) }}">
                                    @error('slug')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-floating" for="exampleInputPrice">Giá sản phẩm</label>
                                <input type="text" name="price"
                                    class="form-control @error('price') is-invalid @enderror" id="exampleInputPrice"
                                    placeholder="Nhập giá sản phẩm..." value="{{ old('price', $product->price) }}">
                                @error('price')
                                    <span style="color: red">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-floating" for="exampleInputSalePrice">Giá khuyến mãi</label>
                                <input type="text" name="sale_price"
                                    class="form-control @error('sale_price') is-invalid @enderror"
                                    id="exampleInputSalePrice" placeholder="Nhập giá khuyến mãi..."
                                    value="{{ old('sale_price', $product->sale_price) }}">
                                @error('sale_price')
                                    <span style="color: red">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="formFileProductImage" class="form-floating">Ảnh sản phẩm</label>
                                <input class="form-control" type="file" id="formFileProductImage" name="product_image">
                            </div>

                            <div class="mb-3">
                                <label for="formFileDescImage" class="form-floating">Ảnh mô tả</label>
                                <input class="form-control" type="file" id="formFileDescImage" name="desc_image[]"
                                    multiple>
                            </div>

                            <div class="mb-3">
                                <label class="form-floating" for="exampleInputDescription">Mô tả sản phẩm</label>
                                <textarea name="description" id="editor1" rows="10" cols="80">{{ old('description', $product->description) }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="category_id" class="form-label">Chọn danh mục:</label>
                                <select class="form-select" aria-label="Default select example" name="category_id">
                                    <option value="" selected>--- Chọn danh mục ---</option>
                                    @foreach ($categories as $item)
                                        <option value="{{ $item->id }}"
                                            {{ $product->category_id == $item->id ? 'selected' : '' }}>{{ $item->title }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Sản phẩm nổi bật</label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="featured" id="featured1"
                                        value="1" {{ $product->featured == 1 ? 'checked' : '' }}>
                                    <label class="form-check-label" for="featured1">Có</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="featured" id="featured0"
                                        value="0" {{ $product->featured == 0 ? 'checked' : '' }}>
                                    <label class="form-check-label" for="featured0">Không</label>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary" style="margin-top: 3%;">Lưu thay đổi</button>
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

    <script type="text/javascript">
        function ChangeToSlug() {
            var title_product, slug;

            // Lấy text từ thẻ input title 
            title_product = document.getElementById("title_product").value;

            // Đổi chữ hoa thành chữ thường
            slug = title_product.toLowerCase();

            // Đổi ký tự có dấu thành không dấu
            slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
            slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
            slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
            slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
            slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
            slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
            slug = slug.replace(/đ/gi, 'd');
            // Xóa các ký tự đặt biệt
            slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
            // Đổi khoảng trắng thành ký tự gạch ngang
            slug = slug.replace(/ /gi, "-");
            // Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
            // Phòng trường hợp người nhập vào quá nhiều ký tự trắng
            slug = slug.replace(/\-\-\-\-\-/gi, '-');
            slug = slug.replace(/\-\-\-\-/gi, '-');
            slug = slug.replace(/\-\-\-/gi, '-');
            slug = slug.replace(/\-\-/gi, '-');
            // Xóa các ký tự gạch ngang ở đầu và cuối
            slug = '@' + slug + '@';
            slug = slug.replace(/\@\-|\-\@|\@/gi, '');
            // In slug ra textbox có id “slug”
            document.getElementById('slug').value = slug;
        }
    </script>
@endsection
