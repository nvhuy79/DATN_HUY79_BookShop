<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_ward',
        'type',
        'district_id',
    ];

    protected $primaryKey = 'ward_id';
    protected $table = 'wards';
}
