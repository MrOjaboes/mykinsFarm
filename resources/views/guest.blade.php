@extends('layouts.front')
@section('content')

<div class="product-area pb-110">

    <div class="container">
        <div class="section-title-tab-wrap border-bottom-3 mb-30 pb-15">
            <div class="section-title-3">
                <h2>Best Sellers</h2>
            </div>
            <div class="tab-style-3 nav">
                <a class="active" href="#product-1" data-bs-toggle="tab">Soups Ingredients</a>
                <a href="#product-2" data-bs-toggle="tab"> Beans and Grains</a>
                <a href="#product-3" data-bs-toggle="tab"> Flour and Swallow </a>
                <a href="#product-4" data-bs-toggle="tab"> Dried Vegetables </a>
                <a href="#product-5" data-bs-toggle="tab"> Spices and Seasonings </a>
            </div>
        </div>
        <div class="tab-content jump">

            <div id="product-1" class="tab-pane active">
                <div class="product-slider-active-2 dot-style-2 dot-style-2-position-static dot-style-2-mrg-2 dot-style-2-active-black">
                    @foreach ($products as $product)
                    @if ($product->category_id == 1)
                    <div class="product-plr-2">
                        <div class="single-product-wrap-2 mb-25">
                            <div class="product-img-2">
                                <a href="product-details.html"><img src="{{ asset('/storage/products/' . $product->photo) }}" alt=""></a>
                            </div>
                            <div class="product-content-3">
                                <span>{{$product->name}}</span>
                                <h4><a href="product-details.html">{{$product->name}}</a></h4>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-2">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star "></i>
                                    </div>
                                    <span>(4)</span>
                                </div>
                                <div class="pro-price-action-wrap">
                                    <div class="product-price-3">
                                        <span>${{$product->price}}</span>
                                    </div>
                                    <div class="product-action-3">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Compare"><i class="icon-basket-loaded"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach

                </div>
            </div>

            <div id="product-2" class="tab-pane">
                <div class="product-slider-active-2 dot-style-2 dot-style-2-position-static dot-style-2-mrg-2 dot-style-2-active-black">
                    @foreach ($products as $product)
                    @if ($product->category_id == 2)
                    <div class="product-plr-2">
                        <div class="single-product-wrap-2 mb-25">
                            <div class="product-img-2">
                                <a href="product-details.html"><img src="{{ asset('/storage/products/' . $product->photo) }}" alt=""></a>
                            </div>
                            <div class="product-content-3">
                                <span>{{$product->name}}</span>
                                <h4><a href="product-details.html">{{$product->name}}</a></h4>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-2">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star "></i>
                                    </div>
                                    <span>(4)</span>
                                </div>
                                <div class="pro-price-action-wrap">
                                    <div class="product-price-3">
                                        <span>${{$product->price}}</span>
                                    </div>
                                    <div class="product-action-3">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Compare"><i class="icon-basket-loaded"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach

                </div>
            </div>
            <div id="product-3" class="tab-pane">
                <div class="product-slider-active-2 dot-style-2 dot-style-2-position-static dot-style-2-mrg-2 dot-style-2-active-black">
                    @foreach ($products as $product)
                    @if ($product->category_id == 3)
                    <div class="product-plr-2">
                        <div class="single-product-wrap-2 mb-25">
                            <div class="product-img-2">
                                <a href="product-details.html"><img src="{{ asset('/storage/products/' . $product->photo) }}" alt=""></a>
                            </div>
                            <div class="product-content-3">
                                <span>{{$product->name}}</span>
                                <h4><a href="product-details.html">{{$product->name}}</a></h4>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-2">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star "></i>
                                    </div>
                                    <span>(4)</span>
                                </div>
                                <div class="pro-price-action-wrap">
                                    <div class="product-price-3">
                                        <span>${{$product->price}}</span>
                                    </div>
                                    <div class="product-action-3">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Compare"><i class="icon-basket-loaded"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach

                </div>
            </div>
            <div id="product-4" class="tab-pane">
                <div class="product-slider-active-2 dot-style-2 dot-style-2-position-static dot-style-2-mrg-2 dot-style-2-active-black">
                    @foreach ($products as $product)
                    @if ($product->category_id == 4)
                    <div class="product-plr-2">
                        <div class="single-product-wrap-2 mb-25">
                            <div class="product-img-2">
                                <a href="product-details.html"><img src="{{ asset('/storage/products/' . $product->photo) }}" alt=""></a>
                            </div>
                            <div class="product-content-3">
                                <span>{{$product->name}}</span>
                                <h4><a href="product-details.html">{{$product->name}}</a></h4>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-2">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star "></i>
                                    </div>
                                    <span>(4)</span>
                                </div>
                                <div class="pro-price-action-wrap">
                                    <div class="product-price-3">
                                        <span>${{$product->price}}</span>
                                    </div>
                                    <div class="product-action-3">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Compare"><i class="icon-basket-loaded"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach

                </div>
            </div>
            <div id="product-5" class="tab-pane">
                <div class="product-slider-active-2 dot-style-2 dot-style-2-position-static dot-style-2-mrg-2 dot-style-2-active-black">
                    @foreach ($products as $product)
                    @if ($product->category_id == 5)
                    <div class="product-plr-2">
                        <div class="single-product-wrap-2 mb-25">
                            <div class="product-img-2">
                                <a href="product-details.html"><img src="{{ asset('/storage/products/' . $product->photo) }}" alt=""></a>
                            </div>
                            <div class="product-content-3">
                                <span>{{$product->name}}</span>
                                <h4><a href="product-details.html">{{$product->name}}</a></h4>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-2">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star "></i>
                                    </div>
                                    <span>(4)</span>
                                </div>
                                <div class="pro-price-action-wrap">
                                    <div class="product-price-3">
                                        <span>${{$product->price}}</span>
                                    </div>
                                    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $product->id }}">
                                        <input type="hidden" name="name" value="{{ $product->name }}">
                                        <input type="hidden" name="price" value="{{ $product->price }}">
                                        <input type="hidden" name="photo" value="{{ $product->photo }}">
                                        <input type="hidden" name="quantity" value="1">
                                        <div class="product-action-3">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Compare"><i class="icon-basket-loaded"></i></button>
                                        </div>
                                    </form>


                                </div>
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





{{-- <div class="product-categories-area pb-70">
    <div class="container">
        <div class="section-title-tab-wrap border-bottom-3 mb-50 pb-20">
            <div class="section-title-3">
                <h2>Top Categories Of This Month</h2>
            </div>
            <div class="btn-style-5">
                <a href="shop.html">View All Categories <i class="icon-arrow-right"></i></a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="product-categories-wrap product-categories-border mb-45">
                    <div class="product-categories-img">
                        <a href="product-details.html"><img src="assets/images/product/product-categories-1.jpg" alt=""></a>
                    </div>
                    <div class="product-categories-content">
                        <h3>Women</h3>
                        <ul>
                            <li><a href="shop.html">Dresses</a></li>
                            <li><a href="shop.html">T-Shirts</a></li>
                            <li><a href="shop.html">Blazers</a></li>
                        </ul>
                        <div class="product-categories-btn">
                            <a href="shop.html">View All <i class="icon-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="product-categories-wrap product-categories-border categories-border-none-md mb-45">
                    <div class="product-categories-img">
                        <a href="product-details.html"><img src="assets/images/product/product-categories-2.jpg" alt=""></a>
                    </div>
                    <div class="product-categories-content">
                        <h3>Men</h3>
                        <ul>
                            <li><a href="shop.html">Coats</a></li>
                            <li><a href="shop.html">Shirts</a></li>
                            <li><a href="shop.html">Blazers</a></li>
                        </ul>
                        <div class="product-categories-btn">
                            <a href="shop.html">View All <i class="icon-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="product-categories-wrap  categories-border-add-md mb-45">
                    <div class="product-categories-img">
                        <a href="product-details.html"><img src="assets/images/product/product-categories-3.jpg" alt=""></a>
                    </div>
                    <div class="product-categories-content">
                        <h3>Baby Girl</h3>
                        <ul>
                            <li><a href="shop.html">Coats</a></li>
                            <li><a href="shop.html">Jumpsuits</a></li>
                            <li><a href="shop.html">Knitwear</a></li>
                        </ul>
                        <div class="product-categories-btn">
                            <a href="shop.html">View All <i class="icon-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="product-categories-wrap product-categories-border categories-border-none-md mb-45">
                    <div class="product-categories-img">
                        <a href="product-details.html"><img src="assets/images/product/product-categories-4.jpg" alt=""></a>
                    </div>
                    <div class="product-categories-content">
                        <h3>Baby Boy</h3>
                        <ul>
                            <li><a href="shop.html">Coats</a></li>
                            <li><a href="shop.html">Sweatshirts</a></li>
                            <li><a href="shop.html">Knitwear</a></li>
                        </ul>
                        <div class="product-categories-btn">
                            <a href="shop.html">View All <i class="icon-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="product-categories-wrap product-categories-border mb-45">
                    <div class="product-categories-img">
                        <a href="product-details.html"><img src="assets/images/product/product-categories-5.jpg" alt=""></a>
                    </div>
                    <div class="product-categories-content">
                        <h3>Accessories</h3>
                        <ul>
                            <li><a href="shop.html">Scarfs</a></li>
                            <li><a href="shop.html">Backpacks</a></li>
                            <li><a href="shop.html">Wallets</a></li>
                        </ul>
                        <div class="product-categories-btn">
                            <a href="shop.html">View All <i class="icon-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="product-categories-wrap mb-45">
                    <div class="product-categories-img">
                        <a href="product-details.html"><img src="assets/images/product/product-categories-6.jpg" alt=""></a>
                    </div>
                    <div class="product-categories-content">
                        <h3>Shoes</h3>
                        <ul>
                            <li><a href="shop.html">Trainers</a></li>
                            <li><a href="shop.html">Sneakers</a></li>
                            <li><a href="shop.html">Flats</a></li>
                        </ul>
                        <div class="product-categories-btn">
                            <a href="shop.html">View All <i class="icon-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
{{-- <div class="banner-area pb-85">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="banner-wrap mb-30">
                    <div class="banner-img banner-img-zoom">
                        <a href="product-details.html"><img src="assets/images/banner/banner-6.jpg" alt=""></a>
                    </div>
                    <div class="banner-content-6">
                        <h3>Mini Backpack for Girls</h3>
                        <div class="banner-btn-1">
                            <a href="product-details.html">Shop now <i class="icon-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="banner-wrap mb-30">
                    <div class="banner-img banner-img-zoom">
                        <a href="product-details.html"><img src="assets/images/banner/banner-7.jpg" alt=""></a>
                    </div>
                    <div class="banner-content-7-8-wrap">
                        <div class="banner-content-7">
                            <span>Black & White</span>
                            <h2>Sneakers</h2>
                            <p>Lorem ispum dolor sit <br> amet purro</p>
                        </div>
                        <div class="banner-content-8">
                            <span>discount</span>
                            <h3>35% <span>Off</span></h3>
                            <div class="banner-btn-2">
                                <a href="product-details.html">Shop now <i class="icon-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}

{{-- <div class="product-area pb-110">
    <div class="container">
        <div class="section-title-tab-wrap border-bottom-5 align-items-inherit mb-50">
            <div class="section-title-3">
                <h2>Recommended For You</h2>
            </div>
            <div class="tab-style-4 nav">
                <a class="active" href="#product-6" data-bs-toggle="tab">Top 10</a>
                <a href="#product-7" data-bs-toggle="tab"> Women </a>
                <a href="#product-8" data-bs-toggle="tab">Men </a>
                <a href="#product-9" data-bs-toggle="tab"> Shoes</a>
                <a href="#product-10" data-bs-toggle="tab">Accessories</a>
            </div>
        </div>
        <div class="tab-content jump">
            <div id="product-6" class="tab-pane active">
                <div class="product-slider-active-3 nav-style-3">
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-27.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <div class="product-content-categories">
                                    <a href="shop.html">Men</a>
                                </div>
                                <h3><a href="product-details.html">Basic Simple T-Shirt</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$38.50 </span>
                                    <span class="old-price">$42.85</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2">
                                <div class="product-content-categories">
                                    <a href="shop.html">Men</a>
                                </div>
                                <h3><a href="product-details.html">Basic Simple T-Shirt</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$38.50 </span>
                                    <span class="old-price">$42.85</span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-28.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <div class="product-content-categories">
                                    <a href="shop.html">Women,</a>
                                    <a href="shop.html">accessories</a>
                                </div>
                                <h3><a href="product-details.html">Scarf Fabric Wedges</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$56.50 </span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2">
                                <div class="product-content-categories">
                                    <a href="shop.html">Women,</a>
                                    <a href="shop.html">accessories</a>
                                </div>
                                <h3><a href="product-details.html">Scarf Fabric Wedges</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$56.50 </span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-29.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <div class="product-content-categories">
                                    <a href="shop.html">Women,</a>
                                    <a href="shop.html">Short</a>
                                </div>
                                <h3><a href="product-details.html">Black Simple Sneaker</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(6)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$43.50</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2">
                                <div class="product-content-categories">
                                    <a href="shop.html">Women,</a>
                                    <a href="shop.html">Short</a>
                                </div>
                                <h3><a href="product-details.html">Black Simple Sneaker</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(6)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$43.50</span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-30.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <div class="product-content-categories">
                                    <a href="shop.html">Men, </a>
                                    <a href="shop.html">Watches</a>
                                </div>
                                <h3><a href="product-details.html">Silver Coloured Watch</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(3)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$265.70 </span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2">
                                <div class="product-content-categories">
                                    <a href="shop.html">Men, </a>
                                    <a href="shop.html">Watches</a>
                                </div>
                                <h3><a href="product-details.html">Silver Coloured Watch</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(3)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$265.70 </span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-31.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <div class="product-content-categories">
                                    <a href="shop.html">women</a>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star "></i>
                                    </div>
                                    <span>(1)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$25.56 </span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2">
                                <div class="product-content-categories">
                                    <a href="shop.html">women</a>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star "></i>
                                    </div>
                                    <span>(1)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$25.56 </span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-28.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <div class="product-content-categories">
                                    <a href="shop.html">Women,</a>
                                    <a href="shop.html">accessories</a>
                                </div>
                                <h3><a href="product-details.html">Scarf Fabric Wedges</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$56.50 </span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2">
                                <div class="product-content-categories">
                                    <a href="shop.html">Women,</a>
                                    <a href="shop.html">accessories</a>
                                </div>
                                <h3><a href="product-details.html">Scarf Fabric Wedges</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$56.50 </span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="product-7" class="tab-pane">
                <div class="product-slider-active-3 nav-style-3">
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-28.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <div class="product-content-categories">
                                    <a href="shop.html">Women,</a>
                                    <a href="shop.html">accessories</a>
                                </div>
                                <h3><a href="product-details.html">Scarf Fabric Wedges</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$56.50 </span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2">
                                <div class="product-content-categories">
                                    <a href="shop.html">Women,</a>
                                    <a href="shop.html">accessories</a>
                                </div>
                                <h3><a href="product-details.html">Scarf Fabric Wedges</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$56.50 </span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-31.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <div class="product-content-categories">
                                    <a href="shop.html">women</a>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star "></i>
                                    </div>
                                    <span>(1)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$25.56 </span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2">
                                <div class="product-content-categories">
                                    <a href="shop.html">women</a>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star "></i>
                                    </div>
                                    <span>(1)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$25.56 </span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-30.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <div class="product-content-categories">
                                    <a href="shop.html">Men, </a>
                                    <a href="shop.html">Watches</a>
                                </div>
                                <h3><a href="product-details.html">Silver Coloured Watch</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(3)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$265.70 </span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2">
                                <div class="product-content-categories">
                                    <a href="shop.html">Men, </a>
                                    <a href="shop.html">Watches</a>
                                </div>
                                <h3><a href="product-details.html">Silver Coloured Watch</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(3)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$265.70 </span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-29.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <div class="product-content-categories">
                                    <a href="shop.html">Women,</a>
                                    <a href="shop.html">Short</a>
                                </div>
                                <h3><a href="product-details.html">Black Simple Sneaker</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(6)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$43.50</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2">
                                <div class="product-content-categories">
                                    <a href="shop.html">Women,</a>
                                    <a href="shop.html">Short</a>
                                </div>
                                <h3><a href="product-details.html">Black Simple Sneaker</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(6)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$43.50</span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-28.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <div class="product-content-categories">
                                    <a href="shop.html">Women,</a>
                                    <a href="shop.html">accessories</a>
                                </div>
                                <h3><a href="product-details.html">Scarf Fabric Wedges</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$56.50 </span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2">
                                <div class="product-content-categories">
                                    <a href="shop.html">Women,</a>
                                    <a href="shop.html">accessories</a>
                                </div>
                                <h3><a href="product-details.html">Scarf Fabric Wedges</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$56.50 </span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-27.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <div class="product-content-categories">
                                    <a href="shop.html">Men</a>
                                </div>
                                <h3><a href="product-details.html">Basic Simple T-Shirt</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$38.50 </span>
                                    <span class="old-price">$42.85</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2">
                                <div class="product-content-categories">
                                    <a href="shop.html">Men</a>
                                </div>
                                <h3><a href="product-details.html">Basic Simple T-Shirt</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$38.50 </span>
                                    <span class="old-price">$42.85</span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="product-8" class="tab-pane">
                <div class="product-slider-active-3 nav-style-3">
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-31.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <div class="product-content-categories">
                                    <a href="shop.html">women</a>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star "></i>
                                    </div>
                                    <span>(1)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$25.56 </span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2">
                                <div class="product-content-categories">
                                    <a href="shop.html">women</a>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star "></i>
                                    </div>
                                    <span>(1)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$25.56 </span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-30.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <div class="product-content-categories">
                                    <a href="shop.html">Men, </a>
                                    <a href="shop.html">Watches</a>
                                </div>
                                <h3><a href="product-details.html">Silver Coloured Watch</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(3)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$265.70 </span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2">
                                <div class="product-content-categories">
                                    <a href="shop.html">Men, </a>
                                    <a href="shop.html">Watches</a>
                                </div>
                                <h3><a href="product-details.html">Silver Coloured Watch</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(3)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$265.70 </span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-29.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <div class="product-content-categories">
                                    <a href="shop.html">Women,</a>
                                    <a href="shop.html">Short</a>
                                </div>
                                <h3><a href="product-details.html">Black Simple Sneaker</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(6)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$43.50</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2">
                                <div class="product-content-categories">
                                    <a href="shop.html">Women,</a>
                                    <a href="shop.html">Short</a>
                                </div>
                                <h3><a href="product-details.html">Black Simple Sneaker</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(6)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$43.50</span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-28.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <div class="product-content-categories">
                                    <a href="shop.html">Women,</a>
                                    <a href="shop.html">accessories</a>
                                </div>
                                <h3><a href="product-details.html">Scarf Fabric Wedges</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$56.50 </span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2">
                                <div class="product-content-categories">
                                    <a href="shop.html">Women,</a>
                                    <a href="shop.html">accessories</a>
                                </div>
                                <h3><a href="product-details.html">Scarf Fabric Wedges</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$56.50 </span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-27.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <div class="product-content-categories">
                                    <a href="shop.html">Men</a>
                                </div>
                                <h3><a href="product-details.html">Basic Simple T-Shirt</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$38.50 </span>
                                    <span class="old-price">$42.85</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2">
                                <div class="product-content-categories">
                                    <a href="shop.html">Men</a>
                                </div>
                                <h3><a href="product-details.html">Basic Simple T-Shirt</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$38.50 </span>
                                    <span class="old-price">$42.85</span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-28.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <div class="product-content-categories">
                                    <a href="shop.html">Women,</a>
                                    <a href="shop.html">accessories</a>
                                </div>
                                <h3><a href="product-details.html">Scarf Fabric Wedges</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$56.50 </span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2">
                                <div class="product-content-categories">
                                    <a href="shop.html">Women,</a>
                                    <a href="shop.html">accessories</a>
                                </div>
                                <h3><a href="product-details.html">Scarf Fabric Wedges</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$56.50 </span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="product-9" class="tab-pane">
                <div class="product-slider-active-3 nav-style-3">
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-30.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <div class="product-content-categories">
                                    <a href="shop.html">Men, </a>
                                    <a href="shop.html">Watches</a>
                                </div>
                                <h3><a href="product-details.html">Silver Coloured Watch</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(3)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$265.70 </span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2">
                                <div class="product-content-categories">
                                    <a href="shop.html">Men, </a>
                                    <a href="shop.html">Watches</a>
                                </div>
                                <h3><a href="product-details.html">Silver Coloured Watch</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(3)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$265.70 </span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-29.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <div class="product-content-categories">
                                    <a href="shop.html">Women,</a>
                                    <a href="shop.html">Short</a>
                                </div>
                                <h3><a href="product-details.html">Black Simple Sneaker</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(6)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$43.50</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2">
                                <div class="product-content-categories">
                                    <a href="shop.html">Women,</a>
                                    <a href="shop.html">Short</a>
                                </div>
                                <h3><a href="product-details.html">Black Simple Sneaker</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(6)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$43.50</span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-28.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <div class="product-content-categories">
                                    <a href="shop.html">Women,</a>
                                    <a href="shop.html">accessories</a>
                                </div>
                                <h3><a href="product-details.html">Scarf Fabric Wedges</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$56.50 </span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2">
                                <div class="product-content-categories">
                                    <a href="shop.html">Women,</a>
                                    <a href="shop.html">accessories</a>
                                </div>
                                <h3><a href="product-details.html">Scarf Fabric Wedges</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$56.50 </span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-27.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <div class="product-content-categories">
                                    <a href="shop.html">Men</a>
                                </div>
                                <h3><a href="product-details.html">Basic Simple T-Shirt</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$38.50 </span>
                                    <span class="old-price">$42.85</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2">
                                <div class="product-content-categories">
                                    <a href="shop.html">Men</a>
                                </div>
                                <h3><a href="product-details.html">Basic Simple T-Shirt</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$38.50 </span>
                                    <span class="old-price">$42.85</span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-31.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <div class="product-content-categories">
                                    <a href="shop.html">women</a>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star "></i>
                                    </div>
                                    <span>(1)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$25.56 </span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2">
                                <div class="product-content-categories">
                                    <a href="shop.html">women</a>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star "></i>
                                    </div>
                                    <span>(1)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$25.56 </span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-28.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <div class="product-content-categories">
                                    <a href="shop.html">Women,</a>
                                    <a href="shop.html">accessories</a>
                                </div>
                                <h3><a href="product-details.html">Scarf Fabric Wedges</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$56.50 </span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2">
                                <div class="product-content-categories">
                                    <a href="shop.html">Women,</a>
                                    <a href="shop.html">accessories</a>
                                </div>
                                <h3><a href="product-details.html">Scarf Fabric Wedges</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$56.50 </span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="product-10" class="tab-pane">
                <div class="product-slider-active-3 nav-style-3">
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-28.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <div class="product-content-categories">
                                    <a href="shop.html">Women,</a>
                                    <a href="shop.html">accessories</a>
                                </div>
                                <h3><a href="product-details.html">Scarf Fabric Wedges</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$56.50 </span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2">
                                <div class="product-content-categories">
                                    <a href="shop.html">Women,</a>
                                    <a href="shop.html">accessories</a>
                                </div>
                                <h3><a href="product-details.html">Scarf Fabric Wedges</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$56.50 </span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-29.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <div class="product-content-categories">
                                    <a href="shop.html">Women,</a>
                                    <a href="shop.html">Short</a>
                                </div>
                                <h3><a href="product-details.html">Black Simple Sneaker</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(6)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$43.50</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2">
                                <div class="product-content-categories">
                                    <a href="shop.html">Women,</a>
                                    <a href="shop.html">Short</a>
                                </div>
                                <h3><a href="product-details.html">Black Simple Sneaker</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(6)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$43.50</span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-30.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <div class="product-content-categories">
                                    <a href="shop.html">Men, </a>
                                    <a href="shop.html">Watches</a>
                                </div>
                                <h3><a href="product-details.html">Silver Coloured Watch</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(3)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$265.70 </span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2">
                                <div class="product-content-categories">
                                    <a href="shop.html">Men, </a>
                                    <a href="shop.html">Watches</a>
                                </div>
                                <h3><a href="product-details.html">Silver Coloured Watch</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(3)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$265.70 </span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-31.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <div class="product-content-categories">
                                    <a href="shop.html">women</a>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star "></i>
                                    </div>
                                    <span>(1)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$25.56 </span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2">
                                <div class="product-content-categories">
                                    <a href="shop.html">women</a>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star "></i>
                                    </div>
                                    <span>(1)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$25.56 </span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-27.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <div class="product-content-categories">
                                    <a href="shop.html">Men</a>
                                </div>
                                <h3><a href="product-details.html">Basic Simple T-Shirt</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$38.50 </span>
                                    <span class="old-price">$42.85</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2">
                                <div class="product-content-categories">
                                    <a href="shop.html">Men</a>
                                </div>
                                <h3><a href="product-details.html">Basic Simple T-Shirt</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$38.50 </span>
                                    <span class="old-price">$42.85</span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-28.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <div class="product-content-categories">
                                    <a href="shop.html">Women,</a>
                                    <a href="shop.html">accessories</a>
                                </div>
                                <h3><a href="product-details.html">Scarf Fabric Wedges</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$56.50 </span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2">
                                <div class="product-content-categories">
                                    <a href="shop.html">Women,</a>
                                    <a href="shop.html">accessories</a>
                                </div>
                                <h3><a href="product-details.html">Scarf Fabric Wedges</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$56.50 </span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
{{-- <div class="product-area pb-115">
    <div class="container">
        <div class="section-title-tab-wrap border-bottom-5 align-items-inherit mb-50">
            <div class="section-title-3">
                <h2>Editors' Picks</h2>
            </div>
            <div class="tab-style-4 nav">
                <a class="active" href="#product-11" data-bs-toggle="tab">Top 10</a>
                <a href="#product-12" data-bs-toggle="tab"> Baby Girl </a>
                <a href="#product-13" data-bs-toggle="tab"> Baby Boy </a>
                <a href="#product-14" data-bs-toggle="tab"> Accessories </a>
                <a href="#product-15" data-bs-toggle="tab">Shoes </a>
            </div>
        </div>
        <div class="tab-content jump">
            <div id="product-11" class="tab-pane active">
                <div class="product-slider-active-3 nav-style-3">
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-32.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <div class="product-content-categories">
                                    <a href="shop.html">kid</a>
                                </div>
                                <h3><a href="product-details.html">Simle Rounded Sunglasses</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                    </div>
                                    <span>(9)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$45.50</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2">
                                <div class="product-content-categories">
                                    <a href="shop.html">kid</a>
                                </div>
                                <h3><a href="product-details.html">Simle Rounded Sunglasses</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                    </div>
                                    <span>(9)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$45.50</span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-33.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <div class="product-content-categories">
                                    <a href="shop.html">women</a>
                                </div>
                                <h3><a href="product-details.html">Faded Grey T-Shirt</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$16.50 </span>
                                    <span class="old-price">$32.85 </span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2">
                                <div class="product-content-categories">
                                    <a href="shop.html">women</a>
                                </div>
                                <h3><a href="product-details.html">Faded Grey T-Shirt</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$16.50 </span>
                                    <span class="old-price">$32.85 </span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-34.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <div class="product-content-categories">
                                    <a href="shop.html">mens, </a>
                                    <a href="shop.html">shoes</a>
                                </div>
                                <h3><a href="product-details.html">Norda Sport Sneaker</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$66.50 </span>
                                    <span class="old-price">$82.85</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2">
                                <div class="product-content-categories">
                                    <a href="shop.html">mens, </a>
                                    <a href="shop.html">shoes</a>
                                </div>
                                <h3><a href="product-details.html">Norda Sport Sneaker</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$66.50 </span>
                                    <span class="old-price">$82.85</span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-35.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <div class="product-content-categories">
                                    <a href="shop.html">women, </a>
                                    <a href="shop.html">accessories</a>
                                </div>
                                <h3><a href="product-details.html">Snakeskin Print Nelt</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(3)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$33.24 </span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2">
                                <div class="product-content-categories">
                                    <a href="shop.html">women, </a>
                                    <a href="shop.html">accessories</a>
                                </div>
                                <h3><a href="product-details.html">Snakeskin Print Nelt</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(3)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$33.24 </span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-36.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <div class="product-content-categories">
                                    <a href="shop.html">Accessories</a>
                                </div>
                                <h3><a href="product-details.html">Vintage Socks X3</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star "></i>
                                    </div>
                                    <span>(1)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$25.56 </span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2">
                                <div class="product-content-categories">
                                    <a href="shop.html">Accessories</a>
                                </div>
                                <h3><a href="product-details.html">Vintage Socks X3</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star "></i>
                                    </div>
                                    <span>(1)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$25.56 </span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-33.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <div class="product-content-categories">
                                    <a href="shop.html">women</a>
                                </div>
                                <h3><a href="product-details.html">Faded Grey T-Shirt</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$16.50 </span>
                                    <span class="old-price">$32.85 </span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2">
                                <div class="product-content-categories">
                                    <a href="shop.html">women</a>
                                </div>
                                <h3><a href="product-details.html">Faded Grey T-Shirt</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$16.50 </span>
                                    <span class="old-price">$32.85 </span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="product-12" class="tab-pane">
                <div class="product-slider-active-3 nav-style-3">
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-36.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <div class="product-content-categories">
                                    <a href="shop.html">Accessories</a>
                                </div>
                                <h3><a href="product-details.html">Vintage Socks X3</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star "></i>
                                    </div>
                                    <span>(1)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$25.56 </span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2">
                                <div class="product-content-categories">
                                    <a href="shop.html">Accessories</a>
                                </div>
                                <h3><a href="product-details.html">Vintage Socks X3</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star "></i>
                                    </div>
                                    <span>(1)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$25.56 </span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-35.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <div class="product-content-categories">
                                    <a href="shop.html">women, </a>
                                    <a href="shop.html">accessories</a>
                                </div>
                                <h3><a href="product-details.html">Snakeskin Print Nelt</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(3)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$33.24 </span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2">
                                <div class="product-content-categories">
                                    <a href="shop.html">women, </a>
                                    <a href="shop.html">accessories</a>
                                </div>
                                <h3><a href="product-details.html">Snakeskin Print Nelt</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(3)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$33.24 </span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-34.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <div class="product-content-categories">
                                    <a href="shop.html">mens, </a>
                                    <a href="shop.html">shoes</a>
                                </div>
                                <h3><a href="product-details.html">Norda Sport Sneaker</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$66.50 </span>
                                    <span class="old-price">$82.85</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2">
                                <div class="product-content-categories">
                                    <a href="shop.html">mens, </a>
                                    <a href="shop.html">shoes</a>
                                </div>
                                <h3><a href="product-details.html">Norda Sport Sneaker</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$66.50 </span>
                                    <span class="old-price">$82.85</span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-33.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <div class="product-content-categories">
                                    <a href="shop.html">women</a>
                                </div>
                                <h3><a href="product-details.html">Faded Grey T-Shirt</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$16.50 </span>
                                    <span class="old-price">$32.85 </span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2">
                                <div class="product-content-categories">
                                    <a href="shop.html">women</a>
                                </div>
                                <h3><a href="product-details.html">Faded Grey T-Shirt</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$16.50 </span>
                                    <span class="old-price">$32.85 </span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-32.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <div class="product-content-categories">
                                    <a href="shop.html">kid</a>
                                </div>
                                <h3><a href="product-details.html">Simle Rounded Sunglasses</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                    </div>
                                    <span>(9)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$45.50</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2">
                                <div class="product-content-categories">
                                    <a href="shop.html">kid</a>
                                </div>
                                <h3><a href="product-details.html">Simle Rounded Sunglasses</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                    </div>
                                    <span>(9)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$45.50</span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-27.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <div class="product-content-categories">
                                    <a href="shop.html">Men</a>
                                </div>
                                <h3><a href="product-details.html">Basic Simple T-Shirt</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$38.50 </span>
                                    <span class="old-price">$42.85</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2">
                                <div class="product-content-categories">
                                    <a href="shop.html">Men</a>
                                </div>
                                <h3><a href="product-details.html">Basic Simple T-Shirt</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$38.50 </span>
                                    <span class="old-price">$42.85</span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="product-13" class="tab-pane">
                <div class="product-slider-active-3 nav-style-3">
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-28.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <div class="product-content-categories">
                                    <a href="shop.html">Women,</a>
                                    <a href="shop.html">accessories</a>
                                </div>
                                <h3><a href="product-details.html">Scarf Fabric Wedges</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$56.50 </span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2">
                                <div class="product-content-categories">
                                    <a href="shop.html">Women,</a>
                                    <a href="shop.html">accessories</a>
                                </div>
                                <h3><a href="product-details.html">Scarf Fabric Wedges</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$56.50 </span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-29.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <div class="product-content-categories">
                                    <a href="shop.html">Women,</a>
                                    <a href="shop.html">Short</a>
                                </div>
                                <h3><a href="product-details.html">Black Simple Sneaker</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(6)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$43.50</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2">
                                <div class="product-content-categories">
                                    <a href="shop.html">Women,</a>
                                    <a href="shop.html">Short</a>
                                </div>
                                <h3><a href="product-details.html">Black Simple Sneaker</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(6)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$43.50</span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-30.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <div class="product-content-categories">
                                    <a href="shop.html">Men, </a>
                                    <a href="shop.html">Watches</a>
                                </div>
                                <h3><a href="product-details.html">Silver Coloured Watch</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(3)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$265.70 </span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2">
                                <div class="product-content-categories">
                                    <a href="shop.html">Men, </a>
                                    <a href="shop.html">Watches</a>
                                </div>
                                <h3><a href="product-details.html">Silver Coloured Watch</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(3)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$265.70 </span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-31.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <div class="product-content-categories">
                                    <a href="shop.html">women</a>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star "></i>
                                    </div>
                                    <span>(1)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$25.56 </span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2">
                                <div class="product-content-categories">
                                    <a href="shop.html">women</a>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star "></i>
                                    </div>
                                    <span>(1)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$25.56 </span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-27.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <div class="product-content-categories">
                                    <a href="shop.html">Men</a>
                                </div>
                                <h3><a href="product-details.html">Basic Simple T-Shirt</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$38.50 </span>
                                    <span class="old-price">$42.85</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2">
                                <div class="product-content-categories">
                                    <a href="shop.html">Men</a>
                                </div>
                                <h3><a href="product-details.html">Basic Simple T-Shirt</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$38.50 </span>
                                    <span class="old-price">$42.85</span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-28.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <div class="product-content-categories">
                                    <a href="shop.html">Women,</a>
                                    <a href="shop.html">accessories</a>
                                </div>
                                <h3><a href="product-details.html">Scarf Fabric Wedges</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$56.50 </span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2">
                                <div class="product-content-categories">
                                    <a href="shop.html">Women,</a>
                                    <a href="shop.html">accessories</a>
                                </div>
                                <h3><a href="product-details.html">Scarf Fabric Wedges</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$56.50 </span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="product-14" class="tab-pane">
                <div class="product-slider-active-3 nav-style-3">
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-29.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <div class="product-content-categories">
                                    <a href="shop.html">Women,</a>
                                    <a href="shop.html">Short</a>
                                </div>
                                <h3><a href="product-details.html">Black Simple Sneaker</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(6)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$43.50</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2">
                                <div class="product-content-categories">
                                    <a href="shop.html">Women,</a>
                                    <a href="shop.html">Short</a>
                                </div>
                                <h3><a href="product-details.html">Black Simple Sneaker</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(6)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$43.50</span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-30.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <div class="product-content-categories">
                                    <a href="shop.html">Men, </a>
                                    <a href="shop.html">Watches</a>
                                </div>
                                <h3><a href="product-details.html">Silver Coloured Watch</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(3)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$265.70 </span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2">
                                <div class="product-content-categories">
                                    <a href="shop.html">Men, </a>
                                    <a href="shop.html">Watches</a>
                                </div>
                                <h3><a href="product-details.html">Silver Coloured Watch</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(3)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$265.70 </span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-27.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <div class="product-content-categories">
                                    <a href="shop.html">Men</a>
                                </div>
                                <h3><a href="product-details.html">Basic Simple T-Shirt</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$38.50 </span>
                                    <span class="old-price">$42.85</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2">
                                <div class="product-content-categories">
                                    <a href="shop.html">Men</a>
                                </div>
                                <h3><a href="product-details.html">Basic Simple T-Shirt</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$38.50 </span>
                                    <span class="old-price">$42.85</span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-28.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <div class="product-content-categories">
                                    <a href="shop.html">Women,</a>
                                    <a href="shop.html">accessories</a>
                                </div>
                                <h3><a href="product-details.html">Scarf Fabric Wedges</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$56.50 </span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2">
                                <div class="product-content-categories">
                                    <a href="shop.html">Women,</a>
                                    <a href="shop.html">accessories</a>
                                </div>
                                <h3><a href="product-details.html">Scarf Fabric Wedges</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$56.50 </span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-31.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <div class="product-content-categories">
                                    <a href="shop.html">women</a>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star "></i>
                                    </div>
                                    <span>(1)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$25.56 </span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2">
                                <div class="product-content-categories">
                                    <a href="shop.html">women</a>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star "></i>
                                    </div>
                                    <span>(1)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$25.56 </span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-28.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <div class="product-content-categories">
                                    <a href="shop.html">Women,</a>
                                    <a href="shop.html">accessories</a>
                                </div>
                                <h3><a href="product-details.html">Scarf Fabric Wedges</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$56.50 </span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2">
                                <div class="product-content-categories">
                                    <a href="shop.html">Women,</a>
                                    <a href="shop.html">accessories</a>
                                </div>
                                <h3><a href="product-details.html">Scarf Fabric Wedges</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$56.50 </span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="product-15" class="tab-pane">
                <div class="product-slider-active-3 nav-style-3">
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-31.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <div class="product-content-categories">
                                    <a href="shop.html">women</a>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star "></i>
                                    </div>
                                    <span>(1)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$25.56 </span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2">
                                <div class="product-content-categories">
                                    <a href="shop.html">women</a>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star "></i>
                                    </div>
                                    <span>(1)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$25.56 </span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-30.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <div class="product-content-categories">
                                    <a href="shop.html">Men, </a>
                                    <a href="shop.html">Watches</a>
                                </div>
                                <h3><a href="product-details.html">Silver Coloured Watch</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(3)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$265.70 </span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2">
                                <div class="product-content-categories">
                                    <a href="shop.html">Men, </a>
                                    <a href="shop.html">Watches</a>
                                </div>
                                <h3><a href="product-details.html">Silver Coloured Watch</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(3)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$265.70 </span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-29.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <div class="product-content-categories">
                                    <a href="shop.html">Women,</a>
                                    <a href="shop.html">Short</a>
                                </div>
                                <h3><a href="product-details.html">Black Simple Sneaker</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(6)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$43.50</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2">
                                <div class="product-content-categories">
                                    <a href="shop.html">Women,</a>
                                    <a href="shop.html">Short</a>
                                </div>
                                <h3><a href="product-details.html">Black Simple Sneaker</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(6)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$43.50</span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-27.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <div class="product-content-categories">
                                    <a href="shop.html">Men</a>
                                </div>
                                <h3><a href="product-details.html">Basic Simple T-Shirt</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$38.50 </span>
                                    <span class="old-price">$42.85</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2">
                                <div class="product-content-categories">
                                    <a href="shop.html">Men</a>
                                </div>
                                <h3><a href="product-details.html">Basic Simple T-Shirt</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$38.50 </span>
                                    <span class="old-price">$42.85</span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-28.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <div class="product-content-categories">
                                    <a href="shop.html">Women,</a>
                                    <a href="shop.html">accessories</a>
                                </div>
                                <h3><a href="product-details.html">Scarf Fabric Wedges</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$56.50 </span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2">
                                <div class="product-content-categories">
                                    <a href="shop.html">Women,</a>
                                    <a href="shop.html">accessories</a>
                                </div>
                                <h3><a href="product-details.html">Scarf Fabric Wedges</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$56.50 </span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-28.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <div class="product-content-categories">
                                    <a href="shop.html">Women,</a>
                                    <a href="shop.html">accessories</a>
                                </div>
                                <h3><a href="product-details.html">Scarf Fabric Wedges</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$56.50 </span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2">
                                <div class="product-content-categories">
                                    <a href="shop.html">Women,</a>
                                    <a href="shop.html">accessories</a>
                                </div>
                                <h3><a href="product-details.html">Scarf Fabric Wedges</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$56.50 </span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
{{-- <div class="blog-area bg-gray-3 pt-115 pb-80">
    <div class="container">
        <div class="section-title-tab-wrap mb-35">
            <div class="section-title-3">
                <h2>The Latest News</h2>
            </div>
            <div class="btn-style-5">
                <a href="blog.html">View All News <i class="icon-arrow-right"></i></a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="blog-wrap mb-30">
                    <div class="blog-img mb-25">
                        <a href="blog-details.html"><img src="assets/images/blog/blog-1.jpg" alt="blog-img"></a>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <ul>
                                <li><a href="#">News </a></li>
                                <li>May 25, 2020</li>
                            </ul>
                        </div>
                        <h3><a href="blog-details.html">Five things you only know if you’re at Chanel's Hamburg Show</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog-wrap mb-30">
                    <div class="blog-img mb-25">
                        <a href="blog-details.html"><img src="assets/images/blog/blog-2.jpg" alt="blog-img"></a>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <ul>
                                <li><a href="#">Inspiration </a></li>
                                <li>May 25, 2020</li>
                            </ul>
                        </div>
                        <h3><a href="blog-details.html">Basic colord mixed - trendind 2020</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog-wrap mb-30">
                    <div class="blog-img mb-25">
                        <a href="blog-details.html"><img src="assets/images/blog/blog-3.jpg" alt="blog-img"></a>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <ul>
                                <li><a href="#">Lookbook </a></li>
                                <li>May 25, 2020</li>
                            </ul>
                        </div>
                        <h3><a href="blog-details.html">Calvin Klein Shoes Collection 2020, Activites Summer</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
{{-- <div class="brand-logo-area bg-gray-3 pb-80">
    <div class="container">
        <div class="brand-logo-wrap-2">
            <div class="single-brand-logo-2 mb-30">
                <img src="assets/images/brand-logo/brand-logo-6.png" alt="brand-logo">
            </div>
            <div class="single-brand-logo-2 mb-30">
                <img src="assets/images/brand-logo/brand-logo-7.png" alt="brand-logo">
            </div>
            <div class="single-brand-logo-2 mb-30">
                <img src="assets/images/brand-logo/brand-logo-8.png" alt="brand-logo">
            </div>
            <div class="single-brand-logo-2 mb-30">
                <img src="assets/images/brand-logo/brand-logo-9.png" alt="brand-logo">
            </div>
            <div class="single-brand-logo-2 mb-30">
                <img src="assets/images/brand-logo/brand-logo-10.png" alt="brand-logo">
            </div>
            <div class="single-brand-logo-2 mb-30">
                <img src="assets/images/brand-logo/brand-logo-11.png" alt="brand-logo">
            </div>
        </div>
    </div>
</div> --}}


@endsection
