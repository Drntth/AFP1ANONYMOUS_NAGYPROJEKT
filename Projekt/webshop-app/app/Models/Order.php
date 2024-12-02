<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'total_price',
        'status',
        'payment_method',
        'name',
        'email',
        'address',
        'city',
        'postal_code',
        'phone_number',
        'shipping_method'
    ];

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
}