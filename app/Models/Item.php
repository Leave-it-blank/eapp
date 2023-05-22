<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
        'type',
        'weight',
        'quantity',
        'condition',
        'age_of_item',
        'brand',
        'model',
        'reason_for_selling',
        'mode_of_disposal',
        'comment',
        'file_path',
        'order_id',
    ];

}
