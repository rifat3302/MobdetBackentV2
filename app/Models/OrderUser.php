<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderUser extends Model
{

    protected $casts = [
        'entry_date' => 'datetime:Y-m-d', // Change your format
        'exit_date' => 'datetime:Y-m-d',
    ];

    public $timestamps = false;
    public $table = "order_user";
    use HasFactory;

    protected $fillable = [
        'user_id',
        'room_number',
        'total',
        'state',
        'order_date'
    ];

}
