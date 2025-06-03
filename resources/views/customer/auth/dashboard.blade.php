@extends('website.master')

@section('body')
    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="index1.html">Customer<i class="ti-arrow-right"></i></a></li>
                            <li class="active"><a href="blog-single.html">Dashboard</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Shop Login -->
    <section class="shop login section">
        <div class="container">
            <div class="row">
               @include('customer.auth.includes.customer-nav')
                <div class="col-lg-9">
                    <h1 class="text-center">My dashboard</h1>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Login -->
@endsection
