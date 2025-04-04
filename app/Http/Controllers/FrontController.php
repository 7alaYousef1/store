<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin\Product;
class FrontController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    } 
    function index(){
        $products = Product::all();
        return view('home.index',compact('products'));
    }
}
