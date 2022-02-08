@if ($cartItems->count() > 0)
<div class="col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="table-content table-responsive cart-table-content">
        <table class="">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Product Name</th>
                    <th>Qty</th>
                    <th>Unit Price</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cartItems as $item)
                    <tr>
                        <td class="product-thumbnail"><img
                                src="{{ asset('/storage/products/' . $item->attributes->photo) }}"
                                class="w-25 h-25" alt=""></td>
                        <td class="product-name">{{ $item->name }}</td>
                        <td class="product-quantity">
                            <form action="{{ route('cart.update') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{ $item->id }}">
                                <input type="text" name="quantity" size="2" value="{{ $item->quantity }}">
                                <button type="submit" class="btn btn-outline-success">update</button>
                            </form>
                        </td>
                        <td class="product-price-cart">${{ $item->price }}</td>
                        <td class="product-price-cart">
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
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="cart-shiping-update-wrapper">
                <div class="cart-shiping-update">
                    <a href="{{ url('/') }}" style="background-color:#891e19;color:white;">Continue
                        Shopping</a>
                </div>
                <div class="cart-clear">

                    <a href="#" style="background-color:#891e19;color:white;" wire:click.prevent="clearCart">Clear Cart</a>
                </div>
            </div>
        </div>
    </div>


    <div class="col-lg-4 col-md-12">
        <div class="grand-totall">
            <div class="title-wrap">
                <h4 class="cart-bottom-title section-bg-gary-cart">Cart Total</h4>
            </div>
            <h5>Total products <span>{{ Cart::getTotalQuantity()}}</span></h5>
            <h5>Total products Price<span>${{ Cart::getTotal() }}</span></h5>
            {{-- <div class="total-shipping">
                <h5>Total shipping</h5>
                <ul>
                    <li><input type="checkbox"> Standard <span>$20.00</span></li>
                    <li><input type="checkbox"> Express <span>$30.00</span></li>
                </ul>
            </div> --}}
            <h4 class="grand-totall-title">Grand Total <span>${{ Cart::getTotal() }}</span></h4>
            <a href="{{route('checkout')}}" class="" style="background-color:#891e19;color:white;">Proceed to Checkout</a>
        </div>
    </div>

</div>
@else
<h5>Your Cart is currently empty! Try <a href="{{url('/')}}" style="color: #891e19">add new item</a></h5>
@endif
