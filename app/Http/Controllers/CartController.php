<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Cart;
use Illuminate\Http\Request;
use Livewire\Attributes\Reactive;

class CartController extends Controller
{
    public function index()
    {
        return view('website.cart.index', ['cart_products' => Cart::content()]);
    }

    public function addToCart(Request $request, $id)
    {
        $this->product = Product::find($id);
        Cart::add([
            'id' =>  $this->product->id,
            'name' => $this->product->name,
            'qty' => $request->qty,
            'price' => $this->product->selling_price,
            'options' => [
                'image' => $this->product->image,
                'code' => $this->product->code,
            ]
        ]);
        return redirect('/product-cart');
    }

    public function directAddToCart($id)
    {
        $this->product = Product::find($id);
        Cart::add([
            'id' => $this->product->id,
            'name' => $this->product->name,
            'qty' => 1,
            'price' => $this->product->selling_price,
            'options' => [
                'image' => $this->product->image,
                'code' => $this->product->code,
            ]
        ]);

        return redirect('/product-cart');
        // return response()->json(['success' => true, 'message' => 'done', 'data' => null]);
    }


    public function removeCart($rowId)
    {

        Cart::remove($rowId);
        return back()->with('message', 'Cart Item deleted successfully');
    }

    public function updateCart(Request $request)
    {


        foreach ($request->qty as $item) {
            Cart::update($item['rowId'], $item['qty']); // Will update the quantity
        }
        return back()->with('message', 'Cart Item Update successfully');
    }
}
