<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_code',
        'product_id',
        'product_name',
        'product_price',
        'product_discount',
        'product_fee',
        'product_sale_quantity',
    ];

    public function product(){
        return $this->belongsTo(Product::class, 'id');
    }
}
