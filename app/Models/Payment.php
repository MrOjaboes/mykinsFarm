<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable =
    [
       'transaction_id',
       'amount',
       'currency',
       'payment_status'
    ];
}
