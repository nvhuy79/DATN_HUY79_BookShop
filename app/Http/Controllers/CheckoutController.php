<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\ShippingInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;



class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();

        if (Auth::check()) {
            $user_id = Auth::id();
            $carts = Cart::where('user_id', $user_id)->get();
            return view('user/pages/checkout', compact('carts', 'categories'));
        } else {
            return redirect()->route('login')->with('error', 'Bạn cần đăng nhập để tiến hành thanh toán.');
        }
    }


    public function confirmOrder(Request $request)
    {

        // Xác thực dữ liệu
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'city_id' => 'required',
            'district_id' => 'required',
            'ward_id' => 'required',
            'payment-method' => 'required|in:check,bank',
        ], [
            'name.required' => 'Hãy nhập họ và tên của bạn.',
            'name.max' => 'Họ và tên không được vượt quá 255 ký tự.',
            'email.required' => 'Hãy nhập địa chỉ email của bạn.',
            'email.email' => 'Địa chỉ email không hợp lệ.',
            'email.max' => 'Email không được vượt quá 255 ký tự.',
            'phone.required' => 'Hãy nhập số điện thoại của bạn.',
            'phone.max' => 'Số điện thoại không được vượt quá 20 ký tự.',
            'address.required' => 'Hãy nhập địa chỉ của bạn.',
            'address.max' => 'Địa chỉ không được vượt quá 255 ký tự.',
            'city_id.required' => 'Vui lòng chọn Tỉnh/Thành phố.',
            'district_id.required' => 'Vui lòng chọn Quận/Huyện.',
            'ward_id.required' => 'Vui lòng chọn Phường/Xã.',
            'payment-method.required' => 'Vui lòng chọn phương thức thanh toán.',
            'payment-method.in' => 'Phương thức thanh toán không hợp lệ.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Lấy thông tin phí vận chuyển từ DB
        $city_id = $request->input('city_id');
        $district_id = $request->input('district_id');
        $ward_id = $request->input('ward_id');

        $shippingFee = DB::table('shipping_fees')
            ->where('city_id', $city_id)
            ->where('district_id', $district_id)
            ->where('ward_id', $ward_id)
            ->value('fee');

        // Nếu không tìm thấy phí vận chuyển, đặt mặc định là 50000 VND
        if (!$shippingFee) {
            $shippingFee = 50000;
        }

        // Lưu phí vận chuyển vào Session
        Session::put('shipping_fee', $shippingFee);
        Session::put('email', $request->input('email'));

        // Lưu thông tin người nhận hàng vào bảng shipping_information
        $shippingInfo = ShippingInformation::create([
            'shipping_name' => $request->input('name'),
            'shipping_email' => $request->input('email'),
            'shipping_phone' => $request->input('phone'),
            'shipping_address' => $request->input('address'),
            'city_id' => $city_id,
            'district_id' => $district_id,
            'ward_id' => $ward_id,
            'shipping_method' => $request->input('payment-method'),
            'shipping_notes' => $request->input('notes'),
        ]);

        if (!$shippingInfo) {
            return back()->with('error', 'Không thể lưu thông tin người nhận hàng.');
        }

        // Lấy id của shipping_information vừa được lưu
        $checkout_code = substr(md5(microtime()), rand(0, 26), 5);
        $shippingInformationId = $shippingInfo->id;

        // Lưu thông tin đơn hàng vào bảng orders
        $order = Order::create([
            'user_id' => auth()->id(), // Lấy id của người dùng hiện tại
            'shipping_information_id' => $shippingInformationId,
            'order_status' => 1, // Thay đổi thành số tiền thực tế sau khi tính toán
            'order_code' => $checkout_code, 
        ]);

        if (!$order) {
            return back()->with('error', 'Không thể tạo đơn hàng.');
        }

        // Sau khi tạo đơn hàng thành công, có thể chuyển hướng tới trang xác nhận đơn hàng hoặc trang khác
        return back()->with('success', 'Đơn hàng đã được tạo thành công.');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
