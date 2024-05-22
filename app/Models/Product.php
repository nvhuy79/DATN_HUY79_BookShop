<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'price',	
    	'sale_price',    
        'image',	
        'category_id',	
        'slug',
        'description'
    ];
}
