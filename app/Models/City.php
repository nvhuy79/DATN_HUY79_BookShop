<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_province',
        'type',
    ];

    protected $primaryKey = 'city_id';
    protected $table = 'cities';
}
