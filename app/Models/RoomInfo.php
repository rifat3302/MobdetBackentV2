<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomInfo extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'address',
        'wifi_password'
    ];

}
