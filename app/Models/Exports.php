<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exports extends Model
{
    use HasFactory;
    protected $fillable = [
        //  "customer_id", "order_date", "order_status",
        //   "total_products", "sub_total", "vat", 
        // "total", "payment_status", "pay", "due", 
        // "created_at", "updated_at", "order_month", 
        // "order_year"
    ];
}
// composer require maatwebsite/excel:^3.1 --ignore-platform-req=ext-gd --ignore-platform-req=ext-zip
