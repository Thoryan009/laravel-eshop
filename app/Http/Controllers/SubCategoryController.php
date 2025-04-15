<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.subCategory.manage', ['subCategories' => SubCategory::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.subCategory.create', ['categories' => Category::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        SubCategory::newSubCategory($request);
        return back()->with('message', 'New Sub Category Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(SubCategory $subCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SubCategory $subCategory)
    {

        return view('admin.subCategory.edit', [
            'categories' => Category::all(),
            'subCategory' => SubCategory::find($subCategory->id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SubCategory $subCategory)
    {

        SubCategory::updateSubCategory($request , $subCategory);
        return redirect('/subCategory')->with('message', 'SUb Category Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SubCategory $subCategory)
    {

        SubCategory::deleteSubCategory($subCategory);
        return redirect('/subCategory')->with('message', 'SUb Category Deleted Successfully');
    }
}
