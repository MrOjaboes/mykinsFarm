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
            <td>{{\Carbon\Carbon::parse($order->created_at)->format('D m, M Y')}}</td>
            <td>{{$order->payment_method}}</td>
            <td><a href="{{route('edit.order',$order->id)}}" class="btn btn-sm" style="background-color: #891e19;color: #fff;">Details</a></td>
        </tr>
           @endforeach
        </tbody>
    </table>
   </div>
</div>
