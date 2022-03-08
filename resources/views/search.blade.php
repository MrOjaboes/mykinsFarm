@extends('layouts.details')
@section('content')
    <div class="product-area pb-110" style="background-color:#fff">
        <div class="container-fluid">
            <div class="section-title-tab-wrap border-bottom-3 mb-30 pb-15">
                <div class="section-title-3">
                    <h2>Search Result(s)</h2>
                </div>

            </div>
            <div class="tab-content jump">
                <div id="product-1" class="tab-pane active">
                    <div class="row grid">
                        @foreach ($products as $product)
                        @if ($products->count() == 0)
                            <h3 class="text-success text-center">No Product(s) Found!</h3>
                            @else
                            <div class="col-md-3">
                                <div class="card" style=" ">
                                    <div>
                                        <a href="{{ route('product.details', $product->id) }}"><img
                                                src="{{ asset('/storage/products/' . $product->photo) }}"
                                                class="card-img-top" alt=""></a>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title text-dark">
                                            <span><b>Qty : {{ $product->quantity }}12.4kg</b></span>
                                            <a href=""><b>{{ $product->name }}</b></a>
                                        </h5>
                                        <div style="display:flex;flex-direction:row;justify-content:space-evenly;">
                                            <h5 class="card-text text-success"><b>#{{ $product->price }}</b> </h5>
                                            <h5 class="card-text text-success"><b>${{ $product->price }}</b> </h5>
                                        </div>
                                        <form action="{{ route('cart.store') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $product->id }}">
                                            <input type="hidden" name="name" value="{{ $product->name }}">
                                            <input type="hidden" name="price" value="{{ $product->price }}">
                                            <input type="hidden" name="photo" value="{{ $product->photo }}">
                                            <input type="hidden" name="quantity" value="1">
                                            <div class="product-action-3">
                                                <input type="submit" class="btn btn-success" title="Add To Cart"
                                                    value="Add To Cart" />
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        @endif
                        @endforeach
                    </div>
                </div>

            </div>

        </div>

    </div>
<div class="text-justify m-5">
    <a title="home" class="btn" style="background-color:#891e19;color:white;" href="{{url('/')}}">Continue Shopping </a>
</div>
@endsection
