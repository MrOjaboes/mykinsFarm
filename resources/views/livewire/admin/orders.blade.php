<div class="card">
   <div class="card-body">
    <table class="table table-condensed table-hover table-responsive-lg">
        <thead>
            <tr>
                <th>Customer</th>
                <th>Item</th>
                <th>Qty</th>
                <th>Status</th>
                <th>Price</th>
                <th>Transaction Date</th>
                <th>Payment Method</th>
            </tr>
        </thead>
        <tbody>
           @foreach ($orders as $order)
           <tr>
            <td> {{App\Http\Controllers\HomeController::GetUserById($order->user_id)}} </td>
            <td> {{App\Http\Controllers\HomeController::GetProductById($order->product_id)}} </td>
            <td>{{$order->item_count}}</td>
            <td>{{$order->status}}</td>
            <td>${{$order->grand_total}}</td>
            <td>{{$order->created_at}}</td>
            <td>{{$order->payment_method}}</td>
        </tr>
           @endforeach
        </tbody>
    </table>
   </div>
</div>
