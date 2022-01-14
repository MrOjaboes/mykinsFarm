@extends('layouts.auth')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <span class="float-end"><a href="{{route('cart.list')}}">Cart</a></span>
            </div>
        </div>
        <div class="row">
            @foreach ($products as $product)

               <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('/storage/products/' . $product->photo) }}" alt="" class="img-thumbnail img-100">

                    <div class="card-body">
                        <div class="card-title">{{ $product->name }}</div>
                        <div class="card-text">{{ $product->price }}</div>
                    </div>
                    <div class="card-footer"> <a href="{{ route('cart.add', $product->id) }}">Add To cart</a>
                    </div>
                </div>
               </div>



            @endforeach
        </div>
    </div>
@endsection
