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
                            <li class="active"><a href="blog-single.html">Cart</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->
<p class="text-center text-success">{{session('message')}}</p>
    <!-- Shopping Cart -->
    <div class="shopping-cart section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Shopping Summery -->
                    <form action="{{route('cart.update')}}" method="post">
                        @csrf
                          <table class="table shopping-summery">
                        <thead>
                        <tr class="main-hading">
                            <th>PRODUCT</th>
                            <th>NAME</th>
                            <th class="text-center">UNIT PRICE</th>
                            <th class="text-center">QUANTITY</th>
                            <th class="text-center">TOTAL</th>
                            <th class="text-center"><i class="ti-trash remove-icon"></i></th>
                        </tr>
                        </thead>



                        <tbody>
                    @php($sum=0)
                   @foreach($cart_products as $key => $cart_product)

                       <tr>
                           <td class="image" data-title="No"><img src="{{asset($cart_product->options->image)}}" alt="#"></td>
                           <td class="product-des" data-title="Description">
                               <p class="product-name"><a href="#">{{$cart_product->name}}</a></p>
                               <p class="product-des">Maboriosam in a tonto nesciung eget  distingy magndapibus.</p>
                           </td>
                           <td class="price" data-title="Price"><span>BDT {{$cart_product->price}} </span></td>
                           <td class="qty" data-title="Qty"><!-- Input Order -->
                               <div class="input-group">
                                   <div class="button minus">
                                       <button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant{{$key}}">
                                           <i class="ti-minus"></i>
                                       </button>
                                   </div>
                                   <input name="qty[{{$key}}][rowId]" value="{{$cart_product->rowId}}" type="hidden">
                                   <input type="number" name="qty[{{$key}}][qty]" class="input-number"  data-min="1" data-max="100" value="{{$cart_product->qty}}">
                                   <div class="button plus">
                                       <button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant{{$key}}">
                                           <i class="ti-plus"></i>
                                       </button>
                                   </div>
                               </div>
                               <!--/ End Input Order -->
                           </td>
                           <td class="total-amount" data-title="Total"><span>{{ $cart_product->price * $cart_product->qty }}</span></td>


                           <td class="action" data-title="Remove"><a href="{{route('cart.remove', ['rowId' => $cart_product->rowId])}}" onclick="return confirm('Are you sure to delete this?')" ><i class="ti-trash remove-icon"></i></a></td>

                       </tr>

                       @php($sum = $sum + ($cart_product->price * $cart_product->qty))
                   @endforeach

                        </tbody>

                    </table>
                    <div class="text-end">
                        <button class="btn btn-primary" type="submit">update cart</button>
                    </div>
                    </form>

                    <!--/ End Shopping Summery -->
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12">
                    <!-- Total Amount -->
                    <div class="total-amount">
                        <div class="row">
                            <div class="col-lg-8 col-md-5 col-12">
                                <div class="left">
                                    <div class="coupon">
                                        <form action="#" target="_blank">
                                            <input name="Coupon" placeholder="Enter Your Coupon">
                                            <button class="btn">Apply</button>
                                        </form>
                                    </div>
                                    <div class="checkbox">
                                        <label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox"> Shipping (+10$)</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-7 col-12 ">
                                <div class="right">
                                    <ul class="mt-3">
                                        <li>Cart Subtotal<span>BDT {{number_format($sum)}}</span></li>
                                        <li>Shipping<span>BDT @if($sum >= 2000) {{$shipping = 0}} @else {{$shipping = 100}} @endif</span></li>
                                        <li>Tax Amount (15%)
                                            @php($tax = round(($sum * 0.15)) )
                                            <span>BDT {{number_format($tax) }}</span>
                                        </li>
                                        <li>You Save<span>$20.00</span></li>
                                        <li class="last">Total Payable
                                            @php($totalPay = $sum + $tax + $shipping)
                                            <span>BDT {{number_format($totalPay)}}</span>
                                        </li>
                                    </ul>
                                    <div class="button5">
                                        <a href="{{route('customer.checkout.billing-info')}}" class="btn">Checkout</a>
                                        <a href="#" class="btn">Continue shopping</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ End Total Amount -->
                </div>
            </div>
        </div>
    </div>
    <!--/ End Shopping Cart -->



    @include('website.includes')



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
                </div>
                <div class="modal-body">
                    <div class="row no-gutters">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <!-- Product Slider -->
                            <div class="product-gallery">
                                <div class="quickview-slider-active">
                                    <div class="single-slider">
                                        <img src="images/modal1.html" alt="#">
                                    </div>
                                    <div class="single-slider">
                                        <img src="images/modal2.html" alt="#">
                                    </div>
                                    <div class="single-slider">
                                        <img src="images/modal3.html" alt="#">
                                    </div>
                                    <div class="single-slider">
                                        <img src="images/modal4.html" alt="#">
                                    </div>
                                </div>
                            </div>
                            <!-- End Product slider -->
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="quickview-content">
                                <h2>Flared Shift Dress</h2>
                                <div class="quickview-ratting-review">
                                    <div class="quickview-ratting-wrap">
                                        <div class="quickview-ratting">
                                            <i class="yellow fa fa-star"></i>
                                            <i class="yellow fa fa-star"></i>
                                            <i class="yellow fa fa-star"></i>
                                            <i class="yellow fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <a href="#"> (1 customer review)</a>
                                    </div>
                                    <div class="quickview-stock">
                                        <span><i class="fa fa-check-circle-o"></i> in stock</span>
                                    </div>
                                </div>
                                <h3>$29.00</h3>
                                <div class="quickview-peragraph">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam.</p>
                                </div>
                                <div class="size">
                                    <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <h5 class="title">Size</h5>
                                            <select>
                                                <option selected="selected">s</option>
                                                <option>m</option>
                                                <option>l</option>
                                                <option>xl</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <h5 class="title">Color</h5>
                                            <select>
                                                <option selected="selected">orange</option>
                                                <option>purple</option>
                                                <option>black</option>
                                                <option>pink</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="quantity">
                                    <!-- Input Order -->
                                    <div class="input-group">
                                        <div class="button minus">
                                            <button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                                <i class="ti-minus"></i>
                                            </button>
                                        </div>
                                        <input type="text" name="quant[1]" class="input-number"  data-min="1" data-max="1000" value="1">
                                        <div class="button plus">
                                            <button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
                                                <i class="ti-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!--/ End Input Order -->
                                </div>
                                <div class="add-to-cart">
                                    <a href="#" class="btn">Add to cart</a>
                                    <a href="#" class="btn min"><i class="ti-heart"></i></a>
                                    <a href="#" class="btn min"><i class="fa fa-compress"></i></a>
                                </div>
                                <div class="default-social">
                                    <h4 class="share-now">Share:</h4>
                                    <ul>
                                        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a class="youtube" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                        <li><a class="dribbble" href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal end -->


@endsection
