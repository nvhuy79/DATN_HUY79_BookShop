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

    public function check_discount(Request $request)
    {
        $data = $request->all();
        $discount  = Discount::where('code', $data['discount_code'])->first();
        if ($discount) {
            $count_discount = $discount->count();
            if ($count_discount > 0) {
                $discount_session = Session::get('discount_code');
                if ($discount_session == true) {
                    $is_avaiable = 0;
                    if ($is_avaiable == 0) {
                        $count[]  = array(
                            'code' => $discount->code,
                            'discount_value' => $discount->discount_value,
                            'method' => $discount->method,
                        );
                        Session::put('discount', $count);
                    }
                } else {
                    $count[]  = array(
                        'code' => $discount->code,
                        'discount_value' => $discount->discount_value,
                        'method' => $discount->method,
                    );
                    Session::put('discount', $count);
                }
                Session::save();
                return redirect()->back()->with('success', 'Áp dụng mã giảm giá thành công');
            }
        }
        else{
            return redirect()->back()->with('error', 'Áp dụng mã giảm giá không thành công');
        }
    }

    // public function check_discount(Request $request)
    // {
    //     $data = $request->all();
    //     $discount = Discount::where('code', $data['discount_code'])->first();
    
    //     if ($discount) {
    //         // Check if the discount code still has usage left
    //         if ($discount->usage_count > 0) {
    //             $discount_session = Session::get('discount', []);
    
    //             // Check if the discount code has already been applied
    //             $is_applied = collect($discount_session)->contains('code', $discount->code);
    
    //             if (!$is_applied) {
    //                 // Add discount code information to the session
    //                 $discount_session[] = [
    //                     'code' => $discount->code,
    //                     'usage_count' => $discount->usage_count,
    //                     'method' => $discount->method,
    //                 ];
    
    //                 // Save the 'discount' session
    //                 Session::put('discount', $discount_session);
    
    //                 return redirect()->back()->with('success', 'Áp dụng mã giảm giá thành công');
    //             } else {
    //                 return redirect()->back()->with('error', 'Mã giảm giá đã được áp dụng trước đó');
    //             }
    //         } else {
    //             return redirect()->back()->with('error', 'Mã giảm giá đã hết lượt sử dụng');
    //         }
    //     } else {
    //         return redirect()->back()->with('error', 'Mã giảm giá không hợp lệ');
    //     }
    // }
    
    

    

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
