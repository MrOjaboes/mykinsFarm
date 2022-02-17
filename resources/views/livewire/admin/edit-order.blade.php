<div class="form-group row">
    <label for="inputEmail" class="col-sm-2 col-form-label">Payment Status</label>
    <div class="col-sm-10">
        @if ($order->payment_method == 0)
        <button class="btn btn-warning" wire:click="payment">Not Paid</button>
        @else
        <button class="btn btn-success">Paid</button>
        @endif

    </div>
</div>
