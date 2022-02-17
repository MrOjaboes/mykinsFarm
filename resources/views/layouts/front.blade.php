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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha512-bnIvzh6FU75ZKxp0GXLH9bewza/OIw6dLVh9ICg0gogclmYGguQJWl8U30WpbsGTqbIiAwxTsbe76DErLq5EDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js" integrity="sha512-HWlJyU4ut5HkEj0QsK/IxBCY55n5ZpskyjVlAoV9Z7XQwwkqXoYdCIC93/htL3Gu5H3R4an/S0h2NXfbZk3g7w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<style>
    .mb-30 {
    margin-bottom: 0px;
}
.footer-widget .footer-info-list ul li a {
    color:white;
    text-decoration:none;
}
.footer-widget .footer-info-list ul li a:hover{
    color:white;
}
.footer-widget h3.footer-title,.footer-widget .contact-info-2 .single-contact-info-2 .contact-info-2-content p,h5{
    color:white;
}
.footer-widget .contact-info-2 .single-contact-info-2 .contact-info-2-icon i {
    color:white;
}
.hero-slider-content-3 .slider-tab-small-img {
    margin: -5px -30px 0px;
}
@media only screen and (max-width: 767px){
.single-hero-slider-hm3 {
    padding: 0px 0 0;
}
.hero-slider-content-3 .slider-tab-small-img a img {
    max-width: 100%;
    height: 235px;
}
}
</style>
</head>

<body>

    <div class="main-wrapper">
        <header class="header-area" style="background-color: #891e19">
            <div class="header-large-device">
                <div class="header-middle header-middle-padding-1">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="{{ url('/') }}"><img src="/guest/assets/images/kins_international_market_logo.png"
                                            alt="logo"></a>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-7">
                                <div class="categori-search-wrap">
                                    <div class="search-wrap-3">

                                            <input placeholder="Search Products..." type="text" id="product_name" name="">


                                        <ul>
                                            <li></li>
                                        </ul>
                                    </div>

                                </div>

                            </div>
                            {{-- Cart environment --}}
                            <div class="col-xl-3 col-lg-3">
                                <div class="header-action header-action-flex">
                                    <div class="same-style-2 same-style-2-font-inc">
                                        @guest
                                            @if (Route::has('login'))
                                                <a href="{{ route('login') }}"><i class="icon-user"></i><span
                                                        style="font-size:12px;" class="pl-2">Login</span></a> |
                                            @endif
                                            @if (Route::has('register'))
                                                <a href="{{ route('register') }}"><span
                                                        style="font-size:12px;">Register</span></a>
                                            @endif
                                        @else
                                            <li class="nav-item dropdown" style="list-style-type: none;">
                                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" v-pre>
                                                    {{ Auth::user()->name }}
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-right"
                                                    aria-labelledby="navbarDropdown">
                                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                                                        <span style="font-size:15px;">Log out</span>
                                                    </a>
                                                    <hr>


                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                        class="d-none">
                                                        @csrf
                                                    </form>
                                                    <a class="dropdown-item" href="{{ route('home') }}">
                                                        <span style="font-size:15px;">Orders</span>
                                                    </a>
                                                </div>
                                            </li>
                                        @endguest
                                    </div>
                                    {{-- <div class="same-style-2 same-style-2-font-inc">
                                        <a href="wishlist.html"><i class="icon-heart"></i><span
                                                class="pro-count green">03</span></a>
                                    </div> --}}
                                    <div class="same-style-2 same-style-2-font-inc header-cart">
                                        <a class="" href="{{ route('cart.list') }}">
                                            <i class="icon-basket-loaded"></i><span class="pro-count green">
                                                {{ Cart::getTotalQuantity() }}</span>
                                            <span class="cart-amount">${{ Cart::getTotal() }}</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Categories --}}
                <div class="header-bottom">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-3">
                                <div class="main-categori-wrap mb-3">
                                    <a class="categori-show" href="#"><i class="lnr lnr-menu"></i> All Categories <i
                                            class="icon-arrow-down icon-right"></i></a>
                                    <div class="category-menu categori-hide">
                                        <nav>
                                            <ul>

                                                <li class="cr-dropdown"><a href="{{ url('/') }}">General </a>
                                                <li><a href="{{ url('/category/beans&grains') }}">Beans and
                                                        Grains</a>
                                                </li>
                                                <li><a href="{{ url('/category/soup-ingredients') }}">Soup
                                                        Ingredients</a></li>
                                                <li><a href="{{ url('/category/flour&swallow') }}">Flour and
                                                        Swallow</a>
                                                </li>
                                                <li><a href="{{ url('/category/dried-vegetable') }}">Dried
                                                        Vegetable</a>
                                                </li>
                                                <li><a href="{{ url('/category/spices&seasonings') }}">Spices and
                                                        Seasonings</a></li>


                                                </li>

                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                {{-- <div class="main-menu main-menu-padding-1 main-menu-font-size-14 main-menu-lh-2">
                                    <nav>
                                        <ul>
                                            <li><a href="{{ url('/') }}">HOME </a></li>
                                            <li><a href="{{ url('/') }}">SHOP </a></li>
                                            <li><a href="{{ url('/') }}">CONTACT </a></li>
                                        </ul>
                                    </nav>
                                </div> --}}
                            </div>
                            <div class="col-lg-3">
                                {{-- <div class="hotline">
                                    <p><i class="icon-call-end"></i> <span>Hotline</span> (364) 106 7572 </p>
                                </div> --}}
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
                                <a href="{{ url('/') }}"><img src="/guest/assets/images/kins_international_market_logo.png" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="header-action header-action-flex">
                                <div class="same-style-2 same-style-2-font-inc">
                                    <a href="{{ route('login') }}"><i class="icon-user"></i></a>
                                </div>
                                {{-- <div class="same-style-2 same-style-2-font-inc">
                                    <a href="wishlist.html"><i class="icon-heart"></i><span
                                            class="pro-count green">03</span></a>
                                </div> --}}
                                <div class="same-style-2 same-style-2-font-inc header-cart">
                                    <a class="cart-active" href="{{ route('cart.list') }}">
                                        <i class="icon-basket-loaded"></i><span
                                            class="pro-count green">{{ Cart::getTotalQuantity() }}</span>
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
                                <li><a href="{{ url('/') }}">HOME </a></li>
                                <li><a href="{{ url('/') }}">SHOP </a></li>
                                <li><a href="{{ url('/') }}">CONTACT </a></li>
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
                                    <li class="cr-dropdown"><a href="{{ url('/') }}">General </a></li>
                                    <li><a href="{{ url('/category/beans&grains') }}">Beans and Grains</a></li>
                                    <li><a href="{{ url('/category/soup-ingredients') }}">Soup Ingredients</a></li>
                                    <li><a href="{{ url('/category/flour&swallow') }}">Flour and Swallow</a></li>
                                    <li><a href="{{ url('/category/dried-vegetable') }}">Dried Vegetables</a></li>
                                    <li><a href="{{ url('/category/spices&seasonings') }}">Spices and Seasonings</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <div class="mobile-contact-info mobile-header-padding-border-4">
                       <ul>
                            <li><i class="icon-phone "></i> +1-301-200-8417</li>
                            <li><i class="icon-envelope-open "></i> mykinsfarm@gmail.com </li>
                            <li><i class="icon-home"></i> 30 N Gould St., Suite 23161, Sheridan, WY 82801</li>
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
                    <div class="container-fluid">
                        <div class="row">

                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="row align-items-center slider-animated-1">
                                    <div class="col-12">
                                        <div class="hero-slider-content-3 slider-animated-1" style="">
                                            {{-- <h4 class="animated">New Arrivals</h4>
                                            <h1 class="animated">Basic thick knit <br>T-shirt</h1>
                                            <p class="animated">Men's basic coat with a high lapel collar and
                                                side pockets with button fastening.</p> --}}
                                            {{-- <h5 class="animated">3 Colors: <span>Grey</span></h5> --}}
                                            <div class="slider-tab-small-img animated">
                                                <a class="active" href="{{url('/#shop2')}}" data-bs-toggle="tab"><img
                                                        src="/guest/assets/images/banner/main-bannerheader.jpg" alt="" class=""> </a>
                                            </div>
                                            {{-- <div class="btn-style-3">
                                                <a class="animated btn-1-padding-1" href="{{url('/')}}">Shop
                                                    now <i class="icon-arrow-right"></i></a>
                                            </div> --}}
                                        </div>
                                    </div>
                                    {{-- <div class="col-lg-5 col-md-5 col-sm-5 col-12">
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
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-hero-slider single-hero-slider-hm3 single-animation-wrap">
                    <div class="container-fluid">
                        <div class="row">

                            <div class="col-lg-12 col-md-12 col-12 ms-auto">
                                <div class="row align-items-center slider-animated-1">
                                    <div class="col-12">
                                        <div class="hero-slider-content-3" style="margin-right:-30px;">
                                            {{-- <h4 class="animated">New Arrivals</h4>
                                            <h1 class="animated">Basic thick knit <br>T-shirt</h1>
                                            <p class="animated">Men's basic coat with a high lapel collar and
                                                side pockets with button fastening.</p>
                                            <h5 class="animated">3 Colors: <span>Grey</span></h5> --}}
                                            <div class="slider-tab-small-img nav animated">
                                                <a href="{{url('/#shop2')}}" data-bs-toggle="tab"><img
                                                        src="/guest/assets/images/banner/main-bannerheader.jpg"
                                                        alt=""> </a>


                                            </div>
                                            {{-- <div class="btn-style-3">
                                                <a class="animated btn-1-padding-1" href="">Shop
                                                    now <i class="icon-arrow-right"></i></a>
                                            </div> --}}
                                        </div>
                                    </div>
                                    {{-- <div class="col-lg-5 col-md-5 col-sm-5 col-12">
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
                                    </div> --}}
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
                                <p>All amounts, no minimum!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 service-border-1 service-border-1-none-md">
                        <div class="single-service-wrap-2 mb-30">
                            <div class="service-icon-2">
                                <i class="icon-refresh "></i>
                            </div>
                            <div class="service-content-2">
                                <h3>30 Days Return</h3>
                                <p>Returns on defective items only and packaging was unopened </p>
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


        {{-- product --}}
        @yield('content')
        <x-news />
       <x-footer />

    </div>

    <!-- All JS is here
============================================ -->
<script>
   var path ="{{url('/search')}}";
$('#product_name').typeaheead({
    source: function(query,process){
        return $.get(path, {query:query}, function(data){
            return process(data);
        });
    }
});
</script>
    <script src="/guest/assets/js/vendor/modernizr-3.11.7.min.js"></script>
    <script src="/guest/assets/js/vendor/jquery-v3.6.0.min.js"></script>
    <script src="/guest/assets/js/vendor/jquery-migrate-v3.3.2.min.js"></script>
    <script src="/guest/assets/js/vendor/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.js" integrity="sha512-P2Z/b+j031xZuS/nr8Re8dMwx6pNIexgJ7YqcFWKIqCdbjynk4kuX/GrqpQWEcI94PRCyfbUQrjRcWMi7btb0g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
