<div class="categori-search-wrap">
    <div class="search-wrap-3">
        <form action="{{route('product.search')}}" method="POST">
            @csrf
            <input placeholder="Search Products..." type="text" name="term">
            <button><i class="lnr lnr-magnifier"></i></button>
        </form>
    </div>
    <ul class="list-group">
        @foreach ($products as $product)
    <li class="list-group-item">{{$product->name}}</li>
        @endforeach
    </ul>
</div>
