<div class="checkout-main-area pt-120 pb-120">
    <div class="container">
        {{-- <div class="customer-zone mb-20">
            <p class="cart-page-title">Returning customer? <a class="checkout-click1" href="#">Click here to login</a></p>
            <div class="checkout-login-info">
                <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer, please proceed to the Billing & Shipping section.</p>
                <form action="#">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="sin-checkout-login">
                                <label>Username or email address <span>*</span></label>
                                <input type="text" name="user-name">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="sin-checkout-login">
                                <label>Passwords <span>*</span></label>
                                <input type="password" name="user-password">
                            </div>
                        </div>
                    </div>
                    <div class="button-remember-wrap">
                        <button class="button" type="submit">Login</button>
                        <div class="checkout-login-toggle-btn">
                            <input type="checkbox">
                            <label>Remember me</label>
                        </div>
                    </div>
                    <div class="lost-password">
                        <a href="#">Lost your password?</a>
                    </div>
                </form>
                <div class="checkout-login-social">
                    <span>Login with:</span>
                    <ul>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Google</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="customer-zone mb-20">
            <p class="cart-page-title">Have a coupon? <a class="checkout-click3" href="#">Click here to enter your code</a></p>
            <div class="checkout-login-info3">
                <form action="#">
                    <input type="text" placeholder="Coupon code">
                    <input type="submit" value="Apply Coupon">
                </form>
            </div>
        </div> --}}
        <div class="checkout-wrap pt-30">
            @foreach ($profiles as $profile)
                <form action="{{ route('checkout') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="billing-info-wrap mr-50">
                                <h3>Billing Details</h3>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="billing-info mb-20">
                                            <label>Full Name <abbr class="required"
                                                    title="required">*</abbr></label>
                                            <input type="text" name="fname" value="{{$profile->name}}">
                                        </div>
                                    </div>


                                    {{-- <div class="col-lg-12">
                                <div class="billing-select mb-20">
                                    <label>Country <abbr class="required" title="required">*</abbr></label>
                                    <select>
                                        <option>Select a country</option>
                                        <option>Azerbaijan</option>
                                        <option>Bahamas</option>
                                        <option>Bahrain</option>
                                        <option>Bangladesh</option>
                                        <option>Barbados</option>
                                    </select>
                                </div>
                            </div> --}}
                                    <div class="col-lg-12">
                                        <div class="billing-info mb-20">
                                            <label>Street Address <abbr class="required"
                                                    title="required">*</abbr></label>
                                            <input class="billing-address" name="shipping_address"
                                                placeholder="House number and street name" value="{{$profile->address}}" type="text">

                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="billing-info mb-20">
                                            <label>Town / City <abbr class="required"
                                                    title="required">*</abbr></label>
                                            <input type="text" name="shipping_city" value="{{$profile->city}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="billing-info mb-20">
                                            <label>State <abbr class="required" title="required">*</abbr></label>
                                            <input type="text" name="shipping_state" value="{{$profile->state}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="billing-info mb-20">
                                            <label>Phone <abbr class="required" title="required">*</abbr></label>
                                            <input type="text" name="shipping_contact" value="{{$profile->contact}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="billing-info mb-20">
                                            <label>Email Address <abbr class="required"
                                                    title="required">*</abbr></label>
                                            <input type="email" name="email" value="{{$profile->email}}">
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="checkout-account mb-25">
                            <input class="checkout-toggle2" type="checkbox">
                            <span>Create an account?</span>
                        </div>
                        <div class="checkout-account-toggle open-toggle2 mb-30">
                            <label>Email Address</label>
                            <input placeholder="Password" type="password">
                        </div> --}}
                                {{-- <div class="checkout-account mt-25">
                            <input class="checkout-toggle" type="checkbox">
                            <span>Ship to a different address?</span>
                        </div> --}}
                                {{-- <div class="different-address open-toggle mt-30">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-20">
                                        <label>First Name</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-20">
                                        <label>Last Name</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="billing-info mb-20">
                                        <label>Company Name</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="billing-select mb-20">
                                        <label>Country</label>
                                        <select>
                                            <option>Select a country</option>
                                            <option>Azerbaijan</option>
                                            <option>Bahamas</option>
                                            <option>Bahrain</option>
                                            <option>Bangladesh</option>
                                            <option>Barbados</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="billing-info mb-20">
                                        <label>Street Address</label>
                                        <input class="billing-address" placeholder="House number and street name" type="text">
                                        <input placeholder="Apartment, suite, unit etc." type="text">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="billing-info mb-20">
                                        <label>Town / City</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-20">
                                        <label>State / County</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-20">
                                        <label>Postcode / ZIP</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-20">
                                        <label>Phone</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-20">
                                        <label>Email Address</label>
                                        <input type="text">
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                                <div class="additional-info-wrap">
                                    <label>Order notes</label>
                                    <textarea placeholder="Notes about your order, e.g. special notes for delivery. " name="note"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="your-order-area">
                                <h3>Your order</h3>
                                <div class="your-order-wrap gray-bg-4">
                                    <div class="your-order-info-wrap">
                                        <div class="your-order-info">
                                            <ul>
                                                <li>Total Product(s) <span>{{ Cart::getTotalQuantity() }}</span></li>
                                            </ul>
                                        </div>
                                        {{-- <div class="your-order-middle">
                                    <ul>
                                        <li>Product Name X 1 <span>$329 </span></li>
                                        <li>Product Name X 1 <span>$329 </span></li>
                                    </ul>
                                </div> --}}


                                        <div class="your-order-info order-total">
                                            <ul>
                                                <li>Total <span>${{ Cart::getTotal() }} </span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="payment-method">
                                        <div class="pay-top sin-payment">
                                            <input id="payment_method_1" class="input-radio" type="radio"
                                                value="Cash On Delivery" name="payment_method">
                                            <label for="payment_method_1"> Cash On Delivery </label>

                                        </div>


                                        <div class="pay-top sin-payment sin-payment-3">
                                            <input id="payment-method-4" class="input-radio" type="radio"
                                                value="Authorize" name="payment_method">
                                            <label for="payment-method-4">Authorize.Net <img alt=""
                                                    src="/guest/assets/images/icon-img/payment.png"> </label>

                                        </div>
                                    </div>
                                </div>
                                <div class="Place-order">
                                    <button type="submit" class="btn-checkout">Place Order</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            @endforeach
        </div>
    </div>
</div>
