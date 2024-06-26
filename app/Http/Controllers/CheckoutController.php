<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use App\Models\Category;
use App\Models\Discount;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ShippingInformation;
use Illuminate\Support\Facades\Auth;
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

    // public function confirmOrder(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|email|max:255',
    //         'phone' => 'required|string|max:20',
    //         'address' => 'required|string|max:255',
    //         'city_id' => 'required',
    //         'district_id' => 'required',
    //         'ward_id' => 'required',
    //         'payment-method' => 'required|in:check,bank',
    //     ], [
    //         'name.required' => 'Hãy nhập họ và tên của bạn.',
    //         'name.max' => 'Họ và tên không được vượt quá 255 ký tự.',
    //         'email.required' => 'Hãy nhập địa chỉ email của bạn.',
    //         'email.email' => 'Địa chỉ email không hợp lệ.',
    //         'email.max' => 'Email không được vượt quá 255 ký tự.',
    //         'phone.required' => 'Hãy nhập số điện thoại của bạn.',
    //         'phone.max' => 'Số điện thoại không được vượt quá 20 ký tự.',
    //         'address.required' => 'Hãy nhập địa chỉ của bạn.',
    //         'address.max' => 'Địa chỉ không được vượt quá 255 ký tự.',
    //         'city_id.required' => 'Vui lòng chọn Tỉnh/Thành phố.',
    //         'district_id.required' => 'Vui lòng chọn Quận/Huyện.',
    //         'ward_id.required' => 'Vui lòng chọn Phường/Xã.',
    //         'payment-method.required' => 'Vui lòng chọn phương thức thanh toán.',
    //         'payment-method.in' => 'Phương thức thanh toán không hợp lệ.',
    //     ]);

    //     if ($validator->fails()) {
    //         return redirect()->back()
    //             ->withErrors($validator)
    //             ->withInput();
    //     }

    //     // Lấy thông tin phí vận chuyển từ DB
    //     $city_id = $request->input('city_id');
    //     $district_id = $request->input('district_id');
    //     $ward_id = $request->input('ward_id');

    //     $shippingFee = DB::table('shipping_fees')
    //         ->where('city_id', $city_id)
    //         ->where('district_id', $district_id)
    //         ->where('ward_id', $ward_id)
    //         ->value('fee');

    //     if (!$shippingFee) {
    //         $shippingFee = 50000;  // Default shipping fee if not found
    //     }

    //     // Lấy thông tin giỏ hàng từ bảng carts
    //     $cartItems = Cart::where('user_id', auth()->id())->get();

    //     if ($cartItems->isEmpty()) {
    //         return back()->with('error', 'Giỏ hàng trống.');
    //     }

    //     // Tính tổng giá trị đơn hàng
    //     $orderTotal = 0;
    //     foreach ($cartItems as $item) {
    //         $orderTotal += $item->price * $item->quantity;
    //     }

    //     // Miễn phí vận chuyển nếu tổng giá trị đơn hàng lớn hơn 999000
    //     if ($orderTotal > 999000) {
    //         $shippingFee = 0;
    //     }

    //     // Lưu phí vận chuyển vào Session
    //     Session::put('shipping_fee', $shippingFee);
    //     Session::put('email', $request->input('email'));

    //     // Lưu thông tin người nhận hàng vào bảng shipping_information
    //     $shippingInfo = ShippingInformation::create([
    //         'shipping_name' => $request->input('name'),
    //         'shipping_email' => $request->input('email'),
    //         'shipping_phone' => $request->input('phone'),
    //         'shipping_address' => $request->input('address'),
    //         'city_id' => $city_id,
    //         'district_id' => $district_id,
    //         'ward_id' => $ward_id,
    //         'shipping_method' => $request->input('payment-method'),
    //         'shipping_notes' => $request->input('notes'),
    //     ]);

    //     if (!$shippingInfo) {
    //         return back()->with('error', 'Không thể lưu thông tin người nhận hàng.');
    //     }

    //     $checkout_code = substr(md5(microtime()), rand(0, 26), 5);
    //     $shippingInformationId = $shippingInfo->id;

    //     // Lưu thông tin đơn hàng vào bảng orders
    //     $order = Order::create([
    //         'user_id' => auth()->id(),
    //         'shipping_information_id' => $shippingInformationId,
    //         'order_status' => 1,
    //         'order_code' => $checkout_code,
    //         'shipping_fee' => $shippingFee,  // Lưu phí vận chuyển vào đơn hàng
    //     ]);

    //     // Lấy mã giảm giá từ session
    //     $discountCode = Session::get('current_discount_code', '');

    //     // Lưu từng sản phẩm trong giỏ hàng vào bảng order_details
    //     foreach ($cartItems as $item) {
    //         $product = Product::find($item->product_id);

    //         // Giảm số lượng sản phẩm trong kho
    //         if ($product->stock < $item->quantity) {
    //             return back()->with('error', 'Sản phẩm ' . $product->title . ' không đủ số lượng.');
    //         }

    //         $product->stock -= $item->quantity;
    //         $product->save();

    //         OrderDetail::create([
    //             'order_code' => $checkout_code,
    //             'product_id' => $item->product_id,
    //             'product_name' => $product->title,
    //             'product_price' => $item->price,
    //             'product_discount' => $discountCode,
    //             'product_fee' => $shippingFee,
    //             'product_sale_quantity' =>  $item->quantity,
    //         ]);
    //     }

    //     // Giảm số lượng mã giảm giá (nếu có)
    //     if ($discountCode) {
    //         $discount = Discount::where('code', $discountCode)->first();
    //         if ($discount && $discount->usage_count > 0) {
    //             $discount->usage_count -= 1;
    //             $discount->save();
    //         }
    //     }

    //     // Xóa giỏ hàng sau khi hoàn tất đơn hàng
    //     // Cart::where('user_id', auth()->id())->delete();
    //     Session::forget('current_discount_code');
    //     Session::forget('product_fee');

    //     return redirect()->back()->with('success', 'Đơn hàng đã được tạo thành công.');
    // }


    public function confirmOrder(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|regex:/^[0-9]{10}$/',
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
            'phone.regex' => 'Số điện thoại phải có đúng 10 chữ số.',
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

        // Lưu thông tin vào session để sử dụng sau này
        Session::put('customer_name', $request->input('name'));
        Session::put('customer_email', $request->input('email'));
        Session::put('customer_phone', $request->input('phone'));
        Session::put('customer_address', $request->input('address'));
        Session::put('customer_city_id', $request->input('city_id'));
        Session::put('customer_district_id', $request->input('district_id'));
        Session::put('customer_ward_id', $request->input('ward_id'));
        Session::put('customer_payment_method', $request->input('payment-method'));
        Session::put('customer_note', $request->input('note'));

        // Lấy thông tin phí vận chuyển từ DB
        $city_id = $request->input('city_id');
        $district_id = $request->input('district_id');
        $ward_id = $request->input('ward_id');

        $shippingFee = DB::table('shipping_fees')
            ->where('city_id', $city_id)
            ->where('district_id', $district_id)
            ->where('ward_id', $ward_id)
            ->value('fee');

        if (!$shippingFee) {
            $shippingFee = 50000;  // Phí vận chuyển mặc định nếu không tìm thấy
        }

        // Lấy thông tin giỏ hàng từ bảng carts
        $cartItems = Cart::where('user_id', auth()->id())->get();

        if ($cartItems->isEmpty()) {
            return back()->with('error', 'Giỏ hàng trống.');
        }

        // Tính tổng giá trị đơn hàng
        $orderTotal = 0;
        foreach ($cartItems as $item) {
            $orderTotal += $item->price * $item->quantity;
        }

        // Miễn phí vận chuyển nếu tổng giá trị đơn hàng lớn hơn 999000
        if ($orderTotal > 999000) {
            $shippingFee = 0;
        }

        // Lưu phí vận chuyển vào Session
        Session::put('shipping_fee', $shippingFee);

        // Lưu thông tin người nhận hàng vào bảng shipping_information
        // $shippingInfo = ShippingInformation::create([
        //     'shipping_name' => $request->input('name'),
        //     'shipping_email' => $request->input('email'),
        //     'shipping_phone' => $request->input('phone'),
        //     'shipping_address' => $request->input('address'),
        //     'city_id' => $city_id,
        //     'district_id' => $district_id,
        //     'ward_id' => $ward_id,
        //     'shipping_method' => $request->input('payment-method'),
        //     'shipping_notes' => $request->input('notes'),
        // ]);

        // if (!$shippingInfo) {
        //     return back()->with('error', 'Không thể lưu thông tin người nhận hàng.');
        // }

        // $checkout_code = substr(md5(microtime()), rand(0, 26), 5);
        // $shippingInformationId = $shippingInfo->id;

        // // Lưu thông tin đơn hàng vào bảng orders
        // $order = Order::create([
        //     'user_id' => auth()->id(),
        //     'shipping_information_id' => $shippingInformationId,
        //     'order_status' => 1,
        //     'order_code' => $checkout_code,
        //     'shipping_fee' => $shippingFee,  // Lưu phí vận chuyển vào đơn hàng
        // ]);

        // // Lấy mã giảm giá từ session
        // $discountCode = Session::get('current_discount_code', '');

        // // Lưu từng sản phẩm trong giỏ hàng vào bảng order_details
        // foreach ($cartItems as $item) {
        //     $product = Product::find($item->product_id);

        //     // Giảm số lượng sản phẩm trong kho
        //     if ($product->stock < $item->quantity) {
        //         return back()->with('error', 'Sản phẩm ' . $product->title . ' không đủ số lượng.');
        //     }

        //     $product->stock -= $item->quantity;
        //     $product->save();

        //     OrderDetail::create([
        //         'order_code' => $checkout_code,
        //         'product_id' => $item->product_id,
        //         'product_name' => $product->title,
        //         'product_price' => $item->price,
        //         'product_discount' => $discountCode,
        //         'product_fee' => $shippingFee,
        //         'product_sale_quantity' =>  $item->quantity,
        //     ]);
        // }

        // // Giảm số lượng mã giảm giá (nếu có)
        // if ($discountCode) {
        //     $discount = Discount::where('code', $discountCode)->first();
        //     if ($discount && $discount->usage_count > 0) {
        //         $discount->usage_count -= 1;
        //         $discount->save();
        //     }
        // }

        // // Xóa giỏ hàng sau khi hoàn tất đơn hàng
        // // Cart::where('user_id', auth()->id())->delete();
        // Session::forget('current_discount_code');
        // Session::forget('product_fee');

        return redirect()->back()->with('success', 'Tính phí vận chuyển thành công.');
    }

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
