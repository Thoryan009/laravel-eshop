<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index($id)
    {
        Product::hitIncreament($id);
        return view('website.product.detail', [
            'product' => Product::find($id),
        ]);
    }
}
