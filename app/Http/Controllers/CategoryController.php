<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.category.create');
    }

    public function manage()
    {

        return view('admin.category.manage', ['categories' => Category::all()]);
    }

    public function store(Request $request)
    {
        Category::newCategory($request);
        return back()->with('message', 'New Category Added successfully');
    }

    public function edit($id)
    {

        return view('admin.category.edit', ['category' => Category::find($id)]);
    }

    public function update(Request $request, $id)
    {
        Category::updateCategory($request, $id);
        return redirect('/category-manage')->with('message', ' Category Updated successfully');
    }

    public function delete( $id)
    {
        Category::deleteCategory($id);
        return redirect('/category-manage')->with('message', ' Category Deleted successfully');
    }








}
