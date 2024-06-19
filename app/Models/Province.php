<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_province',
        'type',
    ];

    protected $primaryKey = 'province_id';
    protected $table = 'provinces';
}
