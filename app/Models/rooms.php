<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rooms extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'room_number',
        'qr_key',
        'private_key',
        'isClean',
        'isBook',
        'isActive',
        'note',
        'guest_count'
    ];
}
