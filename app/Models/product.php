<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable = [
       'product_name', 
       'cat_id',
       'sup_id', 
       'product_code',
       'product_garage',
       'product_route',
       'product_image',
       'product_qty',
       'buy_date',
       'expire_date',
       'buying_price',
       'selling_price',
    ];
}
