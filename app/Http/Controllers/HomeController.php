<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index()
   {
       return view('website.home.index', [
           'categories' => Category::all(),
           'products' => Product::all(),
           'top_viewed_products' => Product::orderBy('hit_count', 'desc')->take(3)->get()
       ]);
   }
}
