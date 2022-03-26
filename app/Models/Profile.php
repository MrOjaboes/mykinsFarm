<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'name',
        'address',
        'contact',
        'state',
        'city',
        'email',
        'user_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
