<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_district',
        'type',
        'province_id',
    ];

    protected $primaryKey = 'district_id';
    protected $table = 'districts';
}
