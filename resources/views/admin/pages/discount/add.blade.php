@extends('admin/layouts/page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="white_card card_height_100 mb_30">
                    <div class="white_card_header">
                        <div class="white_box_tittle">
                            <h4>Thêm mã giảm giá</h4>
                        </div>
                    </div>
                    <div class="white_card_body">
                        <form action="{{ route('discount.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <label class="form-label">Tên mã</label>
                                    <div class="common_input mb_20">
                                        <input type="text" name="title" id="title"
                                            placeholder="Nhập tên mã giảm giá..." value="{{ old('title') }}">
                                        @error('title')
                                            <span style="color: red">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <label class="form-label">Mã giảm</label>
                                    <div class="common_input mb_20">
                                        <input type="text" id="code" name="code"
                                            placeholder="Nhập mã giảm giá..." value="{{ old('code') }}">
                                        @error('code')
                                            <span style="color: red">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label class="form-label">Số lượng</label>
                                    <div class="common_input mb_20">
                                        <input type="text" name="usage_count" id="usage_count"
                                            placeholder="Nhập số lượng mã..." value="{{ old('usage_count') }}">
                                        @error('usage_count')
                                            <span style="color: red">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <label class="form-label mb-4">Hình thức giảm</label><br>
                                    <div class="form-group">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="method" id="method_fixed"
                                                value="1" {{ old('method') == '1' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="method_fixed">Giảm tiền</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="method"
                                                id="method_percentage" value="2"
                                                {{ old('method') == '2' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="method_percentage">Giảm phần trăm</label>
                                        </div>
                                    </div>
                                </div>
                                    <br>

                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label class="form-label">Mức giảm</label>
                                        <div class="common_input mb_20">
                                            <input type="text" name="discount_value" id="discount_value"
                                                placeholder="Nhập số tiền hoặc % muốn giảm..."
                                                value="{{ old('discount_value') }}">
                                            @error('discount_value')
                                                <span style="color: red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="create_report_btn mt_30">
                                            <button type="submit" class="btn_1 w-100">Thêm mới</button>
                                        </div>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
