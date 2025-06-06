<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from wpthemesgrid.com/themes/eshop/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Mar 2025 06:11:49 GMT -->

<head>
    <!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='copyright' content=''>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @vite('resources/css/app.css')


    <!-- Title Tag  -->
    <title>Eshop - eCommerce HTML5 Template.</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('/') }}frondend_assets/images/favicon.png">
    <!-- Web Font -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;display=swap"
        rel="stylesheet">


        {{-- font awesome  --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- StyleSheet -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('/') }}frondend_assets/css/bootstrap.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('/') }}frondend_assets/css/magnific-popup.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('/') }}frondend_assets/css/font-awesome.css">
    <!-- Fancybox -->
    <link rel="stylesheet" href="{{ asset('/') }}frondend_assets/css/jquery.fancybox.min.css">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="{{ asset('/') }}frondend_assets/css/themify-icons.css">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{ asset('/') }}frondend_assets/css/niceselect.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('/') }}frondend_assets/css/animate.css">
    <!-- Flex Slider CSS -->
    <link rel="stylesheet" href="{{ asset('/') }}frondend_assets/css/flex-slider.min.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('/') }}frondend_assets/css/owl-carousel.css">
    <!-- Slicknav -->
    <link rel="stylesheet" href="{{ asset('/') }}frondend_assets/css/slicknav.min.css">

    <!-- Eshop StyleSheet -->
    <link rel="stylesheet" href="{{ asset('/') }}frondend_assets/css/reset.css">
    <link rel="stylesheet" href="{{ asset('/') }}frondend_assets/css/style.css">
    <link rel="stylesheet" href="{{ asset('/') }}frondend_assets/css/responsive.css">

    <!-- Color CSS -->
    <link rel="stylesheet" href="{{ asset('/') }}frondend_assets/css/color/color1.css">
    <!--<link rel="stylesheet" href="{{ asset('/') }}frondend_assets/css/color/color2.css">-->
    <!--<link rel="stylesheet" href="{{ asset('/') }}frondend_assets/css/color/color3.css">-->
    <!--<link rel="stylesheet" href="{{ asset('/') }}frondend_assets/css/color/color4.css">-->
    <!--<link rel="stylesheet" href="{{ asset('/') }}frondend_assets/css/color/color5.css">-->
    <!--<link rel="stylesheet" href="{{ asset('/') }}frondend_assets/css/color/color6.css">-->
    <!--<link rel="stylesheet" href="{{ asset('/') }}frondend_assets/css/color/color7.css">-->
    <!--<link rel="stylesheet" href="{{ asset('/') }}frondend_assets/css/color/color8.css">-->
    <!--<link rel="stylesheet" href="{{ asset('/') }}frondend_assets/css/color/color9.css">-->
    <!--<link rel="stylesheet" href="{{ asset('/') }}frondend_assets/css/color/color10.css">-->
    <!--<link rel="stylesheet" href="{{ asset('/') }}frondend_assets/css/color/color11.css">-->
    <!--<link rel="stylesheet" href="{{ asset('/') }}frondend_assets/css/color/color12.css">-->

    <link rel="stylesheet" href="#" id="colors">

    <style>
        .price-font-size {
            font-size: 30px;

        }
    </style>

</head>

<body class="js">

    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- End Preloader -->

    <!-- Eshop Color Plate -->
    <div class="color-plate ">
        <a class="color-plate-icon"><i class="ti-paint-bucket"></i></a>
        <h4>Eshop Colors</h4>
        <p>Here is some awesome color's available on Eshop Template.</p>
        <span class="color1"></span>
        <span class="color2"></span>
        <span class="color3"></span>
        <span class="color4"></span>
        <span class="color5"></span>
        <span class="color6"></span>
        <span class="color7"></span>
        <span class="color8"></span>
        <span class="color9"></span>
        <span class="color10"></span>
        <span class="color11"></span>
        <span class="color12"></span>
    </div>
    <!-- /End Color Plate -->

    <!-- Header -->
    <header class="header shop">

        <!-- Topbar -->
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-12">
                        <!-- Top Left -->
                        <div class="top-left">
                            <ul class="list-main">
                                <li><i class="ti-headphone-alt"></i> +060 (800) 801-582</li>
                                <li><i class="ti-email"></i> <a
                                        href="https://wpthemesgrid.com/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="fa898f8a8a95888eba8992958a928f98d4999597">[email&#160;protected]</a>
                                </li>
                            </ul>
                        </div>
                        <!--/ End Top Left -->
                    </div>
                    <div class="col-lg-6 col-md-12 col-12">
                        <!-- Top Right -->
                        <div class="right-content">
                            @if (Session::get('id'))
                                <ul class="list-main">
                                    <li><i class="ti-location-pin"></i> Store location</li>
                                    <li><i class="ti-alarm-clock"></i> <a href="#">Daily deal</a></li>
                                    <li><i class="ti-user"></i> <a href="#">{{ Session::get('name') }}</a></li>
                                    <li><i class="ti-power-off"></i><a
                                            href="{{ route('customer.logout') }}">Logout</a></li>
                                </ul>
                            @else
                                <ul class="list-main">
                                    <li><i class="ti-location-pin"></i> Store location</li>
                                    <li><i class="ti-alarm-clock"></i> <a href="#">Daily deal</a></li>
                                    <li><i class="ti-user"></i> <a href="#">My account</a></li>
                                    <li><i class="ti-power-off"></i><a
                                            href="{{ route('customer.login.page') }}">Login</a></li>
                                </ul>
                            @endif
                        </div>
                        <!-- End Top Right -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Topbar -->

        <div class="middle-inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-12">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="{{ route('home') }}"><img
                                    src="{{ asset('/') }}frondend_assets/images/logo.png" alt="logo"></a>
                        </div>
                        <!--/ End Logo -->
                        <!-- Search Form -->
                        <div class="search-top">
                            <div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
                            <!-- Search Form -->
                            <div class="search-top">
                                <form class="search-form">
                                    <input type="text" placeholder="Search here..." name="search">
                                    <button value="search" type="submit"><i class="ti-search"></i></button>
                                </form>
                            </div>
                            <!--/ End Search Form -->
                        </div>
                        <!--/ End Search Form -->
                        <div class="mobile-nav"></div>
                    </div>
                    <div class="col-lg-8 col-md-7 col-12">
                        <div class="search-bar-top">
                            <div class="search-bar">
                                <select>
                                    <option selected="selected">All Category</option>
                                    <option>watch</option>
                                    <option>mobile</option>
                                    <option>kid’s item</option>
                                </select>
                                <form>
                                    <input name="search" placeholder="Search Products Here....." type="search">
                                    <button class="btnn"><i class="ti-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-12">
                        <div class="right-bar">
                            <!-- Search Form -->
                            <div class="sinlge-bar">
                                <a href="#" class="single-icon"><i class="fa fa-heart-o"
                                        aria-hidden="true"></i></a>
                            </div>
                            <div class="sinlge-bar">
                                <a href="{{route('customer.dashboard')}}" class="single-icon"><i class="fa fa-user-circle-o"
                                        aria-hidden="true"></i></a>
                            </div>
                             @php
                                use Gloudemans\Shoppingcart\Facades\Cart;
                            @endphp
                            <div class="sinlge-bar shopping">
                                <a href="#" class="single-icon"><i class="ti-bag"></i> <span
                                        class="total-count">{{ Cart::content()->count() }} </span></a>
                                <!-- Shopping Item -->
                                <div class="shopping-item">
                                    <div class="dropdown-cart-header">

                                        <span>{{ Cart::content()->count() }} Items</span>
                                        <a href="#">View Cart</a>
                                    </div>
                                    <ul class="shopping-list">
                                       @foreach (Cart::content() as $item )
                                            <li>
                                            <a href="{{route('cart.remove', ['rowId' => $item->rowId])}}" class="remove" title="Remove this item"><i
                                                    class="fa fa-remove"></i></a>
                                            <a class="cart-img" href="#"><img
                                                    src="{{ asset($item->options->image) }}"
                                                    alt="#"></a>
                                            <h4><a href="{{route('product.detail', ['id' =>$item->id])}}">{{$item->name}}</a></h4>
                                            <p class="quantity">1x - <span class="amount">{{$item->price}}</span></p>
                                        </li>
                                       
                                       @endforeach
                                    </ul>
                                    <div class="bottom">
                                        <div class="total">
                                            <span>Total (With Taxes)</span>
                                            <span class="total-amount">{{Cart::total()}}</span>
                                        </div>
                                        <a href="{{route('customer.checkout.billing-info')}}" class="btn animate">Checkout</a>
                                    </div>
                                </div>
                                <!--/ End Shopping Item -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Header Inner -->
        <div class="header-inner">
            <div class="container">
                <div class="cat-nav-head">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="all-category">
                                <h3 class="cat-heading"><i class="fa fa-bars" aria-hidden="true"></i>CATEGORIES</h3>

                                        <ul class="main-category">
                                        @foreach ($categories as $category)
                                            <li><a href="#">{{$category->name}} <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                                <ul class="sub-category">
                                                @foreach ($category->subCategories as $subCategory)
                                                    <li><a href="#">{{$subCategory->name}}</a></li>
                                                @endforeach
                                                                        
                                                </ul>
                                            </li>
                                        @endforeach
                                        </ul>

                            </div>
                        </div>
                        <div class="col-lg-9 col-12">
                            <div class="menu-area">
                                <!-- Main Menu -->
                                <nav class="navbar navbar-expand-lg">
                                    <div class="navbar-collapse">
                                        <div class="nav-inner">
                                            <ul class="nav main-menu menu navbar-nav">
                                                <li class="active"><a href="#">Home<i
                                                            class="ti-angle-down"></i></a>
                                                    <ul class="dropdown">
                                                        <li><a href="index-2.html">Home Ecommerce V1</a></li>
                                                        <li><a href="index2.html">Home Ecommerce V2</a></li>
                                                        <li><a href="index3.html">Home Ecommerce V3</a></li>
                                                        <li><a href="index4.html">Home Ecommerce V4</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Product</a></li>
                                                <li><a href="#">Service</a></li>
                                                <li><a href="#">Shop<i class="ti-angle-down"></i><span
                                                            class="new">New</span></a>
                                                    <ul class="dropdown">
                                                        <li><a href="shop-grid.html">Shop Grid</a></li>
                                                        <li><a href="shop-list.html">Shop List</a></li>
                                                        <li><a href="shop-single.html">shop Single</a></li>
                                                        <li><a href="cart.html">Cart</a></li>
                                                        <li><a href="checkout.html">Checkout</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Pages<i class="ti-angle-down"></i></a>
                                                    <ul class="dropdown">
                                                        <li><a href="about-us.html">About Us</a></li>
                                                        <li><a href="login.html">Login</a></li>
                                                        <li><a href="register.html">Register</a></li>
                                                        <li><a href="mail-success.html">Mail Success</a></li>
                                                        <li><a href="404.html">404</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Blog<i class="ti-angle-down"></i></a>
                                                    <ul class="dropdown">
                                                        <li><a href="blog-grid.html">Blog Grid</a></li>
                                                        <li><a href="blog-grid-sidebar.html">Blog Grid Sidebar</a></li>
                                                        <li><a href="blog-single.html">Blog Single</a></li>
                                                        <li><a href="blog-single-sidebar.html">Blog Single Sidebar</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="contact.html">Contact Us</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </nav>
                                <!--/ End Main Menu -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Header Inner -->
    </header>
    <!--/ End Header -->

    @yield('body')


    <!-- Start Footer Area -->
    <footer class="footer">
        <!-- Footer Top -->
        <div class="footer-top section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer about">
                            <div class="logo">
                                <a href="index-2.html"><img src="{{ asset('/') }}frondend_assets/images/logo2.png"
                                        alt="#"></a>
                            </div>
                            <p class="text">Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue,
                                magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan
                                porttitor, facilisis luctus, metus.</p>
                            <p class="call">Got Question? Call us 24/7<span><a href="tel:123456789">+0123 456
                                        789</a></span></p>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                    <div class="col-lg-2 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer links">
                            <h4>Information</h4>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Faq</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Help</a></li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                    <div class="col-lg-2 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer links">
                            <h4>Customer Service</h4>
                            <ul>
                                <li><a href="#">Payment Methods</a></li>
                                <li><a href="#">Money-back</a></li>
                                <li><a href="#">Returns</a></li>
                                <li><a href="#">Shipping</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer social">
                            <h4>Get In Tuch</h4>
                            <!-- Single Widget -->
                            <div class="contact">
                                <ul>
                                    <li>NO. 342 - London Oxford Street.</li>
                                    <li>012 United Kingdom.</li>
                                    <li><a href="https://wpthemesgrid.com/cdn-cgi/l/email-protection"
                                            class="__cf_email__"
                                            data-cfemail="e0898e868fa08593888f90ce838f8d">[email&#160;protected]</a>
                                    </li>
                                    <li>+032 3456 7890</li>
                                </ul>
                            </div>
                            <!-- End Single Widget -->
                            <ul>
                                <li><a href="#"><i class="ti-facebook"></i></a></li>
                                <li><a href="#"><i class="ti-twitter"></i></a></li>
                                <li><a href="#"><i class="ti-flickr"></i></a></li>
                                <li><a href="#"><i class="ti-instagram"></i></a></li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Top -->
        <div class="copyright">
            <div class="container">
                <div class="inner">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="left">
                                <p>Copyright © 2020 <a href="http://www.wpthemesgrid.com/"
                                        target="_blank">Wpthemesgrid</a> - All Rights Reserved.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="right">
                                <img src="{{ asset('/') }}frondend_assets/images/payments.png" alt="#">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- /End Footer Area -->

    <!-- Jquery -->
    <script data-cfasync="false"
        src="{{ asset('/') }}frondend_assets/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('/') }}frondend_assets/js/jquery.min.js"></script>
    <script src="{{ asset('/') }}frondend_assets/js/jquery-migrate-3.0.0.js"></script>
    <script src="{{ asset('/') }}frondend_assets/js/jquery-ui.min.js"></script>
    <!-- Popper JS -->
    <script src="{{ asset('/') }}frondend_assets/js/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('/') }}frondend_assets/js/bootstrap.min.js"></script>
    <!-- Color JS -->
    <script src="{{ asset('/') }}frondend_assets/js/colors.js"></script>
    <!-- Slicknav JS -->
    <script src="{{ asset('/') }}frondend_assets/js/slicknav.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="{{ asset('/') }}frondend_assets/js/owl-carousel.js"></script>
    <!-- Magnific Popup JS -->
    <script src="{{ asset('/') }}frondend_assets/js/magnific-popup.js"></script>
    <!-- Fancybox JS -->
    <script src="{{ asset('/') }}frondend_assets/js/facnybox.min.js"></script>
    <!-- Waypoints JS -->
    <script src="{{ asset('/') }}frondend_assets/js/waypoints.min.js"></script>
    <!-- Countdown JS -->
    <script src="{{ asset('/') }}frondend_assets/js/finalcountdown.min.js"></script>
    <!-- Nice Select JS -->
    <script src="{{ asset('/') }}frondend_assets/js/nicesellect.js"></script>
    <!-- Ytplayer JS -->
    <script src="{{ asset('/') }}frondend_assets/js/ytplayer.min.js"></script>
    <!-- Flex Slider JS -->
    <script src="{{ asset('/') }}frondend_assets/js/flex-slider.js"></script>
    <!-- ScrollUp JS -->
    <script src="{{ asset('/') }}frondend_assets/js/scrollup.js"></script>
    <!-- Onepage Nav JS -->
    <script src="{{ asset('/') }}frondend_assets/js/onepage-nav.min.js"></script>
    <!-- Easing JS -->
    <script src="{{ asset('/') }}frondend_assets/js/easing.js"></script>
    <!-- Active JS -->
    <script src="{{ asset('/') }}frondend_assets/js/active.js"></script>
    <script>
        (function() {
            function c() {
                var b = a.contentDocument || a.contentWindow.document;
                if (b) {
                    var d = b.createElement('script');
                    d.innerHTML =
                        "window.__CF$cv$params={r:'92019becabbd8b01',t:'MTc0MTkzMjYzOS4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='../../cdn-cgi/challenge-platform/h/b/scripts/jsd/c8ec7565fab7/maind41d.js';document.getElementsByTagName('head')[0].appendChild(a);";
                    b.getElementsByTagName('head')[0].appendChild(d)
                }
            }
            if (document.body) {
                var a = document.createElement('iframe');
                a.height = 1;
                a.width = 1;
                a.style.position = 'absolute';
                a.style.top = 0;
                a.style.left = 0;
                a.style.border = 'none';
                a.style.visibility = 'hidden';
                document.body.appendChild(a);
                if ('loading' !== document.readyState) c();
                else if (window.addEventListener) document.addEventListener('DOMContentLoaded', c);
                else {
                    var e = document.onreadystatechange || function() {};
                    document.onreadystatechange = function(b) {
                        e(b);
                        'loading' !== document.readyState && (document.onreadystatechange = e, c())
                    }
                }
            }
        })();
    </script>
</body>

<!-- Mirrored from wpthemesgrid.com/themes/eshop/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Mar 2025 06:11:49 GMT -->

</html>
