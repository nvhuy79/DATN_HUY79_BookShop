<?php

namespace App\Http\Controllers;

use App\Models\ShippingInformation;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function detail_order($order_code) {
        // Lấy thông tin chi tiết đơn hàng
        $order_details = OrderDetail::where('order_code', $order_code)->get();
    
        // Lấy thông tin đơn hàng và lấy user_id, shipping_id từ đơn hàng đầu tiên
        $order = Order::where('order_code', $order_code)->first();
        $user_id = $order->user_id;
        $shipping_id = $order->shipping_information_id;
    
        // Lấy thông tin người dùng và thông tin giao hàng
        $user = User::find($user_id);
        $shipping = ShippingInformation::find($shipping_id);

        $order_details = OrderDetail::with('product')->where('order_code',$order_code)->get();
    
        return view('admin.pages.order.detail_order', compact('order_details', 'user', 'shipping','order_details'));
    }
    
    public function manage_order(){
        $orders = Order::orderBy('created_at','DESC')->paginate(8);
        return view('admin/pages/order/index',compact('orders'));
    }

    public function delete_order(){

    }
}
