<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $table = "places";

    protected $fillable = [
        'type',
        'url',
        'qr_key',
        'name'
    ];
}
