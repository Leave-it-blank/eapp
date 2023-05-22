<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'pick_up_date',
        'pick_up_time',
        'full_filled',
        'waiting',
        'pin_code',
        'expected_eta',
        'vendor',
        'user_id',
        'address_id',
    ];
}
