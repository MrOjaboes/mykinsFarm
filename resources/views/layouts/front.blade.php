<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>myKinsFarm</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/guest/assets/images/favicon.png">

    <!-- All CSS is here
 ============================================ -->

    <link rel="stylesheet" href="/guest/assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="/guest/assets/css/vendor/signericafat.css">
    <link rel="stylesheet" href="/guest/assets/css/vendor/cerebrisans.css">
    <link rel="stylesheet" href="/guest/assets/css/vendor/simple-line-icons.css">
    <link rel="stylesheet" href="/guest/assets/css/vendor/elegant.css">
    <link rel="stylesheet" href="/guest/assets/css/vendor/linear-icon.css">
    <link rel="stylesheet" href="/guest/assets/css/plugins/nice-select.css">
    <link rel="stylesheet" href="/guest/assets/css/plugins/easyzoom.css">
    <link rel="stylesheet" href="/guest/assets/css/plugins/slick.css">
    <link rel="stylesheet" href="/guest/assets/css/plugins/animate.css">
    <link rel="stylesheet" href="/guest/assets/css/plugins/magnific-popup.css">
    <link rel="stylesheet" href="/guest/assets/css/plugins/jquery-ui.css">
    <link rel="stylesheet" href="/guest/assets/css/style.css">

</head>

<body>

    <div class="main-wrapper">
        <header class="header-area">
            <div class="header-large-device">

                <div class="header-middle header-middle-padding-1">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="{{url('/')}}"><img src="/guest/assets/images/logo1.png" alt="logo"></a>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-7">
                                <div class="categori-search-wrap">
                                    <div class="categori-style-1">
                                        <select class="nice-select nice-select-style-1">
                                            <option>All Categories </option>
                                            <option>Clothing </option>
                                            <option>T-Shirt</option>
                                            <option>Shoes</option>
                                            <option>Jeans</option>
                                        </select>
                                    </div>
                                    <div class="search-wrap-3">
                                        <form action="#">
                                            <input placeholder="Search Products..." type="text">
                                            <button><i class="lnr lnr-magnifier"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3">
                                <div class="header-action header-action-flex">
                                    <div class="same-style-2 same-style-2-font-inc">
                                        <a href="{{route('login')}}"><i class="icon-user"></i></a>
                                    </div>
                                    {{-- <div class="same-style-2 same-style-2-font-inc">
                                        <a href="wishlist.html"><i class="icon-heart"></i><span
                                                class="pro-count green">03</span></a>
                                    </div> --}}
                                    <div class="same-style-2 same-style-2-font-inc header-cart">
                                        <a class="cart-active" href="#">
                                            <i class="icon-basket-loaded"></i><span class="pro-count green"> {{ Cart::getTotalQuantity()}}</span>
                                            <span class="cart-amount">${{ Cart::getTotal() }}</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Categories  --}}
                <div class="header-bottom">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-3">
                                <div class="main-categori-wrap">
                                    <a class="categori-show" href="#"><i class="lnr lnr-menu"></i> All Categories <i
                                            class="icon-arrow-down icon-right"></i></a>
                                    <div class="category-menu categori-hide">
                                        <nav>
                                            <ul>

                                                <li class="cr-dropdown"><a href="#">General </a>
                                                <li><a href="{{ url('/category/beans&grains') }}">Beans and Grains</a>
                                                </li>
                                                <li><a href="{{ url('/category/soup-ingredients') }}">Soup
                                                        Ingredients</a></li>
                                                <li><a href="{{ url('/category/flour&swallow') }}">Flour and Swallow</a>
                                                </li>
                                                <li><a href="{{ url('/category/dried-vegetable') }}">Dried Vegetable</a>
                                                </li>
                                                <li><a href="{{ url('/category/spices&seasonings') }}">Spices and Seasonings</a></li>


                                                </li>

                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="main-menu main-menu-padding-1 main-menu-font-size-14 main-menu-lh-2">
                                    <nav>
                                        <ul>
                                            <li><a href="{{url('/')}}">HOME </a></li>
                                            <li><a href="{{url('/')}}">SHOP </a></li>
                                            <li><a href="{{url('/')}}">CONTACT </a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="hotline">
                                    <p><i class="icon-call-end"></i> <span>Hotline</span> (364) 106 7572 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Mobile section --}}
            <div class="header-small-device small-device-ptb-1">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-5">
                            <div class="mobile-logo">
                                <a href="{{url('/')}}"><img src="/guest/assets/images/logo1.png" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="header-action header-action-flex">
                                <div class="same-style-2 same-style-2-font-inc">
                                    <a href="{{route('login')}}"><i class="icon-user"></i></a>
                                </div>
                                {{-- <div class="same-style-2 same-style-2-font-inc">
                                    <a href="wishlist.html"><i class="icon-heart"></i><span
                                            class="pro-count green">03</span></a>
                                </div> --}}
                                <div class="same-style-2 same-style-2-font-inc header-cart">
                                    <a class="cart-active" href="#">
                                        <i class="icon-basket-loaded"></i><span class="pro-count green"> {{ Cart::getTotalQuantity()}}</span>
                                    </a>
                                </div>
                                <div class="same-style-2 main-menu-icon">
                                    <a class="mobile-header-button-active" href="#"><i class="icon-menu"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- mini cart start -->
        <div class="sidebar-cart-active">
            <div class="sidebar-cart-all">
                <a class="cart-close" href="#"><i class="icon_close"></i></a>
                <div class="cart-content">
                    <h3>Shopping ffCart</h3>
                    <ul>
                        <li class="single-product-cart">
                            <div class="cart-img">
                                <a href="#"><img src="/guest/assets/images/cart/cart-1.jpg" alt=""></a>
                            </div>
                            <div class="cart-title">
                                <h4><a href="#">Simple Black T-Shirt</a></h4>
                                <span> 1 × $49.00 </span>
                            </div>
                            <div class="cart-delete">
                                <a href="#">×</a>
                            </div>
                        </li>
                        <li class="single-product-cart">
                            <div class="cart-img">
                                <a href="#"><img src="/guest/assets/images/cart/cart-2.jpg" alt=""></a>
                            </div>
                            <div class="cart-title">
                                <h4><a href="#">Norda Backpack</a></h4>
                                <span> 1 × $49.00 </span>
                            </div>
                            <div class="cart-delete">
                                <a href="#">×</a>
                            </div>
                        </li>
                    </ul>
                    <div class="cart-total">
                        <h4>Subtotal: <span>$170.00</span></h4>
                    </div>
                    <div class="cart-checkout-btn">
                        <a class="btn-hover cart-btn-style" href="cart.html">view cart</a>
                        <a class="no-mrg btn-hover cart-btn-style" href="checkout.html">checkout</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- mobile header start -->
        <div class="mobile-header-active mobile-header-wrapper-style">
            <div class="clickalbe-sidebar-wrap">
                <a class="sidebar-close"><i class="icon_close"></i></a>
                <div class="mobile-header-content-area">
                    <div class="header-offer-wrap-2 mrg-none mobile-header-padding-border-4">
                        <p><span>FREE SHIPPING</span> world wide for all orders over $199</p>
                    </div>
                    <div class="mobile-search mobile-header-padding-border-1">
                        <form class="search-form" action="#">
                            <input type="text" placeholder="Search here…">
                            <button class="button-search"><i class="icon-magnifier"></i></button>
                        </form>
                    </div>
                    <div class="mobile-menu-wrap mobile-header-padding-border-2">
                        <!-- mobile menu start -->
                        <nav>
                            <ul class="mobile-menu">
                                <li><a href="{{url('/')}}">HOME </a></li>
                                <li><a href="{{url('/')}}">SHOP </a></li>
                                <li><a href="{{url('/')}}">CONTACT </a></li>
                            </ul>
                        </nav>
                        <!-- mobile menu end -->
                    </div>
                    <div class="main-categori-wrap mobile-menu-wrap mobile-header-padding-border-3">
                        <a class="categori-show" href="#">
                            <i class="lnr lnr-menu"></i> All Categories <i class="icon-arrow-down icon-right"></i>
                        </a>
                        <div class="categori-hide-2">
                            <nav>
                                <ul class="mobile-menu">
                                    <li class="cr-dropdown"><a href="{{url('/')}}">General </a></li>
                                    <li><a href="{{ url('/category/beans&grains') }}">Beans and Grains</a></li>
                                    <li><a href="{{ url('/category/soup-ingredients') }}">Soup Ingredients</a></li>
                                    <li><a href="{{ url('/category/flour&swallow') }}">Flour and Swallow</a></li>
                                    <li><a href="{{ url('/category/dried-vegetable') }}">Dried Vegetables</a></li>
                                    <li><a href="{{ url('/category/spices&seasonings') }}">Spices and Seasonings</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    
                    <div class="mobile-contact-info mobile-header-padding-border-4">
                        <ul>
                            <li><i class="icon-phone "></i> (+612) 2531 5600</li>
                            <li><i class="icon-envelope-open "></i> norda@domain.com</li>
                            <li><i class="icon-home"></i> PO Box 1622 Colins Street West Australia</li>
                        </ul>
                    </div>
                    <div class="mobile-social-icon">
                        <a class="facebook" href="#"><i class="icon-social-facebook"></i></a>
                        <a class="twitter" href="#"><i class="icon-social-twitter"></i></a>
                        <a class="pinterest" href="#"><i class="icon-social-pinterest"></i></a>
                        <a class="instagram" href="#"><i class="icon-social-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-area bg-gray-2">
            <div class="hero-slider-active-2 nav-style-1 nav-style-1-green">
                <div class="single-hero-slider single-hero-slider-hm3 single-animation-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-md-12 col-12 ms-auto">
                                <div class="row align-items-center slider-animated-1">
                                    <div class="col-lg-7 col-md-7 col-sm-7 col-12">
                                        <div class="hero-slider-content-3 slider-animated-1">
                                            <h4 class="animated">New Arrivals</h4>
                                            <h1 class="animated">Basic thick knit <br>T-shirt</h1>
                                            <p class="animated">Men's basic coat with a high lapel collar and
                                                side pockets with button fastening.</p>
                                            <h5 class="animated">3 Colors: <span>Grey</span></h5>
                                            <div class="slider-tab-small-img nav animated">
                                                <a class="active" href="#tshirt-4" data-bs-toggle="tab"><img
                                                        src="/guest/assets/images/slider/hm-3-small-tshirt-1.jpg"
                                                        alt=""> </a>
                                                <a href="#tshirt-5" data-bs-toggle="tab"> <img
                                                        src="/guest/assets/images/slider/hm-3-small-tshirt-2.jpg"
                                                        alt=""> </a>
                                                <a href="#tshirt-6" data-bs-toggle="tab"><img
                                                        src="/guest/assets/images/slider/hm-3-small-tshirt-3.jpg"
                                                        alt=""> </a>
                                            </div>
                                            <div class="btn-style-3">
                                                <a class="animated btn-1-padding-1" href="product-details.html">Shop
                                                    now <i class="icon-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-5 col-12">
                                        <div class="tab-content slider-tab-big-img-wrap jump animated">
                                            <div id="tshirt-4" class="tab-pane active">
                                                <div class="slider-tab-big-img slider-tab-big-img-mrg-1">
                                                    <img src="/guest/assets/images/slider/hm-3-slider-1.png" alt="">
                                                </div>
                                            </div>
                                            <div id="tshirt-5" class="tab-pane ">
                                                <div class="slider-tab-big-img slider-tab-big-img-mrg-2">
                                                    <img src="/guest/assets/images/slider/hm-3-slider-2.png" alt="">
                                                </div>
                                            </div>
                                            <div id="tshirt-6" class="tab-pane">
                                                <div class="slider-tab-big-img slider-tab-big-img-mrg-3">
                                                    <img src="/guest/assets/images/slider/hm-3-slider-3.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-hero-slider single-hero-slider-hm3 single-animation-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-md-12 col-12 ms-auto">
                                <div class="row align-items-center slider-animated-1">
                                    <div class="col-lg-7 col-md-7 col-sm-7 col-12">
                                        <div class="hero-slider-content-3">
                                            <h4 class="animated">New Arrivals</h4>
                                            <h1 class="animated">Basic thick knit <br>T-shirt</h1>
                                            <p class="animated">Men's basic coat with a high lapel collar and
                                                side pockets with button fastening.</p>
                                            <h5 class="animated">3 Colors: <span>Grey</span></h5>
                                            <div class="slider-tab-small-img nav animated">
                                                <a href="#tshirt-7" data-bs-toggle="tab"><img
                                                        src="/guest/assets/images/slider/hm-3-small-tshirt-1.jpg"
                                                        alt=""> </a>
                                                <a class="active" href="#tshirt-8" data-bs-toggle="tab"> <img
                                                        src="/guest/assets/images/slider/hm-3-small-tshirt-2.jpg"
                                                        alt=""> </a>
                                                <a href="#tshirt-9" data-bs-toggle="tab"><img
                                                        src="/guest/assets/images/slider/hm-3-small-tshirt-3.jpg"
                                                        alt=""> </a>
                                            </div>
                                            <div class="btn-style-3">
                                                <a class="animated btn-1-padding-1" href="product-details.html">Shop
                                                    now <i class="icon-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-5 col-12">
                                        <div class="tab-content slider-tab-big-img-wrap jump animated">
                                            <div id="tshirt-7" class="tab-pane">
                                                <div class="slider-tab-big-img slider-tab-big-img-mrg-1">
                                                    <img src="/guest/assets/images/slider/hm-3-slider-1.png" alt="">
                                                </div>
                                            </div>
                                            <div id="tshirt-8" class="tab-pane active">
                                                <div class="slider-tab-big-img slider-tab-big-img-mrg-2">
                                                    <img src="/guest/assets/images/slider/hm-3-slider-2.png" alt="">
                                                </div>
                                            </div>
                                            <div id="tshirt-9" class="tab-pane">
                                                <div class="slider-tab-big-img slider-tab-big-img-mrg-3">
                                                    <img src="/guest/assets/images/slider/hm-3-slider-3.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="service-area pt-50 pb-15">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 service-border-1">
                        <div class="single-service-wrap-2 mb-30">
                            <div class="service-icon-2">
                                <i class="icon-cursor"></i>
                            </div>
                            <div class="service-content-2">
                                <h3>Free Shipping</h3>
                                <p>Oders over $99</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 service-border-1 service-border-1-none-md">
                        <div class="single-service-wrap-2 mb-30">
                            <div class="service-icon-2">
                                <i class="icon-refresh "></i>
                            </div>
                            <div class="service-content-2">
                                <h3>90 Days Return</h3>
                                <p>For any problems</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 service-border-1">
                        <div class="single-service-wrap-2 mb-30">
                            <div class="service-icon-2">
                                <i class="icon-credit-card "></i>
                            </div>
                            <div class="service-content-2">
                                <h3>Secure Payment</h3>
                                <p>100% Guarantee</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="single-service-wrap-2 mb-30">
                            <div class="service-icon-2">
                                <i class="icon-earphones "></i>
                            </div>
                            <div class="service-content-2">
                                <h3>24h Support</h3>
                                <p>Dedicated support</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-area padding-10-row-col pb-105">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="banner-wrap mb-10">
                            <div class="banner-img banner-img-border banner-img-zoom">
                                <a href="product-details.html"><img src="/guest/assets/images/banner/banner-3.jpg"
                                        alt=""></a>
                            </div>
                            <div class="banner-content-3">
                                <h2>Basic Solid Color <br>Sneaker</h2>
                                <span>Start</span>
                                <h3>$168.50</h3>
                                <div class="btn-style-4">
                                    <a href="product-details.html">Shop now <i class="icon-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="banner-wrap mb-10">
                            <div class="banner-img banner-img-border banner-img-zoom">
                                <a href="product-details.html"><img src="/guest/assets/images/banner/banner-4.jpg"
                                        alt=""></a>
                            </div>
                            <div class="banner-content-4">
                                <h2>Discount <br> <span>50%</span> OFF</h2>
                                <span>backpack</span>
                                <h3>new era</h3>
                                <div class="btn-style-4">
                                    <a href="product-details.html">Shop now <i class="icon-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="banner-wrap mb-10">
                            <div class="banner-img banner-img-border banner-img-zoom">
                                <a href="product-details.html"><img src="/guest/assets/images/banner/banner-5.jpg"
                                        alt=""></a>
                            </div>
                            <div class="banner-content-5">
                                <span>Hello kids</span>
                                <h2>Activities Boys <br>with HelloKid</h2>
                                <p>Discover collection from Hello Kid brand</p>
                                <div class="btn-style-4">
                                    <a href="product-details.html">explore <i class="icon-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- product --}}
        @yield('content')
        <x-news />
        <footer class="footer-area bg-gray-4">
            <div class="footer-top border-bottom-4 pb-55">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                            <div class="footer-widget mb-40">
                                <h3 class="footer-title">Quick Shop</h3>
                                <div class="footer-info-list info-list-50-parcent">
                                    <ul>

                                        <li><a href="{{ url('/category/beans&grains') }}">Beans and Grains</a></li>
                                        <li><a href="{{ url('/category/soup-ingredients') }}">Soup Ingredients</a></li>
                                        <li><a href="{{ url('/category/flour&swallow') }}">Flour and Swallow</a></li>
                                        <li><a href="{{ url('/category/dried-vegetable') }}">Dried Vegetable</a></li>
                                        <li><a href="{{ url('/category/spices&seasonings') }}">Spices and Seasonings</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                            <div class="footer-widget ml-70 mb-40">
                                <h3 class="footer-title">useful links</h3>
                                <div class="footer-info-list">
                                    <ul>
                                        <li><a href="my-account.html">My Account</a></li>
                                        <li><a href="wishlist.html">My Wishlish</a></li>
                                        <li><a href="#">Term & Conditions</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Track Order</a></li>
                                        <li><a href="shop.html">Shop</a></li>
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="#">Returns/Exchange</a></li>
                                        <li><a href="#">FAQs</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                            <div class="footer-widget mb-40 ">
                                <h3 class="footer-title">Contact Us</h3>
                                <div class="contact-info-2">
                                    <div class="single-contact-info-2">
                                        <div class="contact-info-2-icon">
                                            <i class="icon-call-end"></i>
                                        </div>
                                        <div class="contact-info-2-content">
                                            <p>Got a question? Call us 24/7</p>
                                            <h3>(365) 8635 56-24-02 </h3>
                                        </div>
                                    </div>
                                    <div class="single-contact-info-2">
                                        <div class="contact-info-2-icon">
                                            <i class="icon-cursor icons"></i>
                                        </div>
                                        <div class="contact-info-2-content">
                                            <p>268 Orchard St, Mahattan, 12005, CA, United State</p>
                                        </div>
                                    </div>
                                    <div class="single-contact-info-2">
                                        <div class="contact-info-2-icon">
                                            <i class="icon-envelope-open "></i>
                                        </div>
                                        <div class="contact-info-2-content">
                                            <p>contact@norda.com</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="social-style-1 social-style-1-font-inc social-style-1-mrg-2">
                                    <a href="#"><i class="icon-social-twitter"></i></a>
                                    <a href="#"><i class="icon-social-facebook"></i></a>
                                    <a href="#"><i class="icon-social-instagram"></i></a>
                                    <a href="#"><i class="icon-social-youtube"></i></a>
                                    <a href="#"><i class="icon-social-pinterest"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom pt-30 pb-30 ">
                <div class="container">
                    <div class="row flex-row-reverse">
                        <div class="col-lg-6 col-md-6">
                            <div class="payment-img payment-img-right">
                                <a href="#"><img src="/guest/assets/images/icon-img/payment.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="copyright copyright-center">
                                <p>Copyright © 2021 HasThemes | <a href="https://hasthemes.com/">Built with
                                        <span>Norda</span> by HasThemes</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true"></span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-5 col-md-6 col-12 col-sm-12">
                                <div class="tab-content quickview-big-img">
                                    <div id="pro-1" class="tab-pane fade show active">
                                        <img src="/guest/assets/images/product/product-1.jpg" alt="">
                                    </div>
                                    <div id="pro-2" class="tab-pane fade">
                                        <img src="/guest/assets/images/product/product-3.jpg" alt="">
                                    </div>
                                    <div id="pro-3" class="tab-pane fade">
                                        <img src="/guest/assets/images/product/product-6.jpg" alt="">
                                    </div>
                                    <div id="pro-4" class="tab-pane fade">
                                        <img src="/guest/assets/images/product/product-3.jpg" alt="">
                                    </div>
                                </div>
                                <div class="quickview-wrap mt-15">
                                    <div class="quickview-slide-active nav nav-style-6">
                                        <a class="active" data-bs-toggle="tab" href="#pro-1"><img
                                                src="/guest/assets/images/product/quickview-s1.jpg" alt=""></a>
                                        <a data-bs-toggle="tab" href="#pro-2"><img
                                                src="/guest/assets/images/product/quickview-s2.jpg" alt=""></a>
                                        <a data-bs-toggle="tab" href="#pro-3"><img
                                                src="/guest/assets/images/product/quickview-s3.jpg" alt=""></a>
                                        <a data-bs-toggle="tab" href="#pro-4"><img
                                                src="/guest/assets/images/product/quickview-s2.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6 col-12 col-sm-12">
                                <div class="product-details-content quickview-content">
                                    <h2>Simple Black T-Shirt</h2>
                                    <div class="product-ratting-review-wrap">
                                        <div class="product-ratting-digit-wrap">
                                            <div class="product-ratting">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                            </div>
                                            <div class="product-digit">
                                                <span>5.0</span>
                                            </div>
                                        </div>
                                        <div class="product-review-order">
                                            <span>62 Reviews</span>
                                            <span>242 orders</span>
                                        </div>
                                    </div>
                                    <p>Seamlessly predominate enterprise metrics without performance based process
                                        improvements.</p>
                                    <div class="pro-details-price">
                                        <span class="new-price">$75.72</span>
                                        <span class="old-price">$95.72</span>
                                    </div>
                                    <div class="pro-details-color-wrap">
                                        <span>Color:</span>
                                        <div class="pro-details-color-content">
                                            <ul>
                                                <li><a class="dolly" href="#">dolly</a></li>
                                                <li><a class="white" href="#">white</a></li>
                                                <li><a class="azalea" href="#">azalea</a></li>
                                                <li><a class="peach-orange" href="#">Orange</a></li>
                                                <li><a class="mona-lisa active" href="#">lisa</a></li>
                                                <li><a class="cupid" href="#">cupid</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="pro-details-size">
                                        <span>Size:</span>
                                        <div class="pro-details-size-content">
                                            <ul>
                                                <li><a href="#">XS</a></li>
                                                <li><a href="#">S</a></li>
                                                <li><a href="#">M</a></li>
                                                <li><a href="#">L</a></li>
                                                <li><a href="#">XL</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="pro-details-quality">
                                        <span>Quantity:</span>
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                                        </div>
                                    </div>
                                    <div class="product-details-meta">
                                        <ul>
                                            <li><span>Categories:</span> <a href="#">Woman,</a> <a href="#">Dress,</a>
                                                <a href="#">T-Shirt</a></li>
                                            <li><span>Tag: </span> <a href="#">Fashion,</a> <a href="#">Mentone</a> , <a
                                                    href="#">Texas</a></li>
                                        </ul>
                                    </div>
                                    <div class="pro-details-action-wrap">
                                        <div class="pro-details-add-to-cart">
                                            <a title="Add to Cart" href="#">Add To Cart </a>
                                        </div>
                                        <div class="pro-details-action">
                                            <a title="Add to Wishlist" href="#"><i class="icon-heart"></i></a>
                                            <a title="Add to Compare" href="#"><i class="icon-refresh"></i></a>
                                            <a class="social" title="Social" href="#"><i
                                                    class="icon-share"></i></a>
                                            <div class="product-dec-social">
                                                <a class="facebook" title="Facebook" href="#"><i
                                                        class="icon-social-facebook"></i></a>
                                                <a class="twitter" title="Twitter" href="#"><i
                                                        class="icon-social-twitter"></i></a>
                                                <a class="instagram" title="Instagram" href="#"><i
                                                        class="icon-social-instagram"></i></a>
                                                <a class="pinterest" title="Pinterest" href="#"><i
                                                        class="icon-social-pinterest"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal end -->
    </div>

    <!-- All JS is here
============================================ -->

    <script src="/guest/assets/js/vendor/modernizr-3.11.7.min.js"></script>
    <script src="/guest/assets/js/vendor/jquery-v3.6.0.min.js"></script>
    <script src="/guest/assets/js/vendor/jquery-migrate-v3.3.2.min.js"></script>
    <script src="/guest/assets/js/vendor/popper.min.js"></script>
    <script src="/guest/assets/js/vendor/bootstrap.min.js"></script>
    <script src="/guest/assets/js/plugins/slick.js"></script>
    <script src="/guest/assets/js/plugins/jquery.syotimer.min.js"></script>
    <script src="/guest/assets/js/plugins/jquery.instagramfeed.min.js"></script>
    <script src="/guest/assets/js/plugins/jquery.nice-select.min.js"></script>
    <script src="/guest/assets/js/plugins/wow.js"></script>
    <script src="/guest/assets/js/plugins/jquery-ui-touch-punch.js"></script>
    <script src="/guest/assets/js/plugins/jquery-ui.js"></script>
    <script src="/guest/assets/js/plugins/magnific-popup.js"></script>
    <script src="/guest/assets/js/plugins/sticky-sidebar.js"></script>
    <script src="/guest/assets/js/plugins/easyzoom.js"></script>
    <script src="/guest/assets/js/plugins/scrollup.js"></script>
    <script src="/guest/assets/js/plugins/ajax-mail.js"></script>
    <!-- Main JS -->
    <script src="/guest/assets/js/main.js"></script>

</body>

</html>
