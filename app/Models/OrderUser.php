<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderUser extends Model
{

    protected $casts = [
        'order_date' => 'datetime:Y-m-d H:i:s', // Change your format
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
