@extends('layouts.details')
@section('content')
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="tab-content quickview-big-img">
                            <div id="pro-1" class="tab-pane fade show active">
                                <img src="{{ asset('/storage/products/' . $product->photo) }}" class="img-thumbnail" alt="">
                            </div>
                            <div id="pro-2" class="tab-pane fade">
                                <img src="{{ asset('/storage/products/' . $product->photo) }}" alt="">
                            </div>
                            <div id="pro-3" class="tab-pane fade">
                                <img src="{{ asset('/storage/products/' . $product->photo) }}" alt="">
                            </div>
                            <div id="pro-4" class="tab-pane fade">
                                <img src="{{ asset('/storage/products/' . $product->photo) }}" alt="">
                            </div>
                        </div>
                        <div class="quickview-wrap mt-15">
                            <div class="quickview-slide-active nav nav-style-6">
                                <a class="active" data-bs-toggle="tab" href="#pro-1"><img src="/appUi/assets/images/product/quickview-s1.jpg" alt=""></a>
                                <a data-bs-toggle="tab" href="#pro-2"><img src="/appUi/assets/images/product/quickview-s2.jpg" alt=""></a>
                                <a data-bs-toggle="tab" href="#pro-3"><img src="/appUi/assets/images/product/quickview-s3.jpg" alt=""></a>
                                <a data-bs-toggle="tab" href="#pro-4"><img src="/appUi/assets/images/product/quickview-s2.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="product-details-content quickview-content">
                            <h2>{{$product->name}}</h2>
                            <div class="product-ratting-review-wrap">
                                <div class="product-ratting-digit-wrap">
                                    <div class="product-ratting">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                    </div>
                                    <div class="product-digit">
                                        <span>5.0</span>
                                    </div>
                                </div>
                                <div class="product-review-order">
                                    <span>62 Reviews</span>
                                    <span>242 orders</span>
                                </div>
                            </div>
                            <p>{{$product->description}}</p>
                            <div class="pro-details-price">
                                <span class="new-price">${{$product->price}}</span>

                            </div>


                            <div class="pro-details-quality">
                                <span>Quantity:</span>
                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                                </div>
                            </div>
                            <div class="product-details-meta">
                                <ul>
                                    <li><span>Categories:</span> <a href="#">{{$product->category->title}} </a></li>
                                     </ul>
                            </div>
                            <div class="pro-details-action-wrap">
                                <div class="pro-details-add-to-cart pb-3">
                                    <a title="home" style="background-color:#891e19;color:white;" href="{{url('/')}}">Continue Shopping </a>
                                </div>
                                <form action="{{ route('cart.store') }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $product->id }}">
                                                <input type="hidden" name="name" value="{{ $product->name }}">
                                                <input type="hidden" name="price" value="{{ $product->price }}">
                                                <input type="hidden" name="photo" value="{{ $product->photo }}">
                                                <input type="hidden" name="quantity" value="1">
                                                <div class="pro-details-add-to-cart pb-3">
                                                    <input type="submit" class="btn" title="Add To Cart" style="background-color:#891e19;color:white;"
                                                        value="Add To Cart" />
                                                </div>
                                            </form>


                            </div>
                        </div>
                    </div>
                </div>
            </div>


@endsection
