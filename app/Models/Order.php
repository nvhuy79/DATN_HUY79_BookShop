<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'shipping_information_id',
        'order_status',
        'order_code',
        'shipping_fee',
        'finalTotal'
    ];

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class, 'order_code', 'order_code');
    }

    // OrderDetail.php
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
