<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('admin.categories.index',compact('categories'));
    }
        public function create(Request $request) {
       
        return view('admin.categories.create');
    }

    public function store(Request $request) {

        $request->validate([
            'name' => 'required',
        ]);

        $categories = new Category;
        $categories->name = $request->name;

        $categories->save();
        return redirect()->back();

    }
   
    public function edit($id) {
        $category = Category::find($id);
       
        return view('admin.categories.edit', compact('category'));
    }
    public function update(Request $request,$id) {

        $request->validate([

            'name' => 'required',
        ]);
        $category = Category::findOrFail($id);


        $category->name = $request->name;
       

        $category->save();
        return redirect('admin/categories');
    }

    public function destroy(Category $category, $id)
    {
        Category::findOrFail($id)->delete();

        return redirect()->back();
    }
}


