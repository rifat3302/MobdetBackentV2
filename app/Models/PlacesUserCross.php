<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlacesUserCross extends Model
{
    use HasFactory;


    public $timestamps = false;
    public $table = "places_user_crosses";

    protected $fillable = [
        'user_id',
        'pool',
        'pub',
        'sauna',
        'restaurant',
        'gym'
    ];
}
