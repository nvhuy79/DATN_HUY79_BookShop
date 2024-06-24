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
                                        <form action="{{ route('shippingfee.store') }}" method="POST">
                                            @csrf
                                            <div>
                                                <label class="form-label" for="city" style="font-size: 16px">Tỉnh/Thành
                                                    phố</label><br>
                                                <select class="form-select form-select-sm mb-3" id="city"
                                                    name="city_id" aria-label=".form-select-sm" style="font-size: 15px">
                                                    <option value="" selected>---Chọn Tỉnh/Thành phố---</option>
                                                    @error('city_id')
                                                        <span style="color: red">{{ $message }}</span>
                                                    @enderror
                                                </select>

                                                <label class="form-label" for="district"
                                                    style="font-size: 16px">Quận/Huyện</label><br>
                                                <select class="form-select form-select-sm mb-3" id="district"
                                                    name="district_id" aria-label=".form-select-sm" style="font-size: 15px">
                                                    <option value="" selected>---Chọn Quận/Huyện---</option>
                                                    @error('district_id')
                                                        <span style="color: red">{{ $message }}</span>
                                                    @enderror
                                                </select>

                                                <label class="form-label" for="ward"
                                                    style="font-size: 16px">Phường/Xã</label><br>
                                                <select class="form-select form-select-sm" id="ward" name="ward_id"
                                                    aria-label=".form-select-sm" style="font-size: 15px">
                                                    <option value="" selected>---Chọn Phường/Xã---</option>
                                                    @error('ward_id')
                                                        <span style="color: red">{{ $message }}</span>
                                                    @enderror
                                                </select>
                                            </div>

                                            <div class="form-group mt-3">
                                                <label for="shipping_fee" style="font-size: 16px">Phí vận chuyển</label>
                                                <input type="text" class="form-control" id="shipping_fee"
                                                    name="shipping_fee" placeholder="Nhập phí vận chuyển">
                                                @error('shipping_fee')
                                                    <span style="color: red">{{ $message }}</span>
                                                @enderror
                                            </div>


                                            <button type="submit" name="select_shippingfee"
                                                class="btn_1 full_width text-center add_shippingfee">Thêm mới</button>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <script>
        var citySelect = document.getElementById("city");
        var districtSelect = document.getElementById("district");
        var wardSelect = document.getElementById("ward");

        var url = "/DiaGioiHanhChinhVN.json"; // Điều chỉnh URL này theo cấu hình của bạn

        axios.get(url)
            .then(function(response) {
                renderCity(response.data);
            })
            .catch(function(error) {
                console.error('Lỗi khi lấy dữ liệu:', error);
            });

        function renderCity(data) {
            citySelect.innerHTML = '<option value="" selected>---Chọn Tỉnh/Thành phố---</option>';
            data.forEach(function(city) {
                var option = new Option(city.Name, city.Id);
                citySelect.appendChild(option);
            });
        }

        citySelect.addEventListener('change', function() {
            var cityId = this.value;
            districtSelect.innerHTML = '<option value="" selected>---Chọn Quận/Huyện---</option>';
            wardSelect.innerHTML = '<option value="" selected>---Chọn Phường/Xã---</option>';

            if (cityId) {
                axios.get(url)
                    .then(function(response) {
                        var districts = response.data.find(city => city.Id == cityId).Districts;
                        districts.forEach(function(district) {
                            var option = new Option(district.Name, district.Id);
                            districtSelect.appendChild(option);
                        });
                    })
                    .catch(function(error) {
                        console.error('Lỗi khi lấy dữ liệu quận/huyện:', error);
                    });
            }
        });

        districtSelect.addEventListener('change', function() {
            var cityId = citySelect.value;
            var districtId = this.value;
            wardSelect.innerHTML = '<option value="" selected>---Chọn Phường/Xã---</option>';

            if (cityId && districtId) {
                axios.get(url)
                    .then(function(response) {
                        var wards = response.data.find(city => city.Id == cityId).Districts.find(district =>
                            district.Id == districtId).Wards;
                        wards.forEach(function(ward) {
                            var option = new Option(ward.Name, ward.Id);
                            wardSelect.appendChild(option);
                        });
                    })
                    .catch(function(error) {
                        console.error('Lỗi khi lấy dữ liệu phường/xã:', error);
                    });
            }
        });
    </script>
@endsection
