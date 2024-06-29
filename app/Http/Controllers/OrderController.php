<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use Dompdf\Options;
use App\Models\User;
use App\Models\Order;
use App\Models\Discount;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use App\Models\ShippingInformation;
use Illuminate\Support\Facades\View;

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
            $product_fee = $details->product_fee;
        }
        $total_price_after_discount = $total_price + $product_fee - $discount;

        return view('admin.pages.order.detail_order', compact('order_details', 'order', 'user', 'shipping', 'total_price', 'discount', 'total_price_after_discount', 'product_fee'));
    }

    public function manage_order()
    {
        $orders = Order::orderBy('created_at', 'DESC')->paginate(8);
        return view('admin.pages.order.index', compact('orders'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $orders = Order::where('order_code', 'LIKE', "%{$query}%")
            ->orWhere('user_id', 'LIKE', "%{$query}%")
            ->paginate(8);

        return view('admin.pages.order.index', compact('orders'));
    }

    public function print_order($order_code)
    {
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->print_order_convert($order_code));
        return $pdf->stream();


        // // Test
        // $order_details = OrderDetail::with('product')->where('order_code', $order_code)->get();
        // $order = Order::where('order_code', $order_code)->first();
        // $user_id = $order->user_id;
        // $shipping_id = $order->shipping_information_id;
        // $user = User::find($user_id);
        // $shipping = ShippingInformation::find($shipping_id);

        // $total_price = 0;
        // $discount = 0;
        // foreach ($order_details as $details) {
        //     $subtotal_price = $details->product_price * $details->product_sale_quantity;
        //     $total_price += $subtotal_price;
        //     $discount_code = $details->product_discount;
        //     $product_fee = $details->product_fee;

        //     if ($discount_code) {
        //         $discount_data = Discount::where('code', $discount_code)->first();
        //         if ($discount_data) {
        //             if ($discount_data->method == 1) { // Giảm giá theo số tiền cố định
        //                 $discount += $discount_data->discount_value;
        //             } elseif ($discount_data->method == 2) { // Giảm giá theo phần trăm
        //                 $discount += ($discount_data->discount_value / 100) * $subtotal_price;
        //             }
        //         }
        //     }
        // }
        // $total_price_after_discount = $total_price + $product_fee - $discount;
        // return view('admin/pages.order.print_order',compact('order_details', 'order', 'user', 'shipping','product_fee','total_price','discount','total_price_after_discount'));
    }

    public function print_order_convert($order_code)
    {
        // Lấy thông tin chi tiết đơn hàng
        $order_details = OrderDetail::with('product')->where('order_code', $order_code)->get();
        $order = Order::where('order_code', $order_code)->first();
        $user_id = $order->user_id;
        $shipping_id = $order->shipping_information_id;
        $user = User::find($user_id);
        $shipping = ShippingInformation::find($shipping_id);

        // Tính tổng phí vận chuyển từ các chi tiết đơn hàng
       

        // Tính tổng tiền và số tiền giảm giá
        $total_price = 0;
        $discount = 0;
        foreach ($order_details as $details) {
            $subtotal_price = $details->product_price * $details->product_sale_quantity;
            $total_price += $subtotal_price;
            $discount_code = $details->product_discount;
            $product_fee = $details->product_fee;

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
        }
        $total_price_after_discount = $total_price + $product_fee - $discount;
        // Tạo các tùy chọn cho Dompdf
        $pdfOptions = new Options();
        $pdfOptions->set('isHtml5ParserEnabled', true); // Cho phép sử dụng HTML5 trong Dompdf
        $pdfOptions->set('isRemoteEnabled', true); // Cho phép tải tài nguyên từ các URL
        $pdfOptions->set('defaultFont', 'DejaVu Sans'); // Sử dụng font DejaVu Sans để hỗ trợ tiếng Việt

        // Khởi tạo đối tượng Dompdf với các tùy chọn
        $dompdf = new Dompdf($pdfOptions);

        // Render HTML từ view blade
        $html = View::make('admin.pages.order.print_order', compact('order_details', 'order', 'user', 'shipping','product_fee','total_price','discount','total_price_after_discount'))->render();

        // Tải HTML vào Dompdf
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        // Trả về tài liệu PDF dưới dạng stream để hiển thị trực tiếp
        return $dompdf->stream('order_' . $order_code . '.pdf');
    }
}
