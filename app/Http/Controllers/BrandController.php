<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
          return view('admin.brand.manage', ['brands' => Brand::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Brand::newBrand($request);
        return back()->with('message', 'New Brand Added Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        return view('admin.brand.edit', ['brand' => Brand::find($brand->id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Brand $brand)
    {
        Brand::updateBrand($request, $brand);
        return redirect('/brand')->with('message', 'Brand Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        Brand::deleteBrand($brand);
        return redirect('/brand')->with('message', 'Brand Deleted Successfully');
    }
}
