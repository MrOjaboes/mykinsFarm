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

 <link rel="stylesheet" href="/AdminUi/dist/css/adminlte.min.css">
 <link rel="stylesheet" href="/AdminUi/plugins/fontawesome-free/css/all.min.css">
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
@livewireStyles
</head>

<body>

    <div class="main-wrapper">
        <header class="header-area pb-3" style="background-color: #891e19">
            <div class="header-large-device">

                <div class="header-middle header-middle-padding-1">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="{{url('/')}}"><img src="/guest/assets/images/kins_international_market_logo.png" alt="logo"></a>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-7">
                                {{-- <div class="categori-search-wrap">

                                    <div class="search-wrap-3">
                                        <form action="#">
                                            <input placeholder="Search Products..." type="text">
                                            <button><i class="lnr lnr-magnifier"></i></button>
                                        </form>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="col-xl-3 col-lg-3">
                                <div class="header-action header-action-flex">
                                    <div class="same-style-2 same-style-2-font-inc">
                                        @guest
                                        @if (Route::has('login'))
                                        <a href="{{route('login')}}"><i class="icon-user"></i>Login</a>
                                        @endif
                                        @if (Route::has('register'))
                                        <a href="{{route('register')}}"><i class="icon-user"></i>Register</a>
                                        @endif
                                        @else
                                        <li class="nav-item dropdown" style="list-style-type: none;">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }}
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                                  <span style="font-size:15px;">Log Out</span>
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                                <hr>
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
                                        <a class="" href="{{route('cart.list')}}">
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
                {{-- <div class="header-bottom">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-3">
                                <div class="logo">
                                    <a href="{{url('/')}}"><img src="/guest/assets/images/logo1.png" alt="logo"></a>
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
                </div> --}}
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
                                    <a class="cart-active" href="{{route('cart.list')}}">
                                        <i class="icon-basket-loaded"></i><span class="pro-count green">{{ Cart::getTotalQuantity()}}</span>
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
                                        <li><a href="{{ url('/category/soup-ingredients') }}">Soup Ingredients</a>
                                        </li>
                                        <li><a href="{{ url('/category/flour&swallow') }}">Flour and Swallow</a></li>
                                        <li><a href="{{ url('/category/dried-vegetable') }}">Dried Vegetable</a></li>
                                        <li><a href="{{ url('/category/spices&seasonings') }}">Spices and
                                                Seasonings</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                            <div class="footer-widget ml-70 mb-40">
                                <h3 class="footer-title">useful links</h3>
                                <div class="footer-info-list">
                                    <ul>
                                        <li><a href="">My Account</a></li>
                                        <li><a href="">My Wishlish</a></li>
                                        <li><a href="#">Term & Conditions</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Track Order</a></li>
                                        <li><a href="">Shop</a></li>
                                        <li><a href="">About Us</a></li>
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
                            {{-- <div class="payment-img payment-img-right">
                                <a href="#"><img src="/guest/assets/images/Kins_International_Market_Logo_V1.png" class="w-100 h-100"></a>
                            </div> --}}
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="copyright copyright-center">
                                <p>Copyright © 2021 Kins International Market</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>

    <!-- All JS is here
============================================ -->
@livewireScripts
    <script src="/guest/assets/js/vendor/modernizr-3.11.7.min.js"></script>
    <script src="/guest/assets/js/vendor/jquery-v3.6.0.min.js"></script>
    <script src="/guest/assets/js/vendor/jquery-migrate-v3.3.2.min.js"></script>
    <script src="/guest/assets/js/vendor/popper.min.js"></script>
    <script src="/guest/assets/js/vendor/bootstrap.min.js"></script>

    <script src="/AdminUi/plugins/jquery/jquery.min.js"></script>
<script src="/AdminUi/dist/js/adminlte.js"></script>
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

<!-- jQuery -->
<script src="/AdminUi/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/AdminUi/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="/AdminUi/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="/AdminUi/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="/AdminUi/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="/AdminUi/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="/AdminUi/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="/AdminUi/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="/AdminUi/plugins/moment/moment.min.js"></script>
<script src="/AdminUi/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="/AdminUi/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="/AdminUi/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="/AdminUi/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/AdminUi/dist/js/adminlte.js"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/AdminUi/dist/js/pages/dashboard.js"></script>
</body>

</html>
