<?php

namespace App\Http\Controllers;

use App\Models\ShippingInformation;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Discount;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function detail_order($order_code)
    {
        // Lấy thông tin chi tiết đơn hàng
        $order_details = OrderDetail::with('product')->where('order_code', $order_code)->get();

        // Lấy thông tin đơn hàng và lấy user_id, shipping_id từ đơn hàng đầu tiên
        $order = Order::where('order_code', $order_code)->first();
        $user_id = $order->user_id;
        $shipping_id = $order->shipping_information_id;

        // Lấy thông tin người dùng và thông tin giao hàng
        $user = User::find($user_id);
        $shipping = ShippingInformation::find($shipping_id);

        // Tính tổng tiền và số tiền giảm giá
        $total_price = 0;
        $discount = 0;
        foreach ($order_details as $details) {
            $subtotal_price = $details->product_price * $details->product_sale_quantity;
            $total_price += $subtotal_price;

            // Lấy mã giảm giá từ chi tiết sản phẩm

        }
        $discount_code = $details->product_discount;
        if ($discount_code) {
            $discount_data = Discount::where('code', $discount_code)->first();
            if ($discount_data) {
                if ($discount_data->method == 1) { // Giảm giá theo số tiền cố định
                    $discount += $discount_data->discount_value;
                } elseif ($discount_data->method == 2) { // Giảm giá theo phần trăm
                    $discount += ($discount_data->discount_value / 100) * $subtotal_price;
                }
            }
        }

        $total_price_after_discount = $total_price - $discount;

        return view('admin.pages.order.detail_order', compact('order_details', 'user', 'shipping', 'total_price', 'discount', 'total_price_after_discount'));
    }

    public function manage_order()
    {
        $orders = Order::orderBy('created_at', 'DESC')->paginate(8);
        return view('admin.pages.order.index', compact('orders'));
    }

    public function delete_order()
    {
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $orders = Order::where('order_code', 'LIKE', "%{$query}%")
            ->orWhere('user_id', 'LIKE', "%{$query}%")
            ->paginate(8);

        return view('admin.pages.order.index', compact('orders'));
    }
}
