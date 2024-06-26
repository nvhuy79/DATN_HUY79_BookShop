<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShippingInformation extends Model
{
    use HasFactory;
    protected $fillable = [
        'shipping_name', 'shipping_email', 'shipping_phone', 'shipping_address', 'shipping_method', 'city_id', 'district_id', 'ward_id', 'shipping_notes',
    ];

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }

    public function district()
    {
        return $this->belongsTo(District::class, 'district_id');
    }

    public function ward()
    {
        return $this->belongsTo(Ward::class, 'ward_id');
    }
}
