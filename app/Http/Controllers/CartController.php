<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Category;
use App\Models\Discount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index(Product $product, Request $request)
    {
        $categories = Category::all();
        if (Auth::check()) {
            $userId = Auth::id();
            $carts = Cart::where('user_id', $userId)->get();
            $totalQuantity = $carts->sum('quantity');
            return view('user/pages/cart', compact('carts', 'categories', 'totalQuantity'));
        } else {
            return redirect()->route('login')->with('error', 'Bạn cần đăng nhập để xem giỏ hàng.');
        }
    }

    // public function check_discount(Request $request)
    // {
    //     $data = $request->all();
    //     $discount  = Discount::where('code', $data['discount_code'])->first();
    //     if ($discount) {
    //         $count_discount = $discount->count();
    //         if ($count_discount > 0) {
    //             $discount_session = Session::get('discount_code');
    //             if ($discount_session == true) {
    //                 $is_avaiable = 0;
    //                 if ($is_avaiable == 0) {
    //                     $count[]  = array(
    //                         'code' => $discount->code,
    //                         'discount_value' => $discount->discount_value,
    //                         'method' => $discount->method,
    //                     );
    //                     Session::put('discount', $count);
    //                 }
    //             } else {
    //                 $count[]  = array(
    //                     'code' => $discount->code,
    //                     'discount_value' => $discount->discount_value,
    //                     'method' => $discount->method,
    //                 );
    //                 Session::put('discount', $count);
    //             }
    //             Session::save();
    //             return redirect()->back()->with('success', 'Áp dụng mã giảm giá thành công');
    //         }
    //     }
    //     else{
    //         return redirect()->back()->with('error', 'Áp dụng mã giảm giá không thành công');
    //     }
    // }


    public function check_discount(Request $request)
    {
        $data = $request->all();
    
        if (empty($data['discount_code'])) {
            Session::forget('discount');
            Session::forget('current_discount_code');
            return redirect()->back()->with('success', 'Đã hủy mã giảm giá');
        }
    
        $discount = Discount::where('code', $data['discount_code'])->first();
    
        if ($discount) {
            // Xóa mã giảm giá hiện tại trong session nếu có
            Session::forget('discount');
    
            // Thêm mã giảm giá mới vào session
            $discount_data = [
                [
                    'code' => $discount->code,
                    'discount_value' => $discount->discount_value,
                    'method' => $discount->method,
                ]
            ];
            Session::put('discount', $discount_data);
            Session::put('current_discount_code', $discount->code);
            Session::save();
            return redirect()->back()->with('success', 'Áp dụng mã giảm giá thành công');
        } else {
            Session::forget('discount');
            Session::forget('current_discount_code');
            return redirect()->back()->with('error', 'Áp dụng mã giảm giá không thành công');
        }
    }
    


    
    public function CartOverlay(Product $product, Request $request)
    {
        if (Auth::check()) {
            $user_id = Auth::id();
            $carts = Cart::where('user_id', $user_id)->get();
            $totalPrice = $carts->sum('price');
            return view('user/layouts/page', compact('carts', 'totalPrice'));
        } else {
            return redirect()->route('login')->with('error', 'Bạn cần đăng nhập để xem giỏ hàng.');
        }
    }


    public function add(Product $product, Request $request)
    {
        $product = Product::find($request->id);
        $quantity = $request->quantity ? floor($request->quantity) : 1;
        $cartExist = Cart::where(['user_id' => Auth::user()->id, 'product_id' => $product->id])->first();
        if ($cartExist) {
            $cartExist->increment('quantity', $quantity);
            return redirect()->back()->with('success', 'Thêm giỏ hàng thành công!');
        } else {
            $data = [
                'product_id' => $product->id,
                'user_id' =>  Auth::user()->id,
                'quantity' => $quantity,
                'price' => $product->sale_price ? $product->sale_price : $product->price
            ];

            if (Cart::create($data)) {
                return redirect()->route('cart.index')->with('success', 'Thêm giỏ hàng thành công!');
            }
        }
        return redirect()->back()->with('error', 'Thêm giỏ hàng không thành công!');
    }

    public function update(Request $request, $product_id)
    {
        $user_id = Auth::id();
        $cartItem = Cart::where([
            'user_id' => $user_id,
            'product_id' => $product_id,
        ])->first();

        // Kiểm tra xem sản phẩm có tồn tại trong giỏ hàng không
        if ($cartItem) {
            $quantity = $request->input('quantity');
            // Kiểm tra số lượng mới có lớn hơn 0 không
            if ($quantity > 0) {
                $cartItem->update(['quantity' => $quantity]);
                return redirect()->route('cart.index')->with('success', 'Sản phẩm đã được cập nhật thành công.');
            } else {
                return redirect()->route('cart.index')->with('error', 'Số lượng sản phẩm phải lớn hơn 0.');
            }
        } else {
            return redirect()->route('cart.index')->with('error', 'Không tìm thấy sản phẩm trong giỏ hàng.');
        }
    }

    public function clear(Product $product)
    {
        return view('user/pages/cart');
    }

    public function delete($product_id)
    {
        $user_id = Auth()->id();
        Cart::where([
            'user_id' => $user_id,
            'product_id' => $product_id,
        ])->delete();
        return redirect()->back()->with('success', 'Sản phẩm đã được xóa thành công.');
    }
}
