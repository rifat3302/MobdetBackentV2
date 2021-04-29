<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $casts = [
        'entry_date' => 'datetime:Y-m-d', // Change your format
        'exit_date' => 'datetime:Y-m-d',
    ];

    public $timestamps = false;

    protected $fillable = [

        'room_number',
        'tc',
        'name',
        'surname',
        'phone',
        'private_key',
        'entry_date',
        'exit_date',
        'amount',
        'active',
        'admin_approve',
        'customer_approve',
        'updated_at',
        'created_at'
    ];
}
