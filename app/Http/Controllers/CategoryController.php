<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

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
        return view('admin/pages/category/add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
