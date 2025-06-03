@extends('website.master')

@section('body')

    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="index1.html">Home<i class="ti-arrow-right"></i></a></li>
                            <li class="active"><a href="blog-single.html">Checkout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Start Checkout -->
    <section class="shop checkout section">
        <div class="container">
            <div class="row">
             
                <div class="col-lg-6 col-12">
                    <div class="checkout-form">
                        <h2>Make Your Checkout Here</h2>
                        <p>Please register in order to checkout more quickly</p>
                        <!-- Form -->
                        <form class="form" method="post" action="{{route('checkout.new-order')}}">
                            @csrf
                           <div class="row">
                               <div class=" col-12">
                                   <div class="form-group">
                                       <label>Delivery Address<span>*</span></label>
                                       <input type="text" name="delivery_address" placeholder="Enter your Delivery Addess" required="required">
                                   </div>
                               </div>
                           </div>
                            <!-- Order Widget -->
                            <div class="single-widget">
                                <h2>Payments</h2>
                                <div class="content">
                                    <div class="d-flex flex-col ml-4">

                                        <label class="" ><input name="payment_method"  value="cash" type="radio"> Cash On Delivery</label>
                                        <label class="" ><input name="payment_method"  value="paypal" type="radio"> PayPal</label>
                                       
                                    </div>
                                </div>
                            </div>
                            <!--/ End Order Widget -->
                            <button class="btn" type="submit">   proceed to checkout</button>
                        </form>
                        <!--/ End Form -->
                    </div>
                </div>

                <div class="col-lg-6 col-12">
                    <div class="order-details">
                        <!-- Order Widget -->
                        <p class="text-center">total: {{Cart::total()}}</p>
                        <p class="text-center">tax: {{Cart::tax()}}</p>
                        <p class="text-center">subtotal: {{Cart::subtotal()}}</p>
                        <div class="single-widget">
                            <h2>CART  TOTALS</h2>

                            <div class="content">
                                <ul>
                                    @php($sum = 0)
                                    @foreach(Cart::content() as $item)
                                    <li>{{$item->name}} ( {{$item->price}} * {{$item->qty}})<span>BDT {{$item->price * $item->qty}}</span></li>
                                        @php($sum = $sum + ($item->price * $item->qty))
                                    @endforeach
                                    <li>Sub Total<span>BDT {{$sum }}</span></li>
                                    <li>(+) Shipping
                                        @if($sum >= 2000)
                                        <span>BDT {{$shipping = 0}}</span>
                                        @else
                                            <span>BDT {{$shipping = 100}}</span>
                                            @endif
                                    </li>
                                    <li>Tax (15%)<span>BDT {{$tax = $sum * 0.15 }}</span></li>
                                    <li class="last">Total<span>BDT {{$totalPayable = $sum + $shipping + $tax }}</span></li>
                                </ul>
                            </div>
                        </div>
                        <!--/ End Order Widget -->
                            <?php
                            Session::put('order_total', $totalPayable);
                            Session::put('tax_total', $tax);
                            Session::put('shipping_total', $shipping);
                            ?>
                        <!-- Payment Method Widget -->
                        <div class="single-widget payement">
                            <div class="content">
                                {{-- <img src="images/payment-method.png" alt="#"> --}}
                            </div>
                        </div>
                        <!--/ End Payment Method Widget -->
                        <!-- Button Widget -->
                        <div class="single-widget get-button">
                            <div class="content">
                                <div class="button">
                                    {{-- <button type="submit" class="btn"></button> --}}
                                </div>
                            </div>
                        </div>
                        <!--/ End Button Widget -->
                    </div>
                </div>
            

            </div>
        </div>
    </section>
    <!--/ End Checkout -->

    @include('website.includes')
@endsection
