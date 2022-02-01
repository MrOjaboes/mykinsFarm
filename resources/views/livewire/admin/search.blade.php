<div class="categori-search-wrap">
    <div class="search-wrap-3">
        <form>
            <input placeholder="Search Products..." type="text" wire:model.debounce="term">
            <button wire:click.prevent="search"><i class="lnr lnr-magnifier"></i></button>
        </form>

    </div>

</div>
<div>
   @if ($products->count() > 0)
   <ul class="list-group">
    @foreach ($products as $product)
<li class="list-group-item">{{$product->name}}</li>
    @endforeach
</ul>
   @endif
   </div>
