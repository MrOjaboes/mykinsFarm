<div class="card">
   <div class="card-body">
   @if ($orders->count() > 0)
   <table class="table table-condensed table-hover table-responsive-lg">
    <thead>
        <tr>
            <th>Item</th>
            <th>Qty</th>
            <th>Status</th>
            <th>Price</th>
            <th>Payment Method</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>
       @foreach ($orders as $order)

       <tr>
        <td> {{App\Http\Controllers\HomeController::GetProductById($order->product_id)}} </td>
        <td>{{$order->item_count}}</td>
        <td>{{$order->status}}</td>
        <td>${{$order->grand_total}}</td>
        <td>{{$order->payment_method}}</td>
        <td>{{\Carbon\Carbon::parse($order->created_at)->format('D m, M Y')}}</td>
    </tr>
       @endforeach
    </tbody>
</table>
@else
<span>No Order Availabe</span>
   @endif
   </div>
</div> 
