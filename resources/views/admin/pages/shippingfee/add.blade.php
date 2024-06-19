@extends('admin/layouts/page')
@section('content')
    <div class="main_content_iner ">
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="white_box mb_30">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">

                                <div class="modal-content cs_modal">
                                    <div class="modal-header justify-content-center theme_bg_1">
                                        <h5 class="modal-title text_white">Thêm phí vận chuyển</h5>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="col-md-12">
                                                <label class="form-label" for="province">Tỉnh/Thành phố</label><br>
                                                <div class="col-md-12">
                                                    <select class="form-control" id="province" aria-haspopup="true" aria-expanded="false">
                                                        <option selected disabled>---Chọn Tỉnh/Thành phố---</option>
                                                        @foreach ($provinces as $province)
                                                            <option value="{{$province->province_id}}">{{ $province->name_province}}</option>
                                                        @endforeach
                                                        
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                        
                                            <div class="col-md-12 mt-3">
                                                <label class="form-label" for="district">Quận/Huyện</label><br>
                                                <div class="col-md-12">
                                                    <select class="form-control" id="district" aria-haspopup="true" aria-expanded="false">
                                                        <option selected disabled>---Chọn Tỉnh/Thành phố---</option>
                                                        <option value="1">Thành phố A</option>
                                                        <option value="2">Thành phố B</option>
                                                        <option value="3">Thành phố C</option>
                                                        <option value="4">Thành phố D</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-12 mt-3">
                                                <label class="form-label" for="ward">Phường/Xã</label><br>
                                                <div class="col-md-12">
                                                    <select class="form-control" id="ward" aria-haspopup="true" aria-expanded="false">
                                                        <option selected disabled>---Chọn Tỉnh/Thành phố---</option>
                                                        <option value="1">Thành phố A</option>
                                                        <option value="2">Thành phố B</option>
                                                        <option value="3">Thành phố C</option>
                                                        <option value="4">Thành phố D</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group mt-3">
                                                <label for="shipping_fee">Phí vận chuyển</label>
                                                <input type="text" class="form-control" id="shipping_fee" name="shipping_fee" placeholder="Nhập phí vận chuyển">
                                            </div>
                                        
                                            <button type="submit" class="btn_1 full_width text-center">Đăng nhập</button>
                                            <p>Bạn cần tài khoản? <a data-bs-toggle="modal" data-bs-target="#sing_up" data-bs-dismiss="modal" href="#">Đăng ký</a></p>
                                        
                                            <div class="text-center">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#forgot_password" data-bs-dismiss="modal" class="pass_forget_btn">Quên mật khẩu?</a>
                                            </div>
                                        </form>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
