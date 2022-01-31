@extends('layouts.auth')

@section('content')
    <div class="container">
        <div class="row pt-5">
            <div class="col-md-6">
                <h3 class="text-justify">Your Cart</h3>
            </div>
            <div class="col-md-6">
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
        <div class="row">
            <div class="col-md-8">
                <table class="table table-condensed table-hover table-responsive-lg">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Name</th>
                            <th>Qty</th>
                            <th>Price</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cartItems as $item)
                            <tr>
                                <td><img src="{{ asset('/storage/products/' . $item->attributes->photo) }}" class="w-25 h-25" alt=""></td>
                                <td>{{ $item->name }}</td>
                                <td>
                                    <form action="{{ route('cart.update') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $item->id }}">
                                        <input type="text" name="quantity" size="2" value="{{ $item->quantity }}">
                                        <button type="submit" class="btn btn-outline-success">update</button>
                                    </form>
                                </td>
                                <td>{{ $item->price }}</td>
                                <td>
                                    <form action="{{ route('cart.remove') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $item->id }}">
                                        <button type="submit" class="btn"><i
                                                class="fas fa-times text-danger"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <span>Total : # {{ Cart::getTotal() }}</span>

            </div>
            <div class="col-md-4"></div>
            <div>
                <a href="{{ url('/') }}" class="px-4 py-2 btn btn-primary">Continue Shopping</a>
                <a href="{{ route('payment') }}" class="px-4 py-2 btn btn-primary">Checkout</a>
                <p style="float:right;">
                <form action="{{ route('cart.clear') }}" method="POST">
                    @csrf
                    <button class="px-4 py-2 btn btn-outline-danger">Clear Cart</button>
                </form>
                </p>
            </div>

        </div>
    </div>
@endsection
