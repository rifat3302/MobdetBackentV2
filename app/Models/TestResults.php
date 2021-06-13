<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestResults extends Model
{
    use HasFactory;

    protected $table="TestResults";

    protected $casts = [
        'entry_date' => 'datetime:Y-m-d', // Change your format
        'exit_date' => 'datetime:Y-m-d',
    ];

    public $timestamps = false;

    protected $fillable = [
        "user_id",
        "test_id",
        "test_name",
        "score",
        "test_created_at",
        "test_sonuc_text"
    ];


}
