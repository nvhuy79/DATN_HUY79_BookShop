<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'code',
        'usage_count',
        'method',
        'discount_value',
    ];

    public function getMethodDescriptionAttribute()
    {
        return $this->method == 1 ? 'Giảm tiền' : 'Giảm theo phần trăm';
    }
}
