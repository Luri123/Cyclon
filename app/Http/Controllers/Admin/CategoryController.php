<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\CategoryFormRequest;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {   $category=Category::all();
        return view('admin.category.index',compact('category'));
    }

    public function create()
    {
        return view('admin.category.create');
    }


    public function edit($category_id)
    {   $category=Category::find($category_id);
        return view('admin.category.edit',compact('category'));
    }


    public function update(CategoryFormRequest $request, $category_id)
    {   $data = $request->validated();

        $category =Category::find($category_id);
        $category->name = $data['name'];
        $category->slug = Str::slug($data['name']);

        $category->status = $request->has('status');

        $category->update();

        return redirect('admin/category')->with('message', 'Category updated succesfully');
    }

    public function store(CategoryFormRequest $request)
    {
        $data = $request->validated();

        $category = new Category;
        $category->name = $data['name'];
        $category->slug = Str::slug($data['name']);

       
        $category->status = $request->has('status');

        $category->save();

        return redirect('admin/category')->with('message', 'Category added succesfully');
    }
}
