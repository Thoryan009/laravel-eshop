@extends('website.master')

@section('body')

    <div class="container">
        <div class="row my-3">
            <div class="col-md-6">
                <img style="height: 500px" src="{{asset($product->image)}}" alt="#">
                <div class="row mx-0 my-2 gap-3">
                    @foreach($product->otherImages as $otherImage)
                    <img style="height: 150px" src="{{asset($otherImage->image)}}" alt="#">
                    @endforeach
                </div>
            </div>
            <div class="col-md-6 my-4 ">
                <form action="{{route('cart.add', ['id' => $product->id])}}" method="post">
                    @csrf
                    <h2><a href="product-details.html">{{$product->name}}</a></h2>
                    <div class="product-price my-4">
                        <span class=" text-4xl ">BDT {{$product->selling_price}}</span>
                        <p class=" text-2xl "><del> BDT {{$product->regular_price}}</del></p>
                        <p>{{$product->short_description}}</p>
                    </div>


                        <p class="font-bold mb-4">Quantity: <input type="number" name="qty" value="1"></p>
                        <button type="submit" class="p-2  rounded-2xl text-red-500 ">Add to Cart</button>
                </form>

            </div>
        </div>

        <div class="row my-3">
            {!! $product->long_description !!}
        </div>
    </div>
@endsection
