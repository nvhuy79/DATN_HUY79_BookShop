<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use App\Models\Discount;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use App\Models\ShippingInformation;
use Illuminate\Support\Facades\Session;

class PaymentController extends Controller
{
    public function vnpay_payment(Request $request)
    {
        $vnp_TmnCode = 'V940MKOG'; // Mã website tại VNPAY
        $vnp_HashSecret = '9F5969ONBD4BBXKNNRLN7R1QNWRVQ9TL'; // Chuỗi bí mật
        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = route('vnpay_return');
        $vnp_TxnRef = rand(100000, 999999); // Mã đơn hàng. Tạo ngẫu nhiên hoặc từ DB
        $vnp_OrderInfo = "Thanh toán đơn hàng #$vnp_TxnRef";
        $vnp_OrderType = 'billpayment';
        $vnp_Amount = $request->input('total_vnpay') * 100;
        $vnp_Locale = 'vn';
        $vnp_BankCode = $request->input('bank_code', '');
        $vnp_IpAddr = $request->ip();
        $vnp_ExpireDate = date('YmdHis', strtotime('+15 minutes'));

        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
            "vnp_ExpireDate" => $vnp_ExpireDate,
        );

        if ($vnp_BankCode) {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }

        ksort($inputData);
        $query = "";
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }
        $hashdata = ltrim($hashdata, '&'); // Loại bỏ ký tự '&' đầu tiên

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash = hash_hmac('sha512', $hashdata, $vnp_HashSecret);
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }

        return redirect($vnp_Url);
    }

    public function vnpay_return(Request $request)
    {
        $vnp_HashSecret = "9F5969ONBD4BBXKNNRLN7R1QNWRVQ9TL"; // Chuỗi bí mật
        $vnp_SecureHash = $request->input('vnp_SecureHash');
        $inputData = $request->all();
        unset($inputData['vnp_SecureHash']);
        ksort($inputData);
        $hashData = "";
        foreach ($inputData as $key => $value) {
            $hashData .= '&' . urlencode($key) . "=" . urlencode($value);
        }
        $hashData = ltrim($hashData, '&'); // Loại bỏ ký tự '&' đầu tiên

        $secureHash = hash_hmac('sha512', $hashData, $vnp_HashSecret);
        if ($secureHash == $vnp_SecureHash) {
            if ($request->input('vnp_ResponseCode') == '00') {


                // Lưu thông tin người nhận hàng vào bảng shipping_information
                $shippingName = Session::get('customer_name');
                $shippingEmail = Session::get('customer_email');
                $shippingPhone = Session::get('customer_phone');
                $shippingAddress = Session::get('customer_address');
                $cityId = Session::get('customer_city_id');
                $districtId = Session::get('customer_district_id');
                $wardId = Session::get('customer_ward_id');
                $paymentMethod = Session::get('customer_payment_method');
                $shippingFee = Session::get('shipping_fee');
                $note = Session::get('customer_note');

                $shippingInfo = ShippingInformation::create([
                    'shipping_name' => $shippingName,
                    'shipping_email' => $shippingEmail,
                    'shipping_phone' => $shippingPhone,
                    'shipping_address' => $shippingAddress,
                    'city_id' => $cityId,
                    'district_id' => $districtId,
                    'ward_id' => $wardId,
                    'shipping_method' => $paymentMethod,
                    'shipping_notes' => $note,
                ]);

                if (!$shippingInfo) {
                    return back()->with('error', 'Không thể lưu thông tin người nhận hàng.');
                }

                $checkout_code = substr(md5(microtime()), rand(0, 26), 5);
                $shippingInformationId = $shippingInfo->id;

                // Lưu thông tin đơn hàng vào bảng orders
                $order = Order::create([
                    'user_id' => auth()->id(),
                    'shipping_information_id' => $shippingInformationId,
                    'order_status' => 1, // Trạng thái đơn hàng mới
                    'order_code' => $checkout_code,
                    'shipping_fee' => $shippingFee,  // Lưu phí vận chuyển vào đơn hàng
                ]);

                // Lấy mã giảm giá từ session
                $discountCode = Session::get('current_discount_code', '');
                // Lấy thông tin giỏ hàng từ bảng carts
                $cartItems = Cart::where('user_id', auth()->id())->get();

                // Lưu từng sản phẩm trong giỏ hàng vào bảng order_details
                foreach ($cartItems as $item) {
                    $product = Product::find($item->product_id);

                    // Giảm số lượng sản phẩm trong kho
                    if ($product->stock < $item->quantity) {
                        return back()->with('error', 'Sản phẩm ' . $product->title . ' không đủ số lượng.');
                    }

                    $product->stock -= $item->quantity;
                    $product->save();

                    OrderDetail::create([
                        'order_code' => $checkout_code,
                        'product_id' => $item->product_id,
                        'product_name' => $product->title,
                        'product_price' => $item->price,
                        'product_discount' => $discountCode, // Mã giảm giá
                        'product_fee' => $shippingFee, // Phí vận chuyển
                        'product_sale_quantity' =>  $item->quantity, // Số lượng mua
                    ]);
                }

                // Giảm số lượng mã giảm giá (nếu có)
                if ($discountCode) {
                    $discount = Discount::where('code', $discountCode)->first();
                    if ($discount && $discount->usage_count > 0) {
                        $discount->usage_count -= 1;
                        $discount->save();
                    }
                }

                // Xóa giỏ hàng sau khi hoàn tất đơn hàng
                // Cart::where('user_id', auth()->id())->delete();
                Session::forget('current_discount_code');
                Session::forget('product_fee');
                Session::forget('customer_name');
                Session::forget('customer_email');
                Session::forget('customer_phone');
                Session::forget('customer_address');
                Session::forget('customer_city_id');
                Session::forget('customer_district_id');
                Session::forget('customer_ward_id');
                Session::forget('customer_payment_method');
                Session::forget('current_discount_code');

                // END Lưu thông tin người nhận hàng vào bảng shipping_information


                return redirect()->route('checkout')->with('success', 'Thanh toán thành công!');
            } else {
                // Thanh toán không thành công
                return redirect()->route('checkout')->with('error', 'Thanh toán không thành công! Mã lỗi: ' . $request->input('vnp_ResponseCode'));
            }
        } else {
            // Chữ ký không hợp lệ
            return redirect()->route('checkout')->with('error', 'Chữ ký không hợp lệ!');
        }
    }
}
