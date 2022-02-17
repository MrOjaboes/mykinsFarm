<?php

namespace App\Http\Livewire\Admin;

use App\Models\Order;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class Orders extends Component
{
    public function render()
    {
        $orders = DB::table("orders")
        ->join('order_items', 'orders.id', '=', 'order_items.order_id')
        ->where('orders.user_id','!=', auth()->user()->id)
        ->get();
        return view('livewire.admin.orders',compact('orders'));
    }
    public function changeStatus(Order $order, $status)
    {
        Validator::make(['status' => $status],[
            'status' => 'required|in:pending,processing,completed,decline',
        ]);
       $order->update(['status' => $status]);
       dd($status);
    }
}
