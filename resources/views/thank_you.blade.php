

@extends('layouts.cart_header')
@section('content')


<div class="checkout-main-area pt-120 pb-120">
    <div class="container">

        <div class="customer-zone mb-20">
            <p class="cart-page-title">Order Successfully <a href="{{url('/')}}">Continue shopping</a></p>
            <div class="checkout-login-info3">
                <form action="#">
                    <input type="text" placeholder="Coupon code">
                    <input type="submit" value="Apply Coupon">
                </form>
            </div>
        </div>

    </div>
</div>

@endsection
