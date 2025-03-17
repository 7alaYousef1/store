<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class FrontController extends Controller
{
    function index(){
        $products = Product::all();
        return view('home.index',compact('products'));
    }
}
