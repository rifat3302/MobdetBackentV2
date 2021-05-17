<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderCart extends Model
{

    public $table = "order_user";
    use HasFactory;

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
