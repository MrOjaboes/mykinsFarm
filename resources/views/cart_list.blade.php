@extends('layouts.cart_header')
@section('content')
    <div class="cart-main-area pt-115 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @if (session()->has('message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong><i class="fas fa-check-circle"></i></strong> {{ session()->get('message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                </div>
            </div>
            <h3 class="cart-page-title">Your cart items</h3>

            <div class="row">
                <livewire:cart.index />
            </div>
        </div>
    </div>
@endsection
