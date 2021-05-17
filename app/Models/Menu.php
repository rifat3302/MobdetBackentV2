<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public $table = "menu";
    use HasFactory;

    protected $fillable = [
        'id',
        'menu_id',
        'name',
        'image_url',
        'price',
        'active',
        'turkish_name',
        'sub_category'
    ];

}
