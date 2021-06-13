<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;

    public $table = "test";

    public $timestamps = false;

    public $fillable = [
        'id',
        'test_id',
        'question',
        'question_id'
        ];


}
