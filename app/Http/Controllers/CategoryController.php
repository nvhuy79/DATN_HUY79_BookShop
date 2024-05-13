<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;
use App\Http\Requests\Category\Store_CategoryRequest;
use App\Http\Requests\Category\Update_CategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function __construct()
    {
        $this->middleware('admin.auth');
    }
    
    public function category()
    {
        return view('user/pages/category');
    }

    public function index(){
        $categories = Category::all();
        return view('admin/pages/category/index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin/pages/category/add',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Store_CategoryRequest $request)
    {
        try {
            Category::create($request->all());
            return redirect()->route('category.index')->with('success','Thêm mới thành công!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error','Thêm mới thất bại!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        $categories = Category::all();
        return view('admin/pages/category/edit',compact('category','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Update_CategoryRequest $request, Category $category)
    {
        try {
            $category->update($request->all());
            return redirect()->route('category.index')->with('success','Cập nhật thành công!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error','Cập nhật  thất bại!');
        }
        //dd($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
