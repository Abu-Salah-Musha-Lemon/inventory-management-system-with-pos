<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'type',
        'photo',
        'shopeName',
        'account_holder',
        'account_number',
        'bank_name',
        'bank_branch',
        'city',
    ];
}
