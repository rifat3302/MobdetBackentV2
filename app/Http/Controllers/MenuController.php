<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{


    public function getAllMenu(){

        $menu  = Menu::all();
        $meat = $menu->filter(function ($meatMenu) {
            //Et yemekleri
            return $meatMenu->menu_id == 1;
        })->sortBy('sub_category')->toArray();
        $drink = $menu->filter(function ($drinktMenu) {
            //içecekler
            return $drinktMenu->menu_id == 2;
        })->sortBy('sub_category')->toArray();
        $snack = $menu->filter(function ($snackMenu) {
            //atıştırmalıklar
            return $snackMenu->menu_id == 3;
        })->sortBy('sub_category')->toArray();

        $meatMenuSend = [];
        foreach ($meat as $key){
            $meatMenuSend [] = $key;
        }
        $drinkMenuSend = [];
        foreach ($drink as $key){
            $drinkMenuSend [] = $key;
        }
        $snackkMenuSend = [];
        foreach ($snack as $key){
            $snackkMenuSend [] = $key;
        }
        $data = [
            'meat'=>$meatMenuSend,
            'drink'=>$drinkMenuSend,
            'snack'=>$snackkMenuSend
        ];

        return response($data,201);


    }

}
