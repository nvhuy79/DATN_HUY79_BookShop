<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $featureProducts = Product::where('featured',1)->get();
        return view('user/pages/home', compact('featureProducts'));
    }
}
