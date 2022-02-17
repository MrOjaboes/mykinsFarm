<footer class="footer-area bg-gray-4">
    <div class="footer-top border-bottom-4 pb-55 pt-3" style="background-color:#891e19;color:white;">
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
                                <li><a href="{{ url('/category/spices&seasonings') }}">Spices and Seasonings</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="footer-widget ml-70 mb-40" style="color:white;">
                        <h3 class="footer-title">useful links</h3>
                        <div class="footer-info-list">
                            <ul>
                                <li><a href="{{route('login')}}">My Account</a></li>
                                <li><a href="">Term & Conditions</a></li>
                                <li><a href="">Privacy Policy</a></li>
                                <li><a href="">Track Order</a></li>
                                <li><a href="{{url('/')}}">Shop</a></li>
                                <li><a href="{{url('about-us')}}">About Us</a></li>
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
                                    <h5>+1-301-200-8417 </h5>
                                </div>
                            </div>
                            <div class="single-contact-info-2">
                                <div class="contact-info-2-icon">
                                    <i class="icon-cursor icons"></i>
                                </div>
                                <div class="contact-info-2-content">
                                    <p>30 N Gould St., Suite 23161, Sheridan, WY 82801</p>
                                </div>
                            </div>
                            <div class="single-contact-info-2">
                                <div class="contact-info-2-icon">
                                    <i class="icon-envelope-open "></i>
                                </div>
                                <div class="contact-info-2-content">
                                    <p>mykinsfarm@gmail.com </p>
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
    <div class="footer-bottom pt-30 pb-30 " style="background-color:#891e19;color:white;">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-6 col-md-6">
                    {{-- <div class="payment-img payment-img-right">
                        <a href="#"><img src="/guest/assets/images/Kins_International_Market_Logo_V1.png" class="w-100 h-100"></a>
                    </div> --}}
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="copyright copyright-center">
                        <p>Copyright © 2022 Kins International Market</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
