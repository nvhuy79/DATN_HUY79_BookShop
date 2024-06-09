<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
