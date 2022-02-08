<?php

namespace App\Http\Livewire\Home;

use App\Models\Order;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class Orders extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $orders = DB::table("orders")
        ->join('order_items', 'orders.id', '=', 'order_items.order_id')
        ->where('orders.user_id', auth()->user()->id)
        ->get();
       // $orders = Order::all();
        return view('livewire.home.orders',compact('orders'));
    }
}
