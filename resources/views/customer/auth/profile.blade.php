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
                <div class="col-lg-10">
                    <div class="text-center">
                        <h1>My Profile</h1>
                        <p>An Exclusive customer of this website</p>
                    </div>
                    <div class="d-flex align-items-center my-5">
                        <div class="col-lg-4">
                            <h4>About Me</h4>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus, nulla.</p>
                        </div>
                        <div class="col-lg-4">
                            <img style="border-radius: 50%" src="https://sb.kaleidousercontent.com/67418/1000x1000/8fbbfc9296/cv-color-thumbnail.png" alt="">
                        </div>
                        <div class="col-lg-4">
                            <h4>Details</h4>
                            <h6 class="fw-bold">Name:</h6>
                            <p>MD Anisul Haque Siam</p>
                            <h6 class="fw-bold">Age:</h6>
                            <p>24</p>
                            <h6 class="fw-bold">Location:</h6>
                            <p>24/C, Amin Bazar, Savar, Dhaka</p>
                            <div class="d-flex gap-2 ">
                                <i class="fa-brands fa-facebook-f "></i>
                                <i class="fa-brands fa-twitter"></i>
                                <i class="fa-brands fa-instagram"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Login -->
@endsection
