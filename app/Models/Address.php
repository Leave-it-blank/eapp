<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'address';
    use HasFactory;
// $table->string('full_name');
//            $table->string('email')->nullable();
//            $table->string('address_lane');
//            $table->string('alternate_lane')->nullable();
//            $table->string('landmark');
//            $table->integer('pin_code');
//            $table->integer('mobile_number');
//            $table->string('address_type');
//            $table->boolean('is_default')->default(false);
//            $table->integer('alternate_number')->nullable();
//            $table->string('city');
//            $table->string('state');
//            $table->string('country');
    protected $fillable = [
        'full_name',
        'address_type',
        'address_lane',
        'city',
        'country',
        'pin_code',
        'is_default',
        'mobile_number',
        'email',
        'state',
        'landmark',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
