<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable =[
        'order_number',
        'user_id',
        'status',
        'grand_total',
        'item_count',
        'payment_method',
        'shipping_fullname',
        'shipping_address',
        'shipping_contact',
        'shipping_state',
        'shipping_city',
        'note',
        'billing_fullname',
        'billing_address',
        'billing_contact',
        'billing_state',
        'billing_city',
    ];
    public function items()
    {
       return $this->belongsToMany(Product::class,'order_items','order_id','product_id');
    }
    public function products()
    {
       return $this->hasMany(Product::class);
    }
    public function user()
    {
       return $this->belongsTo(User::class);
    }
}
