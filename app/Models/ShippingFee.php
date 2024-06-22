<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShippingFee extends Model
{
    use HasFactory;
    protected $fillable = ['city_id', 'ward_id', 'district_id', 'fee'];

    public function city(){
        return $this->belongsTo(City::class,'city_id');
    }

    public function district(){
        return $this->belongsTo(District::class,'district_id');
    }

    public function ward(){
        return $this->belongsTo(Ward::class,'ward_id');
    }
}
