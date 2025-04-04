<?php

namespace App\Http\Controllers;

use App\Models\Admin\Category;
use App\Models\Admin\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{

   
    public function index() {

        // $products = Product::all();
        
        $products = Product::where('category_id',Auth::id())->orderBy('created_at','desc')->paginate(2);
        // $products = Product::paginate(5);
        return view('admin.products.index', compact('products'));
    }

    // public function index(Request $request)
    // { 
    //     $categoryId = $request->query('category_id');

    //     if ($categoryId) {
    //         $products = Product::where('category_id', $categoryId)->get();
    //     } else {
    //         $products = Product::all();
    //     }

    //     $categories = Category::all();

    //     return view('admin.products.index', compact('products', 'categories'));
    // }
    public function create(Request $request) {
       $categories = Category::all();
        return view('admin.products.create',compact('categories'));
    }
   
    public function store(Request $request) {
        $product = new Product;
        $product->name = $request->name;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->save();
        return redirect()->back();

    }
    public function show()  {
        //
    }
   
    public function edit($id) {
        $product = Product::find($id);
        $categories = Category::all();
        $category_name = Category::find($product->category_id);

        return view('admin.products.edit', compact('product','categories', 'category_name'));
    }
    public function update(Request $request,$id) {

        $request->validate([

            'name' => 'required',
            'quantity' => 'required|numeric',
            'price' => 'required|numeric',
            'description' => 'required',
            'category_id' => 'required',
        ]);
        $product = Product::find($id);


        $product->name = $request->name;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->save();

        return redirect('admin/products');
    }

    public function destroy(Product $product, $id)
    {
        Product::findOrFail($id)->delete();

        return redirect()->back();
    }
}
