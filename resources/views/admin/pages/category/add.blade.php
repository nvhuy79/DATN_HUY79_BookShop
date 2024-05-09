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
                        </div>
                    </div>
                </div>
                <div class="white_card_body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label" for="exampleInputTitle">Tiêu đề</label>
                            <input type="email" class="form-control" id="exampleInputTitle" aria-describedby="emailHelp"
                                placeholder="Nhập tên tiêu đề...">
                           
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="exampleInputPassword1">Chi tiết</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Nhập dữ liệu...">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="#">Trạng thái:</label>
                            <div class="common_select">
                            <select class="nice_Select wide mb_30">
                            <option value>Hiển thị</option>
                            <option value>Ẩn</option>
                            </select>
                            </div>
                            </div>
                        <button type="submit" class="btn btn-primary">Thêm mới</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
