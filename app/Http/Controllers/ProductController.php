<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\OtherImage;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\Unit;
use Illuminate\Http\Request;
use function Illuminate\Foundation\Configuration\respond;

class ProductController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.product.manage', ['products' => Product::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product.create',[
            'categories' => Category::all(),
            'subCategories' => SubCategory::all(),
            'brands' => Brand::all(),
            'units' => Unit::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */

    public function sendSubcategories()
    {
        $categoryId = $_GET['id'];
        $subCategories = SubCategory::where('category_id', $categoryId)->get();
        return response()->json($subCategories);
    }



    public function store(Request $request)
    {

          $id =  Product::newProduct($request);
          OtherImage::newOtherImage( $id , $request->file('other_image') );

          return back()->with('message', ' New Product Added successfully');

    }

//    public function store(Request $request)
//    {
//        // Check if the file is being received
//        if (!$request->hasFile('other_image')) {
//            return back()->with('error', 'No other images uploaded.');
//        }
//
//        $id = Product::newProduct($request); // Save Product
//
//        // Debugging Step: Check what is being received
//        dd($request->file('other_image'));
//
//        OtherImage::newOtherImage($id, $request->file('other_image'));
//
//        return back()->with('message', 'New Product Added successfully');
//    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('admin.product.detail', [
            'product' => Product::find($product->id),
             'otherImages' => OtherImage::where('product_id', $product->id)->get()
        ]);
    }




    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('admin.product.edit', [
            'product' => Product::find($product->id),
            'categories' => Category::all(),
            'subCategories' => SubCategory::all(),
            'brands' => Brand::all(),
            'units' => Unit::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        Product::updateProduct($request, $product->id);
        OtherImage::updateOtherImage($product->id, $request->file('other_images'));
         return redirect('/product')->with('message', 'Product updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        Product::deleteProduct($product->id);
        OtherImage::deleteOtherImage($product->id);
        return redirect('/product')->with('message', 'Product Deleted Successfully');
    }
}
