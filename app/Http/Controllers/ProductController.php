<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\ImageProduct;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Product\Store_ProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin/pages/product/add',compact('categories'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Store_ProductRequest $request)
    {

        // Upload file
        // $fileName = $request->product_image->getClientOriginalName();
        // $request->product_image->storeAs('public/admin/images',$fileName);
        // $request->merge(['image'=>$fileName]);

        // try {
        //    $product =  Product::create($request->all());
        //     // return redirect()->route('product.index')->with('success','Thêm mới thành công!');
        //     if ($product && $request->hasFile('desc_image')) {
        //        foreach ($request-> desc_image as $key => $value) {
        //         $fileName = $value->getClientOriginalName();
        //         $value >storeAs('public/admin/images',$fileName);

        //         ImageProduct::create([
        //             'product_id'=>$product->id,
        //             'image'=>$fileName
        //         ]);
        //        }
        //     }
            
        // } catch (\Throwable $th) {
        //     return redirect()->back()->with('error','Thêm mới thất bại!');
        // }

        if ($request->hasFile('product_image')) {
            $fileName = time() . '_' . $request->product_image->getClientOriginalName();
            $request->product_image->storeAs('public/admin/images', $fileName);
            $request->merge(['image' => $fileName]);
        }
    
        try {
            // Tạo sản phẩm mới
            $product = Product::create($request->all());
    
            // Nếu sản phẩm tạo thành công và có ảnh mô tả
            if ($product && $request->hasFile('desc_image')) {
                foreach ($request->file('desc_image') as $key => $value) {
                    $descFileName = time() . '_' . $value->getClientOriginalName();
                    $value->storeAs('public/admin/images', $descFileName);
    
                    // Tạo bản ghi cho ảnh mô tả
                    ImageProduct::create([
                        'product_id' => $product->id,
                        'image' => $descFileName
                    ]);
                }
            }
    
            // Chuyển hướng hoặc trả về view tương ứng với thông báo thành công
            return redirect()->route('product.index')->with('success', 'Thêm mới thành công!');
        } catch (\Exception $e) {
            // Xử lý lỗi nếu có
            return redirect()->back()->with('error', 'Đã xảy ra lỗi khi thêm mới sản phẩm: ' . $e->getMessage());
        }
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
