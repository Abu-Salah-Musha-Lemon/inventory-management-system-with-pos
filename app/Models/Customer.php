<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'photo',
        'shopeName',
        'account_holder',
        'account_number',
        'bank_name',
        'bank_branch',
        'city',
    ];
}
