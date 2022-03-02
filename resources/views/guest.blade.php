@extends('layouts.front')
@section('content')
    <div class="product-area pb-110" style="background-color:white;">
        <div class="container-fluid">
            <div class="section-title-tab-wrap border-bottom-3 mb-30 pb-15">
                <div class="section-title-3">
                    <h2>Best Sellers</h2>
                </div>
                <div class="tab-style-3 nav">
                    <a class="active btn" href="#product-1" data-bs-toggle="tab">Soups Ingredients</a>
                    <a href="#product-2" data-bs-toggle="tab"> Beans and Grains</a>
                    <a href="#product-3" data-bs-toggle="tab"> Flour and Swallow </a>
                    <a href="#product-4" data-bs-toggle="tab"> Dried Vegetables </a>
                    <a href="#product-5" data-bs-toggle="tab"> Spices and Seasonings </a>
                </div>
            </div>
            <div class="tab-content jump">
                <div id="product-1" class="tab-pane active">
                    <div class="row grid">
                        @foreach ($products as $product)
                            @if ($product->category_id == 1)
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
                            @endif
                        @endforeach

                    </div>
                </div>

                <div id="product-2" class="tab-pane">
                    <div class="row grid">
                        @foreach ($products as $product)
                            @if ($product->category_id == 2)
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
                            @endif
                        @endforeach

                    </div>
                </div>
                <div id="product-3" class="tab-pane">
                    <div class="row grid">
                        @foreach ($products as $product)
                            @if ($product->category_id == 3)
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
                            @endif
                        @endforeach

                    </div>
                </div>
                <div id="product-4" class="tab-pane">
                    <div class="row grid">
                        @foreach ($products as $product)
                            @if ($product->category_id == 4)
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
                            @endif
                        @endforeach

                    </div>
                </div>
                <div id="product-5" class="tab-pane">
                    <div class="row grid">
                        @foreach ($products as $product)
                            @if ($product->category_id == 5)
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
                            @endif
                        @endforeach

                    </div>
                </div>
            </div>

        </div>

    </div>
    {{-- Banner --}}

    <div class="banner-area">
        <div class="container">
            <div class="section-title mb-45">
                <h2>Our Collections</h2>
            </div>
            <!--first banner-->
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="banner-wrap banner-mr-1 mb-30">
                        <div class="banner-img banner-img-zoom">
                            <a href=""><img src="/guest/assets/images/banner/banner-3.jpg" width="" height="" alt=""></a>
                        </div>
                        <div class="banner-content-1">
                            {{-- <h2>Zara Pattern Boxed <br>Underwear</h2>
                        <p>Stretch, fresh-cool help you alway comfortable</p> --}}
                            {{-- <div class="btn-style-1">
                            <a class="animated btn-1-padding-2" href="{{url('/')}}">Shop Now</a>
                        </div> --}}
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="banner-wrap banner-mr-1 mb-30">
                        <div class="banner-img banner-img-zoom">
                            <a href=""><img src="/guest/assets/images/banner/banner-2.jpg" width="" height="" alt=""></a>
                        </div>
                        <div class="banner-content-1">
                            {{-- <h2>Zara Pattern Boxed <br>Underwear</h2>
                        <p>Stretch, fresh-cool help you alway comfortable</p> --}}
                            {{-- <div class="btn-style-1">
                            <a class="animated btn-1-padding-2" href="{{url('/')}}">Shop Now</a>
                        </div> --}}
                        </div>
                    </div>
                </div>

                <!--second banner-->



            </div>
        </div>
    </div>



    <div class="banner-area pt-0">
        <div class="container">

            <!--first banner-->
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="banner-wrap banner-mr-1 mb-30">
                        <div class="banner-img banner-img-zoom">
                            <a href=""><img src="/guest/assets/images/banner/banner-3.jpg" width="" height="" alt=""></a>
                        </div>
                        <div class="banner-content-1">
                            {{-- <h2>Zara Pattern Boxed <br>Underwear</h2>
                        <p>Stretch, fresh-cool help you alway comfortable</p> --}}
                            {{-- <div class="btn-style-1">
                            <a class="animated btn-1-padding-2" href="{{url('/')}}">Shop Now</a>
                        </div> --}}
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="banner-wrap banner-mr-1 mb-30">
                        <div class="banner-img banner-img-zoom">
                            <a href=""><img src="/guest/assets/images/banner/banner-1.jpg" width="" height="" alt=""></a>
                        </div>
                        <div class="banner-content-1">
                            {{-- <h2>Zara Pattern Boxed <br>Underwear</h2>
                        <p>Stretch, fresh-cool help you alway comfortable</p> --}}
                            {{-- <div class="btn-style-1">
                            <a class="animated btn-1-padding-2" href="{{url('/')}}">Shop Now</a>
                        </div> --}}
                        </div>
                    </div>
                </div>

                <!--second banner-->



            </div>
        </div>
    </div>
    {{-- second section --}}

    <div class="product-area pb-110 pt-5" style="background-color:white;">
        <div class="container">
            <div class="row grid" style="padding-top: 2rem;">
                @foreach ($products as $product)
                    <div class="col-md-3">
                        <div class="card" style=" ">
                            <div>
                                <a href="{{ route('product.details', $product->id) }}"><img
                                        src="{{ asset('/storage/products/' . $product->photo) }}" class="card-img-top"
                                        alt=""></a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-dark"><a
                                        href="{{ route('product.details', $product->id) }}"><b>{{ $product->name }}</b></a>
                                </h5>
                                <h5 class="card-text text-success"><b>${{ $product->price }}</b> </h5>
                                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
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
@endsection
