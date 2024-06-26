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

    public function success(){
        $categories = Category::all();
        if (Auth::check()) {
            $userId = Auth::id();
            $carts = Cart::where('user_id', $userId)->get();
            $totalQuantity = $carts->sum('quantity');
            return view('user/pages/success', compact('carts', 'categories', 'totalQuantity'));
        } else {
            return redirect()->route('login')->with('error', 'Bạn cần đăng nhập để xem giỏ hàng.');
        }
    }

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
            // Kiểm tra nếu mã giảm giá đã hết lượt sử dụng
            if ($discount->usage_count <= 0) {
                Session::forget('discount');
                Session::forget('current_discount_code');
                return redirect()->back()->with('error', 'Mã giảm giá đã hết lượt sử dụng.');
            }
    
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
            return redirect()->back()->with('error', 'Mã giảm giá không tồn tại.');
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
        if (!$product) {
            return redirect()->back()->with('error', 'Sản phẩm không tồn tại!');
        }

        $quantity = $request->quantity ? floor($request->quantity) : 1;

        if ($product->stock < $quantity) {
            return redirect()->back()->with('error', 'Xin lỗi! Chúng tôi chỉ còn ' . $product->stock . ' sản phẩm.');
        }

        $cartExist = Cart::where(['user_id' => Auth::user()->id, 'product_id' => $product->id])->first();

        if ($cartExist) {
            $newQuantity = $cartExist->quantity + $quantity;

            if ($product->stock < $newQuantity) {
                return redirect()->back()->with('error', 'Số sản phẩm trong giỏ hàng đã vượt quá số lượng còn lại của sản phẩm!');
            }
            $cartExist->update(['quantity' => $newQuantity]);
            return redirect()->route('cart.index')->with('success', 'Thêm giỏ hàng thành công!');
        } else {
            $data = [
                'product_id' => $product->id,
                'user_id' => Auth::user()->id,
                'quantity' => $quantity,
                'price' => $product->sale_price ? $product->sale_price : $product->price
            ];

            if (Cart::create($data)) {

                return redirect()->back()->with('success', 'Thêm giỏ hàng thành công!');
            }
        }
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

            // Lấy thông tin sản phẩm từ ID để kiểm tra số lượng tồn kho
            $product = Product::find($product_id);

            if (!$product) {
                return redirect()->route('cart.index')->with('error', 'Sản phẩm không tồn tại.');
            }

            // Kiểm tra số lượng mới có lớn hơn 0 không
            if ($quantity > 0) {
                // Kiểm tra số lượng tồn kho của sản phẩm
                if ($product->stock < $quantity) {
                    return redirect()->route('cart.index')->with('error', 'Sản phẩm "' . $product->title . '" vượt quá số lượng tồn kho. Số lượng tồn kho hiện tại: ' . $product->stock);
                }

                $cartItem->update(['quantity' => $quantity]);
                return redirect()->route('cart.index')->with('success', 'Sản phẩm ' . $product->name . ' đã được cập nhật thành công.');
            } else {
                // Xóa sản phẩm khỏi giỏ hàng nếu số lượng mới là 0
                $cartItem->delete();
                return redirect()->route('cart.index')->with('success', 'Sản phẩm đã được xóa khỏi giỏ hàng.');
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
