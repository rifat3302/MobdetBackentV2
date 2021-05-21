<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderCart extends Model
{

    public $table = "order_cart";
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'room_number',
        'order_user_id',
        'menu_id',
        'menu_sub_id',
        'count',
        'total'
    ];

}
