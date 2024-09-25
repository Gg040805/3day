<?php

namespace App\Http\Controllers;
use App\Models\product;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function homepage()
    {
        $products=product::all();
        return view("home",compact("products"));
    }
    public function showpd($id){
        $product=product::find($id);
        return view("showproduct",compact("product"));
    }
}
