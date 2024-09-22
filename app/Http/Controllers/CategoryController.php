<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    
    public function index()
    {
        $categories = Category::get();
        return view('admin/categories',compact('categories'));

    }

    
    public function create()
    {
        $categories=Category::select('id','category_name')->get();
        return view('admin/add_category',compact('categories'));
    }

    
    public function store(Request $request)
    {
        $data=$request->validate([
               
            'category_name'=>'required|string',
        ]);
          Category::create($data);
          return redirect()->route('categories.index');
    }

    
    public function show(string $id)
    {
       
    }

    
    public function edit(string $id)
    {
        $category=Category::findOrFail($id);
        return view('admin/edit_category',compact('category'));
        
    }

    
    public function update(Request $request, string $id)
    {
        $data=$request->validate([
               
            'category_name'=>'required|string',
        ]);
          Category::where('id',$id)->update($data);
          return redirect()->route('categories.index');
    }

   
    public function destroy(string $id)
    {
        Category::where('id',$id)->forceDelete($id);
        return redirect()->route('categories.index');
    }

}
