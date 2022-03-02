@extends('layouts.front')
@section('content')

<div class="product-area pb-110">
    <div class="container">
        <div class="section-title-tab-wrap border-bottom-5 align-items-inherit mb-50">
            <div class="section-title-3">
                <h2>Soup Ingredients</h2>
            </div>

        </div>
        <div class="row grid">
            @foreach ($products as $product)
            <div class="col-md-3">
                <div class="card" style=" ">
                    <div>
                        <a href="{{ route('product.details', $product->id) }}"><img
                                src="{{ asset('/storage/products/' . $product->photo) }}"
                                class="card-img-top" alt=""></a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-dark"><a
                                href="{{ route('product.details', $product->id) }}"><b>{{ $product->name }}</b></a>
                        </h5>
                        <h5 class="card-text text-success"><b>${{ $product->price }}</b> </h5>
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
            @endforeach
           
        </div>
    </div>


</div>
    </div>
</div>

@endsection
