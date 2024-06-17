<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Discount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $discounts = Discount::paginate(8);
        return view('admin.pages.discount.index', compact('discounts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $products = new Product();
        return view('admin.pages.discount.add', compact('categories', 'products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'title' => 'required|string|max:255',
            'code' => 'required|string|unique:discounts,code',
            'usage_count' => 'required|integer|min:0',
            'method' => 'required|in:1,2',
            'discount_value' => 'required|numeric|min:0',
        ];
    
        $messages = [
            'title.required' => 'Vui lòng nhập tên mã giảm giá.',
            'title.string' => 'Tên mã giảm giá phải là chuỗi.',
            'title.max' => 'Tên mã giảm giá không được vượt quá 255 ký tự.',
            'code.required' => 'Vui lòng nhập mã giảm giá.',
            'code.string' => 'Mã giảm giá phải là chuỗi.',
            'code.unique' => 'Mã giảm giá đã tồn tại.',
            'usage_count.required' => 'Vui lòng nhập số lượng mã giảm giá.',
            'usage_count.integer' => 'Số lượng mã giảm giá phải là số nguyên.',
            'usage_count.min' => 'Số lượng mã giảm giá không được nhỏ hơn 0.',
            'method.required' => 'Vui lòng chọn phương thức giảm giá.',
            'method.in' => 'Phương thức giảm giá không hợp lệ.',
            'discount_value.required' => 'Vui lòng nhập mức giảm giá.',
            'discount_value.numeric' => 'Mức giảm giá phải là số.',
            'discount_value.min' => 'Mức giảm giá không được nhỏ hơn 0.',
        ];
    
        $validator = Validator::make($request->all(), $rules, $messages);
    
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
    
        // Create a new Discount instance
        $discount = new Discount();
        $discount->title = $request->input('title');
        $discount->code = $request->input('code');
        $discount->usage_count = $request->input('usage_count');
        $discount->method = $request->input('method');
        $discount->discount_value = $request->input('discount_value');
    
        // Save the discount
        $discount->save();
    
        // Redirect back with success message
        return redirect()->route('discount.index')->with('success', 'Mã giảm giá đã được thêm mới thành công.');
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
        $discount = Discount::findOrFail($id);
        $discount->delete();

        return redirect()->route('discount.index')->with('success', 'Mã giảm giá đã được xóa thành công.');
    }


    public function search(Request $request)
    {
        $query = $request->input('query');

        // Tìm kiếm sản phẩm theo tiêu đề hoặc mô tả
        $discounts = Discount::where('title', 'LIKE', "%{$query}%")
            ->orWhere('code', 'LIKE', "%{$query}%")
            ->paginate(8);

        return view('admin.pages.discount.index', compact('discounts'));
    }

}
