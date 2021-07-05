<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alarm extends Model
{
    use HasFactory;

    protected $casts = [
        'entry_date' => 'datetime:Y-m-d', // Change your format
        'exit_date' => 'datetime:Y-m-d',
    ];

    public $timestamps = false;

    protected $fillable = [

        'wake_up_time',
        'room_number',
        'awakened',
        'cancel'
    ];
}
