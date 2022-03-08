<div>
    <div class="search-wrap-3">
        <input type="text" wire:model="searchTerm" class=" " placeholder="Search Product........">
        <ul>
            @foreach ($products as $product)
           @if ($product = " ")
             @else
             <li><a href="">{{$product->name}}</a></li>
           @endif
            @endforeach
        </ul>
    </div>
</div>
