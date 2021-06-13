<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tests extends Model
{
    use HasFactory;
    public $timestamps = false;

    public $fillable = [
        'id',
        'test_name'
    ];
}
