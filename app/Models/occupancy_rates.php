<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class occupancy_rates extends Model
{
    use HasFactory;

    protected $fillable = [
        'pool_capacity',
        'pool_count',
        'pub_capacity',
        'pub_count',
        'sauna_capacity',
        'sauna_count',
        'restaurant_capacity',
        'restaurant_count',
        'gym_capacity',
        'gym_count',
        'hotel_capacity',
        'hotel_count'
    ];

}
